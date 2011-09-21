<?php
App::import('Sanitize');
echo $this->Html->script('accordionForProfiles');
?>
<article>
    <div class="candidatesBasicInformation wrapW">

        <header>
            <h2><?php echo $profile['Candidate']['name'];?></h2>
        </header>


         <div>
                <div class="profileImg">
                    <?php
                    $image = $profile['Candidate']['imagepath'];
                    echo $this->Html->image($image,array('alt'=>$profile['Candidate']['name'])); ?>
                </div>

                <section class="personalInfo">
                    <h3 style="display:none;"> Información personal</h3>
                    <span class="profile-description">Nacimiento: </span><?php echo $profile['CandidateProfile']['birth'];?><br />
                    <span class="profile-description">Profesión: </span><?php echo $profile['CandidateProfile']['profession'];?><br />
                    <span class="profile-description">Estado Civil: </span><?php echo $profile['CandidateProfile']['civil_status'];?><br />
                    <span class="profile-description">Hijos: </span><?php echo $profile['CandidateProfile']['sons'];?><br />
                    <span class="profile-description">Religión: </span><?php echo $profile['CandidateProfile']['religion'];?><br />


                </section>
                 <aside class="profileAside">
                	<div class="sideButton compare"><a>Compara</a></div>
                    <div class="sideButton medianaranja"><a>Media<wbr /> Naranja</a></div>
                    <div class="sideButton share"><a>Comparte</a></div>
                </aside>
                <section class="enlacesPersonales">
                	<h3 style="display:none;">Enlaces personales:</h3>
                    <ul class="ulEnlacesPersonales">
                        <li class="twitter"><a href="http://www.twitter.com/<?php echo $profile['CandidateProfile']['twitter'];?>" target="_blank">@<?php echo $profile['CandidateProfile']['twitter'];?></a></li>
                    	<li class="facebook"><a href="<?php echo $profile['CandidateProfile']['facebook'];?>" target="_blank"><?php echo $profile['CandidateProfile']['facebook_description'];?></a></li>
                        <?php
                        foreach($profile['CandidateLink'] as $link) {
                        ?>
                        <li><a href="<?php echo $link['link'];?>" target="_blank"><?php echo $link['description'];?></a></li>
                        <?php
                        }
                   		?>
                    </ul>
                </section>


		</div>
	</div>  <!--ends candidate basic information-->
         <section class="trayectoriaYPosiciones">
                 <section class="trayectoria">
                    <h2>Antecedentes: </h2>
                     <div class="brdotted">
                        <div class="accordion">
                            <h3>Tendencia política: </h3>
                            <div class="accordionContent">
                                <span class="profile-description">Partido político actual: </span><?php echo $profile['CandidateProfile']['current_party'];?><br />
                                <ul>
                                <?php foreach ($profile['CandidateParty'] as $party) {
                                ?>
                                    <li><?php echo $party['starting_year'].'-'.$party['ending_year'].', '.$party['party']; ?></li>
                                <?php
                                }
                                ?>
                                </ul>
                            </div>

                            <h3>Experiencia política: </h3>
                            <div class="accordionContent">
                                <ul>
                                <?php
                                foreach ($profile['CandidatePoliticalExperience'] as $type) {
                                ?>
                                    <h4><?php echo $type['description'];?></h4>
                                    <?php foreach ($type['experiences'] as $experience) {
                                    ?>
                                    <li><?php echo $experience['starting_year'].'-'.$experience['ending_year'].', '.$experience['position']; ?></li>
                                    <?php
                                    }
                                }
                                ?>
                                </ul>

                            </div>

                            <h3>Educación:</h3>
                            <div class="accordionContent">
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
                            </div>

                            <h3>Antecedentes laborales: </h3>
                            <div class="accordionContent">
                                <ul>
                                    <?php
                                    foreach ($profile['CandidateWorkExperience'] as $workExperience) {
                                    ?>
                                    <li><?php echo $workExperience['starting_year'].'-'.$workExperience['ending_year'].': '.$workExperience['position'].' en '.$workExperience['company'];?></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                             </div>

                             <h3> Ingresos</h3>
                             <div class="accordionContent">
                                 <span class="profile-description">Ingresos: </span><?php echo $profile['CandidateProfile']['assets'];?><br />
                             </div>
                        </div><!--ends accordion-->
                    </div>  <!--ends brdotted-->
                </section><!--ends trayectoria-->

                <section class="posiciones">

                        <h2>Posicion política en: </h2>
                        <div class="accordion">
                            <?php foreach ($categories as $category) { ?>
                            <div class="category">
                                <h3><?php echo $category['Category']['name'];?></h3>
                                <div class="accordionContent">
                                    <?php
                                    foreach ($category['Question'] as $question) {
                                        $questionDescription = $question['question'];

                                    ?>
                                   <h4><?php echo $questionDescription;?><?php
									if ($question['explanation']) {
									?>
									<span class="has-an-explanation question questionTip" tooltip_message="<?php echo $question['explanation'];?>">&nbsp;</span><br />
									<?php
									}
									?></h4>
                                    <div class="answerContainer">
                                        <?php
                                        $amountOfAnswers = 0;
                                        foreach ($question['Answer'] as $answer ) {
                                        if (!empty($answer['Weight']) && $answer['Weight'][0]['weighting']!=0 ) {
                                            $amountOfAnswers++;
                                            ?>
                                            <span style="opacity:<?php echo $answer['Weight'][0]['weighting'];?>;" class="answer"><?php echo $answer['answer'];?></span>
                                            <?php
											if (!empty($answer['Weight'][0]['SourceOfAnswer'])) {
											?>
                                            <span class="has-an-explanation answer answerTip" tooltip_message="<?php

                                                foreach ($answer['Weight'][0]['SourceOfAnswer'] as $source) {
                                                echo '&#8226;<span class=\'sentence\'>&quot;'.Sanitize::html($source['sentence']).'&quot;</span> el '.$source['date'].' ';
                                                if (!is_null($source['link']) && $source['link']!='') {
                                                echo '<a class=\'media-name\' href=\''.$source['link'].'\' target=\'_blank\'>'.Sanitize::html($source['media_name']).'</a><br />';
                                                }
                                                else {
                                                echo Sanitize::html($source['media_name']);
                                                }

                                            }
                                            ?>">&nbsp;</span>
                                            <?php
											}
                                            echo "<br />";
                                        }
                                        ?>
                                        <?php
                                        }
                                        if ($amountOfAnswers == 0) {
                                        ?>
                                        <span class="has-an-explanation">Sin información</span><br />
                                        <?php
                                        }
                                        ?>
                                        </div>
                                    <?php }?>
                                </div><!--ends accordionContent-->
                            </div><!--ends category-->
                            <?php } ?>
                      </div>  <!-- ends accordion-->
                </section><!--ends posiciones-->
        </section><!--ends trayectoriaYPosiciones-->

</article>


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
style: {
	classes:'explanationQuestion'
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
style: {
	classes:'explanationAnswer'
},
hide: {
    fixed: true,
    delay: 300
}
});
});
</script>