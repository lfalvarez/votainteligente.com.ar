<?php

foreach($questions as $question) {
    $firstCandidateDidntAnswerThisQuestion = true;
    $secondCandidateDidntAnswerThisQuestion = true;
?>
<div class="questionInComparison"><?php echo $question['Question']['question']; ?></div>

    <table>
    <?php foreach ($question['Answer'] as $answer) {
        $answerAndQuestionAreSet = isset($weights[$question['Question']['id']]) && isset($weights[$question['Question']['id']][$answer['id']]);

        ?>
        <tr>
            <td class="candidatesSpace answerInComparison <?php

            $firstCandidateAnsweredThis = $answerAndQuestionAreSet && in_array($idFirstCandidate,$weights[$question['Question']['id']][$answer['id']]);
            if ($firstCandidateAnsweredThis) {
                $firstCandidateDidntAnswerThisQuestion = false;
                echo 'answered';
            }
            else {
                echo 'notAnswered';
            } ?>">
            ·<?php echo $answer['answer'];?>
            </td>
            <td class="candidatesSpace answerInComparison <?php

            $secondCandidateAnsweredThis = $answerAndQuestionAreSet && in_array($idSecondCandidate,$weights[$question['Question']['id']][$answer['id']]);
            if ($secondCandidateAnsweredThis) {
                $secondCandidateDidntAnswerThisQuestion = false;
                echo 'answered';
            }
            else{
                echo 'notAnswered';
            } ?>">·<?php echo $answer['answer'];?>
            </td>
        </tr>
    <?php
    }
    if ($firstCandidateDidntAnswerThisQuestion||$secondCandidateDidntAnswerThisQuestion) {
        ?>
        <tr>
            <td class="candidatesSpace answerInComparison <?php
                if ($firstCandidateDidntAnswerThisQuestion) { echo 'answered';} else { echo 'notAnswered'; }
            ?>">
                ·Sin información
            </td>
            <td class="candidatesSpace answerInComparison <?php
                if ($secondCandidateDidntAnswerThisQuestion) { echo 'answered';} else { echo 'notAnswered'; }
            ?>">
                ·Sin información
            </td>
        </tr>
        <?php
    }
    ?>
    </table>
<?php } ?>
</div>