<?php

require ('./smartyHeader.php');

$msg = "Hello World, Check out my Smarty!";
$title = "Welcome to my Smarty demo";

$smarty->assign('title',$title);
$smarty->assign('msg',$msg);

$smarty->display('test.tpl');

?>