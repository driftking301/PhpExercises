<?php

echo "*-*-*-*-*--*-*-*-*-*--*-*-*-*-*-*-*-*-*-*-*-*- \n";
echo "----------Convertidor Código morse------------ \n";
echo "*-*-*-*-*--*-*-*-*-*--*-*-*-*-*-*-*-*-*-*-*-*- \n\n";

echo "Elige una opción: \n";
echo "1. Convertir palabra a código Morse \n";
echo "2. Convertir código Morse a palabra \n";

$option = trim(fgets(STDIN));
if (empty($option))
{
    echo "Debe ingresar una opción \n";
    return;
}
if (1 == $option)
{
    clearScreen();
    echo "------------------------Codificador de palabras a código morse---------------------------\n\n";
    echo "Ingrese la palabra para convertirla a código Morse \n";
    $word = trim(fgets(STDIN));
    $word = strtolower($word);
    echo "La palabra " . strtoupper($word) . " fue convertida a ";
    morseEncoder($word);
    echo "\n";
} elseif (2 == $option)
{
    clearScreen();
    echo "------------------------Decodificador de código morse---------------------------\n\n";
    echo "Ingrese el código morse para decodificar cada uno separado por un espacio\n";
    $word = trim(fgets(STDIN));
    $word = strtolower($word);
    echo "El código " . ($word) . " fue decodificado a ";
    echo morseDecoder($word);
    echo "\n";
}

function morseEncoder(string $word)
{
    for($i=0;$i<strlen($word);$i++){
        echo (isset(obtainMorseCode()[$word[$i]])) ? obtainMorseCode()[$word[$i]] . " " : 'ERROR';
    }
}

function morseDecoder(string $word)
{
    $morse = array_map("trim", obtainMorseCode());
    $output = "";
    foreach (explode(" ", $word) as $value) {
        $output .= array_search($value, $morse);
    }
    return strtoupper($output) . "\n";
}
function obtainMorseCode(): array
{
    return array(
        "a" => ".-",
        "b" => "-...",
        "c" => "-.-.",
        "d" => "-..",
        "e" => ".",
        "f" => "..-.",
        "g" => "--.",
        "h" => "....",
        "i" => "..",
        "j" => ".---",
        "k" => "-.-",
        "l" => ".-..",
        "m" => "--",
        "n" => "-.",
        "o" => "---",
        "p" => ".--.",
        "q" => "--.-",
        "r" => ".-.",
        "s" => "...",
        "t" => "-",
        "u" => "..-",
        "v" => "...-",
        "w" => ".--",
        "x" => "-..-",
        "y" => "-.--",
        "z" => "--..",
        "0" => "-----",
        "1" => ".----",
        "2" => "..---",
        "3" => "...--",
        "4" => "....-",
        "5" => ".....",
        "6" => "-....",
        "7" => "--...",
        "8" => "---..",
        "9" => "----.",
    );
}
function clearScreen()
{
    // Uncomment for clear screen on windows
    // system('cls');

    // Line to clear screen on linux
    system('clear');
}