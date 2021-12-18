<?php
    
    $conn = mysqli_connect('localhost', 'root', '', 'dbms_lab');

    $name           = $_POST['name'];
    if(empty($name))
    {
        echo "Name is required";
    }
    $roll_number    = $_POST['rollnumber'];
    $date_of_birth  = $_POST['dob'];
    $address        = $_POST['address'];
    $mobile_number  = $_POST['phone'];
    $email_id       = $_POST['mailid'];
    $sem1           = $_POST['sem1'];
    $sem2           = $_POST['sem2'];
    $sem3           = $_POST['sem3'];
    $sem4           = $_POST['sem4'];
    $sem5           = $_POST['sem5'];
    $sem6           = $_POST['sem6'];
    $sem7           = $_POST['sem7'];
    $sem8           = $_POST['sem8'];
    $cgpa           = $_POST['cgpa'];
    $hobbies        = $_POST['hobbies'];
    $hosteller      = $_POST['ishostel'];
    $refer_any      = $_POST['refer'];

    $sql = " INSERT INTO `student`(`name`, `roll_number`, `date_of_birth`, `address`, `email_id`, `mobile_number`, `sem1`, `sem2`, `sem3`, `sem4`, `sem5`, `sem6`, `sem7`, `sem8`, `cgpa`, `hobbies`, `hosteller`, `refer_any`) VALUES ('$name', '$roll_number', '$date_of_birth', '$address', '$email_id', '$mobile_number', '$sem1', '$sem2', '$sem3', '$sem4', '$sem5', '$sem6', '$sem7', '$sem8', '$cgpa', '$hobbies', '$hosteller', '$refer_any') ";

    $rs = mysqli_query($conn, $sql);
    if($rs)
    {
        echo "Details entered Successfully..........:)";
    }
?>