<?php
// Template Name: Home
?>

<?php get_header(); ?>

<main class="main">
    <div class="overlay">
        <div class="main-content">
            <div class="main-logo">
                <img src="assets/img/logo-main-section.png">
            </div>
            <h1 class="main-text"><?php the_field('main_text'); ?></h1>
            <a class="main-btn" href="#">Entre em contato</a>
        </div>
    </div>
</main>

<section class="second-section">
    <div class="container">
        <div class="card-section">
            <div class="card">
                <h2 class="title"><?php the_field('servico_um'); ?> </h2>
                <p class="conteudo"><?php the_field('conteudo_servico_um'); ?> </p>
            </div>
            <div class="card">
                <h2 class="title"><?php the_field('servico_dois'); ?></h2>
                <p class="conteudo"><?php the_field('conteudo_servico_dois'); ?> </p>
            </div>
            <div class="card">
                <!-- Nessa div, o texto ele é uma palavra emabaixo da outra, por isso os br's -->
                <h2 class="title"><?php the_field('servico_tres'); ?></h2>
                <p class="conteudo"><?php the_field('conteudo_servico_tres'); ?> </p>
            </div>
        </div>

        <div class="description">
            <p><?php the_field('descricao_um'); ?>
            </p>
            <p><?php the_field('descricao_dois'); ?> </p>
        </div>
    </div>
</section>

<?php get_footer(); ?>