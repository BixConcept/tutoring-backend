<?php

// headers
Header("Access-Control-Allow-Origin: *");
Header("Content-Type: application/json");

include_once "../../models/user.php";
include_once "../../database.php";

$database = new Database();
$db = $database->connect();

$user = new User($db);
$result = $user->read();

// get row count
$num_rows = $result->rowCount();

if ($num_rows > 0) {
    // user array
    $return_data = array();
    $return_data['data'] = array();

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row); // this would be considered horrible practice in literaly every other language wtf

        $user_item = array(
            "id" => $id,
            "first_name" => $first_name,
            "last_name" => $last_name,
            "grade" => $user_grade,
            "email" => $email,
            "phone" => $phone
        );

        array_push($return_data['data'], $user_item);
    }

    // turn to json & output
    echo json_encode($return_data);
} else {
    // no posts
    echo json_encode(array("message" => "no users found"));
}
