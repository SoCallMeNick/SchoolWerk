<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['score1']) || !isset($_SESSION['score2'])) {
    $_SESSION['score1'] = 0;
    $_SESSION['score2'] = 0;
}

include_once("./lib/class.TemplatePower.inc.php");

$tpl = new TemplatePower("./template.tpl");
$tpl->prepare();

$choice = null;
$rnd = null;

if (!empty($_POST['rock'])) {
    $choice = "rock";
    $tpl->newBlock("rock");
} elseif (!empty($_POST['paper'])) {
    $choice = "paper";
    $tpl->newBlock("paper");
} elseif (!empty($_POST['scissor'])) {
    $choice = "scissor";
    $tpl->newBlock("scissor");
} else {
    $tpl->newBlock("noPost");
    $tpl->assign("result", "welcome! <br />");
}


if (!empty($_POST)) {
    $win = null;
    $rnd = rand(1, 3);
    if ($rnd == 1) {
        $tpl->assign("choice", "$choice > Rock <br />");
        if ($choice == "rock") {
            $tpl->assign("result", " rock vs. rock. Draw. ");
        } elseif ($choice == "paper") {
            $tpl->assign("result", " paper beats rock. Win. ");
            $win = "true";
        } elseif ($choice == "scissor") {
            $tpl->assign("result", " rock crushes scissor. Lose. ");
            $win = "false";
        }
    }
    if ($rnd == 2) {
        $tpl->assign("choice", "$choice > Paper  <br />");
        if ($choice == "rock") {
            $tpl->assign("result", " paper wraps around rock. lose. ");
            $win = "false";
        } elseif ($choice == "paper") {
            $tpl->assign("result", " paper vs. paper. Draw. ");
        } elseif ($choice == "scissor") {
            $tpl->assign("result", " scissor cuts paper. Win. ");
            $win = "true";
        }
    }
    if ($rnd == 3) {
        $tpl->assign("choice", "$choice > scissor <br />");
        if ($choice == "rock") {
            $tpl->assign("result", " rock crushes scissor. Win. ");
            $win = "true";
        } elseif ($choice == "paper") {
            $tpl->assign("result", " scissor cuts paper. Lose. ");
            $win = "false";
        } elseif ($choice == "scissor") {
            $tpl->assign("result", " scissor vs. scissor. Draw. ");
        }
    }

    if ($win == "true") {
        $_SESSION['score1']++;
    } elseif ($win == "false") {
        $_SESSION['score2']++;
    }
    else {

    }



}

$tpl->assign("score", "ME: " . $_SESSION['score1'] . " / YOU: " . $_SESSION['score2'] . "<br /><br />");


$tpl->newBlock("options");

$tpl->printToScreen();