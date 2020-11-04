<?php

include ("config.php");

$result = mysqli_query($config, "SELECT * FROM data ORDER BY npm ASC");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>crud</title>
    </head>
    <body>
        <a href="add.php">New User</a><br>
        <table width='80%' border=1>
            <tr>
                <th>NPM</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>
            <?php while($data = mysqli_fetch_array($result)): ?>
            <tr>
                <td><?php echo $data['npm']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['gender']; ?></td>
                <td>
                    <a href="update.php?id=<?php echo $data['npm']?>"> Update</a>
                    | 
                    <a href="delete.php?id=<?php echo $data['npm']?>"> Delete</a>
                </td>
            </tr>
            <?php endwhile ?>
        </table>
    </body>
</html>