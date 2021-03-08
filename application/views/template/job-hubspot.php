<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title><?php echo $assunto; ?></title>
        <style>
            table {
                border-collapse: collapse;
            }

            table, td, th {
                border: 1px solid #c4c4c4;
            }
        </style>
    </head>
    <body>
        
        <div style="text-align: center;"><span style="font-size: 18px;">Retorno de Execução do Job Hubspot - Unifacisa</span></div>
        <br>
        <div>
            <table style="margin: auto;">
                <tr>
                    <th style="background: #e8e8e8; padding: 8px" class="text-center">Mudança de Estágios (<?php echo count($mudanca_estagio); ?>)</th>
                </tr>
                <?php foreach ($mudanca_estagio as $value) { ?>
                    <tr>
                        <td><?php echo $value; ?> </td>
                    </tr>
                <?php } ?>
                <?php if (count($mudanca_estagio) == 0) { ?>
                    <tr>
                        <td>Nenhum Deal foi movido</td>
                    </tr>
                <?php } ?>
                <tr>
                    <th style="background: #e8e8e8; padding: 8px;" class="text-center">Novos Contatos (<?php echo count($novos_contatos); ?>)</th>
                </tr>
                <?php foreach ($novos_contatos as $value) { ?>
                    <tr>
                        <td><?php echo $value; ?> </td>
                    </tr>
                <?php } ?>
                <?php if (count($novos_contatos) == 0) { ?>
                    <tr>
                        <td>Nenhum novo contato foi criado</td>
                    </tr>
                <?php } ?>
                <tr>
                    <th style="background: #e8e8e8; padding: 8px;" class="text-center">Novos Interesses (<?php echo count($novos_deals); ?>)</th>
                </tr>
                <?php foreach ($novos_deals as $value) { ?>
                    <tr>
                        <td><?php echo $value; ?> </td>
                    </tr>
                <?php } ?>
                <?php if (count($novos_deals) == 0) { ?>
                    <tr>
                        <td>Nenhum novo deal foi criado</td>
                    </tr>
                <?php } ?>
                <tr>
                    <th style="background: #e8e8e8; padding: 8px;" class="text-center">Associações de Interesses a Contatos (<?php echo count($associacoes_deal_to_contact); ?>)</th>
                </tr>
                <?php foreach ($associacoes_deal_to_contact as $value) { ?>
                    <tr>
                        <td><?php echo $value; ?> </td>
                    </tr>
                <?php } ?>
                <?php if (count($associacoes_deal_to_contact) == 0) { ?>
                    <tr>
                        <td>Nenhuma associação de deal com contato</td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </body>
</html>