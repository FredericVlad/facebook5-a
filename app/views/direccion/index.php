<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar direcciones</title>
    <link rel="stylesheet" href="/facebook5-a/public/css/style.css">
</head>
<body>

<div class="container">
    <h1>Listar  direcciones</h1>
    <a href="/facebook5-a/app/views/direccion/create.php"><button>Agregar</button></a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($sexos) && is_array($sexos)): ?>
                <?php foreach ($sexos as $sexo): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($sexo['idsexo']); ?></td>
                        <td><?php echo htmlspecialchars($sexo['nombre']); ?></td>
                        <td>
    <a href="/facebook5-a/public/direccion/edit?iddireccion=<?php echo htmlspecialchars($direccion['iddireccion']); ?>">
        <button>Editar</button>
    </a>
    <a href="/facebook5-a/public/direccion/eliminar?iddireccion=<?php echo htmlspecialchars($sexo['iddireccion']); ?>" 
       onclick="return confirm('¿Estás seguro de eliminar este registro?');">
        <button>Eliminar</button>
    </a>
</td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">No hay registros disponibles.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<script src="/facebook5-a/public/js/script.js"></script>
</body>
</html>
