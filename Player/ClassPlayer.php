<?php
    

class Player{
    protected $hand;// sert à stocker les cartes que le joueur possède
    protected $pseudo;
    
    public function __construct($toto){
        $this->hand =[];
        $this->pseudo = $toto;
   }
    public function take($cards){//$cards = [Card, Card] tableau qui contient des éléments de type card
        //TODO : récupère les cartes passées en paramètre à utiliser
        //et les place dans $this->hand
        foreach ($cards as $card){
            $this->hand[] = $card;
        }
        
    }
   


    public function getHandValue(){
        $panier=0;
        foreach ($this->hand as $card){
            $panier += $card->getValue();
        }
        //compter et retourner la somme des valeurs de la main de la personne
        return $panier; 
    }
}