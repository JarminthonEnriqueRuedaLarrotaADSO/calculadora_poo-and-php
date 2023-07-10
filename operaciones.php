<?php
require 'clase.php';
function validar($a, $b, $c)
{
    if (is_numeric($a) && is_numeric($b) && is_numeric($c)) {
        return true;
    } else {
        return false;
    }
}

function mostrarError()
{
    echo "<span class='text-danger'> Ingresa solo números </span>";
}

function validarCampos()
{
    if (isset($_POST['numero01']) && isset($_POST['numero02']) && isset($_POST['numero03']) && isset($_POST['operador'])) {
        $a = $_POST['numero01'];
        $b = $_POST['numero02'];
        $c = $_POST['numero03'];
        $operador = $_POST['operador'];

        $objeto = new Miclase();
        $objeto->setA($a);
                    $objeto->setB($b);
                    $objeto->setC($c);
        if (validar($a, $b, $c)) {
            switch ($operador) {
                case '+':                    
                    
                    echo $objeto->sumar();
                    break;
                case '-':
                    echo $objeto->restar();
                    break;
                case '*':
                    echo $objeto->multiplicar();
                    break;
                case '/':
                    echo $objeto->division();
            }

        }else{
            mostrarError();
        }
    }
}
