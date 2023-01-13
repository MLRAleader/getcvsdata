<?php
declare(strict_types=1);


//Création de la fonction qui récupère le document.
function recup_file(string $fileway){
    $files=[];

    if(is_dir($fileway) || file_exists($fileway)){
      scandir($fileway);
    }
    $files[]=scandir($fileway);

    foreach($files as $file){
        $file=$file[2];
    }

    return $file;
}
?>