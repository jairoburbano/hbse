<?php
/**
 * template-{Valor}.php
 *
 *
 * @package		hbse
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		1.0.0
 *
 */
$page = 'productos';
$subpage = '';
$type = 'page';
$template = '';
$title = 'Productos';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="top--elements">
    <div class="content--search">
        <form class="search-bar--inside" action="page-result.php">
            <div class="input-group">
                <input type="text" placeholder="Buscar en el sitio">
            </div><!--.input-group-->
            <div class="send-group">
                <input type="submit" value=" " class="send">
                <span class="js-search">
                    <svg><use xlink:href="#shape-icon-lupa" /></svg>
                </span>
            </div><!--.send-group-->
        </form><!--.search-bar--inside-->
    </div><!--.content--search-->
</div><!--.top--elements-->
<div class="wrap productos-page js-productos">
    <div class="sidebar">
        <h3>Productos</h3>
        <div class="sidebar--container">
            <div class="text--sidebar js-sidebar-text">
                <svg><use xlink:href="#shape-icon-open" /></svg>
                <p>
                    Seleccionar
                </p>
            </div>
            <ul class="js-sidebar-list">
                <li class="list__item">
                    <span class="icon">
                        <svg><use xlink:href="#shape-icon-open" /></svg>
                        <svg><use xlink:href="#shape-icon-less" /></svg>
                    </span>
                    <a href="page-productos.php">EQUIPOS DE DISTRIBUCIÓN</a>
                    <ul class="child">
                        <li>
                            <a href="page-productos.php">Reconectadores</a>
                        </li>
                        <li>
                            <a href="page-productos.php">Reguladores de Voltaje MT</a>
                        </li>
                        <li>
                            <a href="page-productos.php">Seccionadores</a>
                        </li>
                        <li>
                            <a href="page-productos.php">Condensadores</a>
                        </li>
                        <li>
                            <a href="page-productos.php">Desconectadores</a>
                        </li>
                        <li>
                            <a href="page-productos.php">Cut Out</a>
                        </li>
                        <li>
                            <a href="page-productos.php">Pararrayos</a>
                        </li>
                    </ul>
                </li>
                <li class="list__item">
                    <span class="icon">
                        <svg><use xlink:href="#shape-icon-open" /></svg>
                        <svg><use xlink:href="#shape-icon-less" /></svg>
                    </span>
                    <a href="page-productos.php">ACEITE DIELÉCTRICO VEGETAL - FR3</a>
                    <ul class="child">
                        <li>
                            <a href="page-productos.php">Aceite Dieléctrico FR3</a>
                        </li>
                    </ul>
                </li>
                <li class="list__item">
                    <span class="icon">
                        <svg><use xlink:href="#shape-icon-open" /></svg>
                        <svg><use xlink:href="#shape-icon-less" /></svg>
                    </span>
                    <a href="page-productos.php">SISTEMAS DE AISLAMIENTO</a>
                    <ul class="child">
                        <li>
                            <a href="#"> Aisladores Eléctricos</a>
                        </li>
                        <li>
                            <a href="page-productos.php">Cintas Eléctricas Aislantes</a>
                        </li>
                    </ul>
                </li>
                <li class="list__item">
                    <span class="icon">
                        <svg><use xlink:href="#shape-icon-open" /></svg>
                        <svg><use xlink:href="#shape-icon-less" /></svg>
                    </span>
                    <a href="#">SOFTWARE DE INGENIERÍA ELÉCTRICA</a>
                    <ul class="child">
                        <li>
                            <a href="page-productos.php">CYME Software para Sistemas Eléctricos de Potencia</a>
                        </li>
                        <li>
                            <a href="page-productos.php">CYMCAP Software para cálculo de intensidad máxima admisible en cables de potencia</a>
                        </li>
                        <li>
                            <a href="page-productos.php">CYMGRD</a>
                        </li>
                    </ul>
                </li>
                <li class="list__item active">
                    <span class="icon open">
                        <svg><use xlink:href="#shape-icon-open" /></svg>
                        <svg><use xlink:href="#shape-icon-less" /></svg>
                    </span>
                    <a href="page-productos.php">MANEJO DE ACTIVOS Y EQUIPOS DE PRUEBA</a>
                    <ul class="child">
                        <li>
                            <a href="page-productos.php">Equipos de prueba</a>
                        </li>
                        <li class="active">
                            <a href="#">Monitoreo en Línea</a>
                        </li>
                        <li>
                            <a href="page-productos.php">Temperaturas</a>
                        </li>
                    </ul>
                </li>
                <li class="list__item">
                    <span class="icon">
                        <svg><use xlink:href="#shape-icon-open" /></svg>
                        <svg><use xlink:href="#shape-icon-less" /></svg>
                    </span>
                    <a href="page-productos.php">ACCIONAMIENTOS</a>
                    <ul class="child">
                        <li>
                            <a href="page-productos.php">Partidores Suaves</a>
                        </li>
                        <li>
                            <a href="page-productos.php">CCM</a>
                        </li>
                        <li>
                            <a href="page-productos.php">Variadores de Frecuencia</a>
                        </li>
                    </ul>
                </li>
                <li class="list__item">
                    <span class="icon">
                        <svg><use xlink:href="#shape-icon-open" /></svg>
                        <svg><use xlink:href="#shape-icon-less" /></svg>
                    </span>
                    <a href="#">EFICIENCIA ENERGÉTICA</a>
                    <ul class="child">
                        <li>
                            <a href="page-productos.php">Ductos de Barra</a>
                        </li>
                        <li>
                            <a href="page-productos.php">Iluminación LED</a>
                        </li>
                        <li>
                            <a href="page-productos.php">Paneles Solares Fotovoltaicos</a>
                        </li>
                    </ul>
                </li>
                <li class="list__item">
                    <span class="icon">
                        <svg><use xlink:href="#shape-icon-open" /></svg>
                        <svg><use xlink:href="#shape-icon-less" /></svg>
                    </span>
                    <a href="page-productos.php">RESISTENCIAS ELÉCTRICAS</a>
                    <ul class="child">
                        <li>
                            <a href="page-productos.php">Resistencias de puesta a tierra</a>
                        </li>
                        <li>
                            <a href="page-productos.php">Frenado dinámico</a>
                        </li>
                        <li>
                            <a href="page-productos.php">Control de motores</a>
                        </li>
                        <li>
                            <a href="page-productos.php">Filtro de armónicos</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div><!--.sidebar--container-->
    </div><!--.sidebar-->
    <section class="productos">
        <p class="area">Productos »</p>
        <h1 class="title">EQUIPOS DE DISTRIBUCIÓN</h1>
        <div id="calidad-de-activos" class="section__container">
            <h2 class="section__title js-title">
                <span>
                    <svg><use xlink:href="#shape-icon-open" /></svg>
                </span>
                Reconectadores
            </h2>
            <div class="contenido js--contenido">
                <div class="section__content">
                    <div class="producto__item">
                        <a href="single-productos.php" title="titulo" class="producto__media">
                            <img src="assets/productos/m5400.jpg" alt="Titulo">
                            <span class="btn--icon">
                                <span>
                                    <svg><use xlink:href="#shape-icon-open" /></svg>
                                </span>
                                Ver detalles
                            </span>
                        </a><!--.producto__media-->
                        <a href="single-productos.php" title="titulo" class="producto__title">
                            <span>
                                Reconectador trifasico <br>KNOVA
                            </span>
                        </a><!--.producto__title-->
                    </div><!--.producto__item-->
                    <div class="producto__item">
                        <a href="single-productos.php" title="titulo" class="producto__media">
                            <img src="assets/productos/f6150.jpg" alt="Titulo">
                            <span class="btn--icon">
                                <span>
                                    <svg><use xlink:href="#shape-icon-open" /></svg>
                                </span>
                                Ver detalles
                            </span>
                        </a><!--.producto__media-->
                        <a href="single-productos.php" title="titulo" class="producto__title">
                            <span>
                                Reconectador monofasico KNOVA
                            </span>
                        </a><!--.producto__title-->
                    </div><!--.producto__item-->
                </div><!--section__content-->
            </div><!--contenido-->
        </div><!--.section__container-->
        <div id="monitoreo-en-linea" class="section__container">
            <h2 class="section__title js-title">
                <span>
                    <svg><use xlink:href="#shape-icon-open" /></svg>
                </span>
                Monitoreo en Línea
            </h2>
            <div class="contenido js--contenido">
                <div class="section__content">
                    <div class="producto__item">
                        <a href="single-productos.php" title="titulo" class="producto__media">
                            <img src="assets/productos/delphi.jpg" alt="Titulo">
                            <span class="btn--icon">
                                <span>
                                    <svg><use xlink:href="#shape-icon-open" /></svg>
                                </span>
                                Ver detalles
                            </span>
                        </a><!--.producto__media-->
                        <a href="single-productos.php" title="titulo" class="producto__title">
                            <span>
                                Analizador de gases disueltos
                            </span>
                        </a><!--.producto__title-->
                    </div><!--.producto__item-->
                    <div class="producto__item">
                        <a href="single-productos.php" title="titulo" class="producto__media">
                            <img src="assets/productos/genIDD.jpg" alt="Titulo">
                            <span class="btn--icon">
                                <span>
                                    <svg><use xlink:href="#shape-icon-open" /></svg>
                                </span>
                                Ver detalles
                            </span>
                        </a><!--.producto__media-->
                        <a href="single-productos.php" title="titulo" class="producto__title">
                            <span>
                                Diagnóstico y monitoreo en línea de aislamiento de bushings IDD
                            </span>
                        </a><!--.producto__title-->
                    </div><!--.producto__item-->
                    <div class="producto__item">
                        <a href="single-productos.php" title="titulo" class="producto__media">
                            <img src="assets/productos/genDOMINO.jpg" alt="Titulo">
                            <span class="btn--icon">
                                <span>
                                    <svg><use xlink:href="#shape-icon-open" /></svg>
                                </span>
                                Ver detalles
                            </span>
                        </a><!--.producto__media-->
                        <a href="single-productos.php" title="titulo" class="producto__title">
                            <span>
                                De humedad en aceites dieléctricos
                            </span>
                        </a><!--.producto__title-->
                    </div><!--.producto__item-->
                    <div class="producto__item">
                        <a href="single-productos.php" title="titulo" class="producto__media">
                            <img src="assets/productos/An%E2%80%A0lisis-de-gases-disueltos-en-linea.jpg" alt="Titulo">
                            <span class="btn--icon">
                                <span>
                                    <svg><use xlink:href="#shape-icon-open" /></svg>
                                </span>
                                Ver detalles
                            </span>
                        </a><!--.producto__media-->
                        <a href="single-productos.php" title="titulo" class="producto__title">
                            <span>
                                Análisis de gases disueltos en líena IDD
                            </span>
                        </a><!--.producto__title-->
                    </div><!--.producto__item-->
                    <div class="producto__item">
                        <a href="single-productos.php" title="titulo" class="producto__media">
                            <img src="assets/productos/genLCM-II.jpg" alt="Titulo">
                            <span class="btn--icon">
                                <span>
                                    <svg><use xlink:href="#shape-icon-open" /></svg>
                                </span>
                                Ver detalles
                            </span>
                        </a><!--.producto__media-->
                        <a href="single-productos.php" title="titulo" class="producto__title">
                            <span>
                                Equipo de monitoreo de corriente de fuga en pararrayos LCM II
                            </span>
                        </a><!--.producto__title-->
                    </div><!--.producto__item-->
                    <div class="producto__item">
                        <a href="single-productos.php" title="titulo" class="producto__media">
                            <img src="assets/productos/genIPM.jpg" alt="Titulo">
                            <span class="btn--icon">
                                <span>
                                    <svg><use xlink:href="#shape-icon-open" /></svg>
                                </span>
                                Ver detalles
                            </span>
                        </a><!--.producto__media-->
                        <a href="single-productos.php" title="titulo" class="producto__title">
                            <span>
                                Análisis de contaminación externa de aisladores y pararrayos IPM
                            </span>
                        </a><!--.producto__title-->
                    </div><!--.producto__item-->
                </div><!--section__content-->
                <div id="monitoreo-en-linea-de-descargas-parciales" class="sub__content">
                    <h3>Monitoreo en Línea de descargas parciales</h3>
                    <div class="section__content">
                        <div class="producto__item">
                            <a href="single-productos.php" title="titulo" class="producto__media">
                                <img src="assets/productos/Monitoreo%20de%20activos%20cr%C3%ADticos.png" alt="Titulo">
                                <span class="btn--icon">
                                    <span>
                                        <svg><use xlink:href="#shape-icon-open" /></svg>
                                    </span>
                                    Ver detalles
                                </span>
                            </a><!--.producto__media-->
                            <a href="single-productos.php" title="titulo" class="producto__title">
                                <span>
                                    Detección en subestaciones
                                </span>
                            </a><!--.producto__title-->
                        </div><!--.producto__item-->
                        <div class="producto__item">
                            <a href="single-productos.php" title="titulo" class="producto__media">
                                <img src="assets/productos/gensubes1.jpg" alt="Titulo">
                                <span class="btn--icon">
                                    <span>
                                        <svg><use xlink:href="#shape-icon-open" /></svg>
                                    </span>
                                    Ver detalles
                                </span>
                            </a><!--.producto__media-->
                            <a href="single-productos.php" title="titulo" class="producto__title">
                                <span>
                                    Detección en máquinas giratorias
                                </span>
                            </a><!--.producto__title-->
                        </div><!--.producto__item-->
                        <div class="producto__item">
                            <a href="single-productos.php" title="titulo" class="producto__media">
                                <img src="assets/productos/gentransf.jpg" alt="Titulo">
                                <span class="btn--icon">
                                    <span>
                                        <svg><use xlink:href="#shape-icon-open" /></svg>
                                    </span>
                                    Ver detalles
                                </span>
                            </a><!--.producto__media-->
                            <a href="single-productos.php" title="titulo" class="producto__title">
                                <span>
                                    Detección en transformadores
                                </span>
                            </a><!--.producto__title-->
                        </div><!--.producto__item-->
                        <div class="producto__item">
                            <a href="single-productos.php" title="titulo" class="producto__media">
                                <img src="assets/productos/Cables%20de%20potencia.png" alt="Titulo">
                                <span class="btn--icon">
                                    <span>
                                        <svg><use xlink:href="#shape-icon-open" /></svg>
                                    </span>
                                    Ver detalles
                                </span>
                            </a><!--.producto__media-->
                            <a href="single-productos.php" title="titulo" class="producto__title">
                                <span>
                                    Cables de potencia
                                </span>
                            </a><!--.producto__title-->
                        </div><!--.producto__item-->
                        <div class="producto__item">
                            <a href="single-productos.php" title="titulo" class="producto__media">
                                <img src="assets/productos/gendescpar.jpg" alt="Titulo">
                                <span class="btn--icon">
                                    <span>
                                        <svg><use xlink:href="#shape-icon-open" /></svg>
                                    </span>
                                    Ver detalles
                                </span>
                            </a><!--.producto__media-->
                            <a href="single-productos.php" title="titulo" class="producto__title">
                                <span>
                                    Analizador de descargas parciales
                                </span>
                            </a><!--.producto__title-->
                        </div><!--.producto__item-->
                        <div class="producto__item">
                            <a href="single-productos.php" title="titulo" class="producto__media">
                                <img src="assets/productos/genacustic.jpg" alt="Titulo">
                                <span class="btn--icon">
                                    <span>
                                        <svg><use xlink:href="#shape-icon-open" /></svg>
                                    </span>
                                    Ver detalles
                                </span>
                            </a><!--.producto__media-->
                            <a href="single-productos.php" title="titulo" class="producto__title">
                                <span>
                                    Detección por método acústico
                                </span>
                            </a><!--.producto__title-->
                        </div><!--.producto__item-->
                    </div><!--section__content-->
                </div><!--.sub__content-->
            </div><!--contenido-->
        </div><!--.section__container-->
        <div id="monitoreo-de-activos-criticos" class="section__container">
            <h2 class="section__title js-title">
                <span>
                    <svg><use xlink:href="#shape-icon-open" /></svg>
                </span>
                Monitoreo de activos Críticos
            </h2>
            <div class="contenido js--contenido">
                <div class="section__content">
                    <div class="producto__item">
                        <a href="single-productos.php" title="titulo" class="producto__media">
                            <img src="assets/productos/Monitoreo%20de%20activos%20cr%C3%ADticos.png" alt="Titulo">
                            <span class="btn--icon">
                                <span>
                                    <svg><use xlink:href="#shape-icon-open" /></svg>
                                </span>
                                Ver detalles
                            </span>
                        </a><!--.producto__media-->
                    </div><!--.producto__item-->
                </div><!--section__content-->
            </div><!--contenido-->
        </div><!--.section__container-->
    </section><!--.productos-->
