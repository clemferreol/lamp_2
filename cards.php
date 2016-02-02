<?php

require_once("Card/ClassCard.php");
require_once("Deck/ClassDeck.php");
require_once("Player/ClassPlayer.php");
require_once("Bank/ClassBank.php");

session_start();

if(empty($_SESSION['game_state'])){
    $_SESSION['game_state'] = new GameState();
  }

//SCENARIO 1

$_SESSION['game_state']->deck = new Deck();
$_SESSION['game_state']->deck->shuffle();
$_SESSION['game_state']->bank = new Bank();

$bank->take($deck->deal(2));//tire 2 cartes du deck, la banque les prend

while($_SESSION['game_state']->bank->getHandValue()<17){
    $_SESSION['game_state']->bank->take($deck->deal(1));
}

if($_SESSION['game_state']->bank->getHandValue()>21){
    echo"La bangue perd";
}else{
    echo "La banque a ".$_SESSION['game_state']->bank->getHandValue();
}


?>