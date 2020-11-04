<?php

include ("config.php");

if (isset($_POST['Update'])){
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];

    $result = mysqli_query($config, "UPDATE data SET nama='$nama', gender='$gender' WHERE npm=$npm");
    header("Location: index.php");
}
?>

<?php

$npm=$_GET['id'];
$result=mysqli_query($config, "SELECT * FROM data WHERE npm=$npm");

while($data=mysqli_fetch_array($result)){
    $npm = $data['npm'];
    $nama = $data['nama'];
    $gender = $data['gender'];
}
?>

<html>
    <head>
        <title>Update</title>
    </head>
    <body>
        <a href="index.php">Back to Home</a>
        <form action="update.php" method="post" name='update'>
            <table>
                <tr>
                    <td>NPM</td>
                    <td><input type="text" name="npm" value=<?php echo $npm;?>></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><input type="text" name="gender" value=<?php echo $gender;?>></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Update" value="Update"></td>
                </tr>
            </table>
        </form>
    </body>
</html>