<?php 
$conn = mysqli_connect("localhost", "root", "", "modul3");
function tambah($data) {
    global $conn;
    $nama_mobil = $data["nama_mobil"];
    $pemilik_mobil = $data["pemilik_mobil"]; 
    $merk_mobil = $data["merk_mobil"];
    $tanggal_beli = $data["tanggal_beli"];
    $deskripsi = $data["deskripsi"];
    $status_pembayaran = $data["status_pembayaran"];
    
    $foto_mobil = upload();
    if(!$foto_mobil) {
        return false;
    }

    $query= "INSERT INTO showroom_bagas_table
    VALUES ('', '$nama_mobil', '$pemilik_mobil', '$merk_mobil', '$tanggal_beli', '$deskripsi', '$foto_mobil', '$status_pembayaran')    
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>
<?php
function upload() {
    $namaFile = $_FILES['foto_mobil']['name'];
    $ukuranFile = $_FILES['foto_mobil']['size'];
    $error = $_FILES['foto_mobil']['error'];
    $tmpName = $_FILES['foto_mobil']['tmp_name'];

    if($error === 4 ) {
        echo " 
            <script>
                alert('Pilih gambar terlebih dahulu');
            </script>
        ";
        return false;
    }

    //cek jenis file gambar
    $ekstensigambarvalid = ['jpg', 'jpeg', 'png', 'webp'];
    $ekstensigambar= explode('.', $namaFile);
    $ekstensigambar = strtolower(end($ekstensigambar));

    if(!in_array($ekstensigambar, $ekstensigambarvalid)) {
        echo " 
        <script>
            alert('Jenis File salah');
        </script>
        ";
        return false;
    }
    //siap upload
    //generate nama gambar baru

    $namaFilebaru = uniqid();
    $namaFilebaru .= '.';
    $namaFilebaru .= $ekstensigambar;

    move_uploaded_file($tmpName, 'image/' . $namaFilebaru);
    return $namaFilebaru;


}

?>