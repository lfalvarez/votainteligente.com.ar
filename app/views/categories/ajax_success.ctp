<option>Selecciona una categoria</option>
<?php
foreach ($categories as $categoryId => $category) {
?>
<option value="<?php echo $categoryId; ?>" <?php if ($idSelectedCategory == $categoryId) { echo 'selected';}?>><?php echo $category; ?></option>
<?php } ?>
