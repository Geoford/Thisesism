<?php 
include_once "connection.php";
$result = mysqli_query($conn, "SELECT * from user_table");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Table</title>
    <link rel="stylesheet" href="style\userTable.css" />
</head>
<body>
    <?php
          if (mysqli_num_rows($result) > 0) {
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Phone</th>
            <th>Modify</th>
        </tr>
        
            <?php
            $i=0;   
            while ($row = mysqli_fetch_array($result)) {
            ?>
        
        <tr>
            <td> <?php echo $row['id']; ?> </td>
            <td> <?php echo $row["username"]; ?> </td>
            <td><?php echo $row["phone"]; ?>  </td>
            <td><a href='update.php?id=<?php echo $row['id']; ?> '>Update</a> 
            <a href='delete.php?id=<?php echo $row['id']; ?> '>Delete</a></td>
        </tr>
            <?php
            $i++;
                }
            ?>
    </table>
    <?php
    } else {
        echo 'No result found';
    }
    ?>    
</body>
</html>