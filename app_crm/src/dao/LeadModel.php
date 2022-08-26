<?php

namespace src\dao;

use src\interfaces\ICadastro;
use src\interfaces\INotificacao;

use src\componentes\Notificacao;

use src\BD;

class LeadModel extends BD implements ICadastro, INotificacao{
    public function salvar(){
        //lógica
    }

    public function enviarNotificacao(Notificacao $notificacao){
        //lógica
    }
}