<html>
    <head>
        <title> Professional registration</title>
        <style>
form {text-align: center;
    }
form > input{text-align: center;
    margin-bottom: 2px; 
}              
</style>
</head>
<body>
    <h1 align = "center">Hi, Thanks for joining our network. You can register yourself as a professional on this page</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
name: <input type = "text" name = "name"><br>
password: <input type = "password" name = "password"><br>
phone number: <input type = "text" name = "phno"><br>
email address: <input type = "text" name = "email"><br>
specialization:<br>
<input type="checkbox" id="alcoholism" name="alcoholism" value="0">
  <label for="alcoholism"> Alcohol</label><br>
  <input type="checkbox" id="gambling" name="gambling" value="0">
  <label for="gambling"> Gambling</label><br>
  <input type="checkbox" id="gaming" name="gaming" value="0">
  <label for="gaming"> Gaming</label><br>
  <input type="checkbox" id="smoking" name="smoking" value="0">
  <label for="smoking">Smoking</label><br><br>
<input type = "submit" name = "submit">
</form>
</body>

</html>
<?php
$arr = array();
if(isset($_POST['alcoholism']))
array_push($arr,1);
if(isset($_POST['gambling']))
array_push($arr, 2);
if(isset($_POST['smoking']))
array_push($arr, 3);
if(isset($_POST['gaming']))
array_push($arr, 4);
$string = base64_encode(serialize($arr));
//connect to database
include("../php-files/database-configuration.php");
//query to insert data into professionals table
if(isset($_POST['submit'])){
    $query = 'INSERT INTO professionals name, phone, email, password, is_verified, categories VALUES('.'"'.$_POST['name'].'","'.$_POST['phno'].'","'.$_POST['email'].'","'.$_POST['password'].'", 0,"'.$string.'")';
      $res = mysqli_query($link, $query);
      if(!$res)
      echo mysqli_error($link);
      echo '<script>alert("registration successful");';
}
?>
