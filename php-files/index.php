<?php
    //connect to database
    include("database-configuration.php");

    /**
     * function to get professional's deatails and his categories in json format
     * @param link link to database
     * @param email email for the professional
     * @return JSON id name phone email password categories[]
     * */
    function getProfessionalDetail($link, $email) {
        $query = "SELECT * FROM professionals WHERE email='$email'";
        $res = mysqli_query($link, $query);
        /*
        This process is initially done to encode the array, do reverse in other case
        $x = array(1,2);
        $x_serialized = base64_encode(serialize($x));
        echo $x_serialized;
        */
        if(!$res)
        echo mysqli_error($link);
        //converting the received tuple to json format
        $jason_array = array();
        //fetching associative array
        while($row = mysqli_fetch_assoc($res)) {
            $json_array[] = $row;
        }
        //json string, needs to be manipulated
        $string = json_encode($json_array);
        //header('Content-Type: application/json');
        //getting string for categories
        $query = "select user_id, name as categoryName, email, phone from categories inner join (SELECT category_id, user_id, email, phone FROM user_categories, professionals WHERE user_categories.user_id = professionals.id and professionals.email ='$email') s where s.category_id = categories.id;";
        $res = mysqli_query($link, $query);
        $emparray = array();
        while($row = mysqli_fetch_assoc($res)){
            $emparray[] = $row;
        }
        echo json_encode($emparray);
    }
    if($_GET['query'] == "getProfessionalDetail")
    getProfessionalDetail($link, $_GET['email']);

    function getAvailableCategories($link) {
        $query = "SELECT * FROM categories";
        $res = mysqli_query($link, $query);
        if(!$res)
        echo mysqli_error($link);
        $jason_array = array();
        while($row = mysqli_fetch_assoc($res)) {
            $jason_array[] = $row;
        }
        $string = json_encode($jason_array);
        echo $string;
    }
    if($_GET['query'] == "getAvailableCategories")
    getAvailableCategories($link);

    function getAllUsers($link) {
        $query = "SELECT * FROM professionals";
        $res = mysqli_query($link, $query);
        if(!$res)
        echo mysqli_error($link);
        $jason_array = array();
        while($row = mysqli_fetch_assoc($res)) {
            $jason_array[] = $row;
        }
        $string = json_encode($jason_array);
        echo $string;
    }

    if($_GET['query'] == "getAllUsers")
    getAllUsers($link);

    function getAllMeetings($link) {
        $query = "SELECT meetings.id, name, email, date_time, is_remote, link_address FROM professionals, meetings ORDER BY date_time;";
        $res = mysqli_query($link, $query);
        if(!$res)
        echo mysqli_error($link);
        $jason_array = array();
        while($row = mysqli_fetch_assoc($res)) {
            $jason_array[] = $row;
        }
        $string = json_encode($jason_array);
        echo $string;
    }
    if($_GET['query'] == "getAllMeetings")
    getAllMeetings($link);
?>