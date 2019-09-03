<?php 

abstract class Abstract_Character {
    protected $_name; 
    protected $_hp;
    protected $_dmg;


    public function setHP($int) {
        $this->_hp = (int) $int;
    }

    public function setDMG($int) {
        $this->_dmg = (int) $int;
    }

    public function getHP(){
        return $this->_hp;
    }

    public function getDMG(){
        return $this->_dmg;
    }


    public function battle($defender){

        // first get the defenders stats
        $defender = (object) $defender;
        $hp = $defender->getHP();

        // get the attackers damage
        $dmg = $this->getDMG();

        $defender->setHp($hp - $dmg);

        echo "Defender is at: {$defender->getHP()}";


    }
    
    public function show(){
        echo $this;
    }

    public function __toString() {
        return "Name: {$this->_name} | HP: {$this->_hp} | DMG: {$this->_dmg} <br />";
    }

    

    
}

?>