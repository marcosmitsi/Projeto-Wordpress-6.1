<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo(show: 'name'); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/normalize.css' ?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/bootstrap.css' ?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/header.css' ?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/' . $estiloPagina ?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/footer.css' ?>">
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container-suporte">
            <?php
            the_custom_logo();
            ?>
            <nav>
                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'menu-navegacao',
                        'menu_id' => 'menu-principal'
                    )
                );
                ?>
            </nav>
        </div>
    </header>

    <?php
