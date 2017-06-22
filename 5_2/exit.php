<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 09.06.17
 * Time: 22:53
 */
session_destroy();
setcookie(session_name(),'',-1,'/');
unset($_POST);
unset($_SESSION);

/*echo session_status();*/
header('Location: http://clvrdgtl.com/l/PHP/5_2/index.php');