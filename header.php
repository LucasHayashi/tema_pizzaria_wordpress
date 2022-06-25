<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo bloginfo('name');?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css" />
        <!-- First add the elements you need in <head>; then last, add: -->
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav id="navbar">
            <div class="nav-container">
                <div>
                    <span class="brand"> Pizzaria Wordpress </span>
                </div>
                <div>
                    <ul class="menu">
                        <li><a href="#cardapio">Cardápio</a></li>
                        <li><a href="#contato">Contato</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>