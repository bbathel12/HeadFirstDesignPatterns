<?php

namespace HeadFirst;

abstract Class Duck{

    private $flyBehavior;
    private $quackBehavior;

    public function __construct(){
    
    }

    abstract public function display();

    public function performQuack(){
        $this->quackBehavior->quack();
    }

    public function performFly(){
        $this->flyBehavior->fly();
    }

    public function swim(){
        echo "All ducks float, even decoys!";
    }
}
