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
        <img style="max-width: 100%;" src="<?php echo base_url('/public/img/banner_pos.jpg'); ?>" alt="">
        <br>
        <br>
        <div style="text-align: center;"><span style="font-size: 20px;">Olá, <b><?php echo $nomeCandidato; ?>!</b></span></div>
        <br>
        Confirmamos o recebimento de sua inscrição no curso <b><?php echo $nomeCursoPos; ?></b> e nossa equipe já está processando as informações que você nos enviou.
        <br>
        <br>
        Além da satisfação em tê-lo conosco, temos a certeza que a sua escolha foi a mais correta e vamos trabalhar muito para que suas expectativas sejam superadas.
        <br>
        <br>
        Confira mais uma vez a sua ficha de inscrição abaixo e caso tenha algo a ser corrigido, nos avise.
        <br>
        <br>
        Se você tiver mais alguma dúvida, pode fazer contato com a gente no (83) 2101.8848 ou pelo email: pos@unifacisa.edu.br.
        <br>
        <br>
        
        <div>
            <table style="margin: auto;">
                <tr>
                    <th colspan="4" style="background: #e2dede;" class="text-center">Informações Pessoais</th>
                </tr>
                <tr>
                    <td style="width: 20%;"><b>CPF:</b> <br> <?php echo $cpfPessoaPos; ?> </td>
                    <td style="width: 30%;"><b>Nome:</b> <br> <?php echo $nomePessoaPos; ?> </td>
                    <td style="width: 25%;"><b>RG:</b> <br> <?php echo $rg.' - '.$orgaoEmissor.'/'.$uf; ?> </td>
                    <td style="width: 25%;"><b>Data Nascimento:</b> <br> <?php echo $dataNascimentoPessoaPos; ?> </td>
                </tr>
                <tr>
                    <td style="width: 20%;"><b>Estado civil:</b> <br> <?php echo $nomeEstadoCivil; ?> </td>
                    <td style="width: 30%;"><b>Email:</b> <br> <?php echo $email; ?> </td>
                    <td style="width: 25%;"><b>Telefone Principal:</b> <br> <?php echo $telefone1; ?></td>
                    <td style="width: 25%;"><b>Telefone Secundário:</b> <br> <?php echo $telefone2; ?></td>
                </tr>
                <tr>
                    <td colspan="2"><b>Nome da Mãe:</b> <br> <?php echo $nomeMae; ?> </td>
                    <td colspan="2"><b>Nome do Pai:</b> <br> <?php echo $nomePai; ?> </td>
                </tr>
                <tr>
                    <th colspan="4" style="background: #e2dede;" class="text-center">Naturalidade</th>
                </tr>
                <tr>
                    <td colspan="2"><b>Estado:</b> <br> <?php echo $estadoNaturalidade; ?> </td>
                    <td colspan="2"><b>Cidade:</b> <br> <?php echo $cidadeNaturalidade; ?> </td>
                </tr>
                <tr>
                    <th colspan="4" style="background: #e2dede;" class="text-center">Endereço</th>
                </tr>
                <tr>
                    <td><b>Rua:</b> <br> <?php echo $ruaPessoaPos; ?> </td>
                    <td><b>Número:</b> <br> <?php echo $numeroPessoaPos; ?> </td>
                    <td><b>Bairro:</b> <br> <?php echo $bairroPessoaPos; ?> </td>
                    <td><b>CEP:</b> <br> <?php echo $cepPessoaPos; ?> </td>
                </tr>
                <tr>
                    <td colspan="2"><b>Estado:</b> <br> <?php echo $nomeEstadoPessoaPos; ?> </td>
                    <td colspan="2"><b>Cidade:</b> <br> <?php echo $nomeCidadePessoaPos; ?> </td>
                </tr>

                <tr>
                    <th colspan="4" style="background: #e2dede;" class="text-center">Formação</th>
                </tr>
                <tr>
                    <td colspan="2"><b>Curso de Graduação:</b> <br> <?php echo $curso; ?> </td>
                    <td colspan="2"><b>Ano de Conclusão:</b> <br> <?php echo $anoGraduacao; ?> </td>
                </tr>
                <tr>
                    <td colspan="2"><b>Instituição de Ensino:</b> <br> <?php echo $instituicaoEnsino; ?> </td>
                    <td colspan="2"><b>Exerce alguma atividade profissional?</b> <br> <?php echo $exerceAtividadeProf; ?> </td>
                </tr>
                <tr>
                    <th colspan="4" style="background: #e2dede;" class="text-center">Dados do Responsável Financeiro</th>
                </tr>
                <tr>
                    <td colspan="4"><b>O aluno é o próprio Responsável Financeiro?</b> <br> <?php echo $proprioResponsavelFinanceiro; ?> </td>
                </tr>
                <?php if ($proprioResponsavel == 0) { ?>
                    <tr>
                        <td><b>Rua:</b> <br> <?php echo $ruaResponsavel; ?> </td>
                        <td><b>Número:</b> <br> <?php echo $numeroResponsavel; ?> </td>
                        <td><b>Bairro:</b> <br> <?php echo $bairroResponsavel; ?> </td>
                        <td><b>CEP:</b> <br> <?php echo $cepResponsavel; ?> </td>
                    </tr>
                    <tr>
                        <td colspan="2"><b>Estado:</b> <br> <?php echo $nomeEstadoResponsavel; ?> </td>
                        <td colspan="2"><b>Cidade:</b> <br> <?php echo $nomeCidadeResponsavel; ?> </td>
                    </tr>
                <?php } ?>
                <tr>
                    <th colspan="4" style="background: #e2dede;" class="text-center">Dados da Inscrição</th>
                </tr>
                <tr>
                    <td colspan="2"><b>Opção Um:</b> <br> <?php echo $opcaoUm; ?> </td>
                    <td colspan="2"><b>Opção Dois:</b> <br> <?php echo $opcaoDois; ?> </td>
                </tr>   
            </table>
        </div>
    </body>
</html>