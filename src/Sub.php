<?php

namespace App;

abstract class Sub {

    public function make()
    {
        return $this
            ->layBread()
            ->addLuttece()
            ->addPrimaryStuff()
            ->addSauces();
    }

    protected function layBread()
    {
        var_dump("laying down the bread");
        return $this;
    }

    protected function addLuttece()
    {
        var_dump("laying down the luttece");
        return $this;
    }

    protected function addSauces()
    {
        var_dump("laying down the sauces");
        return $this;
    }

    abstract public function addPrimaryStuff ();

}