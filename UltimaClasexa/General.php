<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of General
 *
 * @author Estudiantes
 */
class General {
    var $edad;
    var $nombre;
    var $genero;
    
    function getEdad(){
        return $this->edad;
    }
    function __construct() {
        $this->edad=19;
    }
    //put your code here
}
