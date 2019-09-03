<?php 

class Player extends Abstract_Character {

    public function __construct(Game $g, $name) {
        $this->_name = $name;
        echo "Player {$this->_name} was created <br />";
    }
}

?>