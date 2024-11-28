<?php

include("../config.php");

if (isset($_POST['insert'])) {
    $name = $_POST['pname'];
    $price = $_POST['pprice'];
    $category = $_POST['pcate'];
    $rate = $_POST['prate'];


    if ($name != null && $price != null && $category != null && $rate != null) {
        $sql = "INSERT INTO product (name,price,category,rate) VALUES ('$name','$price','$category','$rate')";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            echo "SUCCESS..";
        } else {
            echo "FAILED";
        }
    }
} else {
    echo "NULL";
}
?>
