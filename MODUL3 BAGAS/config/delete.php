<?php 
$id_mobil = $_GET["id_mobil"];

$conn = mysqli_connect("localhost", "root", "", "modul3");

$result = mysqli_query($conn, "DELETE FROM showroom_bagas_table WHERE id_mobil = $id_mobil");


if(($result) > 0){
    echo "
    <script>
        alert('data berhasil dihapus');
        document.location.href = '../ListCar-Bagas.php';   
    </script>
    ";
    
} else {
    "
    <script>
        alert('data gagal dihapus');
        document.location.href = '../ListCar-Bagas.php';   
    </script>

    ";
}

return mysqli_affected_rows($conn);
?>