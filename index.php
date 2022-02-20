<html>
<head>
<!--- link to the styles file -->
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <?php
    //connect to database
    include("php-files/database-configuration.php");
    //query to insert data into professionals table
    /*
    $query = 'INSERT INTO professionals (id, name, phone, email, password) VALUES (
        "1", "gurdeep", "1234567890", "gurdeepmundi@gmail.com", "12345" )';
          $res = mysqli_query($link, $query);
          if(!$res)
          echo mysqli_error($link);*/
    /*
    $query = 'INSERT INTO categories (name) VALUES ("newcategory")';
        $res = mysqli_query($link, $query);
        if(!$res)
        echo mysqli_error($link);*/
    ?>
    <div class="mediator"> <button><a href="login.html"><b>Trained Professional LOGIN</b></a></button></div>
  
  <div class="topnav">
<div class="search-container">
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <input type="text" placeholder="Search.." name="search">
    <button type="submit"><i class="fa fa-search"></i><b >SEARCH</b></button>
  </form>
</div>
</div>
<div class = "main-body">
    <div class = "item4">
<a href="./meetings.php/?query=2"> <img src="despondent-gambler-losing-at-the-casino.jpg" width = 80%> </a>
<h3 align ="center">Gambling</h3>
</div>
    <div class = "item1">
<a href="./meetings.php/?query=1"> <img src="despondent-gambler-losing-at-the-casino.jpg" width = 80%> </a>
<h3 align ="center">Alcoholism</h3>
    </div>
    <div class = "itme2">
<a href="./meetings.php/?query=4"> <img src="despondent-gambler-losing-at-the-casino.jpg" width = 80%> </a>
<h3 align ="center">Gaming</h3>
    </div>
    <div class = "item 3">
<a href="./meetings.php/?query=3"> <img src="despondent-gambler-losing-at-the-casino.jpg" width = 80%> </a>
<h3 align ="center">Smoking</h3>
    </div>
  <div class="footer"></div>
</body>
</html>