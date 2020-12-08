<?php

namespace App\Pix;

class Payload{
    //DADOS DO PAPYLOAD ( ID DOS PAPYLOAD'S )
    const ID_PAYLOAD_FORMAT_INDICATOR = '00';//ID DO PAYLOAD FORMAT INDICATOR       T=02
    const ID_MERCHANT_ACCOUNT_INFORMATION = '26';//INFORMAÇÂO DE CONTA(RECEBEDOR)   T=58
    const ID_MERCHANT_ACCOUNT_INFORMATION_GUI = '00';
    const ID_MERCHANT_ACCOUNT_INFORMATION_KEY = '01';
    const ID_MERCHANT_ACCOUNT_INFORMATION_DESCRIPTION = '02';
    const ID_MERCHANT_CATEGORY_CODE = '52';//CATEGORIA                              T=04
    const ID_TRANSACTION_CURRENCY = '53';//MOEDA                                    T=03
    const ID_TRANSACTION_AMOUNT = '54';
    const ID_COUNTRY_CODE = '58';//CÓDIGO DO PAÍS                                   T=02
    const ID_MERCHANT_NAME = '59';//NOME TITULAR                                    T=13
    const ID_MERCHANT_CITY = '60';//CIDADE                                          T=08
    const ID_ADDITIONAL_DATA_FIELD_TEMPLATE = '62';
    const ID_ADDITIONAL_DATA_FIELD_TEMPLATE_TXID = '05';
    const ID_CRC16 = '63';//VALIDADOR DE REDUNDANCIA DE DADOS                        T=04


    private $pixKey;//CHAVE PIX CADASTRADA

    private $description;//DESCRIÇÂO DO PAGAMENTO

    private $merchantName;//NOME DO TITULAR

    private $merchantCity;//CIDADE DO TITULAR

    private $txId;//ID DA TRANSAÇÂO

    private $amount;//VALOR DA TRANSAÇÃO
    
    //DEFINIÇÂO DE VALORES
    public function setPixKey($pixKey)
    {
        $this->$pixKey = $pixKey;
        return $this;
    }
    public function setDescription($description)
    {
        $this->$description = $description;
        return $this;
    }
    public function setMerchantName($merchantName)
    {
        $this->$merchantName = $merchantName;
        return $this;
    }
    public function setMerchantCity($merchantCity)
    {
        $this->$merchantCity = $merchantCity;
        return $this;
    }
    public function setTxId($txId)
    {
        $this->$txId = $txId;
        return $this;
    }
    public function setAmount($amount)
    {
        $this->$amount = number_format($amount,2,'.','');
        return $this;
    }

    //RETORNA O VALOR COMPLETO E CALCULA O TAMANHO DA STRING
    public function getValue($id, $value)
    {
        echo "<pre>";
        print_r($size = srt_pad(strlen($value),2,'0',STR_PAD_LEFT));
        echo "<pre>";exit;
    }

    //GERADOR DE CÓDIGO COMPLETO DO PIX
    public function generationCode()
    {
       $payload = $his->getValue(self::ID_PAYLOAD_FORMAT_INDICATOR,'01');
       return $payload;
    }
    

}
