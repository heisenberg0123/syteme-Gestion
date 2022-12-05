<!DOCTYPE html>
<html><head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<body><style>
    .logo{
    transform:translate(-740px,-420px);
}
.logoo{
    transform:translate(440px,-350px);
}
form{
    transform:translate(-170px,-35px);
}
</style>
<img src="sof.jpg" style="width:367px;height:120px;float:left" class="logoo"></a>
<img src="sofima.png" style="width:200px;height:120px;float:left" class="logo"></a>
    <form action="login.php"  method="post">
        <h2>LOGIN</h2>
        <?php if(isset($_GET['error'])) {?>
<p class="error"><?php echo $_GET['error'] ; ?></p>
       <?php }?>
        <label>User Name</label>
        <input type="text" name="uname" placeholder="User Name"><br>

        <label>Password</label>
        <input type="password" name="password" placeholder="password"><br>

      <button  type="submit">Login</button>
    </form>
</body>
</html>