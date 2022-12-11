<?php 
 $conn = mysqli_connect("localhost", "root", "", "wad_modul4_bagas");
 
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
    $id = $data["id"];
    $nama = $data["nama"];
    $email = $data["email"];
    $password = $data["password"];
    $No_hp = $data["No_hp"];
    
    

    $query= "UPDATE  user_bagas
    SET  
        nama = '$nama_',
        email = '$email',
        password = '$password',
        No_hp = '$No_hp',

        WHERE id = $id
        ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
 }

?>