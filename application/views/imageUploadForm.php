<!DOCTYPE html>
<html> 
<head> 
  <title>Codeigniter Compress Image Size Example</title> 
</head>

<body> 

  <?php echo $error;?> 
  
  <form method='post' action='/image-upload/post' enctype='multipart/form-data'>
     <input type="file" name="image" size="20" />
     <input type="submit" value="upload" /> 
  </form> 

</body>
</html>