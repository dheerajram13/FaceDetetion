<?php

include "FaceDetector.php";

//$name = $_POST["image"];
$name=$_FILES['image']['name'];

$detector = new svay\FaceDetector('detection.dat');
$detector->faceDetect($name);
$detector->toJpeg();



//echo($_FILES["image"]["name"]);

//echo $_POST["image"];
