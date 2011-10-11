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
<div id="fb-root"></div>
<?php echo $this->Html->script('jquery'); ?>
<div id="bodyOfMediaNaranja" class="bodyOfMediaNaranja">
<?php echo $this->Html->css('media_naranja'); ?>
<?php echo $this->Html->css('footer'); ?>
<table align="left" style="width:760px;" cellpadding="0" cellspacing="0" border="0">
    <td style="text-align:left; width:500px">

       <img src="<?php echo Router::url('/img/fb_header_1.png'); ?>" width="500" height="113" border="0" />
    </td>
    <td style="text-align:left; width:260px">
        <a href="http://www.ciudadanointeligente.org/" target="_blank"> <img src="<?php echo Router::url('/img/fb_header_2.png'); ?>" width="260" height="113" border="0" /></a>
    </td>
</table>
<?php echo $content_for_layout ?>
</div>
<div id="medianaranjaFooter">
	<?php echo $this->element('footer');//the file views/elements/footer.ctp?>
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