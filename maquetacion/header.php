<?php
include 'functions.php';
/**
 * Cabacera de la Página
 *
 * Nuestra todo el contenido hasta <body>
 *
 * @package		hbse
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		1.0.0
 */
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title><?php wp_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="favicon.ico">
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr.js"></script>
    </head>
    <body <?php body_class(); ?>>
        <?php include('svg-defs.svg'); ?>
        <div class="page-wrap">
            <header class="header js-menu">
                <div class="wrap">
                    <div class="menu--top">
                        <div class="logo_container">
                            <a href="index.php" title="HBSE" class="logo">
                                <img src="img/logo.svg" alt="HBSE">
                            </a>
                        </div>
                        <p class="menu--icon js-open-menu">
                            <span>
                                <svg><use xlink:href="#shape-icon-open" /></svg>
                                <svg><use xlink:href="#shape-icon-menu" /></svg>
                            </span>
                            Menú
                        </p>
                    </div><!--.menu--top-->
                    <div class="menu--mobile">
                        <ul class="nav">
                            <li>
                                <a href="page-nosotros.php" title="Nosotros" class="<?php if ( $page == 'nosotros' ) { echo ' current-menu-item current-page-ancestor'; } ?>">
                                    <span class="link">
                                        Nosotros
                                    </span>
                                </a>
                            </li>
                            <li>
                                <span class="dropdown menu-item-has-children<?php if ( $page == 'productos' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Productos</span>
                                <ul>
                                    <li>
                                        <a href="page-productos.php" class="<?php if ( $subpage == 'single-producto' ) { echo 'current_page_item'; } ?>">
                                            <svg><use xlink:href="#shape-icon-arrow" /></svg>
                                            Equipos de distribución
                                        </a>
                                    </li>
                                    <li>
                                        <a href="page-productos.php">
                                            <svg><use xlink:href="#shape-icon-arrow" /></svg>
                                            Aceite dieléctrico vegetal - fr3
                                        </a>
                                    </li>
                                    <li>
                                        <a href="page-productos.php">
                                            <svg><use xlink:href="#shape-icon-arrow" /></svg>
                                            Sistemas de aislamiento
                                        </a>
                                    </li>
                                    <li>
                                        <a href="page-productos.php">
                                            <svg><use xlink:href="#shape-icon-arrow" /></svg>
                                            Software de ingeniería eléctrica
                                        </a>
                                    </li>
                                    <li>
                                        <a href="page-productos.php">
                                            <svg><use xlink:href="#shape-icon-arrow" /></svg>
                                            Manejo de activos y equipos de prueba
                                        </a>
                                    </li>
                                    <li>
                                        <a href="page-productos.php">
                                            <svg><use xlink:href="#shape-icon-arrow" /></svg>
                                            Accionamientos
                                        </a>
                                    </li>
                                    <li>
                                        <a href="page-productos.php">
                                            <svg><use xlink:href="#shape-icon-arrow" /></svg>
                                            Eficiencia energética
                                        </a>
                                    </li>
                                    <li>
                                        <a href="page-productos.php">
                                            <svg><use xlink:href="#shape-icon-arrow" /></svg>
                                            Resistencias eléctricas
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="page-smart.php" title="Soluciones y Smart Grid" class="<?php if ( $page == 'smart' ) { echo ' current-menu-item current-page-ancestor'; } ?>">
                                    <span class="link">Soluciones y Smart Grid
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="page-ingenieria.php" title="Ingeniería y servicios" class="<?php if ( $page == 'ingenieria' ) { echo ' current-menu-item current-page-ancestor'; } ?>">
                                    <span class="link">Ingeniería y servicios
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="page-casos.php" title="Casos" class="<?php if ( $page == 'casos' ) { echo ' current-menu-item current-page-ancestor'; } ?>">
                                    <span class="link">Casos</span>
                                </a>
                            </li>
                            <li>
                                <a href="page-contacto.php" title="Contacto" class="<?php if ( $page == 'contacto' ) { echo ' current-menu-item current-page-ancestor'; } ?>">
                                    <span class="link">Contacto
                                    </span>
                                </a>
                            </li>
                        </ul><!--.nav-->
                        <form class="search-bar" action="page-result.php">
                            <p class="cancel js-cancel"><svg><use xlink:href="#shape-icon-menu" /></svg>Cerrar</p>
                            <div class="input-group">
                                <input type="text" placeholder="Buscar en el sitio" class="input-text">
                            </div><!--.input-group-->
                            <div class="send-group">
                                <input type="submit" value=" " class="send">
                                <span class="js-search">
                                    <svg><use xlink:href="#shape-icon-lupa" /></svg>
                                </span>
                            </div><!--.send-group-->
                        </form><!--.search-bar-->
                    </div><!--.menu--mobile-->
                </div><!--.wrap-->
            </header>
            <!--        <div class="fix--footer">-->