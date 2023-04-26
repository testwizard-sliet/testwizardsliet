<?php

require('connection_d.php');
session_start();

#for login
if(isset($_POST['login'])){
    $query = "SELECT * FROM `testwizard` WHERE `email`='$_POST[email_username]' OR `username`='$_POST[email_username]'";
    $result = mysqli_query($con,$query);

    if($result)
    {
        if(mysqli_num_rows($result)==1)
        {
            $result_fetch = mysqli_fetch_assoc($result);
            if(password_verify($_POST['password'],$result_fetch['password']))
            {
                #if password matched
                $_SESSION['logged_in']=true;
                $_SESSION['username']=$result_fetch['username'];
                header("locatioindex.php");
            }
            else
            {
                #if incorrect password
                echo "<script>
                alert('Incorrect Password');
                window.location.href = 'index.php';
                </script>";
            }
        }
        else
        {
            echo "<script>
            alert('Email or Username not Registered.');
            window.location.href = 'index.php';
            </script>";
        }
    }
    else
    {
        echo "<script>
        alert('Cannot Run Query');
        window.location.href = 'index.php';
        </script>";
    }
}

# for registration
if (isset($_POST['register'])) {
    $user_exist_query = "SELECT * FROM `testwizard` WHERE `username` = '$_POST[username]' OR `email` = '$_POST[email]'";
    $result = mysqli_query($con, $user_exist_query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) # if username or email is already taken
        {
            # if any user has already taken usernameor email
            $result_fetch = mysqli_fetch_assoc($result);
            if ($result_fetch['username'] == $_POST['username']) {
                #error for username already taken
                echo "<script>
                alert('$result_fetch[username] - Username already taken');
                window.location.href index.php';
                </script>";
            }
            else {
                #error for email already registered
                echo "<script>
                alert('$result_fetch[email] - Email already registered');
                window.location.href = 'index.php';
                </script>";
            }
        } else # it will executed if no one has taken the same username or email before
        {
            $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
            $query = "INSERT INTO `testwizard`(`full_name`, `username`, `email`, `password`) VALUES ('$_POST[fullname]','$_POST[username]','$_POST[email]','$password')";
            if(mysqli_query($con, $query))
            {
                # if data inserted successfully
                echo "<script>
                alert('Registration Successful');
                window.location.href = 'index.php';
                </script>";
            }
            else{
                # if data cannot be inserted
                echo "<script>
                alert('Cannot Run Query');
                window.location.href = 'index.php';
                </script>";
            }
        }
    } else {
        echo "<script>
        alert('Cannot Run Query');
        window.location.href = 'index.php';
        </script>";
    }
}
