<?php

require __DIR__.'\vendor\autoload.php';

use src\Mensageiro;
use src\Email;
use src\Sms;
use src\Whatsapp;

//------- canal email
$msg = new Mensageiro(new Email());
$msg->enviarToken();

echo '<br>';
//------- canal sms
$msg2 = new Mensageiro(new Sms());
$msg2->enviarToken();

echo '<br>';
//------- canal Whatsapp
$msg2 = new Mensageiro(new Whatsapp());
$msg2->enviarToken();

/*
//------- canal email
$msg = new Mensageiro();
$msg->setCanal('email');
$msg->enviarToken();

echo '<br>';
//------- canal sms
$msg2 = new Mensageiro();
$msg2->setCanal('sms');
$msg2->enviarToken();
*/
