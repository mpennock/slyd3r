<?php include("inc/header.php"); ?>
<?php 
$directory = "img/slide_img";

$img_list = scandir($directory);
$list_length = count($img_list) - 2;
?>
<div class="img-options">
  <p>Select your images and hit "Create" to make a new slideshow.</p>
  <h2>Slides</h2>
  <div>
    <ul id="slides"></ul>
  </div>
	<button><a href="">Create</a></button>
</div>
<div id="img-list">
<?php  

for ($i=0; $i < $list_length; $i++) {
	$img = $i + 2;
	echo "<div class=\"list-img\"><img class=\"list-img img-responsive\" src=\"img/slide_img/" . $img_list[$img] . "\"></div>";
}
?>
</div> <!-- end #img-list -->
<?php include("inc/footer.php"); ?>