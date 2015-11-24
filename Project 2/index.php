<?php
include_once( "./lib/class.TemplatePower.inc.php" );

$error = "Multiple errors, please fill in: ";

$tpl = new TemplatePower( "./template.tpl" );
$tpl->prepare();


if (isset($_POST['name'])) {
    $name = $_POST['name'];
}
else {
    $error = $error . " name ";
}

if (isset($_POST['surname'])) {
    $surname = $_POST['surname'];
}
else {
    $error = $error . " surname ";
}

if (isset($_POST['password'])) {
    $password = $_POST['password'];
}
else {
    $error = $error . " password ";
}

if (isset($_POST['email'])) {
    $email = $_POST['email'];
}
else {
    $error = $error . " email ";
}

if (isset($_POST['birthday'])) {
    $birthday = $_POST['birthday'];
}
else {
    $error = $error . " birthday ";
}

if (isset($_POST['gender'])) {
    $gender = $_POST['gender'];
}
else {
    $error = $error . " gender ";
}

if (isset($_POST['message'])) {
    $message = $_POST['message'];
}
else {
    $error = $error . " message ";
}

if (isset($_POST['news'])) {
    $news = $_POST['news'];
}
else {
    $news = "off";
}

if (isset($_POST['terms'])) {
    $terms = $_POST['terms'];
}
else {
    $terms = "off";
}
if (empty($_POST)) {
    $tpl->newBlock( "form" );
}
else {
    $tpl->newBlock( "result" );
    $tpl->assign( "name", $name );
    $tpl->assign( "surname", $surname );
    $tpl->assign( "password", $password );
    $tpl->assign( "email", $email );
    $tpl->assign( "birthday", $birthday );
    $tpl->assign( "gender", $gender );
    $tpl->assign( "message", $message );
    $tpl->assign( "news", $news );
    $tpl->assign( "terms", $terms );
}
$tpl->gotoBlock('_ROOT');

$tpl->printToScreen();