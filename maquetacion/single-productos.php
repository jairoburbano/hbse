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
$subpage = 'single-producto';
$type = 'page';
$template = '';
$title = 'Productos';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="wrap productos-page single--productos">
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
                    <span class="icon">
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
                        <li>
                            <span class="icon-child">
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
    <section class="productos single-producto">
        <h1 class="title">Detección en subestaciones</h1>
        <h2 class="single__marca">Marca</h2>
        <div class="columns">
            <div class="column">
                <div class="content">
                    <p>
                        Las unidades de propósito general DG1 son parte de la nueva generación de la serie PowerXL Eaton de convertidores de frecuencia diseñados específicamente para aplicaciones comerciales e industriales más exigentes de hoy en día. Con un algoritmo líder en la industria de energía eficiente, alta capacidad de corriente de cortocircuito y diseño robusto, el DG1 ofrece a los clientes una mayor seguridad y fiabilidad.
                    </p>
                    <p>
                        Se caracteriza por su facilidad de uso y por su tamaño compacto.
                    </p>
                    <h3>Aceptación global:</h3>
                    <ul>
                        <li>UL®, CE, cUL®, RoHS, C-Tick</li>
                    </ul>
                    <h3>Versiones</h3>
                    <ul>
                        <li>
                            230 a 125 CV, 310A, 90 kW
                        </li>
                        <li>
                            480V a 250 CV, 310A, 160 kW
                        </li>
                        <li>
                            575V a 250 hp, 250 A, 160 kW
                        </li>
                        <li>
                            Tipo 1 / IP21 o Tipo 12 / IP54 embalaje
                        </li>
                    </ul>
                </div><!--.content-->
            </div><!--.column-->
            <div class="column">
                <div class="producto__item">
                    <div class="producto__media">
                        <img src="assets/productos/Monitoreo%20de%20activos%20cr%C3%ADticos.png" alt="Titulo">
                    </div><!--.producto__media-->
                </div><!--.producto__item-->
                <div class="download">
                    <h2>Descargas</h2>
                    <a href="#" title="Titulo" class="btn--icon">
                        <span>
                            <svg><use xlink:href="#shape-icon-download" /></svg>
                        </span>
                        Descargar ficha
                    </a>
                    <a href="#" title="Titulo" class="btn--icon">
                        <span>
                            <svg><use xlink:href="#shape-icon-download" /></svg>
                        </span>
                        Aplicaciones
                    </a>
                    <a href="#" title="Titulo" class="btn--icon">
                        <span>
                            <svg><use xlink:href="#shape-icon-download" /></svg>
                        </span>
                        Catalogo
                    </a>
                </div>
            </div><!--.column-->
        </div><!--.columns-->
    </section><!--.productos-->
    <section class="contacto contacto-productos">
        <h1 class="title">Contacto</h1>
        <div class="team__item">
            <div class="team__media">
                <img src="assets/team/equipo01.jpg" alt="Titulo">
            </div>
            <div class="team__text">
                <h3 class="team__name">Victor Maldonado</h3>
                <p class="team__cargo">Utility &amp; OEM</p>
                <a href="mailto:vmaldonado@hbse.cl" class="team__mail">
                    <span>
                        <svg><use xlink:href="#shape-icon-mail" /></svg>
                    </span>
                    vmaldonado@hbse.cl
                </a>
                <a href="tel:+56224120835" class="team__phone">
                    <span>
                        <svg><use xlink:href="#shape-icon-cel" /></svg>
                    </span>
                    +56 2 2412 0835
                </a>
            </div><!--.team__text-->
        </div><!--.team__item-->
        <div class="container-form">
            <form action="" class="form--contact">
                <div class="input-group">
                    <label for="name">
                        <span>
                            Nombre*
                        </span>
                    </label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="input-group">
                    <label for="mail">
                        <span>
                            Email*
                        </span>
                    </label>
                    <input type="email" name="mail" id="mail">
                </div>
                <div class="input-group">
                    <label for="phone">
                        <span>
                            Telefono
                        </span>
                    </label>
                    <input type="text" name="phone" id="phone">
                </div>
                <div class="input-group">
                    <label for="empresa">
                        <span>
                            Empresa
                        </span>
                    </label>
                    <input type="text" name="empresa" id="empresa">
                </div>
                <div class="input-group big">
                    <label for="mensaje">
                        Mensaje
                    </label>
                    <textarea name="mensaje" id="mensaje"></textarea>
                </div>
                <div class="send__group">
                    <p>* Campos obligatorios</p>
                    <div class="send">
                        <span class="icon">
                            <svg><use xlink:href="#shape-icon-next" /></svg>
                        </span>
                        <input type="submit" value="Enviar">
                    </div>
                </div>
                <div class="lightbox-message">
                    <div class="content__lightbox">
                        <div class="content__lightbox__text">
                        </div>
                        <p class="btn--icon js-close-lightbox">
                            <span>
                                <svg><use xlink:href="#shape-icon-open" /></svg>
                            </span>
                            Regresar
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div><!--.wrap-->
<a href="page-productos.php" title="Volver a Casos" class="go-back">
    <svg><use xlink:href="#shape-icon-back" /></svg>
    <span>Volver a electronica y potencia</span>
</a>
<?php include 'footer.php'; ?>