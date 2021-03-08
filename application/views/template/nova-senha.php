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
                    Você solicitou alteração de senha para acesso a área do candidato no Processo Seletivo da Unifacisa, clique no link abaixo e realize o processo. 
                    <br>
                    <br>
                    <a href="http://unifacisa.edu.br/inscricao/acompanhe/nova-senha/<?php echo $id ?>">http://unifacisa.edu.br/inscricao/acompanhe/nova-senha/<?php echo $id ?></a>
                    <br>
                    <br>
                    <b>Caso você não tenha solicitado, por favor desconsiderar este email.</b>
                    <br>
                    <br>
                    <b>Este link é válido até <?php echo $limite_tempo_nova_senha; ?>.</b>
                </td>
            </tr>
        </table>
    </body>
</html>
