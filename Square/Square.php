<?php

mainMenu();

function mainMenu()
{
    clearScreen();
    echo "*-*-*-*-*--*-*-*-*-*--*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*- \n";
    echo "----------CALCULADORA DE VOLUMEN, AREA Y PERIMETRO------------ \n";
    echo "*-*-*-*-*--*-*-*-*-*--*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*- \n\n";

    $value = readline("Ingrese un valor para el lado: ");
    operationsMenu($value);
}

function operationsMenu($value)
{
    $cubo = new Cubo();
    clearScreen();
    echo "*-*-*-*-*--*-*-*-*-*--*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*- \n";
    echo "-------------------SELECCIONE UNA OPERACIÓN------------------- \n";
    echo "*-*-*-*-*--*-*-*-*-*--*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*- \n\n";
    echo "VALOR ACTUAL DEL LADO/ARISTA: $value \n\n";
    echo "1. Área............. \n";
    echo "2. Volúmen.......... \n";
    echo "3. Perimetro........ \n\n";
    echo "Opción: ";

    $option = fgets(STDIN);

    switch ($option) {
        case 1:
            $cubo->calcularArea($value);
            break;
        case 2:
            $cubo->calcularVolumen($value);
            break;
        case 3:
            $cubo->calcularPerimetro($value);
            break;
        case 4:
            mainMenu();
            break;
        default:
            mainMenu();
            break;
    }

}

class Square
{
    protected $lado;

    public function calcularArea(int $lado)
    {
        echo "------Calculando área------ \n\n";
        $result = $lado * $lado;
        echo "El resultado es $result \n\n";
        $option = readline("Presione 1 para realizar otra operación ó 2 para regresar al menú principal: ");
        selectMenu($option, $lado);
    }

    public function calcularPerimetro(int $lado)
    {
        echo "------Calculando área------ \n\n";
        $result = $lado * 4;
        echo "El resultado es $result \n\n";
        $option = readline("Presione 1 para realizar otra operación ó 2 para regresar al menú principal: ");
        selectMenu($option, $lado);
    }
}

class Cubo extends Square
{
    protected $arista;

    public function calcularVolumen(int $arista)
    {
        echo "------Calculando volúmen------ \n\n";
        $result = pow($arista, 3);
        echo "El resultado es $result \n\n";
        $option = readline("Presione 1 para realizar otra operación ó 2 para regresar al menú principal: ");
        selectMenu($option, $arista);
    }
}

function selectMenu($option, $lado)
{
    switch ($option) {
        case 1:
            operationsMenu($lado);
            break;
        case 2:
            mainMenu();
            break;
        default:
            mainMenu();
            break;
    }
}

function clearScreen()
{
    // Uncomment for clear screen on windows
    // system('cls');

    // Line to clear screen on linux
    system('clear');
}


