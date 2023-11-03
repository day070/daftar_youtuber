<?php
require("koneksi.php");
$id = $_GET['id'];
$queryDelete = mysqli_query($con, "DELETE FROM profil WHERE id_youtuber='$id'");
if ($queryDelete) {
    header("location:index.php");
}

?>