<link rel="stylesheet" href="C:\xampp\htdocs\hiking-and-trails\styles.css">

<ul>
        <li><a class="active" href="#home">Home</a></li>
        <li><a href="#">Submit a Hike</a></li>
        


        <!-- These will only show if admin (need to add functionality)-->
        <li><a href="#">Approve Hikes</a></li>
        <li><a href="#">Dashboard</a></li>
        
        <li style="float:right">
        <?php if (isset($_SESSION['email'])): ?>
        <a href="logout.php"><?php echo $_SESSION['email']. "   - Logout " ?></a>
        <?php else: ?>
            <a href="login.php">Login</a>
        <?php endif ?>
</ul>