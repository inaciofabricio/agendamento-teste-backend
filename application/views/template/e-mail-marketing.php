<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title><?php echo $assunto; ?></title>
    </head>
    <body>
        <div style="text-align: center;">
            
            <div style="display:block; margin:0 auto; width:600px; background-color: <?php echo $background; ?>">
                <br>
                <?php if(isset($imagem_topo->caminho)){ ?>
                    <img style="display: block; max-width: 100%; height: auto;" src="<?php echo base_url('/'.$imagem_topo->caminho); ?>" alt="">
                <?php } ?>

                <div style="background-color: #FFFFFF; border-radius: 10px; width:560px; margin-left:20px; margin-right:20px;">
                    <br>
                   
                    <div id="corpo" style="padding-left:30px; padding-right:30px;">
                        <?php echo $texto; ?>
                    </div>
                    <br>
                
                    <div style="text-align: center;">
                        <a href="https://www.facebook.com/unifacisapb?utm_source=uni_facebook&utm_medium=email&utm_content=uni_facebook" target="_blank" rel="noopener"><img src="<?php echo base_url('public/img/facebook.png'); ?>" style="margin: 5px;"></a>
                        <a href="https://www.instagram.com/unifacisapb/?utm_source=uni_instagram&utm_medium=email&utm_content=uni_instagram" target="_blank" rel="noopener"><img src="<?php echo base_url('public/img/instagram.png'); ?>" style="margin: 5px;"></a>
                        <a href="https://twitter.com/unifacisa?utm_source=uni_twitter&utm_medium=email&utm_content=uni_twitter" target="_blank" rel="noopener"><img src="<?php echo base_url('public/img/twitter.png'); ?>" style="margin: 5px;"></a>
                        <a href="https://www.youtube.com/user/facisapb?utm_source=uni_youtube&utm_medium=email&utm_content=uni_youtube" target="_blank" rel="noopener"><img src="<?php echo base_url('public/img/youtube.png'); ?>" style="margin: 5px;"></a>
                    </div>
                    <br>

                </div> 

                <?php if(isset($imagem_base->caminho)){ ?>
                    <img style="display: block; max-width: 100%; height: auto;" src="<?php echo base_url('/'.$imagem_base->caminho); ?>" alt="">
                <?php } ?>

            </div>

            <br>

            <div style="display:block; margin:0 auto; width:600px; text-align: center; font-size:10px;">
                Enviado por: Unifacisa - Centro Universitário <br>
                Av. Senador Argemiro de Figueiredo, 1901 - Itararé CEP: 58411-020 <br>
                Campina Grande/PB Fone: (83) 2101.8877 <br>
                Se deseja não receber mais mensagens como esta, <a href="">descadastre-se.</a>
            </div>

        </div>
      <script>
        $('#corpo').html();
        let htmlString = $(this).html();
        $(this).text( htmlString );
      </script>
    </body>
</html>
