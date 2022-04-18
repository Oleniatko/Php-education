<?php

$file = "не вдалося завантажити файл";
$surname = "відсутні данні";
$name = "відсутні данні";
$middleName = "відсутні данні";
$age = "відсутні данні";
$Php = "відсутні данні";
$JavaScript = "відсутні данні";
$Python = "відсутні данні";
$Java = "відсутні данні";
$experience = "відсутні данні";
$aboutForMe = "відсутні данні";

if(!move_uploaded_file($_FILES["file"]["tmp_name"], "/var/www/html/image". $_FILES["file"]["name"])) {
    echo "не вдалося завантажити файл";
}

if(isset($_POST["file"])){
    $file = $_POST["file"];
}

if(isset($_POST["surname"])){
  
    $surname = $_POST["surname"];
}

if(isset($_POST["name"])){
  
    $name = $_POST["name"];
}

if(isset($_POST["middleName"])){
  
    $middleName = $_POST["middleName"];
}


if(isset($_POST["age"])){
  
    $age = $_POST["age"];
}

if(isset($_POST["Php"])){
  
    $Php = $_POST["Php"];
}

if(isset($_POST["JavaScript"])){
  
    $JavaScript = $_POST["JavaScript"];
}

if(isset($_POST["Python"])){
  
    $Python = $_POST["Python"];
}

if(isset($_POST["Java"])){
  
    $Java = $_POST["Java"];
}

if(isset($_POST["experience"])){
  
    $experience = $_POST["experience"];
}

if(isset($_POST["aboutForMe"])){
  
    $aboutForMe = $_POST["aboutForMe"];
}
echo $file.'<br/>';
echo $surname.' <br/>';
echo $name.' <br/>';
echo $middleName.' <br/>';
echo $age.' <br/>';
echo $Php.' <br/>';
echo $JavaScript.' <br/>';
echo $Python.' <br/>';
echo $Java.' <br/>';
echo $experience.' <br/>';
echo $aboutForMe;

?>

