<?php
//Classe: Característiques dels objectes. Funció màgica de PHP.
/*
 * POPO: Plain Old PHP Object | Contenedor de tasques | Model
 * Emmagatzema una tasca.
 */

//namespace afegit

namespace Manelgavalda\myframework\core\Models;

class Task {

    public $description;

    //Encapsular no deixa accedir a completed i obliga a fer servir
    // la funció per no cagar-la.
    protected $completed;

    public function __construct($description, $completed) {
        //This per cridar pròpia classe i accedir a les funcions,
        // propietats,etc.. dels objectes.
        $this->description = $description;
        $this->completed = $completed;
    }

    public function complete() {

        $this->completed = true;
    }

    public function setDescription(){
        $this->description = $description;
    }

    public function getCompleted() {
        return $this->completed;
    }

    public function description($description) {
        $this->description = $description;
    }

    //public function completed(){
//        return $this->completed;
//    }

    public function completed($completed=null) {
        if ($completed == null) {
            return $completed;
        }
        $this->completed = $completed;
    }
}
