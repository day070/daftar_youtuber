<?php
require("koneksi.php");
$id = $_GET['id'];

$result = mysqli_query($con, "SELECT * FROM profil WHERE id_youtuber=$id");
while ($row = mysqli_fetch_array($result)) {
    $nama = $row["Nama"];
    $negara = $row["Negara"];
    $j_konten = $row["J_konten"];
    $deskripsi = $row["Deskripsi"];
    $j_subriber = $row["J_Subcriber"];
    $chanel = $row["Nm_chanel"];
    $kasus = $row["kasus"];
    $foto = $row["foto"];
    $flag = $row['flag'];

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/info.css">
</head>

<body>
    <a href="daftar.php">Kembali</a>
    <div class="containerr">
        <div class="board">
            <div class="judul">

                <h2 class="nama">
                    <?php echo $nama ?>
                </h2>
                <?php
                echo "<img src='https://flagcdn.com/$flag.svg' class='flag'>"
                    ?>
                <h2 class="kasus">
                    <?php echo $kasus ?>
                </h2>
                <h2 class="deskripsi">
                    <?php echo $deskripsi ?>
                </h2>
            </div>
            <div class="con-sub">
                <h2>
                    <?php echo $j_subriber ?> <i class="bi bi-person"></i>
                </h2>
            </div>
        </div>
        <img src="image/<?php echo $foto ?>" class="gambar">
    </div>
</body>

</html>
<?php

?>
