<?php

require __DIR__."/vendor/autoload.php";

use src\Leitor;

//-------------------------------------------- TXT
$leitorTXT = new Leitor();
$leitorTXT->setDiretorio(__DIR__.'/arquivos');
$leitorTXT->setArquivo('dados.txt');
$leitorTXT->lerArquivo();
$array_txt = $leitorTXT->lerArquivo();


//-------------------------------------------- CSV

$leitorCSV = new Leitor();
$leitorCSV->setDiretorio(__DIR__.'/arquivos');
$leitorCSV->setArquivo('dados.csv');
$leitorCSV->lerArquivo();
$array_csv = $leitorCSV->lerArquivo();

//-------------------------------------------- XLSX
$leitorXLSX = new Leitor();
$leitorXLSX->setDiretorio(__DIR__.'/arquivos');
$leitorXLSX->setArquivo('dados.xlsx');
$leitorXLSX->lerArquivo();
$array_xlsx = $leitorXLSX->lerArquivo();

//--------------------------------------------- Merge entre TXT, CSV e XLSX
echo '<pre>';
print_r(array_merge($array_txt, $array_csv, $array_xlsx));
echo '</pre>';