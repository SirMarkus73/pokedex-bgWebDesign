<?php require_once("../services/imports.php") ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php require("../components/header.php") ?>
    <div class="form-control" class="row-span-7">

        <p>Light Mode <input type="checkbox" class="toggle dark:[--tglbg:fuchsia] dark:bg-neutral-200 dark:hover:bg-fuchsia-600 dark:border-neutral-800" style="color: white" id="toggle-dark-mode" checked />
        Dark Mode</p>

    </div>

    <div>
    
    <p>Cambiar foto de perfil
    <input type="file" class="file-input file-input-bordered w-full max-w-xs" />
    </p> 

    </div>

    <div>

    <p>Cambiar contraseña

    <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nueva_contrasena = $_POST['nueva_contrasena'];
    $usuario_id = $_SESSION['usuario_id']; 
  
    $sql = "UPDATE user SET 'password' = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", password_hash($nueva_contrasena, PASSWORD_DEFAULT), $usuario_id);

    if ($stmt->execute()) {
        echo "Contraseña actualizada con éxito.";
    } else {
        echo "Error al actualizar la contraseña.";
    }
}
?>
    <input type="password" id="nueva_contrasena" name="nueva_contrasena" required>
    <button type="submit" class="btn btn-outline btn-error dark:btn-secondary">Cambiar contraseña </button>

    </p>
    </div>


    </form>
</body>

</html>

<script src="../services/darkMode.js"></script>