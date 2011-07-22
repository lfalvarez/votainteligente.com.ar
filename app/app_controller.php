<?php
class AppController extends Controller {
	
	var $FACEBOOK_APP_ID = '';
        var $FACEBOOK_SECRET = '';
        var $FACEBOOK_APP_URL = '';
	
	function __construct(){
	    parent::__construct();
	    Configure::load('facebook');
	    $this->FACEBOOK_APP_ID = Configure::read('Facebook.APP_ID');
	    $this->FACEBOOK_SECRET = Configure::read('Facebook.SECRET');
	    $this->FACEBOOK_APP_URL = Configure::read('Facebook.APP_URL');
	}
        /**
	*	Code taken from http://bakery.cakephp.org/articles/fsiebler/2010/08/23/integrating-facebook-connect
	*/
	/**
	 * Callback
	 */
	function beforeFilter() {
		// if an admin route is requested and not logged in
		$user = $this->Session->read('User');
		if(isset($this->params['admin']) && $this->params['admin'] && is_null($user)) {
			// set Flash and redirect to login page
			$this->Session->setFlash('You need to be logged for that action.','default',array('class'=>'flash_bad'));
			$this->redirect(array('controller'=>'users','action'=>'login','admin'=>FALSE));
		}
	}
	function connectToFacebookOrLogin(){
                if(isset($_GET['code'])){
                        header("Location: " . $this->FACEBOOK_APP_URL);
                        exit;
                }
		App::import('Vendor', 'facebook/facebook');
		$facebook = new Facebook(array(
		  'appId'  => $this->FACEBOOK_APP_ID,
  		  'secret' => $this->FACEBOOK_SECRET,
                  'cookie' => true
		));
		$user = $facebook->getUser();
		if($user){
                    try {
                        // Proceed knowing you have a logged in user who's authenticated.
                        $user_profile = $facebook->api('/me');
                        $this->set('user',$user);
                        $this->set('facebookAppId',$this->FACEBOOK_APP_ID);
                    }
                    catch (FacebookApiException $e) {
                        $user = null;
                    }
                    return $user;
		}
		else{
                    $url = $facebook->getLoginUrl(array(
                                'scope' => 'publish_stream, read_notifications',
                                'canvas' => 1,
                                'fbconnect' => 0,
                            ));
                    echo '<script>top.location.href = "' . $url . '";</script>';
                    exit;
		}
	}
}