<!DOCTYPE HTML>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <section class="header">
        <div class="container">
            <div class="logo">
                <a class="logo-text" href="/contabilidade">DGR</a>
            </div>
            <a class="hamburg" onclick="menu()"><img class="img-hamburg" src="<?php echo get_template_directory_uri(); ?>/assets/img/menu-button-of-three-horizontal-lines.png""></a>
            <ul class=" menu">
                <li><a href="/contabilidade/index.php/servicos/" class="btn-nav">Serviços</a></li>
                <li><a href="/contabilidade/index.php/noticias" class="btn-nav">Noticias</a></li>
                <li><a href="/contabilidade/index.php/contato" class="btn-nav">Contato</a></li>
                <ul class="telefones">
                    <li><a class="btn-tel">(21) 93847-1029</a></li>
                    <li><a class="btn-tel">(21) 2648-3017</a></li>
                </ul>
                </ul>
                <div class="hamburg-menu">
                    <a href="/contabilidade/index.php/servicos/" class="btn-nav">Serviços</a>
                    <a href="/contabilidade/index.php/noticias" class="btn-nav">Noticias</a>
                    <a href="/contabilidade/index.php/contato" class="btn-nav">Contato</a>
                </div>
        </div>
    </section>