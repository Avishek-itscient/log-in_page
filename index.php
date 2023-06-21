<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <form action ="formhandler.php" method ="post">
        <h2>LOGIN</h2>
        <?php if(isset($_GET['error'])) {?>
            <p class="error"><?php echo $_GET['error'];?></p>
            <?php }?>
        <label>User Name</label>
        <input type="text" name="uname" placeholder="User Name"><br>
        <label>Password</label>
        <input type="password" name="password" placeholder="password"><br>

        <button type="Submit">LOGIN</button>
        </form>
</body>
</body>
</html>


