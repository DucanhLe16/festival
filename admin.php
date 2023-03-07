<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <a href="update.php">Update</a>
    <?php
        require_once 'db_config.php';
        $select = "SELECT id, name, location, time FROM event";
        $r = mysqli_query($conn, $select);
        echo "<table>
        <tr>
            <th>ID</th>
            <th>Festival name</th>
            <th>Location</th>
            <th>Time</th>
            <th>Delete</th>
        </tr>";
        while ($row = mysqli_fetch_assoc($r)) {
            $id = $row['id'];
            $name = $row['name'];
            $location = $row['location'];
            $time = $row['time'];
            echo "
                <tr>
                    <td>$id</td>
                    <td>$name</td>
                    <td>$location</td>
                    <td>$time</td>
                    <td><a href='php: deleteEvent($id)'>Delete</a></td>
                </<tr>
            ";
        }
        echo "</table>";
        function deleteEvent($id) {
            $conn = mysqli_connect("localhost","root","","festival");
            $delete = "DELETE FROM event where id = '$id'";
            mysqli_query($conn, $delete);
        }            
    ?>
    <!-- <script>
        function confirmDelete(id){
            var confirm_delete = confirm("Are you sure you want to delete this event?");
            if (confirm_delete) {
               
                alert("An event has been deleted");
                location.reload();
            }
        }
    </script> -->
</body>
</html>
