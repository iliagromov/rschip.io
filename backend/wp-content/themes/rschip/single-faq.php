<?php get_header(); ?>
<!-- single -->
<br>
<br>
<br>
<br>
<main class="page">
    <div class="wrapper">
        Single Faq Page template
    </div>
    <div>
        <?php the_post() ?>
        <h1><?php the_title() ?></h1>
        <div><?php the_content() ?></div>
    </div>
    <aside class="col col-3">
        <div>Автор: <?php the_terms(get_the_ID(), 'books-authors', '', ', ', ''); ?></div>
        <div>Издательство: <?php the_terms(get_the_ID(), 'publisher'); ?></div>
        <div>Страниц: <?php echo $booksACF['pages'] ?></div>
        <div>Цена: <?php echo $booksACF['price'] ?> руб.</div>
    </aside>
    </div>
</main>
<br>
<br>
<br>
<br>
<!-- /single -->
<?php get_footer(); ?>