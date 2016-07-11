<?php
/**
 * Archivo principal.
 *
 * Aquí se muestra todo lo que se ve en la portada de la página
 *
 * @package		hbse
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		1.0.0
 */
$page = 'home';
$subpage = '';
include 'header.php'; ?>
<div class="home__gallery">
    <div class="slider__gallery js-slider__gallery">
        <ul class="slides">
            <li>
                <img src="http://www.forzaups.com/mx/media/catalog/category/re-1200-series_1.png" alt="Titulo" data-title="Reguladores de Voltaje MT" data-text="Cooper Power Systems" data-link="http://facebook.com">
            </li>
            <li>
                <img src="http://www.mecatronicadigital.com/mystore/item/188/bb/regulador-positivo-de-voltaje-33v-y-1a-lf33cv" alt="Titulo" data-title="Reguladores segundo slide" data-text="Si! este es el segundo slide." data-link="http://google.com">
            </li>
            <li>
                <img src="http://www.forzaups.com/mx/media/catalog/category/re-1200-series_1.png" alt="Titulo" data-title="Reguladores de Voltaje MT" data-text="Cooper Power Systems" data-link="http://facebook.com">
            </li>
            <li>
                <img src="http://www.mecatronicadigital.com/mystore/item/188/bb/regulador-positivo-de-voltaje-33v-y-1a-lf33cv" alt="Titulo" data-title="Reguladores segundo slide" data-text="Si! este es el segundo slide." data-link="http://google.com">
            </li>
            <li>
                <img src="http://www.forzaups.com/mx/media/catalog/category/re-1200-series_1.png" alt="Titulo" data-title="Reguladores de Voltaje MT" data-text="Cooper Power Systems" data-link="http://facebook.com">
            </li>
            <li>
                <img src="http://www.mecatronicadigital.com/mystore/item/188/bb/regulador-positivo-de-voltaje-33v-y-1a-lf33cv" alt="Titulo" data-title="Reguladores segundo slide" data-text="Si! este es el segundo slide." data-link="http://google.com">
            </li>
        </ul><!--.slides-->
    </div><!-- /.slider__gallery js-slider__gallery -->
    <div class="gallery__container">
        <div class="custom-controls-container wrap">
            <div class="gallery__text">
                <h2 class="gallery__title"></h2><!-- /.gallery__title -->
                <p class="gallery__content"></p><!-- /.gallery__content -->
                <a href="http://hbse.cl" title="Ver detalles" class="gallery__link btn btn--read">
                    <span class="item__casos__icon">
                        <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-icon-open"></use></svg>
                    </span><!--.item__casos__icon-->
                    Ver detalles
                </a>
            </div><!-- /.gallery__text -->
            <div class="custom__icons">
            </div><!-- /.custom__icons -->
        </div>
    </div><!-- /.gallery__container -->
</div><!--.home__gallery -->
<section class="index">
    <h1 class="title">Casos</h1>
    <div class="casos casos--home">
        <div class="block--flex">
            <div class="item__casos">
                <div class="content">
                    <div class="item__casos__media" style="background-image: url(assets/destacado1_home.jpg);"></div>
                    <div class="item__casos__text">
                        <h2 class="item__casos__title">Implementación sistema eléctrico en isla de Pascua</h2>
                        <a href="single-casos.php" class="btn btn--read" title="Seguir Leyendo">
                            <span class="item__casos__icon">
                                <svg><use xlink:href="#shape-icon-open" /></svg>
                            </span><!--.item__casos__icon-->
                            Seguir Leyendo
                        </a><!--.btn-->
                    </div><!--.item__casos__text-->
                </div><!--.content-->
            </div><!--.item__casos-->
            <div class="item__casos">
                <div class="content">
                    <div class="item__casos__media" style="background-image: url(assets/destacado2_home.jpg);"></div>
                    <div class="item__casos__text">
                        <h2 class="item__casos__title">Solución para nueva planta de producción de Hidrógeno Indura</h2>
                        <a href="single-casos.php" class="btn btn--read" title="Seguir Leyendo">
                            <span class="item__casos__icon">
                                <svg><use xlink:href="#shape-icon-open" /></svg>
                            </span><!--.item__casos__icon-->
                            Seguir Leyendo
                        </a><!--.btn-->
                    </div><!--.item__casos__text-->
                </div><!--.content-->
            </div><!--.item__casos-->
        </div><!--.block--flex-->
    </div><!--.casos-->
    <div class="brand-container">
        <h2>Marcas</h2>
        <div class="brands js-slide">
            <ul class="brands__list slides">
                <li class="brands__list__item">
                    <span class="brand__list__image">
                        <img src="assets/logos/Cargill_black_2c_web_lg.JPG" alt="Titulo">
                    </span>
                    <span class="brand__list__image">
                        <img src="assets/logos/doble.jpg" alt="Titulo">
                    </span>
                    <span class="brand__list__image">
                        <img src="assets/logos/eaton-corporation.png" alt="Titulo">
                    </span>
                    <span class="brand__list__image">
                        <img src="assets/logos/vitzro.jpg" alt="Titulo">
                    </span>
                    <span class="brand__list__image">
                        <img src="assets/logos/IntelliSAWLogoFinal-urlStrapline%5B1%5D.png" alt="Titulo">
                    </span>
                    <span class="brand__list__image">
                        <img src="assets/logos/Plymouth_Bishop.png" alt="Titulo">
                    </span>
                </li><!--.brands__list__item-->
                <li class="brands__list__item">
                    <span class="brand__list__image">
                        <img src="assets/logos/Cargill_black_2c_web_lg.JPG" alt="Titulo">
                    </span>
                    <span class="brand__list__image">
                        <img src="assets/logos/doble.jpg" alt="Titulo">
                    </span>
                    <span class="brand__list__image">
                        <img src="assets/logos/eaton-corporation.png" alt="Titulo">
                    </span>
                    <span class="brand__list__image">
                        <img src="assets/logos/vitzro.jpg" alt="Titulo">
                    </span>
                    <span class="brand__list__image">
                        <img src="assets/logos/IntelliSAWLogoFinal-urlStrapline%5B1%5D.png" alt="Titulo">
                    </span>
                    <span class="brand__list__image">
                        <img src="assets/logos/Plymouth_Bishop.png" alt="Titulo">
                    </span>
                </li><!--.brands__list__item-->
                <li class="brands__list__item">
                    <span class="brand__list__image">
                        <img src="assets/logos/Cargill_black_2c_web_lg.JPG" alt="Titulo">
                    </span>
                    <span class="brand__list__image">
                        <img src="assets/logos/doble.jpg" alt="Titulo">
                    </span>
                    <span class="brand__list__image">
                        <img src="assets/logos/eaton-corporation.png" alt="Titulo">
                    </span>
                    <span class="brand__list__image">
                        <img src="assets/logos/vitzro.jpg" alt="Titulo">
                    </span>
                    <span class="brand__list__image">
                        <img src="assets/logos/IntelliSAWLogoFinal-urlStrapline%5B1%5D.png" alt="Titulo">
                    </span>
                    <span class="brand__list__image">
                        <img src="assets/logos/Plymouth_Bishop.png" alt="Titulo">
                    </span>
                </li><!--.brands__list__item-->
            </ul><!--.brands__list-->
        </div>
    </div><!--.brands-->
</section><!--home-->
<?php include 'footer.php'; ?>