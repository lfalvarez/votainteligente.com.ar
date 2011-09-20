<?php echo $this->element('header',array('js'=>array(),'css'=>array('compare', 'style', 'nav')));?>
<?php echo $this->element('comparator-js');?>
   <article class="wrapper wrapW">
                <ul id="errors">
                </ul>

                    <div class="leftContent">
                        <header class="comparisonBox">
                            <div class="candidatesLists">
                                <div class="firstCandidate">
                                    <select name="firstCandidate">
                                    <option value="0">Seleciona un candidato</option>
                                    <?php foreach($candidates as $candidate) {
                                    $isThisCandidateSelected = isset($idFirstCandidate) && $idFirstCandidate==$candidate['Candidate']['id'];
                                    ?>
                                    <option value="<?php echo $candidate['Candidate']['id'];?>" <?php
                                    if($isThisCandidateSelected) {
                                        echo 'Selected';
                                    }
                                    ?> ><?php echo $candidate['Candidate']['name'] ;?></option>
                                    <?php } ?>
                                    </select>
				    <div>
				    <?php
				    if(isset($firstCandidate)) {
					echo $this->element('basic_profile_left',array('candidate'=>$firstCandidate));
				    }
				    else {
					echo $this->element('basic_profile_left');
				    }
				    ?>
				    </div>
                                </div>
                                <div class="secondCandidate">
                                    <select name="secondCandidate">
                                    <option value="0">Seleciona un candidato</option>
                                    <?php foreach($candidates as $candidate) {
                                    $isThisCandidateSelected = isset($idSecondCandidate) && $idSecondCandidate==$candidate['Candidate']['id'];
                                    ?>
                                    <option value="<?php echo $candidate['Candidate']['id'];?>" <?php
                                    if($isThisCandidateSelected) {
                                        echo 'Selected';
                                    }
                                    ?>><?php echo $candidate['Candidate']['name'] ;?></option>
                                    <?php } ?>
                                    </select>
				    <div>
				    <?php
					if(isset($secondCandidate)) {
					    echo $this->element('basic_profile_right',array('candidate'=>$secondCandidate));
					}
					else {
					    echo $this->element('basic_profile_right');
					}

				    ?>
				    </div>
                                </div>
                             </div><!-- /candidatesLists-->
                           </header>
                            <section id ="result" class="comparisonResult" >
                                <?php echo $content_for_layout;//The comparison Result ?>
                            </section>
                        </div>
                        <aside class="categories">
                            <?php foreach ($categories as $category) {?>
                            <?php
                            $selected = false;
                            if(isset($categoryId) && $categoryId == $category['Category']['id']) {
                                $selected = true;
                            }
                            echo $this->Form->radio(null,array($category['Category']['id']=>$category['Category']['name']),array('checked'=>$selected,'id'=>'category_'.$category['Category']['id'],'name'=>'category'));
                            ?><br />
                            <?php } ?>
                        </aside>


   </article>
<?php echo $this->element('footer');?>
