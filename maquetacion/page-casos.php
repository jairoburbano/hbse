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
$page = 'casos';
$subpage = '';
$type = 'page';
$template = '';
$title = 'Casos';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="casos">
    <h1 class="title">Casos</h1>
    <div class="top-bar">
        <div class="style-select">
            <svg><use xlink:href="#shape-icon-open" /></svg>
            <select name="casos" id="casos">
                <option value="Todas las Categorias">Todas las Categorias</option>
                <option value="uno">uno</option>
            </select>
        </div>
        <ul class="paginador">
            <li>
                <a href="#" title="Titulo" class="disable">
                    <svg><use xlink:href="#shape-icon-back" /></svg>
                </a>
            </li>
            <li>
                <a href="#" title="Titulo">
                    <svg><use xlink:href="#shape-icon-next" /></svg>
                </a>
            </li>
        </ul>
    </div>
    <div class="page-casos">
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
    </div><!--.casos-page-->
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
</div><!--.casos-->
<?php include 'footer.php'; ?>