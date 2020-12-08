<?php

require __DIR__.'/vendor/autoload.php';

use \App\Pix\Payload;

$payloadPix = (new Payload)
    ->setPixKey('05038883540')
    ->setDescription('Venda de test')
    ->setMerchantName('Wanderson Fontes')
    ->setMerchantCity('FSA')
    ->setTxId('wandev0')
    ->setAmount('100.00');


