<?php
    include "koneksi.php";
    include "create_message.php";
    $sql = "DELETE FROM goods WHERE id_goods=".$_GET['id_goods'];
    if ($conn->query($sql) === TRUE) {
        $conn->close();
        create_message("Hapus Data Berhasil","success","check"); //memunculkan message hapus data berhasil
        header("location:goods.php");
        exit();
    }
    else {
        $conn->close();
        create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning"); //memunculkan message hapus data error
        header("location:goods.php");
        exit();
    }
?>