</div><!--.wrap-->
<div class="brand-container">
    <h2>Marcas</h2>
    <div class="brands js-slide">
        <ul class="brands__list slides">
            <li class="brands__list__item">
                <a href="#" title="titulo">
                    <img src="assets/logos/Cargill_black_2c_web_lg.JPG" alt="Titulo">
                </a>
                <a href="#" title="titulo">
                    <img src="assets/logos/doble.jpg" alt="Titulo">
                </a>
                <a href="#" title="titulo">
                    <img src="assets/logos/eaton-corporation.png" alt="Titulo">
                </a>
                <a href="#" title="titulo">
                    <img src="assets/logos/vitzro.jpg" alt="Titulo">
                </a>
                <a href="#" title="titulo">
                    <img src="assets/logos/IntelliSAWLogoFinal-urlStrapline%5B1%5D.png" alt="Titulo">
                </a>
                <a href="#" title="titulo">
                    <img src="assets/logos/Plymouth_Bishop.png" alt="Titulo">
                </a>
            </li><!--.brands__list__item-->
            <li class="brands__list__item">
                <a href="#" title="titulo">
                    <img src="assets/logos/Cargill_black_2c_web_lg.JPG" alt="Titulo">
                </a>
                <a href="#" title="titulo">
                    <img src="assets/logos/doble.jpg" alt="Titulo">
                </a>
                <a href="#" title="titulo">
                    <img src="assets/logos/eaton-corporation.png" alt="Titulo">
                </a>
                <a href="#" title="titulo">
                    <img src="assets/logos/IntelliSAWLogoFinal-urlStrapline%5B1%5D.png" alt="Titulo">
                </a>
                <a href="#" title="titulo">
                    <img src="assets/logos/Plymouth_Bishop.png" alt="Titulo">
                </a>
                <a href="#" title="titulo">
                    <img src="assets/logos/vitzro.jpg" alt="Titulo">
                </a>
            </li><!--.brands__list__item-->
            <li class="brands__list__item">
                <a href="#" title="titulo">
                    <img src="assets/logos/Cargill_black_2c_web_lg.JPG" alt="Titulo">
                </a>
                <a href="#" title="titulo">
                    <img src="assets/logos/doble.jpg" alt="Titulo">
                </a>
                <a href="#" title="titulo">
                    <img src="assets/logos/eaton-corporation.png" alt="Titulo">
                </a>
                <a href="#" title="titulo">
                    <img src="assets/logos/IntelliSAWLogoFinal-urlStrapline%5B1%5D.png" alt="Titulo">
                </a>
                <a href="#" title="titulo">
                    <img src="assets/logos/Plymouth_Bishop.png" alt="Titulo">
                </a>
                <a href="#" title="titulo">
                    <img src="assets/logos/vitzro.jpg" alt="Titulo">
                </a>
            </li><!--.brands__list__item-->
        </ul><!--.brands__list-->
    </div>
</div><!--.brands-->
<?php include 'footer.php'; ?>