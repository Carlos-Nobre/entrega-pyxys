<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <header>
    <nav class="">
            <div class="container">
                <a href="" class="logo">
                    <img src="<?= get_template_directory_uri() ."/imgs/brand_persona_logo.png" ?>" alt="">
                </a>
                <button onclick="menuShow()"><img class="imgbutton" src="<?= get_template_directory_uri() ."/imgs/menu.png" ?>" alt=""></button>
                <div class="links">
                    <ul class="show_links">
                        <a href="">HOME</a>
                        <a href="">PORQUE BRAND PERSONA</a>
                        <a href="">O MERCADO</a>
                        <a href="">VANTAGENS</a>
                        <a href="">COMO FUNCIONA</a>
                        <a href="">O COMBO</a>
                        <a href="">CONTATOS</a>
                    </ul>
                </div>
            </div>
            <div id='menu'>
                <ul class="show-menu">
                    <a class="menu-itens" href="">HOME</a>
                    <a class="menu-itens" href="">PORQUE BRAND PERSONA</a>
                    <a class="menu-itens" href="">O MERCADO</a>
                    <a class="menu-itens" href="">VANTAGENS</a>
                    <a class="menu-itens" href="">COMO FUNCIONA</a>
                    <a class="menu-itens" href="">O COMBO</a>
                    <a class="menu-itens" href="">CONTATOS</a>
                </ul>
            </div>
        </nav>
    </header>