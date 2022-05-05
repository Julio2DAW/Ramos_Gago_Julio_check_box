<?php
    
    /**
     * @file controlador.php
     * Archivo del controlador.
     * @author Julio Antonio Ramos Gago (jramosgago.guadalupe@alumnado.fundacionloyola.net)
     * @license GPLv3 2021.
     */
    class Controlador{

        public $modelo;

        /**
         * @function __construct()
         */
        function __construct(){
            /*Llamo a la clase Modelo del archivo modelo.php*/
            require_once 'modelo.php';
            $this->modelo = new Modelo();
        }

        /**
         * @function mostrarMinijuegos()
         * Función para mostrar los minijuegos.
         */
        function mostrarMinijuegos(){

            /*Llamo a la función listar_minijuegos de la clase modelo para ejecutar la consulta y retorno el resultado a listar.php*/
            return $this->modelo->listarMinijuegos();
        }

        /**
         * @function minijuegosSelect()
         * Función para mostrar el minijuego seleccionado
         * Le paso por parámetro el id ($id)
         */
        function minijuegosSelect($id){

            return $this->modelo->consultarMinijuego($id);
        }

    }