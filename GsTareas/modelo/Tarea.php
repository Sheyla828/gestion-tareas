<?php
class Tarea {
    public $titulo;
    public $estado;

    public function __construct($titulo, $estado) {
        $this->titulo = $titulo;
        $this->estado = $estado;
    }

    public static function obtenerTareas() {
        return [
            new Tarea("Estudiar PHP", "Pendiente"),
            new Tarea("Hacer tarea de examen", "En progreso"),
            new Tarea("Subir proyecto a GitHub", "Completada")
        ];
    }
}