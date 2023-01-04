<?php 
$conn = mysqli_connect("localhost", "root", "", "wad_modul4_bagas");
 
function query($query){
   global $conn;
   $result = mysqli_query($conn, $query);
   $rows = [];
   while( $row = mysqli_fetch_assoc($result)){
       $rows[] = $row;
   }
   return $rows;
}
function login($data) {
    global $conn;
    $nama = $_POST["nama"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user_bagas WHERE nama = '$nama'");

    if( mysqli_num_rows($result) === 1) {

        //cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])) {
            $_SESSION["login"] = true;

            //cek remember me
            if (isset($_POST["remember"])) {
                //bikin cookie

                setcookie('id', $row['id'], time() + 60);
                setcookie('nama', $row['nama'], time() + 60);
            }
            echo "<script>
            alert('Login Berhasil')
            document.location.href = 'Home2-Bagas.php';
            </script>
        ";
            exit;
        } else {
            echo "<script>
                alert('Password Salah')
                document.location.href = 'Login-Bagas.php';
                </script>
            ";
        }
    }


}


?>