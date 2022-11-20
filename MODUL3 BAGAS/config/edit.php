<?php 
 $conn = mysqli_connect("localhost", "root", "", "modul3");
 
 function query1($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
 }

 function edit($data) {
    global $conn;
    $id_mobil = $data["id_mobil"];
    $nama_mobil = $data["nama_mobil"];
    $pemilik_mobil = $data["pemilik_mobil"]; 
    $merk_mobil = $data["merk_mobil"];
    $tanggal_beli = $data["tanggal_beli"];
    $deskripsi = $data["deskripsi"];
    
    $foto_mobil = upload();
    if(!$foto_mobil) {
        return false;
    }

    

    $query= "UPDATE  showroom_bagas_table
    SET  
        nama_mobil = '$nama_mobil',
        pemilik_mobil = '$pemilik_mobil',
        merk_mobil = '$merk_mobil',
        tanggal_beli = '$tanggal_beli',
        deskripsi = '$deskripsi',
        foto_mobil = '$foto_mobil'

        WHERE id_mobil = $id_mobil
        ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
 }

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