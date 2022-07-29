<?php
        class equipoResultados {
        public $nombre;
        public $partidos;
        public $ganes;
        public $empates;
        public $perdidas;
        public $goles_f;
        public $goles_c;
        public $puntos;

        function __construct($nombre, $partidos, $ganes, $empates, $perdidas, $goles_f, $goles_c, $puntos) {
            $this->nombre = $nombre;
            $this->partidos = $partidos;
            $this->ganes = $ganes;
            $this->empates = $empates;
            $this->perdidas = $perdidas;
            $this->goles_f = $goles_f;
            $this->goles_c = $goles_c;
            $this->puntos = $puntos;
        }
        function get_nombre() {
            return $this->nombre;
        }
        function get_partidos() {
            return $this->partidos;
        }
        function get_ganes() {
            return $this->ganes;
        }
        function get_empates() {
            return $this->empates;
        }
        function get_perdidas() {
            return $this->perdidas;
        }
        function get_goles_f() {
            return $this->goles_f;
        }
        function get_goles_c() {
            return $this->goles_c;
        }
        function get_puntos() {
            return $this->puntos;
        }
    }
    
?>