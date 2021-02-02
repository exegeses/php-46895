<?php

    #####################
    ### CRUD de Usuarios

    function listarUsuarios()
    {
        $link = conectar();
        $sql = "SELECT idUsuario, usuNombre, usuApellido, usuEmail
	 			    FROM usuarios";
        $resultado = mysqli_query($link, $sql)
                            or die( mysqli_error($link) );
        return $resultado;
    }

    /**
     * función para ver datos de un usaior por su id
     * @return $usuario:array
     */
    function verUsuarioPorID(){

        $idUsuario = $_GET["idUsuario"];
        $link = conectar();
        $sql = "SELECT idUsuario, usuNombre, usuApellido, usuEmail
                    FROM usuarios
                    WHERE idUsuario = ".$idUsuario;

        $resultado = mysqli_query($link, $sql)
                        or die(mysqli_error($link));

        //obtenemos datos de ese usuario en array asociativo
        $usuario = mysqli_fetch_assoc($resultado);

        return $usuario;

    }

    /**
     * función para modificar datos de un usuario
     * @return bool|mysqli_result
     */
    function modificarUsuario(){

        $idUsuario = $_POST["idUsuario"];
        $usuNombre = $_POST["usuNombre"];
        $usuApellido = $_POST["usuApellido"];
        $usuEmail = $_POST["usuEmail"];

        $link = conectar();

        $sql = "UPDATE usuarios
                    SET  usuNombre = '".$usuNombre."',
                            usuApellido = '".$usuApellido."',
                            usuEmail = '".$usuEmail."'
                    WHERE idUsuario = ".$idUsuario;

        $resultado = mysqli_query($link,$sql)
                        or die(mysqli_error($link));

        return $resultado;

    }

    /*
     * listarUsuarios()
     * verUsuarioPorID()
     * agregarUsuario()
     * modificarUsuario()
     * eliminarUsuario()
     * */