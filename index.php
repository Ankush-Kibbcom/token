<?php
//Start the session
session_start();
//Require the class
require('formkey.class.php');
//Start the class
$formKey = new formKey();
 
$error = 'No error';
 
//Is request?
if($_SERVER['REQUEST_METHOD'] == 'post')
{
    //Validate the form key
    if(!isset($_POST['form_key']) || !$formKey->validate())
    {
        //Form key is invalid, show an error
        $error = 'Form key error!';
    }
    else
    {
        //Do the rest of your validation here
        $error = 'No form key error!';
    }
}
?>
     
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <title>Securing forms with form keys</title>
</head>
<body>
    <div><?php if($error) { echo($error); } ?>
    <form action="" method="post">
    <dl>
        <?php $formKey->outputKey(); ?>
 
        <dt><label for="username">Username:</label></dt>
        <dd><input type="text" name="username" id="username" /></dd>
        <dt><label for="username">Password:</label></dt>
        <dd><input type="password" name="password" id="password" /></dd>
        <dt></dt>
        <dd><input type="submit" value="Submit" /></dd>
    <dl>
    </form>
</body>
</html>