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
$page = 'Resultado';
$subpage = '';
$type = 'page';
$template = '';
$title = 'Resultado';
$subpage_title = ' ';
include 'header.php';  ?>
<section class="result">
    <div class="wrap">
        <p class="area">Resultado de busqueda »</p>
        <h1 class="title">Ut lobortis libero</h1>
        <div class="number">4 resultados</div>
        <div class="result__item">
            <a href="#" title="titulo">Aliquam sodales ante vel ex aliquet blandit</a>
            <p class="breadcrumb">
                Productos » Manejo de Activos » Monitoreo en Línea » Monitoreo en Línea de Descargas Parciales
            </p>
        </div>
        <div class="result__item">
            <a href="#" title="titulo">Integer sagittis pellentesque</a>
            <p class="breadcrumb">
                Casos » Nunc ullamcorper
            </p>
        </div>
        <div class="result__item">
            <a href="#" title="titulo">Mauris vitae sem pharetra</a>
            <p class="breadcrumb">
                Productos » Soluciones y Smart Grid » Scada de Distribución
            </p>
        </div>
        <div class="result__item">
            <a href="#" title="titulo">Sed in ipsum non mi finibus volutpat</a>
            <p class="breadcrumb">
                Ingeniería y Servicios
            </p>
        </div>
    </div>
    <ul class="paginador">
        <li>
            <a href="#" title="Titulo" class="disable">
                <svg><use xlink:href="#shape-icon-back" /></svg>
            </a>
        </li>
        <li>
            <a href="#" title="Titulo" class="current">1</a>
        </li>
        <li>
            <a href="#" title="Titulo">2</a>
        </li>
        <li>
            <a href="#" title="Titulo">3</a>
        </li>
        <li>
            <a href="#" title="Titulo">4</a>
        </li>
        <li>
            <a href="#" title="Titulo">5</a>
        </li>
        <li>
            <a href="#" title="Titulo">
                <svg><use xlink:href="#shape-icon-next" /></svg>
            </a>
        </li>
    </ul>
</section>
<?php include 'footer.php'; ?>