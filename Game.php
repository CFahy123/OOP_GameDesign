<?php

class Game{

    // public $player = [];
    // public $bot = [];

    public function __construct() {
        echo "Game has started..<br/>";
    }

    public function create($type, $name){
        $type = strtolower($type);
        $name = strtolower($name);
        switch ($type)
        {
            case 'player':
                $this->player[$name] = new Player($this,$name);
                break;
            case 'bot':
                $this->bot[$name] = new Bot($this,$name); 
                break;
            default:
                echo 'not a valid type </br>';        
        }
    }

   
}

?>