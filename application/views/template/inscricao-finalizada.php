<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Confirmação de Inscrição no Vestibular Unifacisa</title>
    </head>
    <body>
        <table cellspacing="0" cellpadding="0" border="0" width="100%">
            <tr>
                <td colspan="4">
                    Olá, <b><?php echo $nomeCandidato; ?>!</b>
                    <br>
                    <br>
                    Sua <?php echo $gratuidade; ?> no Vestibular <?php echo $periodo; ?>, modalidade <b><?php echo $nomeOpcaoIngresso; ?></b>, foi realizada com sucesso!
                    <br>
                    <?php if($gratuidade != 'inscrição'){ ?>
                        <br>
                        Chegou a hora de efetuar o pagamento do boleto e confirmar sua participação no Processo Seletivo. 
                        <br>
                        <br>
                    <?php }else{ ?>
                        <br>
                    <?php } ?>
                    Você pode acompanhar o status da sua <?php echo $gratuidade; ?> através do link: <a href="http://unifacisa.edu.br/inscricao/acompanhe">http://unifacisa.edu.br/inscricao/acompanhe</a>. 
                    Vem pra UNIFACISA, aqui você tem um caminho de descobertas que vai muito além da sala de aula. 
                    Lembre-se que os dados de acesso serão o <b>email</b> e a <b>senha</b> informados no ato do preechimento dos dados pessoais.
                    <br>
                    <br>

                    <?php if($senha != NULL) { ?>

                        Senha gerada automaticamente: <h3><b><?php echo $senha->senha; ?></b></h3>
                        Caso você queira mudar sua senha que foi gerada automaticamente, utilizar o link abaixo.
                        <br>
                        <a href="http://unifacisa.edu.br/inscricao/acompanhe/nova-senha/<?php echo $senha->id ?>">http://unifacisa.edu.br/inscricao/acompanhe/nova-senha/<?php echo $senha->id ?></a>
                        <br>
                        <b>Este link é válido até <?php echo $senha->limite_tempo_nova_senha; ?>.</b>
                        <br>
                    <?php } ?>

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
