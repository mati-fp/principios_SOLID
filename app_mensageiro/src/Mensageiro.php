<?php

namespace src;

use src\IMensagemToken;

class Mensageiro{

    private $canal;

    public function __construct(IMensagemToken $canal){
        $this->setCanal($canal);
    }

    public function getCanal(): IMensagemToken{
        return $this->canal;
    }

    public function setCanal(IMensagemToken $canal): void{
        $this->canal=$canal;
    
    }

    public function enviarToken(): void{
        
        $this->getCanal()->enviar();

        /*
        $classe = '\src\\' . ucfirst($this->getCanal());
        echo $classe;
        echo '<br>';
        $obj = new $classe; //implementações = instâncias
        $obj->enviar();
        */
    }
}