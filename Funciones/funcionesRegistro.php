<?php
function registrarse()
{
    if (isset($_POST['enviar_fichero'])) 
    {
        $nombre = $_POST['newUser'];
        $contraseña = $_POST['newPass'];

        // Verificar que los campos no estén vacíos
        if (empty($nombre) || empty($contraseña)) 
        {
            echo "Por favor, complete todos los campos.";
            return;
        }

        // Verificar si se ha subido un archivo
        if (empty($_FILES['fichero_usuario']['name'])) 
        {
            echo "No se ha seleccionado ninguna foto.";
            return;
        }

        $fichero = 'user.csv';
        $ficherologin = 'login.csv';
        $actual = file_get_contents($fichero);
        $arr = explode("\n", $actual);

        // Buscar la línea con el mismo nombre y actualizarla si existe
        foreach ($arr as $key => $v) 
        {
            $datos = explode(";", $v);
            if ($datos[0] == $nombre) {
                $arr[$key] = "$nombre;$contraseña";
            }
            $asoc[$datos[0]] = $datos[1];
        }

        // Si el nombre no existe en el archivo, agregarla al final
        if (!array_key_exists($nombre, $asoc)) 
        {
            $arr[] = "$nombre;$contraseña";
        }

        // Convertir el arreglo nuevamente a una cadena
        $actual = implode("\n", $arr);

        // Escribe el contenido actualizado al fichero
        file_put_contents($fichero, $actual);

        subirImg();

        // Limpia los campos del formulario después de procesarlos
        $_POST['newUser'] = "";
        $_POST['newPass'] = "";
    }
}

function subirImg()
{
    // Directorio de destino para cargar archivos
    $dir_subida = 'uploads/'; // Asegúrate de que esta ruta exista y tenga permisos de escritura

    // Ruta completa del archivo a subir
    $fichero_subido = $dir_subida . basename($_FILES['fichero_usuario']['name']);

    // Mover el archivo cargado al directorio de destino
    if (move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido)) 
    {
        echo "El archivo se ha cargado con éxito.\n";
        
        // Mostrar la imagen cargada con dimensiones más pequeñas y alineada a la derecha
        echo '<img src="' . $fichero_subido . '" alt="Imagen subida" style="max-width: 300px; max-height: 300px; float: right; margin-left: 10px;"> ';
    } else {
        echo "Error al cargar el archivo.\n";
    }
}

function  nuevo()
{
     // Si se hizo clic en "Nuevo", restablecer los valores de los campos y eliminar la imagen
     if (isset($_POST['nuevo_user'])) {
        $_POST['newUser'] = "";
        $_POST['newPass'] = "";
        if (file_exists('uploads/' . basename($_FILES['fichero_usuario']['name']))) 
        {
            unlink('uploads/' . basename($_FILES['fichero_usuario']['name']));
        }
    }
}

function descargaPDF($ruta)
{
    $file = 'contrato';
    $filename = basename($ruta);

    if(file_exists($ruta))
    {
        header('Content-type: application/pdf');
        header('Content-Disposition: attachment; filename ="' . $filename . '"');
        header('Content-Transfer-Encoding: binary');
        header('Accept-Ranges: bytes');

        readfile($file);
    }else{
        echo "No se encuentra el archivo";
    }

    
}

?>
