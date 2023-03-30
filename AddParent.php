<?php


$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student89-3530313543fa", "ua92-studentAc", "student89-3530313543fa");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $ParentsID = $_POST['ParentsID'];
    $Address = $_POST['Address'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $Email = $_POST['Email'];
   

    $sql = "INSERT INTO parent (ParentsID,Address,PhoneNumber,Email) VALUES ('$ParentsID',' $Address','$PhoneNumber',' $Email')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>