<?php
    include "koneksi.php";
    include "create_message.php";

    if(isset($_POST['id_outlet'])){
        //Kondisi Update
        $sql = "UPDATE outlet SET name_outlet = '".$_POST['name_outlet']."', id_owner = '".$_POST['id_owner']."', address_outlet = '".$_POST['address_outlet']."', deskription_outlet = '".$_POST['deskription_outlet']."' WHERE (`id_outlet` = '".$_POST['id_outlet']."');";
        if ($conn->query($sql) === TRUE) {
            $conn->close();
            header("location:outlet.php");
            create_message("Ubah Data Berhasil","success","check");
            exit();
        }
        else {
            $conn->close();
            header("location:outlet.php");
            create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
            exit();
        }
    }
    else{
        //Kondisi INSERT
        $sql = "INSERT INTO outlet (name_outlet, id_owner, address_outlet, deskription_outlet) VALUES ('".$_POST['name_outlet']."', '".$_POST['id_owner']."', '".$_POST['address_outlet']."', '".$_POST['deskription_outlet']."')";
        if ($conn->query($sql) === TRUE) {
            $conn->close();
            header("location:outlet.php");
            create_message("Simpan Data Berhasil","success","check");
            exit();
        }
        else {
            $conn->close();
            create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
            header("location:outlet.php");
            exit();
        }
    }
?>