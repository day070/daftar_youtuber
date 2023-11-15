<?php
include("../koneksi.php");

if (isset($_POST["update"])) {
    $nama = $_POST["nama"];
    $nama = $_POST[""];
    $nama = $_POST[""];

}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($con, "SELECT * FROM profil WHERE id_youtuber=$id");
while ($row = mysqli_fetch_array($result)) {
    $nama = $row["Nama"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
            </tr>
        </table>
    </form>
</body>

</html>