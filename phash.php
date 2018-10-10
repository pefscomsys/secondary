<?php
define('SALT_LENGTH', 9); // salt for password

$str = '01234567890';

echo substr($str, 0, 9);

$pwd = $_POST['pwd'];

// Password and salt generation
function PwdHash($pwd, $salt = '8929eeab')
{
    if ($salt === null)     {
        $salt = substr(md5(uniqid(rand(), true)), 0, SALT_LENGTH);
    }
    else     {
        $salt = substr($salt, 0, SALT_LENGTH);
    }
	
	echo '<br>salt is :' . $salt . '<br>';
    return $salt . sha1($pwd . $salt);
}

echo PwdHash($pwd);

?>

<form action="" method="POST">
	<input type="text" name="pwd">
	
	<input type="submit" name="submit">
</form>