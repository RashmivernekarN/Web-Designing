<?php
$dirname = "img/";
$images = glob($dirname."*.{jpg,jpeg,png}",GLOB_BRACE);

foreach($images as $image) {
    ?>
    <img src="<?=$image?>" /><br />
    <a href="<?=$image?>" download> Download </a><br/>
    <?php	
}

?>