<?php

class Mymodel extends CI_Model
{
    public function firstName(){
    $lastName = $this ->lastName();
        return "Jhay ". $lastName;
    }

    private function lastName()
    {
        return "Crue";
    }
}
