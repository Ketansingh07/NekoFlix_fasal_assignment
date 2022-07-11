<?php

if (isset($_POST['sub'])){
    $connection = mysqli_connect('localhost', 'root','', 'company');
    if (!$connection){
        echo "<script>alert('Database not connected')</script>";

    }

    $user = $_POST['username'];
    $password = $_POST['password'];

    $retrive = "SELECT * FROM signup";
    $table = mysqli_query($connection,$retrive);
    if(mysqli_num_rows($table)>0){
        while ($row = mysqli_fetch_array($table)){
            if ($row['email'] == $user && $row['password']==$password){
                header('Location: ./home.html');
                exit();
            }
            else {

                echo "<script>alert('You entered Wrong user id or Password')</script>)";
                echo "<script>location.href='signin.php'</script>";


            }
        }

    }

}

