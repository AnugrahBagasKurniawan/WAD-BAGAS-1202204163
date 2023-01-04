<?php
$conn = mysqli_connect("localhost", "root", "", "wad_modul4_bagas");
function daftar($data){
    global $conn;

    $nama = $data["nama"];
    $email = $data["email"];
    $No_hp = $data["No_hp"];
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    $result = mysqli_query($conn, "SELECT email FROM user_bagas WHERE email = '$email'");

    if(mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('email sudah terdaftar')
                document.location.href = 'Registrasi.php';
                </script>      
        ";
        return false;
    }



    if($password !== $password2) {
        echo "<script>
                alert('konfirmasi password salah')
                document.location.href = 'Registrasi.php';
            </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO user_bagas VALUES('', '$nama', '$email', '$No_hp', '$password')");
    return mysqli_affected_rows($conn);

}
?>