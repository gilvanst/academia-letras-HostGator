<?php
    include_once 'envia_email.php';

    // $destinatarios = [
    //     [
    //         'nome' => 'Patricia',
    //         'email' => 'paty_dml@hotmail.com'
    //     ],
    //     [
    //         'nome' => 'Gilvan',
    //         'email' => 'gilvanjr306@gmail.com'
    //     ],
    //     [
    //         'nome' => 'Caroline',
    //         'email' => 'carolmatsu93@gmail.com'
    //     ],
    //     [
    //         'nome' => 'Flavio',
    //         'email' => 'flavio18hds@gmail.com'
    //     ],
    //     [
    //         'nome' => 'Artur',
    //         'email' => 'pereira.artur@hotmail.com'
    //     ]
    // ];

    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];
    
    $destinatarios = [
        [
            'nome' => '',
            'email' => $_POST['destinatario']
        ]
    ];

    $email = enviarEmail($destinatarios, $assunto, $mensagem);

    if ($email) {
        header('Location: redefinir.php?mensagem=Email enviado com sucesso');
    } else {
        header('Location: redefinir.php?mensagem=Erro ao enviar email');
    }
