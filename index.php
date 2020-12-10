<?php

require __DIR__.'/vendor/autoload.php';

use \App\Pix\Payload;
use chillerlan\QRCode\{QRCode, QROptions};

$payloadPix = (new Payload)
    ->setPixKey('96505575553')
    ->setDescription('Descrição do pedido')
    ->setMerchantName('Wanderson Fontes')
    ->setMerchantCity('FSA')
    ->setTxId('wandev0')
    ->setAmount('100.00');

$pauloadQrCode = $payloadPix->getPayload();
echo "<h2>QrCode de pagamento</h2>";
echo '<img src="'.(new QRCode)->render($pauloadQrCode).'" alt="QR Code" />';

echo "<h2>Código de pagamento</h2>";
echo "<pre>";
print_r($pauloadQrCode);
echo"</pre>";exit;

