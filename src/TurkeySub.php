<?php 

namespace App;

class TurkeySub extends Sub {

    public function addPrimaryStuff () {
        var_dump("laying down the Turkey");
        return $this;
    }
}