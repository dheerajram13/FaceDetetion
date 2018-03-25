<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Josefin+Slab');
        body{
  background: rgba(0,0,0,0.9);
}
form{
  position: absolute;
  top: 50%;
  left: 50%;
  margin-top: -100px;
  margin-left: -250px;
  width: 500px;
  height: 200px;
  border: 4px dashed #fff;
}

h1 {
 width: 100%;
 height: 100%;
 text-align: center;
 color: #ffffff;
 font-family: 'Josefin Slab', serif;
}
form p{
  width: 100%;
  height: 100%;
  text-align: center;
  line-height: 170px;
  color: #ffffff;
  font-family: 'Josefin Slab', serif;
}
form input{
  position: absolute;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  outline: none;
  opacity: 0;
}
form button{
  margin: 0;
  color: #fff;
  background: #16a085;
  border: none;
  width: 508px;
  height: 35px;
  margin-top: -20px;
  margin-left: -4px;
  border-radius: 4px;
  border-bottom: 4px solid #117A60;
  transition: all .2s ease;
  outline: none;
}
form button:hover{
  background: #149174;
	color: #0C5645;
}
form button:active{
  border:0;
}
    </style>
<script>
    $(document).ready(function(){
  $('form input').change(function () {
    $('form p').text(this.files.length + " file(s) selected");
  });
});
</script>
</head>
<body>
<h1>
            Face Detection App
</h1>
  <?php 
    
 
   
    echo <<<_END
<form method=post action='index.php'enctype=multipart/form-data>
    <input type=file name=image>
  <p>Drag your files here or click in this area.</p>
  <button type="submit" value = "upload">Upload</button>
</form>
    
_END;

    
//if($_FILES)
//{
//	$name=$_FILES['image']['name'];
	//move_uploaded_file($_FILES['image']['tmp_name'], $name);
	//echo "Uploaded image'$name.'<br><img src='$name'>";
    //echo "",'<img src="'.$name.'" width="200" height="200" />';
    

//}


    


?>
    </body>
</html>