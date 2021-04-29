<?php
include_once("header.php");
?>

<body>
    <form action="<?php echo FRONT_ROOT ?>Tecnico/verifyLogin" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <button type="submit">Login</button>
    </form>
    <?php if(isset($mensajeDeError))
    {
        echo $mensajeDeError;
    }?>
</body>

</html>