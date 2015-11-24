<?php
include_once("./lib/class.TemplatePower.inc.php");

$tpl = new TemplatePower("./template.tpl");
$tpl->prepare();

$choice = null;
$rnd = null;

if (!empty($_POST['rock'])) {
    $choice = "rock";
    $tpl->newBlock("rock");
    $tpl->assign("name", "Rock");
} elseif (!empty($_POST['paper'])) {
    $choice = "paper";
    $tpl->newBlock("paper");
    $tpl->assign("name", "Paper");
} elseif
(!empty($_POST['scissor'])) {
    $choice = "scissor";
    $tpl->newBlock("scissor");
    $tpl->assign("name", "Scissor");
} else {
    $tpl->newBlock("noPost");
    $tpl->assign("name", "No Post");
}


if (!empty($_POST)) {
    $rnd = rand(1, 3);
    echo $rnd;
    if ($rnd == 1) {
        echo "$choice > Rock <br />";
        if ($choice == "rock") {
            echo "rock vs. rock. Draw.";
        } elseif ($choice == "paper") {
            echo "paper beats rock. Win.";
        } elseif ($choice == "scissor") {
            echo "rock crushes scissor. Lose.";
        }
    }
    if ($rnd == 2) {
        echo "$choice > Paper  <br />";
        if ($choice == "rock") {
            echo "paper wraps around rock. lose.";
        } elseif ($choice == "paper") {
            echo "paper vs. paper. Draw.";
        } elseif ($choice == "scissor") {
            echo "scissor cuts paper. Win.";
        }
    }
    if ($rnd == 3) {
        echo "$choice > scissor <br />";
        if ($choice == "rock") {
            echo "rock crushes scissor. Win.";
        } elseif ($choice == "paper") {
            echo "scissor cuts paper. Lose.";
        } elseif ($choice == "scissor") {
            echo "scissor vs. scissor. Draw.";
        }
    }
}

$tpl->newBlock("options");

$tpl->printToScreen();