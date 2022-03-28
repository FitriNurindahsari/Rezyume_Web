<?php
    include "koneksi.php";
    session_start();
    $sql = "INSERT INTO login_owner (name_owner, email_owner, password_owner) VALUES ('".$_POST['name_owner']."', '".$_POST['email_owner']."', '".$_POST['password_owner']."')";
        if ($conn->query($sql) === TRUE) {
            $conn->close();
            header("location:login.php");
            create_message("Akun Berhasil Dibuat","success","check");
            exit();
        }
        else {
            $conn->close();
            create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
            header("location:signup.php");
            exit();
        }
?>