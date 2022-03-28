<?php
    include "koneksi.php";
    include "create_message.php";

    //Upload foto
    $namalama = $_FILES['images'] ['name'];
    $asal = $_FILES ['images'] ['tmp_name'];
    $ukuranFile = $_FILES['images']['size']; //ukuran bytes
    $error = $_FILES['images']['error'];
    $target = "uploads/";

    //Pemisah format gambar dengan nama
    $extensiGambarValid = ['jpg','jpeg','png', 'gif']; //file yang akan diupload jpg/jpeg/png/gif
    $extensiGambar = explode ('.', $namalama); // . sebagai pemisah 
    $extensiGambar = strtolower(end($extensiGambar));

    //Untuk memvalidasi ekstensi file yang akan diupload bukan jpg/jpeg/png/gif
    if (!in_array($extensiGambar, $extensiGambarValid)) { 
        $conn->close();
        create_message("Extensi Gambar Salah","warning","danger");
        header("location:".$_SERVER['HTTP_REFERER']);
        exit();
    }

    //untuk memvalidasi apakah ukuran file lebih dari 500kb
    if ($ukuranFile > 500000) {
        $conn->close();
        create_message("Ukuran Gambar Terlalu Besar","warning","danger");
        header("location:".$_SERVER['HTTP_REFERER']);
        exit();
    }

            
    //File foto yang lolos pengecekan
    //Generate nama baru / AGAR TIDAK DUPLIKAT
    $namabaru = uniqid();
    $namabaru.= '.';
    $namabaru.= $extensiGambar;

    // Lokasi + Namabaru
    $fullpath = $target.$namabaru;

    if(isset($_POST['id_goods'])){
        //Hapus Foto Lama
        $sqlgetfoto = "SELECT images from goods WHERE id_goods=".$_POST['id_goods'];
        $ambil = $conn->query($sqlgetfoto)->fetch_assoc();
        $lokasifoto = $ambil['images'];
        unlink($lokasifoto);

        move_uploaded_file($asal, $fullpath);

        //Kondisi Update
        $sql = "UPDATE goods SET name_goods = '".$_POST['name_goods']."', deskription_goods = '".$_POST['deskription_goods']."', selled_goods = '".$_POST['selled_goods']."', price_goods = '".$_POST['price_goods']."', total_goods = '".$_POST['total_goods']."', images = '$fullpath' WHERE (`id_goods` = '".$_POST['id_goods']."');";
        if ($conn->query($sql) === TRUE) {
            $conn->close();
            header("location:goods.php");
            create_message("Ubah Data Berhasil","success","check");
            exit();
        }
        else {
            $conn->close();
            header("location:goods.php");
            create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
            exit();
        }
    }
    else{
        move_uploaded_file($asal, $fullpath);
        //Kondisi Insert
        $sql = "INSERT INTO goods (name_goods, deskription_goods, selled_goods, price_goods, total_goods, images) VALUES ('".$_POST['name_goods']."', '".$_POST['deskription_goods']."', '".$_POST['selled_goods']."', '".$_POST['price_goods']."', '".$_POST['total_goods']."', '$fullpath')";
        if ($conn->query($sql) === TRUE) {
            $conn->close();
            header("location:goods.php");
            create_message("Simpan Data Berhasil","success","check");
            exit();
        }
        else {
            $conn->close();
            header("location:goods.php");
            create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
            exit();
        }
    }
?>