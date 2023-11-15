<?php
require("../koneksi.php");
$data = mysqli_query($con, "SELECT * FROM profil");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <table border="1" style="width:100%; height:50vh;">
        <tr>
            <th>id</th>
            <th>Nama</th>
            <th>Negara</th>
            <th>Kontent</th>
            <th>Deskripsi</th>
            <th>Subriber</th>
            <th>Chanel</th>
            <th>Kasus</th>
            <th>Aksi</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td>
                    <?php echo $row["id_youtuber"] ?>
                </td>
                <td>
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
                    <?php echo $row["Nm_chanel"] ?>
                </td>
                <td>
                    <?php echo $row["kasus"] ?>
                </td>
                <td>
                    <?php
                    echo "<a href='edit.php?id=$row[id_youtuber]'>Edit</a>"
                        ?>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>

</html>