<?php
include_once( "./lib/class.TemplatePower.inc.php" );


$tpl = new TemplatePower( "./template.tpl" );
$tpl->prepare();


if (empty($_POST)) {
    $tpl->newBlock( "default" );
    $tpl->assign( "name", "if" );
}
else {
    $tpl->newBlock( "post" );
    $tpl->assign( "name", "else" );
}
$tpl->gotoBlock('_ROOT');

$tpl->printToScreen();