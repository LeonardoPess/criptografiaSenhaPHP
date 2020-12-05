<?php

    $login = 'admin';
    $password = md5('admin');
    $password2 = sha1('admin');

    if(isset($_POST['acao'])){
        if($_POST['login'] == $login && md5($_POST['password']) == $password){
            echo '<h2>login successful!</h2>';
        }else{
            echo 'login failed!';
        }
    }

?>
<label>Login: admin</label>
<br>
<label>Password: admin</label>
<form method="post">
    <input type="text" name="login">
    <input type="password" name="password">
    <input type="submit" name="acao" value="Enviar!">
</form>

<hr>
    <label>Md5 Encrypted Password: </label>
    <?= $password ?>
<hr>
    <label>Sha1 Encrypted Password: </label>
    <?= $password2 ?>