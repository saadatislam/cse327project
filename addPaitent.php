<?php

    require_once "connection.php";


    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $assignedDoctor = $_POST["assignedDoctor"];
    $city = $_POST["city"];
    $zip = $_POST["zip"];



    $sql = "INSERT INTO paitentInfo (name,email,address,assignedDoctor,city,zip)
    VALUES ('$name','$email','$address','$assignedDoctor','$city','$zip')";
    if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

?>