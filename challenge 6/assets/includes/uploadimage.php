<form method='post' action='' enctype='multipart/form-data'>
  <input type='file' name='files[]' multiple />
  <input type='submit' value='Submit' name='submit' />
</form>

<?php 
include "db.php";
 
if(isset($_POST['submit'])){

  $countfiles = count($_FILES['files']['name']);
 
  $query = "INSERT INTO tb_image (name,image) VALUES(?,?)";

  $statement = $conn->prepare($query);

  for($i=0;$i<$countfiles;$i++){

    $filename = $_FILES['files']['name'][$i];

    $target_file = 'upload/'.$filename;

    $file_extension = pathinfo($target_file, PATHINFO_EXTENSION);
    $file_extension = strtolower($file_extension);

    $valid_extension = array("png","jpeg","jpg");

    if(in_array($file_extension, $valid_extension)){

       if(move_uploaded_file($_FILES['files']['tmp_name'][$i],$target_file)){

	  $statement->execute(array($filename,$target_file));

       }
    }
 
  }
  echo "File upload successfully";
}
?>