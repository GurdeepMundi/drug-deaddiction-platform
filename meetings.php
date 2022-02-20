<html>
    <body>
        <H2 align = "left">Please feel free to join any of these meetings</H2>
</body>
    </html>
<?php
include("./php-files/database-configuration.php");
$id = $_GET["query"];
$query = 'SELECT user_categories.id, professionals.name, meetings.date_time, meetings.is_remote, meetings.link_address FROM user_categories INNER JOIN meetings on user_categories.user_id = meetings.user_id Inner JOIN professionals on meetings.user_id WHERE user_categories.category_id = '."$id".';';
$result = mysqli_query($link, $query);
if(!$result)
echo mysqli_error($link);
//create table in html page
echo "<table border='1'>";
//create headings in the table
echo "<th>Professional's ID</th> <th>Professional's name</th> <th>Meeting time</th> <th>Remote or In person</th>  <th>Link/Address</th> ";
//process every row using $row (an associative array returned by mysqli_fetch_array
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    //we dont necessarily need to acced using filed name, e.g. 'id'
    //we can also access like a numeric array, e.g. 1, 2, 3, 4 ....
    echo "<td>". $row['id']. "</td>";
    echo "<td>". $row['name']. "</td>";
    echo "<td>". $row['date_time']. "</td>";
    if($row['is_remote'])
    echo "<td>Remote</td>";
    else
    echo "<td>In-person</td>";
    echo "<td>". $row['link_address']. "</td>";
    echo "</tr>";
}
echo "</table>";
?>