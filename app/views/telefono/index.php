<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar teléfono</title>
    <link rel="stylesheet" href="/telefono5-a/public/css/style.css">
</head>
<body>

<div class="container">
    <h1>Listar  teléfonos</h1>
    <a href="/facebook5-a/app/views/telefono/create.php"><button>Agregar</button></a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($telefonos) && is_array($telefonos)): ?>
                <?php foreach ($telefonos as $telefono): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($telefono['idtelefono']); ?></td>
                        <td><?php echo htmlspecialchars($telefono['numero']); ?></td>
                        <td><?php echo htmlspecialchars($telefono['idpersona']); ?></td>
                        <td>
    <a href="/facebook5-a/public/telefono/edit?idsexo=<?php echo htmlspecialchars($sexo['idtelefono']); ?>">
        <button>Editar</button>
    </a>
    <a href="/facebook5-a/public/telefono/eliminar?idsexo=<?php echo htmlspecialchars($sexo['idtelefono']); ?>" 
       onclick="return confirm('¿Estás seguro de eliminar este telefono?');">
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
