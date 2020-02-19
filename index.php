<?php

session_start();
require('model/hikes_db.php');

$hikes = get_hikes();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hiking and Trails Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <ul>
        <li><a class="active" href="#home">Home</a></li>
        <li><a href="#news">Submit a Hike</a></li>
        


        <!-- These will only show if admin (need to add functionality)-->
        <li><a href="#contact">Approve Hikes</a></li>
        <li><a href="#contact">Dashboard</a></li>
        
        <li style="float:right">
        <?php if (isset($_SESSION['email'])): ?>
        <a href="logout.php"><?php echo $_SESSION['email']. "   - Logout " ?></a>
        <?php else: ?>
            <a href="login.php">Login</a>
        <?php endif ?>
    </ul>


    <h1>Hikes</h1>
       <table style="border: 1px solid black">
       <tr>
        <td>HikeID</td>
        <td>Hike Name</td>
        <td>Difficulty</td>
        <td>Location</td>
        <td>Paved Trail</td>
        <td>Waterfall</td>
        <td>Scenic Lookout</td>
        <td>Cave</td>
        <td>Lake</td>
        <td>River</td>
       </tr>
       <?php foreach ($hikes as $hike) :?>
         <tr>
           <td><?=$hike[0]?></td>
           <td><?=$hike[1]?></td>
           <td><?=$hike[2]?></td>
           <td><?=$hike[3]?></td>
           <td><?=$hike[4]?></td>
           <td><?=$hike[5]?></td>
           <td><?=$hike[6]?></td>
           <td><?=$hike[7]?></td>
           <td><?=$hike[8]?></td>
           <td><?=$hike[9]?></td>
         </tr>
       <?php endforeach; ?>
       </table>
       <?php //var_dump($books); ?>
   </section>
</body>
</html>