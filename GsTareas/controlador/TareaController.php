<?php
require_once __DIR__ . '/../modelo/Tarea.php';

class TareaController {
    public function mostrarTareas() {
        $tareas = Tarea::obtenerTareas();
        include __DIR__ . '/../vista/TareaVista.php';
    }
}