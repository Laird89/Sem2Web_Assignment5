<?php
//form.php

?>

<form action="process-form.php" enctype="multipart/form-data" method ="POST">

    First Name: <input type="text" name="firstName"><br><br>

    Last Name: <input type="text" name="lastName"><br><br>

    Date of Birth: <input type="text" name="dateOfBirth"><br><br>

    Bio: <textarea name="bio"></textarea><br><br>

    Height in cm: <input type="number" name="height"><br><br>

    Number of Children: <select name="numberOfChildren">

        <?php 
            for ($i=0; $i < 31; $i++) {
            echo '<option value="' . $i . '">' . $i . '</option>';
            }   
        ?>

    </select><br><br>

    Profile Pic: <input type="file" name="profilePic"><br><br>

    <input type="submit">
    
</form>