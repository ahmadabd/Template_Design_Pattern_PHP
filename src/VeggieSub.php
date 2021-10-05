<?php

namespace App;

class VeggieSub extends Sub {

    public function addPrimaryStuff () {
        var_dump("laying down the veggies");
        return $this;
    }
}