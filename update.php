<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <form action="update.php" method="post">
        <h2>Update</h2>
        <table>
            <tr>
                <td>Event ID needed to update: </td>
                <td><input type="number" name="id"></td>
            </tr>
            <tr>
                <td>New Festival name: </td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>New Festival location: </td>
                <td><select name="location">
                    <option value="north">North Vietnam</option>
                    <option value="central">Central Vietnam</option>
                    <option value="south">South Vietnam</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>New Festival time: </td>
                <td><select name="time">
                    <option value="spring">Spring</option>
                    <option value="summer">Summer</option>
                    <option value="autumn">Autumn</option>
                    <option value="winter">Winter</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>Edited information: </td>
                <td><input type="text" name="about"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
    require_once 'db_config.php';
    if(isset($_REQUEST['id']) && isset($_REQUEST['name']) && isset($_REQUEST['location']) 
    && isset($_REQUEST['time']) && isset($_REQUEST['about'])) {

        $id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
        $location = $_REQUEST['location'];
        $time = $_REQUEST['time'];
        $about = $_REQUEST['about'];

        $u = "UPDATE event SET name = '$name', location = '$location', time = '$time', about = '$about' WHERE id = '$id'";
        mysqli_query($conn, $u);
        header("Location: admin.php");
    }
?>