<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'funciones.php';
require 'vendor/autoload.php';
    if (isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])) {
        $cliente = new Kawschool\Cliente;

        $_params = array(
            "nombre" => $_POST['nombre'],
            "apellidos" => $_POST['apellidos'],
            "email" => $_POST['email'],
            "telefono" => $_POST['telefono'],
            "comentario" => $_POST['nombre']
        );

        $cliente_id = $cliente->registrar($_params);
        $pedido = new Kawschool\Pedido;

        $_params = array(
            'cliente_id' => $cliente_id,
            'total' => cantidadTotal(),
            'fecha' => date('y-m-d')
        );

        $pedido_id = $pedido->registrar($_params);

        foreach ($_SESSION['carrito'] as $indice => $value) {
            $_array = array(
                "pedido_id" => $pedido_id,
                "pelicula_id" => $value['id'],
                "precio" => $value['precio'],
                "cantidad" => $value['cantidad']
            );

            $pedido->registrarDetalle($_array);
        }
        $_SESSION['carrito'] = array();

        header('Location: gracias.php');
    }
}
