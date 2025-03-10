<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];
    
    $sql = "INSERT INTO inkaaa (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Pesan berhasil terkirim!');
                window.location.href='index.php';
              </script>";
    } else {
        echo "<script>
                alert('Error: " . $conn->error . "');
                window.location.href='index.php';
              </script>";
    }
    
    $conn->close();
}
?> 