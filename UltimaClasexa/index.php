<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /*
        include_once 'General.php';
        
        $miGeneral= new General();
        
        //General miGeneral= new General();
        echo $miTablero->mostrarFicha();
        echo $miTablero->inicializarFichas();
        
        // put your code here
         * 
         */
        include_once 'Tablero.php';
        $miTablero=new Tablero();
        echo $miTablero->mostrarFicha();
        ?>
        <style>
            input{
                height:80px;
                width:80px;
            }
        </style>
        <form>
            <input type="button" name="0">
            <input type="button" name="1">
            <input type="button" name="3">
            <br>
            <input type="button" name="4">
            <input type="button" name="5">
            <input type="button" name="6">
            <br>
            <input type="button" name="7">
            <input type="button" name="8">
            <input type="button" name="9">
        </form>
    </body>
</html>
