<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tablero
 *
 * @author Estudiantes
 */
class Tablero {
    
    var $fichas=array(
        array(0,0,0),
        array(0,0,0),
        array(0,0,0),
    );
    
    
    function inicializarFichas(){
        foreach ($this->fichas as $indice->$valor){
            $this->fichas[$indice]=0;
        }
    }
    
    
    function mostrarFicha(){
        foreach ($this->fichas as $indice->$valor){
            echo $valor;
        }
    }
  
    //put your code here
}
