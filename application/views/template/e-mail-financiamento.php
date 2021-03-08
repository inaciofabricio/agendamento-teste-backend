<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Confirmação de Inscrição no Vestibular Unifacisa</title>
    </head>
    <body>
        <table cellspacing="0" cellpadding="0" border="0" width="100%">
            <tr>
                <td colspan="4">
                    Olá, <b><?php echo $nome; ?>!</b>
                    <br>
                    <br>
                    <?php if($tipo == 1 || $tipo == 5){ ?>
                        <p>
                        Você optou pelo financiamento (Credies ou Pravaler). Portanto deverá nos enviar sua Ficha de Inscrição juntamente com toda documentação sua e 
                        do seu grupo familiar.
                        </p>
                        <p>
                        Após entrega da documentação, faremos a análise dos documentos e, estando em consonância com os requisitos estabelecidos pelas normativas da Unifacisa, 
                        realizaremos a confirmação da adesão ao financiamento.
                        </p>
                    <?php } else if($tipo == 2) {?>
                        <p>
                        Você foi pré-selecionado no processo seletivo do FIES. Portanto deverá confirmar sua inscrição no sistema do MEC e 
                        nos enviar o Comprovante de Inscrição juntamente com toda documentação sua e do seu grupo familiar.
                        </p>
                        <p>
                        Após entrega da documentação, a CPSA fará a análise dos documentos e, estando em consonância com os requisitos 
                        estabelecidos pelas normativas do MEC, faremos a validação da inscrição e emissão do Documento de Regularidade de Inscrição - 
                        DRI para comparecimento à Caixa Econômica Federal - CEF, para finalizar o processo de contratação do FIES.
                        </p>
                        <p>
                        Após a contratação, realizaremos os procedimentos da matrícula acadêmica referente ao curso selecionado.
                        </p>

                    <?php } else if($tipo == 3) {?>
                        <p>
                        Você foi pré-selecionado no processo seletivo do Probem. Portanto deverá nos enviar toda documentação sua e do seu grupo familiar.
                        </p>
                        <p>
                        Após entrega da documentação, a comissão fará a análise dos documentos e, estando em consonância com os requisitos estabelecidos pelas 
                        normativas do Programa de Bolsa Probem, realizaremos os procedimentos da matrícula acadêmica referente ao curso selecionado e, logo em seguida, 
                        faremos a concessão da Bolsa Probem.
                        </p>
                    <?php } else if($tipo == 4) {?>
                        <p>
                        Você foi pré-selecionado no processo seletivo do Prouni. Portanto deverá nos enviar o Comprovante de Inscrição juntamente com toda 
                        documentação sua e do seu grupo familiar.
                        </p>
                        <p>
                        Após entrega da documentação, a COLAP fará a análise dos documentos e, estando em consonância com os requisitos estabelecidos pelas normativas do MEC,
                        realizaremos os procedimentos da matrícula acadêmica referente ao curso selecionado e, logo em seguida, faremos a concessão da Bolsa Prouni.
                        </p>
                    <?php } ?>
                    <br>
                    <br>
                    <a href="https://app.unifacisa.edu.br/financiamento/candidato/<?php echo md5($periodo.'-'.$cpf.'-'.$id_financiamento_candidato); ?>">
                        <img src="<?php echo base_url('/public/img/btn_finaciamento.jpg'); ?>" alt="">
                    </a>
                    <br>
                    <br>
                    <p>No caso de dúvida, entrar em contato conosco via email: <b>financiamentos@unifacisa.edu.br</b></p>
                </td>
            </tr>
        </table>

    </body>
</html>
