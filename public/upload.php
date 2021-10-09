
<?php

if(isset($_POST['moveFile']))
{
    $fileName = $_FILES['fileName']['name'];
    $tempName = $_FILES['fileName']['tmp_name'];

   header('location:index.php');
        

    $extension = pathinfo($fileName,PATHINFO_EXTENSION);
	$rename='document1';
    $newname= $rename.'.'.$extension;
   

   
        if(!empty($fileName))
        {
            $location = "demo_documents/";
            if(move_uploaded_file($tempName, $location.$newname))
            {
                echo 'File Uploaded';
            }
        }
    
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Courselodge</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<h2>Document Upload</h2>
<form method="post" action="upload.php" enctype="multipart/form-data">
	<div class="form-group">
	<input type="file" name="fileName" class="form-control">
</div>
	<input type="submit" name="moveFile" class="btn btn-primary">
</form>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
