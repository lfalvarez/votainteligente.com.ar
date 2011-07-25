<?php

foreach($categories as $category){
?>
<tr>
   <td class="titulo1" colspan="2">
	<?php echo $category['Category']['name'];?><br />
<table class="tablaEncuesta">
	<?php 
	foreach($category['Questions'] as $question){
	?>
	<tr class="titulo2">
                    <td style="width:370px;">
                            <strong><?php echo $question['Question']['question']; ?></strong>
                    </td>
                    <td class="titulo1" style="width:3px;">
                    </td>
                    <td style="width:130px;">
                            <i>Importancia:</i> 
                    </td>
            </tr>
            <tr>
                    <td style="width:370px;">
                    <?php

                    foreach($question['Answer'] as $answer){
                    ?>
                            <input type="radio" name="data[Category][<?php echo $category['Category']['id'];?>][Question][<?php echo $question['Question']['id']; ?>][Answer]" value="<?php echo $answer['id'];?>"><?php echo $answer['answer']?><br />
                    <?php
                    }
                    ?>
                            <input type="radio" name="data[Category][<?php echo $category['Category']['id'];?>][Question][<?php echo $question['Question']['id']; ?>][Answer]" value="0">Ninguna de las anteriores representa mi posici&oacute;n<br /><br />
                    </td>
                    <td>
                    </td>
                    <td>
                            <table class="tablaEncuesta">
                                    <tr>
                                            <td>

                                            </td>
                                            <td colspan="5">
                                                    <img src="http://www.votainteligente.cl/medianaranja/images/importancia_eq.png" width="126" height="24" />
                                            </td>
                                            <td>

                                            </td>
                                    </tr>
                                    <tr>
                                            <td style="font-size:10px;">
                                                    Muy baja
                                            </td>
                                            <td>
                                                    <input type="radio" name="data[Category][<?php echo $category['Category']['id'];?>][Question][<?php echo $question['Question']['id']; ?>][Percentage]" value="0.01">
                                            </td>
                                            <td>
                                                    <input type="radio" name="data[Category][<?php echo $category['Category']['id'];?>][Question][<?php echo $question['Question']['id']; ?>][Percentage]" value="0.05">
                                            </td>
                                            <td>
                                                    <input type="radio" name="data[Category][<?php echo $category['Category']['id'];?>][Question][<?php echo $question['Question']['id']; ?>][Percentage]" value="0.10" checked="checked">
                                            </td>
                                            <td>
                                                    <input type="radio" name="data[Category][<?php echo $category['Category']['id'];?>][Question][<?php echo $question['Question']['id']; ?>][Percentage]" value="0.15">
                                            </td>
                                            <td>
                                                    <input type="radio" name="data[Category][<?php echo $category['Category']['id'];?>][Question][<?php echo $question['Question']['id']; ?>][Percentage]" value="0.20">
                                            </td>
                                            <td style="font-size:10px;">Muy alta</td>
                                    </tr>

                            </table>
                    </td>

            </tr>
	<?php
	}
	?>
</table>
<?php
}
?>