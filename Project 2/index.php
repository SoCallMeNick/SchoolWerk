<?php
session_start();
include_once("./lib/class.TemplatePower.inc.php");

$tpl = new TemplatePower("./template.tpl");
$tpl->prepare();

$choice = null;
$rnd = null;
$score1 = 0;
$score2 = 0;

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
            $win = 1;
        } elseif ($choice == "scissor") {
            $tpl->assign("result", " rock crushes scissor. Lose. ");
        }
    }
    if ($rnd == 2) {
        $tpl->assign("choice", "$choice > Paper  <br />");
        if ($choice == "rock") {
            $tpl->assign("result", " paper wraps around rock. lose. ");
        } elseif ($choice == "paper") {
            $tpl->assign("result", " paper vs. paper. Draw. ");
        } elseif ($choice == "scissor") {
            $tpl->assign("result", " scissor cuts paper. Win. ");
            $win = 1;
        }
    }
    if ($rnd == 3) {
        $tpl->assign("choice", "$choice > scissor <br />");
        if ($choice == "rock") {
            $tpl->assign("result", " rock crushes scissor. Win. ");
            $win = 1;
        } elseif ($choice == "paper") {
            $tpl->assign("result", " scissor cuts paper. Lose. ");
        } elseif ($choice == "scissor") {
            $tpl->assign("result", " scissor vs. scissor. Draw. ");
        }
    }
    if ($win == 1) {
        $_SESSION['score1'] += 1;
    }
    else {
        $_SESSION['score2'] += 1;
    }
}

$tpl->assign("score", "ME: $score1 / YOU: $score2 <br /><br />");

$tpl->newBlock("options");

$tpl->printToScreen();