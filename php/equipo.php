<?php
    class Equipo {
        public $nombre;
        public $nacionalidad;
        public $idEquipo;

        function __construct($nombre,$nacionalidad,$idEquipo) {
            $this->nombre = $nombre;
            $this->nacionalidad = $nacionalidad;
            $this->idEquipo = $idEquipo;

        }
        function get_name() {
            return $this->nombre;
        }
        function get_naciona() {
            return $this->nacionalidad;
        }
        function get_id() {
            return $this->idEquipo;
        }
    }
?>