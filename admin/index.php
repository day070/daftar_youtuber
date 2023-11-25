<?php
require("../session.php");
require("../koneksi.php");
$data = mysqli_query($con, "SELECT * FROM profil ORDER BY id_youtuber DESC  ");
?>
<?php
if (isset($_POST['cari'])) {
    $cari = $_POST['keyword'];
    $data = mysqli_query($con, "SELECT * FROM profil WHERE 
                                Nama LIKE '%$cari%' OR
                                J_konten LIKE'%$cari%' OR
                                kasus LIKE '%$cari%' OR
                                Negara LIKE '%$cari%' OR
                                Nm_chanel LIKE '%$cari%'
                                 ");
}
if (isset($_POST['reset'])) {
    $data = mysqli_query($con, "SELECT * FROM profil ORDER BY id_youtuber DESC  ");
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
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <div class="con-nav"></div>
        <div class="logo">
            <img src="../image/hero-login.png" width="40px"
                style="border-radius:50%;margin-top:10px;margin-left: 20px;">
        </div>
        <ul class="ul-nav">

        </ul>
        <div class="kanan">
            <a href="admin">
                <?php echo $_SESSION['nama'] ?>
            </a>
            <!-- <a href=""><i class="fa-solid fa-earth-americas" style="color: white;"></i></a> -->
            <a href="logout.php"><i class="bi bi-box-arrow-right logout"></i></a>
        </div>
    </nav>
    <!-- <?php include("tambah.php"); ?> -->
    <br>
    <br>
    <br>

    <br>
    <form action="" method="post">
        <div class="container h-100">
            <div class="d-flex justify-content-center h-100">
                <div class="searchbar">
                    <input class="search_input" type="text" name="keyword" placeholder="Search..." autocomplete="off"
                        autofocus>
                    <button href="#" class="search_icon" name="cari"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </form>
    <br>
    <button class="tambah"><a href="tambah.php">Tambah</a></button>
    <br>
    <br>
    <table border="1" style="width:100%; height:50vh;">
        <tr>
            <th>id</th>
            <th>Nama</th>
            <th>Negara</th>
            <th>Konten</th>
            <th>Deskripsi</th>
            <th>Subriber</th>
            <th style="width:20px;">Kasus</th>
            <th style="text-align:center;">Aksi</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td>
                    <?php echo $row["id_youtuber"] ?>
                </td>
                <td style="text-align:center;">
                    <img src="../image/<?php echo $row['foto'] ?>" width='150px'><br>
                    <?php echo $row["Nama"] ?>
                </td>
                <td>
                    <?php echo $row["Negara"] ?>
                </td>
                <td>
                    <?php echo $row["J_konten"] ?>
                </td>
                <td style="width:20%;">
                    <p class="desk">

                        <?php echo $row["Deskripsi"] ?>
                    </p>
                </td>
                <td>
                    <?php echo $row["J_Subcriber"] ?>
                </td>
                <td>
                    <?php echo $row["kasus"] ?>
                </td>
                <td>
                    <?php
                    echo "<button class='edit'><a href='edit.php?id=$row[id_youtuber]'>Edit</a></button><button class='hapus'><a href='delete.php?id=$row[id_youtuber]'>Hapus</a></button>"
                        ?>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</body>

</html>
