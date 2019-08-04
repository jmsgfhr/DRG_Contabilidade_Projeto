<?php
// Template Name: Servicos
?>

<?php get_header(); ?>

<section class="servicos">
    <div class="container">
        <section class="first-services">
            <div class="title-services">
                <h1><?php the_field('titulo_servico'); ?></h1>
            </div>
            <div class="description-one">
                <h3><?php the_field('subtitulo_servico'); ?>
                </h3>
            </div>
        </section>
        <section class="second-services">
            <div class="list-services">
                <h2><?php the_field('titulo_servico_um'); ?></h2>
                <ul>
                    <li><?php the_field('servico_um'); ?></li>
                    <li><?php the_field('servico_dois'); ?></li>
                    <li><?php the_field('servico_tres'); ?></li>

                </ul>
            </div>
            <div class="list-services">
                <h2><?php the_field('titulo_servico_dois'); ?></h2>
                <ul>
                    <li><?php the_field('servico_quatro'); ?></li>
                    <li><?php the_field('servico_cinco'); ?></li>
                    <li><?php the_field('servico_seis'); ?></li>

                </ul>
            </div>
            <div class="list-services">
                <h2><?php the_field('titulo_servico_tres'); ?></h2>
                <ul>
                    <li><?php the_field('servico_sete'); ?></li>
                    <li><?php the_field('servico_oito'); ?></li>
                    <li><?php the_field('servico_nove'); ?></li>
                </ul>
            </div>
        </section>
    </div>
</section>

<?php get_footer(); ?>