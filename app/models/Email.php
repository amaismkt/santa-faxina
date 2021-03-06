<?php

namespace App\models;

use App\Core\App;
use App\models\Model;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email extends Model
{

    public static function enviar($remetente, $destinatario, $conteudo, $nome)
    {
        $mail = new PHPMailer(false);
        try {
            
            $mail->SMTPDebug = 1;
            $mail->IsSMTP();
            
            $mail->SMTPAuth = true;
            $mail->Host       = 'smtp.kinghost.net';
            $mail->Username   = 'cadastro@santafaxina.com.br';
            $mail->Password   = 'sucesso19';
            //$mail->SMTPSecure = 'ssl';
            $mail->Port       = 587;
            
            $mail->setFrom('financeiro@santafaxina.com.br', $nome);
            $mail->addAddress($destinatario, $nome);
            $mail->addAddress($destinatario);
            $mail->addReplyTo($remetente, $nome);
            
            $mail->isHTML(true);
            $mail->Subject = utf8_decode($conteudo['assunto']);
            $mail->Body    = utf8_decode($conteudo['mensagem']);
            $mail->AltBody = utf8_decode($conteudo['mensagem']);
            $mail->send();

        } catch (Exception $e) {

            $e->getMessage();
            echo "A mensagem não pode ser enviada. Erro ocorrido: {$mail->ErrorInfo}";
            die();
            
        }
        
    }

    public static function gerarToken($tamanho)
    {
        $basic = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

        $token= "";

        for($count= 0; $tamanho > $count; $count++){

            $token.= $basic[rand(0, strlen($basic) - 1)];
        }

        return $token;
    }

}
