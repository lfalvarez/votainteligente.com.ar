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
<?php echo $this->Html->script('jquery'); ?>
<?php echo $this->Html->css('media_naranja'); ?>
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
    FB.init({appId: '<?php echo $facebookAppId; ?>',
        status: true,
	cookie: true,
        xfbml: true});
    var height = <?php echo $height;?>;
    FB.Canvas.setSize();
    $(':radio[name$="\\[Answer\\]"]').click(function(){
	var questionId = $(this).attr('question_id');
	$('#section_question_'+questionId).removeClass('not-answered-yet');
	var nonAnsweredQuestions = $('.not-answered-yet');
	if (nonAnsweredQuestions.length === 0) {
	    $('#media-naranja-form-errors').html('&nbsp;');
	}
    });
    $('#CategoryIndexForm').submit(function(){
	var allAnswered = true;
	var questionId = 0;
	$(':radio[name$="\\[Answer\\]"]').each(function(index,element){
	    if ($(':radio:checked[name$="'+element.name+'"]').length === 0 ){
		allAnswered = false;
		questionId = $(element).attr('question_id');
		$('#section_question_'+questionId).addClass('not-answered-yet');
	    }
	});
	if (allAnswered) {
	    return true;
	}
	$('#media-naranja-form-errors').text('Existen preguntas que no respondiste');
	FB.Canvas.scrollTo(0,$('.not-answered-yet').offset().top);
	return false;
    });
  };
  (function() {
    var e = document.createElement('script');
    e.src = document.location.protocol + '//connect.facebook.net/es_LA/all.js';
    e.async = true;
    document.getElementById('fb-root').appendChild(e);
  }());
</script>
<div id="bodyOfMediaNaranja" class="bodyOfMediaNaranja">
<table align="left" style="width:760px;" cellpadding="0" cellspacing="0" border="0">
    <tr>
		<td align="left">
            <table align="left" style="width:760px;" cellpadding="0" cellspacing="0" border="0">
                <td style="text-align:left; width:500px">

                   <img src="<?php echo Router::url('/img/fb_header_1.png'); ?>" width="500" height="113" border="0" />
                </td>
                <td style="text-align:left; width:260px">
                    <a href="http://www.ciudadanointeligente.org/" target="_blank"> <img src="<?php echo Router::url('/img/fb_header_2.png'); ?>" width="260" height="113" border="0" /></a>
                </td>
            </table>
     	</td>
    </tr>
    <tr>
        <td bgcolor="#FFFFFF" style="width:760px; text-align:left; padding:0px; border:0px;">
  	<table class="tablaEncuesta">
        <tr>
            <td class="titulo" style="font-weight:normal" colspan="2">
            	La media naranja es una aplicación en la que podrás conocer tu cercanía con los candidatos a las presidencia. Esto NO es un juego. Los datos los hemos recopilado de diferentes fuentes periodísticas y por ello los temas y opciones que ponemos a disposición son sólo aquellas que los candidatos han declarado. Son las posiciones REALES de los candidatos que aspiran a ocupar la presidencia de nuestro país. El proceso de búsqueda, los criterios de selección y la forma de procesamiento de los datos que utilizamos en la media naranja política los puedes conocer en www.votainteligente.com.ar.
            </td>
        </tr>
        <tr>
            <td class="titulo" style="width:415px">
            	Responde la encuesta y encuentra tu 1/2 naranja política
            </td>
			<td class="titulo" style="width:305px; vertical-align:bottom">
				<img src="http://www.votainteligente.cl/medianaranja/images/importancia.png" width="316" height="46" border="0" />
            </td>
        </tr>
        <?php echo $this->Form->create(null, array('url' => array('controller' => 'media_naranja', 'action' => 'vota'))); ?>
        <?php echo $content_for_layout ?>
        <tr>
            <td class="titulo" colspan="2">
		<div id="media-naranja-form-errors">&nbsp;</div>
                <input type="submit" value="Buscar Media Naranja">
            </td>
        </tr>

   	<?php echo $this->Form->end(); ?>
   	</table>
   	        </td>
    </tr>
</table>
<div>
</body>
</html>