<?php
// Verificar si se ha enviado un formulario de registro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validar que los campos no estén vacíos (puedes agregar más validaciones)
    if (empty($username) || empty($password)) {
        echo "Por favor, complete todos los campos.";
    } else {
        // Conexión a la base de datos (debes configurarla según tu entorno)
        $servername = "tu_servidor";
        $dbusername = "tu_usuario";
        $dbpassword = "tu_contraseña";
        $dbname = "tu_base_de_datos";

        // Crear la conexión
        $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Error en la conexión: " . $conn->connect_error);
        }

        // Insertar los datos del usuario en la base de datos (aquí asumimos una tabla llamada 'usuarios')
        $sql = "INSERT INTO usuarios (username, password) VALUES ('$username', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "Registro exitoso. Ahora puedes iniciar sesión.";
        } else {
            echo "Error al registrar el usuario: " . $conn->error;
        }

        // Cerrar la conexión
        $conn->close();
    }
} else {
    // Si no se envió un formulario de registro, redirigir a la página de registro
    header("Location: registro.html");
    exit();
}
?>
