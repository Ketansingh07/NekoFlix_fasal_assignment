<?php
if (isset($_POST['sub'])){
    $username = $_POST['uname'];
    $email = $_POST['email'];
    $mobile = $_POST['mob'];
    if (($_POST['pass']) == ($_POST['cpass'])){
        $connection = mysqli_connect('localhost', 'root', '', 'company');
        if (!$connection) {
            die('database not connected');
        }

        $password = $_POST['pass'];

        $insert = "INSERT INTO signup(username,email,mobile,password) VALUES ('$username','$email','$mobile','$password')";
        if (mysqli_query($connection,$insert)){
            ?>
            <script>
                alert("Data inserted successfully");
                // redirect in login page

            </script>

            <?php
            header('location:./index.html');
        }
        else{
            ?>
            <script>
                alert("Data Not Inserted Properly");
            </script>
            <?php

        }

    }

}

