<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<?php
foreach($questions as $question) {
    $firstCandidateDidntAnswerThisQuestion = true;
    $secondCandidateDidntAnswerThisQuestion = true;
?>
<div style="width: 100%;border: 1px solid;"><?php echo $question['Question']['question']; ?></div>
    <table>
    <?php foreach ($question['Answer'] as $answer) {
        $answerAndQuestionAreSet = isset($weights[$question['Question']['id']]) && isset($weights[$question['Question']['id']][$answer['id']]);

        ?>
        <tr>
            <td style="width:240px;font-weight:<?php

            $firstCandidateAnsweredThis = $answerAndQuestionAreSet && in_array($idFirstCandidate,$weights[$question['Question']['id']][$answer['id']]);
            if ($firstCandidateAnsweredThis) {
                $firstCandidateDidntAnswerThisQuestion = false;
                echo 'bold';
            }
            else {
                echo 'normal';
            } ?>;">
            ·<?php echo $answer['answer'];?>
            </td>
            <td style="width:240px;font-weight:<?php

            $secondCandidateAnsweredThis = $answerAndQuestionAreSet && in_array($idSecondCandidate,$weights[$question['Question']['id']][$answer['id']]);
            if ($secondCandidateAnsweredThis) {
                $secondCandidateDidntAnswerThisQuestion = false;
                echo 'bold';
            }
            else{
                echo 'normal';
            } ?>;">·<?php echo $answer['answer'];?>
            </td>
        </tr>
    <?php
    }
    if ($firstCandidateDidntAnswerThisQuestion||$secondCandidateDidntAnswerThisQuestion) {
        ?>
        <tr>
            <td style="width:240px;font-weight:<?php
                if ($firstCandidateDidntAnswerThisQuestion) { echo 'bold';} else { echo 'normal'; }
            ?>;">
                ·Sin información
            </td>
            <td style="width:240px;font-weight:<?php
                if ($secondCandidateDidntAnswerThisQuestion) { echo 'bold';} else { echo 'normal'; }
            ?>;">
                ·Sin información
            </td>
        </tr>
        <?php
    }
    ?>
    </table>
<?php } ?>

