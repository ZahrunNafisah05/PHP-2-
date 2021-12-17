<?php
    include './koneksi.php';
    echo "<a href='formulir.php'>Tambah Data</a><br>";

    $sql = "SELECT * FROM buku"; 
    $result = $conn->query($sql);
    $a = 1;

    while($baris = mysqli_fetch_array($result)){
        echo "<br>";
        echo "$a";
        echo "<br>";
        echo "judul_buku : " . $baris[1] . "<br>";
        echo "penulis : " . $baris[2] . "<br>";
        echo "jenis_buku : " . $baris[3] . "<br>";
        echo "gambar_buku : " . $baris[4] . "<br>";
        echo "<a href='ubah_data.php?id_buku=$baris[0]'>Ubah &nbsp</a>";
        echo "<a href='hapus.php?id_buku=$baris[0]'>Hapus</a>";
        $a++;
    }
    $conn->close();

?>