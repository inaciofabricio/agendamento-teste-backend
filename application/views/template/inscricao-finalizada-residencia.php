<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title><?php echo $assunto; ?></title>
    </head>
    <body>
        <table cellspacing="0" cellpadding="0" border="0" width="100%">
            <tr>
                <td colspan="4">
                    Olá, <b><?php echo $nomeCandidato; ?>!</b>
                    <br>
                    <br>
                    Sua pré-inscrição no Processo Seletivo para <b><?php echo $nomeOpcaoIngresso; ?></b> foi realizada com sucesso! Chegou a hora de efetuar o pagamento do boleto e confirmar sua participação.
                    <br>
                    <br>
                    Você pode acompanhar sua inscrição através do link: <a href="http://unifacisa.edu.br/processo-residencia/acompanhe">http://unifacisa.edu.br/processo-residencia/acompanhe</a>. 
                    Lembre-se que os dados de acesso serão o <b>email</b> e a <b>senha</b> informados no ato do preechimento dos dados pessoais.
                    Vem pra UNIFACISA!

                    <br>
                    <br>
                    <?php if($gratuidade != 'inscrição'){ ?>
                        <a href="https://app.unifacisa.edu.br/boleto/imprimir/<?php echo md5($boleto->id_inscricao); ?>">
                            <img src="<?php echo base_url('/public/img/imprima_o_boleto.png'); ?>" alt="">
                        </a>
                    <?php } ?>
                </td>
            </tr>
        </table>

    </body>
</html>
