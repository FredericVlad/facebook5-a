<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elininar teléfono</title>
</head>
<body>

<h1>Eliminar teléfono</h1>
<form action="/facebook5-a/public/telefono/delete" method="POST">
    <input type="hidden" name="idtelefono" value="<?php echo htmlspecialchars($telefono['idtelefono']); ?>">

    <label for="numero">Número:</label>
    <input type="text" name="numero" id="numero" value="<?php echo htmlspecialchars($telefono['numero']); ?>" readonly>

    <label for="idpersona">ID Persona:</label>
    <input type="text" name="idpersona" id="idpersona" value="<?php echo htmlspecialchars($telefono['idpersona']); ?>" readonly>
    
    <input type="submit" value="Eliminar">
</form>

<a href="index">Volver al listado</a>

</body>
</html>
