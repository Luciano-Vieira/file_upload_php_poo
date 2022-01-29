<?php

require __DIR__.'/vendor/autoload.php';
use \App\File\Upload;

include __DIR__.'/includes/formulario.html';

if (isset($_FILES['file'])) {
 
    $obUpload = new Upload($_FILES['file']);

    

    $sucess = $obUpload->upload(__DIR__.'/files');

    echo '<pre>';
    print_r($sucess);
    echo '</pre> <br>';
    exit;
    if ($sucess) {
        echo 'Arquivo enviado com sucesso';
        exit;
    }
    die('Ocorreu um problema ao enviar o arquivo. Tente nova mente');
}


