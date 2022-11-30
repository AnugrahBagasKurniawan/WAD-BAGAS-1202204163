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
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user_bagas WHERE email = '$email'");

    if( mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])) {
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