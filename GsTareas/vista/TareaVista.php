<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Tareas</title>
    <link rel="stylesheet" href="../recursos/estilo.css">
</head>
<body>
    <h1>Lista de Tareas</h1>
    <ul>
        <?php foreach ($tareas as $tarea): ?>
            <li>
                <strong><?php echo $tarea->titulo; ?></strong> - 
                <span class="<?php echo strtolower($tarea->estado); ?>">
                    <?php echo $tarea->estado; ?>
                </span>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>