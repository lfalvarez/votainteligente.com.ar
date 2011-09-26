<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>Tu media naranja política</title>
	<?php

		echo $scripts_for_layout;
	?>
</head>
<body>
<?php echo $this->Html->css('media_naranja'); ?>
<div id="fb-root"></div>
<?php echo $this->Html->script('jquery'); ?>
<div id="bodyOfMediaNaranja" class="bodyOfMediaNaranja">
<?php echo $content_for_layout ?>
</div>
<script>
window.fbAsyncInit = function() {
    FB.init({appId: '<?php echo $facebookAppId; ?>',
	status: true,
	cookie: true,
	xfbml: true});
    var height = <?php echo $height;?>;
    FB.Canvas.setSize();
    FB.Canvas.scrollTo(0,0);
};
  (function() {
    var e = document.createElement('script');
    e.src = document.location.protocol + '//connect.facebook.net/es_LA/all.js';
    e.async = true;
    document.getElementById('fb-root').appendChild(e);
  }());
$('input[name=confirmaCandidato]:radio').change(function(radio){
    var confirmationData = new Object();
    var confirmsCandidate = null;
    if ( $('input[name=confirmaCandidato]:checked').val()=='yes' ) {
	confirmsCandidate = 1;
    }
    else {
	confirmsCandidate = 0;
    }
    confirmationData['data[Person][id]'] = <?php echo $person_id;?>;
    confirmationData['data[Person][confirmsCandidate]'] = confirmsCandidate;
    $.post('confirm',confirmationData,function(){},'script');
});
function publishCandidate() {
      FB.ui({
	method: 'stream.publish',
	attachment: {
	  name: '<?php echo $facebookWallPublication['title']; ?>',
	  caption: '<?php echo $facebookWallPublication['caption']; ?>',
	  media: [{
	    type: 'image',
	    href: '<?php echo $facebookWallPublication['image_link']; ?>',
	    src: '<?php echo $facebookWallPublication['image']; ?>'
	  }]
	},
	action_links: [{
	  text: '<?php echo $facebookWallPublication['text']; ?>',
	  href: '<?php echo $facebookWallPublication['href']; ?>'
	}],
	user_message_prompt: 'Cuentale a tus amigos'
      });
    }
</script>
</body>
</html>