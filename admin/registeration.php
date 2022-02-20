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
password: <input type = "text" name = "password"><br>
phone number: <input type = "text" name = "phno"><br>
email address: <input type = "text" name = "email"><br>
specialization:<br>
<input type="checkbox" id="alcoholism" name="alcoholism" value="0">
  <label for="vehicle1"> Alcohol</label><br>
  <input type="checkbox" id="gambling" name="gambling" value="0">
  <label for="vehicle2"> Gambling</label><br>
  <input type="checkbox" id="gaming" name="gaming" value="0">
  <label for="vehicle2"> Gaming</label><br>
  <input type="checkbox" id="smoking" name="smoking" value="0">
  <label for="vehicle3">Smoking</label><br><br>
<input type = "submit">
</form>
<?php/*
echo $_POST['name'];
$arr = array();
if(isset($_POST['alcoholism']))
array_push($arr,1);
if(isset($_POST['gambling']))
array_push($arr, 2);
if(isset($_POST['gaming']))
array_push($arr, 4);
if(isset($_POST['smoking']))
array_push($arr, 3);
print_r($arr);
$string = base64_encode(serialize($arr));
//connect to database
include("../php-files/database-configuration.php");
//query to insert data into professionals table
if(isset(POST['submit'])){
$query = 'INSERT INTO professionals name, phone, email, password, is_verified, categories VALUES('."$_POST['name']".", $_POST['phone']".",". "$_POST['email']".","."$_POST['password']".".".",'.' 0,'."$arr".")";
      $res = mysqli_query($link, $query);
      if(!$res)
      echo mysqli_error($link);
}*/
?>
</body>

</html>