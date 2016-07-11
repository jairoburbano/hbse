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
$page = 'contacto';
$subpage = '';
$type = 'page';
$template = '';
$title = 'Contacto';
$subpage_title = ' ';
include 'header.php';  ?>
<section class="contacto">
    <h1 class="title">Contacto</h1>
    <div class="container-form">
        <form action="" class="form--contact">
            <div class="input-group">
                <label for="consulta">
                    <span>
                        Tipo de consulta
                    </span>
                </label>
                <input type="text" name="consulta" id="consulta">
            </div>
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
            <div class="lightbox-message"><div class="content__lightbox"><div class="content__lightbox__text"></div><p class="btn--icon js-close-lightbox"><span><svg><use xlink:href="#shape-icon-open" /></svg></span>Regresar</p></div></div>
        </form>
    </div>
    <div class="direccion">
        <div id="map"></div>
        <!--NOTE: este div es el marcador del mapa-->
        <!--
<div class="marker">
<svg><use xlink:href="#shape-icon-hamburguesa" /></svg>
<p>
Av. Andrés Bellos 2777, piso 10. <br>Las Condes, Santiago
</p>
</div>
-->
        <div class="direccion__item">
            <p>
                Av. Andrés Bello 2777, piso 10. Las Condes, Santiago
            </p>
            <a href="#" title="Ver mapa" class="btn--icon no-mobile">
                <span>
                    <svg><use xlink:href="#shape-icon-place" /></svg>
                </span>
                Ver en el mapa
            </a>
            <a href="https://www.google.cl/maps/place/33%C2%B024'52.0%22S+70%C2%B036'17.1%22W/@-33.414438,-70.6069317,17z/data=!3m1!4b1!4m2!3m1!1s0x0:0x0" target="_blank" title="Ver mapa" class="btn--icon mobile">
                <span>
                    <svg><use xlink:href="#shape-icon-place" /></svg>
                </span>
                movil
            </a>
        </div>
        <div class="direccion__item">
            <p>
                Av. Andrés Bello 2777, piso 10. Las Condes, Santiago
            </p>
            <a href="#" title="Ver mapa" class="btn--icon no-mobile">
                <span>
                    <svg><use xlink:href="#shape-icon-place" /></svg>
                </span>
                Ver en el mapa
            </a>
            <a href="https://www.google.cl/maps/place/33%C2%B024'52.0%22S+70%C2%B036'17.1%22W/@-33.414438,-70.6069317,17z/data=!3m1!4b1!4m2!3m1!1s0x0:0x0" target="_blank" title="Ver mapa" class="btn--icon mobile">
                <span>
                    <svg><use xlink:href="#shape-icon-place" /></svg>
                </span>
                movil
            </a>
        </div>
    </div>
</section>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script>
    function initialize() {
        //MAPA
        var myLatlng = new google.maps.LatLng(-33.418580, -70.599599);
        var thisLatlng = new google.maps.LatLng(-33.418580, -70.599599);
        var myOptions = {
            zoom: 15, //nivel de zoom
            center: myLatlng,
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: false,
            zoomControl: true,
            zoomControlOptions: {
                position: google.maps.ControlPosition.LEFT_TOP
            },
            streetViewControl: true,
            streetViewControlOptions: {
                position: google.maps.ControlPosition.LEFT_TOP
            }
        }
        var map = new google.maps.Map(document.getElementById("map"), myOptions);
        var image = 'localhost/mok/img/marker.svg'; //imagen del marcador
        var marker = new google.maps.Marker({
            position: thisLatlng,
            map: map,
            icon: image
        });
        marker.setMap(map);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<?php include 'footer.php'; ?>