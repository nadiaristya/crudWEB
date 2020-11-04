<?php

include ("config.php");

if (isset($_POST['Submit'])){
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];

    $result = mysqli_query($config, "INSERT INTO data (npm, nama, gender) VALUES ('$npm', '$nama', '$gender')");
    echo "User added successfully. <a href='index.php'>View Users</a>";
}
?>

<html>
    <head>
        <title>Add</title>
    </head>
    <body>
        <a href="index.php">Back to Home</a><br>
        
        <form action="add.php" method="post" name='form1'>
            <table>
                <tr>
                    <td>NPM</td>
                    <td><input type="text" name="npm"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><input type="text" name="gender"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit" value="Add"></td>
                </tr>
            </table>
        </form>
    </body>
</html>