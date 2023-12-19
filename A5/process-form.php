<?php

$uploaddir = 'uploads/';
$uploadfile = $uploaddir . basename($_FILES['profilePic']['name']);

if (move_uploaded_file($_FILES['profilePic']['tmp_name'], $uploadfile)){
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}

$fname = $_POST["firstName"];
$lname = $_POST["lastName"];
$dob = $_POST["dateOfBirth"];
$bio = $_POST["bio"];
$height = $_POST["height"];
$numOfChildren = $_POST["numberOfChildren"];

?>


<p>Name: <?= $fname ?> <?= $lname ?></p>
<p>Date of Birth: <?= $dob ?></p>
<p>Bio: <?= $bio ?> </p>
<p>Height in cm: <?= $height ?> </p>
<p>Number of Children: <?= $numOfChildren ?> </p>
Profile Pic: <img src="<?= $uploadfile; ?>" />
<a href="<?= $uploadfile; ?>"><?= basename($_FILES['profilePic']['name']); ?></a>
