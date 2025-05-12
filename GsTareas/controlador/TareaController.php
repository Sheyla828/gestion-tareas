<?php
include_once 'modelo/Tarea.php';
class TareaController {
    public function mostrar() {
        $tarea = new Tarea();
        include 'vista/tareaVista.php';
    }
}