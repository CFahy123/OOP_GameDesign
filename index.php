<?php 

ini_set('display_errors', 1);
error_reporting(E_ALL);

include 'Session.php';
include 'Abstract_Character.php';
include 'Game.php';
include 'Player.php';
include 'Bot.php';

$session = new Session();

$game = new Game();
$game->create("player","ted");
$game->player['ted']->setHP(500);
$game->player['ted']->setDMG(45);
$game->player['ted']->show();

$session->register('ted',$game->player['ted']);

$game->create('bot','boss');
$game->bot['boss']->setHP(1000);
$game->bot['boss']->setDMG(200);
$game->bot['boss']->show();

$game->player['ted']->battle($game->bot['boss']);
$game->player['ted']->battle($game->bot['boss']);

$ted = $session->get('ted');
$session->show();

print_r($ted);




?>