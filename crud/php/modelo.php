<?php

    /**
     * @file modelo.php
     * Archivo del modelo.
     * @author Julio Antonio Ramos Gago (jramosgago.guadalupe@alumnado.fundacionloyola.net)
     * @license GPLv3 2021.
     */
    class Modelo{

        public $conexion;

        function __construct(){

            require_once 'config_db.php';
            /*Conexión con la base de datos*/
            $this->conexion = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);
        }

        /**
         * @function listarMinijuegos
         * Función que realiza una consulta (select), para mostrar los datos de la tabla minijuegos.
         */
        function listarMinijuegos(){

            /*Consuta sql para obtener los datos*/
            $sql = "SELECT * FROM minijuego";

            
            /*Ejecuto la consulta y la retorno*/
            return $this->conexion->query($sql);
        }

        /**
         * @function consultarMinijuego()
         * Función que realiza una consulta (select), para sacar un minijuego en concreto
         * Le paso por párametro el id del minijuego ($id)
         */
        function consultarMinijuego($id){

            $sql = "SELECT * FROM minijuego WHERE id=$id";
            return $this->conexion->query($sql);
        }
    }