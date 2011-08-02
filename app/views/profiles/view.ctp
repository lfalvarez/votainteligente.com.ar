<?php
App::import('Sanitize');
?>
<section>
    <div style="column-count:3;column-gap:22px;">
	<img src="<?php echo $profile['Candidate']['imagepath'];?>" alt="<?php echo $profile['Candidate']['name'];?>"/>
	<p>
	<h2><?php echo $profile['Candidate']['name'];?></h2>
	<span class="profile-description">Nacimiento: </span><?php echo $profile['CandidateProfile']['birth'];?><br />
	<span class="profile-description">Profesión: </span><?php echo $profile['CandidateProfile']['profession'];?><br />
	<span class="profile-description">Estado Civil: </span><?php echo $profile['CandidateProfile']['civil_status'];?><br />
	<span class="profile-description">Hijos: </span><?php echo $profile['CandidateProfile']['sons'];?><br />
	<span class="profile-description">Religión: </span><?php echo $profile['CandidateProfile']['religion'];?><br />

	</p>
	<p>
	<h3>Enlaces personales:</h3>
	    <ul>
		<?php
		foreach($profile['CandidateLink'] as $link) {
		?>
		<li><a href="<?php echo 'http://'.$link['link'];?>"><?php echo $link['description'];?></a></li>
		<?php
		}

		?>
	    </ul>
	<h3>Educación:</h3>
	    <span class="profile-description">Educación secundaria: </span><?php echo $profile['CandidateProfile']['highschool'];?><br />
	    <span class="profile-description">Educación universitaria: </span>
	    <ul>
		<?php
		    foreach ($profile['CandidateUniversityStudy'] as $universityStudy) {
		?>
		<li><?php echo $universityStudy['career'].', '.$universityStudy['university'].', '.$universityStudy['ending_year'];?></li>
		<?php
		    }
		?>
	    </ul>
	<h3>Antecedentes laborales: </h3>
	    <ul>
	    <?php
	    foreach ($profile['CandidateWorkExperience'] as $workExperience) {
	    ?>
		<li><?php echo $workExperience['starting_year'].'-'.$workExperience['ending_year'].': '.$workExperience['position'].' en '.$workExperience['company'];?></li>
	    <?php
	    }
	    ?>
	    </ul>
	<h3>Tendencia política: </h3>
	<span class="profile-description">Partido político actual: </span><?php echo $profile['CandidateProfile']['current_party'];?><br />
	<ul>
	<?php foreach ($profile['CandidateParty'] as $party) {
	?>
	    <li><?php echo $party['starting_year'].'-'.$party['ending_year'].', '.$party['party']; ?></li>
	<?php
	}
	?>
	</ul>
	</p>
    </div>

</section>

<section>
    <h2>Posicion política en: </h2>
    <?php foreach ($categories as $category) { ?>
    <div class="category">
    <h3><?php echo $category['Category']['name'];?></h3>
	<?php
	$numberOfQuestion = 0;
	foreach ($category['Question'] as $question) {
	    $numberOfQuestion ++;
	    $questionDescription = $numberOfQuestion.' - ';
	    if ($question['short_description']) {
		$questionDescription .= $question['short_description'];
	    }
	    else {
		$questionDescription .= $question['question'];
	    }
	?>
	<h4 class="has-an-explanation question" tooltip_message="<?php echo $question['explanation'];?>"><?php echo $questionDescription;?></h4><br />
	    <?php
	    $amountOfAnswers = 0;
	    foreach ($question['Answer'] as $answer ) {
		if (!empty($answer['Weight']) && $answer['Weight'][0]['weighting']!=0 ) {
		    $amountOfAnswers++;
		    ?>
		    <span style="opacity:<?php echo $answer['Weight'][0]['weighting'];?>;" class="has-an-explanation answer" tooltip_message="<?php
		    if (!empty($answer['Weight'][0]['SourceOfAnswer'])) {
		    	foreach ($answer['Weight'][0]['SourceOfAnswer'] as $source) {
			    echo '<span class=\'sentence\'>&quot;'.Sanitize::html($source['sentence']).'&quot;</span> ';
			    echo '<a class=\'media-name\' href=\''.$source['link'].'\'>'.Sanitize::html($source['media_name']).'</a>';
			}
		    }
		    ?>"> · <?php echo $answer['answer'];?></span>
		    <?php
		    echo "<br />";
		}
	    ?>
	    <?php
	    }
	    if ($amountOfAnswers == 0) {
		?>
		<span class="has-an-explanation"> · Sin información</span><br />
		<?php
	    }
	    ?>
	<?php }?>
    </div>
    <?php } ?>
</section>
<script>
$(document).ready(function(){
    $('.has-an-explanation.question:not([tooltip_message=""])').qtip({
	content: {
	    attr: 'tooltip_message'
	},
	position: {
	    my: 'bottom left',
	    at: 'top right'
	},
	hide: {
	    delay:300
	}
    });
    $('.has-an-explanation.answer:not([tooltip_message=""])').qtip({
	content: {
	    attr: 'tooltip_message'
	},
	position: {
	    my: 'top left'
	},
	hide: {
	    fixed: true,
	    delay: 300
	}
    });
});
</script>