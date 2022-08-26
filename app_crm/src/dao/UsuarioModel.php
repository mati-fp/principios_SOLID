<?php

namespace src\dao;

use src\interfaces\ICadastro;
use src\interfaces\ILog;
use src\interfaces\INotificacao;

use src\componentes\Log;
use src\componentes\Notificacao;

use src\BD;

class UsuarioModel extends BD implements ICadastro, ILog, INotificacao{
    public function salvar(){
        //lógica
    }
    public function registrarLog(Log $log){
        //lógica
    }

    public function enviarNotificacao(Notificacao $notificacao){
        //lógica
    }
}