<?php

include 'connect.php';

if(isset($_POST['signUp'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashedPassword = md5($password);

    $checkUsername = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($checkUsername);

    if($result->num_rows > 0){
        echo "Brukernavnet er tatt!";
    } else {
        $insertQuery = "INSERT INTO users(username, password) VALUES ('$username', '$hashedPassword')";
        if($conn->query($insertQuery) === TRUE){
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

if(isset($_POST['signIn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashedPassword = md5($password);

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$hashedPassword'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['username'];
        header("Location: homepage.php");
        exit();
    } else {
        echo "Fant ikke brukeren, feil passord eller brukernavn";
    }
}

?>
