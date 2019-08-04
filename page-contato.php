<?php
//Template Name: Contato
?>

<?php get_header(); ?>

<section class="contato">
    <div class="container">
        <h1 class="title-contato">Fale conosco</h1>
        <form class="form">
            <div class="div-nome">
                <label for='name'>Nome:</label>
                <input class="input" type='text' id='name' placeholder="Ex.: João da Silva">
            </div>
            <div class="div-email">
                <label for='email'>Email:</label>
                <input class="input" type='email' id='email' placeholder="Ex.: joao-silva@exemplo.com.br">
            </div>
            <div class="div-assunto">
                <label for='subject'>Assunto:</label>
                <input class="input" type='text' id='subject' placeholder="Ex.: Abertura de empresa">
            </div>
            <div class="div-mensagem">
                <label for='message'>Mensagem:</label>
                <textarea rows='8' class="input textarea" cols='140' id='message' placeholder="Digite aqui a sua mensagem.."></textarea>
            </div>
            <div class="div-submit">
                <button type="submit" class="submit-enviar">Enviar</button>
            </div>
        </form>
    </div>
</section>
<?php get_footer(); ?>