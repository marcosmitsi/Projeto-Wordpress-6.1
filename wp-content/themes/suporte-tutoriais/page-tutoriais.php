<?php
$estiloPagina = 'tutoriais.css';
require_once 'header.php';

?>

<form action="#" class="container-suporte formulario-pesquisa-paises">
    <h2>Verifique nossos tutoriais</h2>
    <select name="tutorials" id="tutorials">
        <option value="">--Selecione--</option>
        <?php
        $tutorials = get_terms(array('taxonomy' => 'tutorials'));
        foreach ($tutorials as $tutorial) : ?>
            <option value="<?= $tutorial->name ?>"
            <?= !empty($_GET['tutorials']) && $_GET['tutorials'] === $tutorial->name ? 'selected' : ''?>><?= $tutorial->name ?></option>
        <?php
        endforeach;
        ?>
    </select>
    <input type="submit" value="Pesquisar">

</form>


<?php
if(!empty ($_GET['tutorials'])){

$tutorialsSelect = array(array(
    'taxonomy' => 'tutorials',
    'field' => 'name',
    'terms' => $_GET['tutorials']
));
}

$args = array(
    'post_type' => 'tutoriais',
    'tax_query' => !empty($_GET['tutorials'])? $tutorialsSelect : ''
);

$query = new WP_Query($args);

if ($query->have_posts()) :
    echo '<main class="page-destinos">';
    echo '<ul class="lista-destinos container-suporte">';
    while ($query->have_posts()) : $query->the_post();
        echo '<li class="col-md-3 destinos">';
        the_post_thumbnail();
        the_title('<p class="titulo-destino">', '</p>');
        the_content();
        echo '</li>';
    endwhile;
    echo '</ul>';
    echo '</main>';
endif;

require_once 'footer.php';
