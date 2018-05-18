<?php

namespace DuckSimulator;

abstract Class Duck{

    protected $flyBehavior;
    protected $quackBehavior;


    abstract public function display();

    public function performQuack(){
        $this->quackBehavior->quack();
    }

    public function performFly(){
        $this->flyBehavior->fly();
    }

    public function swim(){
        echo "All ducks float, even decoys!\n";
    }


    public function setFlyBehavior(FlyBehavior $fb){
        $this->flyBehavior = $fb;
    }

    public function setQuackBehavior(QuackBehavior $qb){
        $this->quackBehavior = $qb;
    }
}
