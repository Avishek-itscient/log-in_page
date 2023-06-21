<?php
session_start();
if (isset($_SESSION['uname'])) {
    $uname = $_SESSION['uname'];
 

?>
<html>
    <head><link rel="stylesheet" href="style.css"></head>
    <body>
    <form action ="formhandler.php" method ="post">
        <<h2 class="uname" >Hello <?php echo $uname;?>!</h2>

        <h2 >You have been Logged in</h2>
        <br>
        <button class="btn" a href="index.php"></a>Log Out</button>
        </form>
    
    </body>
</html>
<?php
} else {
}
?>


