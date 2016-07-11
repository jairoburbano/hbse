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
$page = 'smart';
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
                <li>
                    <span class="icon">
                        <svg><use xlink:href="#shape-icon-open" /></svg>
                        <svg><use xlink:href="#shape-icon-less" /></svg>
                    </span>
                    <a href="#">EQUIPOS DE DISTRIBUCIÓN</a>
                    <ul class="child">
                        <li>
                            <a href="#">Reguladores de Voltaje MT</a>
                        </li>
                        <li>
                            <a href="#">Reconectadores</a>
                        </li>
                        <li>
                            <a href="#">Seccionadores Tripolares</a>
                        </li>
                        <li>
                            <a href="#">Condensadores de Potencia</a>
                        </li>
                        <li>
                            <a href="#">Crucetas Eléctricas</a>
                        </li>
                        <li>
                            <span class="icon-child">
                                <svg><use xlink:href="#shape-icon-open" /></svg>
                                <svg><use xlink:href="#shape-icon-less" /></svg>
                            </span>
                            <a href="#">Equipos de Protección</a>
                            <ul class="third">
                                <li>
                                    <a href="#">Cut Out/Desconectadores Fusibles</a>
                                </li
                                <li>
                                    <a href="#">Pararrayos</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <span class="icon">
                        <svg><use xlink:href="#shape-icon-open" /></svg>
                        <svg><use xlink:href="#shape-icon-less" /></svg>
                    </span>
                    <a href="#">ACEITE DIELÉCTRICO VEGETAL - FR3</a>
                    <ul class="child">
                        <li>
                            <a href="#">Aceite Dieléctrico FR3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <span class="icon">
                        <svg><use xlink:href="#shape-icon-open" /></svg>
                        <svg><use xlink:href="#shape-icon-less" /></svg>
                    </span>
                    <a href="#">SISTEMAS DE AISLAMIENTO</a>
                    <ul class="child">
                        <li>
                            <span class="icon-child">
                                <svg><use xlink:href="#shape-icon-open" /></svg>
                                <svg><use xlink:href="#shape-icon-less" /></svg>
                            </span>
                            <a href="#"> Aisladores Eléctricos</a>
                            <ul class="third">
                                <li>
                                    <a href="#">Aisladores eléctricos para líneas de distribución y transmisión K-LINE </a>
                                </li>
                                <li>
                                    <a href="#">Aisladores eléctricos para líneas de distribución y transmisión LAPP</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Cintas Eléctricas Aislantes</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <span class="icon">
                        <svg><use xlink:href="#shape-icon-open" /></svg>
                        <svg><use xlink:href="#shape-icon-less" /></svg>
                    </span>
                    <a href="#">SOFTWARE DE INGENIERÍA ELÉCTRICA</a>
                    <ul class="child">
                        <li>
                            <a href="#">CYME Software para Sistemas Eléctricos de Potencia</a>
                        </li>
                        <li>
                            <a href="#">CYMCAP Software para cálculo de intensidad máxima admisible en cables de potencia</a>
                        </li>
                        <li>
                            <a href="#">CYMGRD</a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <span class="icon open">
                        <svg><use xlink:href="#shape-icon-open" /></svg>
                        <svg><use xlink:href="#shape-icon-less" /></svg>
                    </span>
                    <a href="#">MANEJO DE ACTIVOS Y EQUIPOS DE PRUEBA</a>
                    <ul class="child">
                        <li>
                            <span class="icon-child">
                                <svg><use xlink:href="#shape-icon-open" /></svg>
                                <svg><use xlink:href="#shape-icon-less" /></svg>
                            </span>
                            <a href="#">Equipos de prueba</a>
                            <ul class="third">
                                <li>
                                    <a href="#">Analizador de Barrido de Frecuencia SFRA - M5400</a>
                                </li>
                                <li>
                                    <a href="#">Diagnóstico de Relés de Protección F6150</a>
                                </li>
                                <li>
                                    <a href="#">Diagnóstico de Interruptores TDR9000</a>
                                </li>
                            </ul>
                        </li>
                        <li class="active">
                            <span class="icon-child open">
                                <svg><use xlink:href="#shape-icon-open" /></svg>
                                <svg><use xlink:href="#shape-icon-less" /></svg>
                            </span>
                            <a href="#">Monitoreo en Línea</a>
                            <ul class="third">
                                <li>
                                    <a href="#">Analizador de gases disueltos</a>
                                </li>
                                <li>
                                    <a href="#">Diagnóstico y monitoreo en línea de aislamiento de bushings IDD</a>
                                </li>
                                <li>
                                    <a href="#">De humedad en aceites dieléctricos</a>
                                </li>
                                <li>
                                    <a href="#">Análisis de gases disueltos en línea IDD</a>
                                </li>
                                <li>
                                    <a href="#">Equipo de monitoreo de corriente de fuga en pararrayos LCM II</a>
                                </li>
                                <li>
                                    <a href="#">Análisis de contaminación externa de aisladores y pararrayos IPM</a>
                                </li>
                                <li class="active">
                                    <a href="#">Monitoreo en línea de descargas parciales</a>
                                    <ul>
                                        <li class="active">
                                            <a href="#">Detección en subestaciones</a>
                                        </li>
                                        <li>
                                            <a href="#">Detección en máquinas giratorias</a>
                                        </li>
                                        <li>
                                            <a href="#">Detección en transformadores</a>
                                        </li>
                                        <li>
                                            <a href="#">Cables de potencia</a>
                                        </li>
                                        <li>
                                            <a href="#">Analizador de descargas parciales</a>
                                        </li>
                                        <li>
                                            <a href="#">Detección por método acústico</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Monitoreo Activos Críticos</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <span class="icon">
                        <svg><use xlink:href="#shape-icon-open" /></svg>
                        <svg><use xlink:href="#shape-icon-less" /></svg>
                    </span>
                    <a href="#">ACCIONAMIENTOS</a>
                    <ul class="child">
                        <li>
                            <span class="icon-child">
                                <svg><use xlink:href="#shape-icon-open" /></svg>
                                <svg><use xlink:href="#shape-icon-less" /></svg>
                            </span>
                            <a href="#">Partidores Suaves</a>
                            <ul class="third">
                                <li>
                                    <a href="#">Baja Tensión</a>
                                </li>
                                <li>
                                    <a href="#">Media Tensión</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">CCM</a>
                        </li>
                        <li>
                            <a href="#">Variadores de Frecuencia</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <span class="icon">
                        <svg><use xlink:href="#shape-icon-open" /></svg>
                        <svg><use xlink:href="#shape-icon-less" /></svg>
                    </span>
                    <a href="#">EFICIENCIA ENERGÉTICA</a>
                    <ul class="child">
                        <li>
                            <a href="#">Ductos de Barra</a>
                        </li>
                        <li>
                            <a href="#">Iluminación LED</a>
                        </li>
                        <li>
                            <a href="#">Paneles Solares Fotovoltaicos</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <span class="icon">
                        <svg><use xlink:href="#shape-icon-open" /></svg>
                        <svg><use xlink:href="#shape-icon-less" /></svg>
                    </span>
                    <a href="#">Resistencias Eléctricas</a>
                    <ul class="child">
                        <li>
                            <a href="#">Resistencias de puesta a tierra</a>
                        </li>
                        <li>
                            <a href="#">Frenado dinámico</a>
                        </li>
                        <li>
                            <a href="#">Control de motores</a>
                        </li>
                        <li>
                            <a href="#">Filtro de armónicos</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div><!--.sidebar--container-->
    </div><!--.sidebar-->
    <section class="productos">
        <p class="area">Productos »</p>
        <h1 class="title">Manejo de Activos</h1>
        <div id="calidad-de-activos" class="section__container">
            <h2 class="section__title js-title">
                <span>
                    <svg><use xlink:href="#shape-icon-open" /></svg>
                </span>
                Calidad de aislamiento
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
                                Analizador de Barrido de Frecuencia SFRA - M5400
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
                                Diagnóstico de Relés de Protección F6150
                            </span>
                        </a><!--.producto__title-->
                    </div><!--.producto__item-->
                    <div class="producto__item">
                        <a href="single-productos.php" title="titulo" class="producto__media">
                            <img src="assets/productos/tdr9000.jpg" alt="Titulo">
                            <span class="btn--icon">
                                <span>
                                    <svg><use xlink:href="#shape-icon-open" /></svg>
                                </span>
                                Ver detalles
                                </a>
                        </a><!--.producto__media-->
                        <a href="single-productos.php" title="titulo" class="producto__title">
                            <pspan
                                   Diagnóstico de Interruptores TDR9000
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