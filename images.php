<?php include("inc/header.php"); ?>
<?php 
$directory = "img/slide_img";

$img_list = scandir($directory);
$list_length = count($img_list) - 2;

if(isset($_FILES['image'])){
  $errors= array();
  $file_name = $_FILES['image']['name'];
  $file_size =$_FILES['image']['size'];
  $file_tmp =$_FILES['image']['tmp_name'];
  $file_type=$_FILES['image']['type'];
  
  if($file_size > 2097152){
     $errors[]='File size must be excately 2 MB';
  }
  
  if(empty($errors)==true){
     move_uploaded_file($file_tmp,"img/slide_img/".$file_name);
     header('Location: images.php');
  }else{
     print_r($errors);
  }
}
?>
<div class="img-options">
	<form action="images.php" method="post" enctype="multipart/form-data">
		<input type="file" name="image">
		<input type="submit">
	</form>
	<button><a href="">Add New</a></button>
</div>
<div id="img-list">
  <img id="b" class="list-img img-responsive" src="img/slide_img/pup.jpg">
<?php  

for ($i=0; $i < $list_length; $i++) {
	$img = $i + 2; 
	// echo $img_list[$img];
	echo "<div class=\"list-img\"><img class=\"list-img img-responsive\" src=\"img/slide_img/" . $img_list[$img] . "\"></div>";
}
?>
</div>
<?php include("inc/footer.php"); ?>