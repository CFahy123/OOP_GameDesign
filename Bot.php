<?php 

class Bot extends Abstract_Character {

    public function __construct(Game $g, $name) {
        $this->_name = $name;
        echo "Bot {$this->_name} was created <br />";
    }

}

?>