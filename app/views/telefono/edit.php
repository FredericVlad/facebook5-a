<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar teléfono</title>
</head>
<body>

<h1>Editar teléfono</h1>
<form action="/facebook5-a/public/telefono/update" method="POST">
    <input type="hidden" name="idtelefono" value="<?php echo htmlspecialchars($telefono['idtelefono']); ?>">

    <label for="numero">Número:</label>
    <input type="text" name="numero" id="numero" value="<?php echo htmlspecialchars($telefono['numero']); ?>" required>

    <label for="idpersona">ID Persona:</label>
    <input type="text" name="idpersona" id="idpersona" value="<?php echo htmlspecialchars($telefono['idpersona']); ?>" required>
    
    <input type="submit" value="Actualizar">
</form>

<a href="index">Volver al listado</a>

</body>
</html>
