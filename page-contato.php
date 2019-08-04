<?php
//Template Name: Contato
?>

<?php get_header(); ?>

<section class="contato">
    <div class="container">
        <h1 class="title-contato">Fale conosco</h1>
        <form class="form" action="<?php echo get_template_directory_uri(); ?>/enviar.php" method="post">
            <div class="div-nome">
                <label for='name'><?php the_field('titulo_input_nome'); ?></label>
                <input class="input" type='text' id='name' placeholder="Ex.: João da Silva">
            </div>
            <div class="div-email">
                <label for='email'><?php the_field('titulo_input_email'); ?></label>
                <input class="input" type='email' id='email' placeholder="Ex.: joao-silva@exemplo.com.br">
            </div>
            <div class="div-assunto">
                <label for='subject'><?php the_field('titulo_input_assunto'); ?></label>
                <input class="input" type='text' id='subject' placeholder="Ex.: Abertura de empresa">
            </div>
            <div class="div-mensagem">
                <label for='message'><?php the_field('titulo_input_mensagem'); ?></label>
                <textarea rows='8' class="input textarea" cols='140' id='message' placeholder="Digite aqui a sua mensagem.."></textarea>
            </div>
            <div class="div-submit">
                <button type="submit" class="submit-enviar">Enviar</button>
            </div>
        </form>
    </div>
</section>
<?php get_footer(); ?>