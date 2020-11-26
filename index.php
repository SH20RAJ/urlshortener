<?php
$siteurl = "http://localhost/bit.ly/";
$shorted = "";
if(isset($_GET['url'])) {
  $url = $_GET['url'];
  header('location:'.$url.'');
} else {
 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Url Redirect Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>


    <h1>Shorten your links Here</h1>
    <form action="" method="get">
    <input name="surl" placeholder="Enter Your Url" type="text" name="" id="">
    <button type="submit" class="btn btn-success" name="short">Short</button>
    </form> <br>
    
    <?php 
    if(isset($_GET['short'])) {
        echo $shorted = "<span class='btn btn-success' >Here is Your Link - </span>".$siteurl."?url=".$_GET['surl']."";
    } 
    ?> 
    

</body>
</html>