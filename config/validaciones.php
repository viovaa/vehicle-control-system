<?php
    include './connection.php';
    #se guarda la función 'conectar()' dentro de una variable
    $connection = connect();


    #se comienza la conexión
    session_start();

    #se valida la sesion del grupo de desarrollo 
    include 'verificar.php';

    $_SESSION["intentos"]++;

    #se recupera información del formulario en '../public/src/iniciarsesion.php'
    $email = $_POST['email'];
    $password = $_POST['password'];


    #consultar si existe el usuario asociado con el correo
    $sql = 'SELECT  CONCAT(nombres, apellidos) AS nombre_completo, rut, password FROM funcionario WHERE email = "$email";';
    $query = mysqli_query($connection, $sql);

    //se consulta si existe el usuario  en la tabla, y los guarda en una variable
    if (mysqli_num_rows($query) > 0) {
        #si existe el usuario, se guarda en la variable '$funcionario'
        $funcionario = mysqli_fetch_assoc($query);
    
        if ($password ==$funcionario['password']){
            //Guardar datos del usuario dentro de una variable  de seción
            $_SESSION['email'] = $email; 
            $_SESSION['nombres'] = $funcionario['nombres'];  
            $_SESSION['apellidos'] = $funcionario['apellidos'];
            $sql = 'SELECT cargo_idcargo FROM asignacion;';
            $asignacion = mysqli_fetch_assoc($query);
            
            #se ingresa a la página correspondiente de cada usuario
            if($asignacion['cargo_idcargo'] == 1){ //administrador
                header('location: ../view/administrador/administrador-home-listarusuario.php');
            }
            elseif($asignacion['cargo_idcargo'] == 1){ //agenteAduanal
                header('location: ../view/agenteAduanal/adenteaduanal-home-listartramitesdevehiculodecarga.php');
            }
            elseif($asignacion['cargo_idcargo'] == 1){ //oficialAduanal
                header('location: ../view/oficialAduanal/oficialaduanal-home-listarvehiculodecarga.php');
            }
            elseif($asignacion['cargo_idcargo'] == 1){ //policiadeTrafico
                header('location: ../view/policiadeTrafico/policiadetrafico-home-listarvehiculoparticular.php');
            }

            

        }else{
            $_SESSION['email'] = $email;
            header('location: ../index.php');
        }
    }
    else{
        $mensaje = "No se encontro una cuenta asociada al correo '$email'.";
        echo "<script>alert('$mensaje'); window.location.href='../index.php';</script>";
        #header('location: ../index.php');
    }


    