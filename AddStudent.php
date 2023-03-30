<?php

$link = mysqli_connect("sdb-57.hosting.stackcp.net", "student89-3530313543fa", "ua92-studentAc", "student89-3530313543fa");

if ($link === false) 
{
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit']))
{
    $pupilid = $_POST['pupilid'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $fatherid = $_POST['fatherid'];
    $motherid = $_POST['motherid'];
    $medicalinfo = $_POST['medicalinfo'];
    $class = $_POST['class'];

    $sql = "INSERT INTO Students (PupilID, FirstName, LastName, ParentsID, ClassID, Address, MedicalINF, TeacherID) VALUES ('$pupilid', '$firstname','$lastname','$fatherid','$motherid','$medicalinfo','$class')";
    if (mysqli_query($link, $sql))
    {
        echo "New record created successfully";
    } 
    else 
    {
        echo "Error adding record: " . mysqli_error($link);
    }                                                                                                               
}

?>