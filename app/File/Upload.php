<?php

namespace App\File;

class Upload {

    /**
     * Nome do arquivo(sem extensão)
     * @var string
     */
    private $name;

     /**
     * Extensão do arquivo(sem ponto)
     * @var string
     */
    private $extension;
     /**
     * Type do arquivo
     * @var string
     */
    private $type;

     /**
     * Nome temporário/Caminho temporário
     * @var string
     */
    private $tmpName;

    /**
     * Código de erro do upload
     * @var integer
     */
    private $error;

    /**
     * Tamanho do arquivo
     * @var integer
     */
    private $size;
    /**
     * Construtor da class
     * @param array $file $FILE[campo]
    */ 

    public function __construct($file){

        $this->type = $file['type'];
 
        $this->tmpName = $file['tmp_name'];

        $this->error = $file['error'];

        $this->size = $file['size'];

        $info = pathinfo($file['name']);

        $this->name = $info['filename'];
        $this->extension = $info['extension'];

    }

    /**
     * Método responsável por retornar o nome do arquivo com sua extensão
     * @return string
     */
    public function getBaseName(){
        //Valida extensão
        $extension = strlen($this->extension) ? '.'.$this->extension : '';

        //Retorna o nome completo do arquivo
        return $this->name.$extension;
    }

        public function upload($dir){
            //Verificar erro
            if ($this->error != 0 )return false;

            $path = $dir.'/'.$this->getBaseName();
           
            
            //Move o arquivo para pasta de destino
            return move_uploaded_file($this->tmpName, $path);
        }
}