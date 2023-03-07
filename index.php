<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vietnam's Festival</title>
</head>
<body>
    <div class="modify">
        <ul>
            <li><img src="assets/images/logo.jpg" width= 150px; height= 150px></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </div>
    <div class="search">
    <h2>Vietnam's festival</h2>
    <form action="index.php" method="post">
        <table>
            <tr>
                <th>Location</th>
                <th>Duration</th>
            </tr>
            <tr>
                <td>
                    <select name="location">
                        <option id="north" value="north">North Vietnam</option>
                        <option id="central" value="central">Central Vietnam</option>
                        <option id="south" value="south">South Vietnam</option>
                    </select>
                </td>
                <td>
                    <select name="time">
                        <option id="spring" value="spring">Spring</option>
                        <option id="summer" value="summer">Summer</option>
                        <option id="autumn" value="autumn">Autumn</option>
                        <option id="winter" value="winter">Winter</option>
                    </select>
                </td> 
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Search"></td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>
<?php
    require_once 'db_config.php';
    if(isset($_REQUEST['location']) && isset($_REQUEST['time'])) {
        $location = $_REQUEST['location'];
        $time = $_REQUEST['time'];

        $select = "SELECT about FROM event where '$location' = location and '$time' = time";
        $about = mysqli_query($conn, $select);
        while ($row = mysqli_fetch_assoc($about)) {
        echo $row['about'].'<br>';
        }
    }
    
?>