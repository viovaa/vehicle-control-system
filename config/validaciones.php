<?php
    include './connection.php';
    $connection = connect();

    session_start();
    include 'verificar.php';
        
    $_SESSION["intentos"]++;

    $email = $_POST['email'];
    $password = $_POST['password'];



    $sql = "SELECT CONCAT(Nombre, Apellido) AS nombre_completo, Rut, Asignacion_ID, password FROM Funcionario WHERE Email = '$email';";
    $query = mysqli_query($connection, $sql);
    if (mysqli_num_rows($query) > 0) {
        $funcionario = mysqli_fetch_assoc($query);

        #PRUEBAS
        //echo "Rut: " . $funcionario['Rut'] . "<br>";
        // $mensaje = "parte 3. Datos del funcionario: Nombre completo: " . $funcionario['nombre_completo'] . ", Rut: " . $funcionario['Rut'] . ", Contraseña: " . $funcionario['password'];
        // echo "<script>alert('$mensaje'); </script>";

        if ($password == $funcionario['password']) {
            $_SESSION['email'] = $email; 
            $_SESSION['nombres'] = $funcionario['nombre_completo'];  
            $sql = "SELECT f.Rut, a.cargo_IDcargo, c.NombreCargo FROM Funcionario f, Asignacion a, Cargo c WHERE f.Asignacion_ID = a.ID and Email = '$email' ;";
            $query = mysqli_query($connection, $sql);
            
            #PRUEBAS
            // if (mysqli_num_rows($query) > 0) {
            //     $asignacion = mysqli_fetch_assoc($query);
            //     echo "Rut: " . $asignacion['Rut'] . "<br>";
            //     echo "Cargo_ID: " . $asignacion['cargo_IDcargo'] . "<br>";
            //     echo "Cargo_Nombre: " . $asignacion['NombreCargo'] . "<br>";
            // }

            if ($asignacion['cargo_IDcargo'] == 'C001') { // administrador
                header('location: ../view/administrador/administrador-home-listarusuario.php');
            } elseif ($asignacion['cargo_IDcargo'] == 'C002') { // agenteAduanal
                header('location: ../view/agenteAduanal/adenteaduanal-home-listartramitesdevehiculodecarga.php');
            } elseif ($asignacion['cargo_IDcargo'] == 'C003') { // oficialAduanal
                header('location: ../view/oficialAduanal/oficialaduanal-home-listarvehiculodecarga.php');
            } elseif ($asignacion['cargo_IDcargo'] == 'C004') { // policiadeTrafico
                header('location: ../view/policiadeTrafico/policiadetrafico-home-listarvehiculoparticular.php');
            }
        }else {
            $_SESSION['email'] = $email;
            header('location: ../index.php');
        }
    
        

    }else {
        $mensaje = "No se encontró una cuenta asociada al correo '$email'.";
        echo "<script>alert('$mensaje'); window.location.href='../index.php';</script>";
    }
    

