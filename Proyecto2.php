<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>EXTREMODURO</title>
    <link rel="stylesheet" type="text/css" href="estilos2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="imagenes/paratodoslospublicos.ico">
</head>
<body>
    <header>  
        <div id="marca">
            <div>
                <img src="imagenes/logo.jpg" id="logo" alt= Logo Extremoduro>
            </div>
        </div>   
        
 <!-- ^^^^^^^^^^^^^^^^^^^^^^^^ --><!-- ^^^^^^^^^^^^^^^^^^^^^^^^ --><!-- ^^^^^^^^^^^^^^^^^^^^^^^^ -->        
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^ --><!-- ^^^^^^^^^^^^^^^^^^^^^^^^ --><!-- ^^^^^^^^^^^^^^^^^^^^^^^^ -->
        <nav id="botonera"> 
            <ul>
                <li><a href="#inicio" >INICIO</a></li>
                <li><a href="#Merchandising">MERCHANDISING</a></li>
                <li><a  href="#gira">GIRA</a></li>
                <li><a href="#contacto">CONTACTO</a></li>
                <li><a href="#">NUEVA SECCION</a></li>
            </ul>
        </nav>
    </header>

<section id= "inicio">
        <div><img src="imagenes/gira.jpg" id="extremo" alt= RobeYUoho></div>
        <div  id="anuncio">ACTUALIZACIÓN INFORMATIVA AL 29-06-2020 

            <p id="atentos">¡ATENTOS!</p>           
            <p>¡Hola a todos!<br></p>
            <p>Estamos teniendo problemas para anunciar las fechas. Seguimos pensando que la obligación de todos es estar preparados para trabajar justo en el momento que se pueda. Pero nadie sabe si vamos a poder tocar en otoño, y estamos teniendo todo tipo de dificultades. Por eso de momento no podemos anunciarlas.<br></p>
            <p>La idea era que la gira empezara a finales de agosto o principios de septiembre. Así que vamos a fijar el 31 de julio para saber si se hace o no. Si ese día ya no hay absolutamente ninguna restricción ni de aforos ni de mascarillas ni de geles ni de poder abrazarse y besarse con lengua con desconocidos, entonces haremos la gira. Si ese día no ha salido ningún tratamiento efectivo y continuamos teniendo que mantener las distancias, entonces la llevaremos a primavera del año que viene.<br></p>
            <p>Hemos exigido a la promotora Live Nation, como condición, que devuelva el dinero de las entradas a quien lo solicite, aunque no estén anunciadas las nuevas fechas concretas. Nuestro acuerdo con ellos dice que están obligados a gestionar la devolución del importe íntegro al que lo pida, inmediatamente después de anunciarse la suspensión o aplazamiento de los conciertos.<br></p>
            <p>Si siguen obcecados en su postura, lo siguiente será ponerlo en conocimiento de un juez.<br></p>
            <p>¡Besos y abrazos!<br></p>
                Robe
        </div>
        <div id="suscribirse">
            <form method="POST">
                <p>Suscríbete para recibir info actualizada</p>
                <p><input id="nombre_suscribirse" type="text" name="name" placeholder="Nombre"></p>
                <p><input id ="email_suscribirse" type="email" name="email" placeholder="Email"></p>
                <p><input id= "submit_suscribirse" type="submit" name="register"></p>
            </form>
                    <?php
                    include("formulario_registro.php");
                    ?>
        </div>
</section>
  <!-- ^^^^^^^^^^^^^^^^^^^^^^^^ --><!-- ^^^^^^^^^^^^^^^^^^^^^^^^ --><!-- ^^^^^^^^^^^^^^^^^^^^^^^^ -->
  <!-- ^^^^^^^^^^^^^^^^^^^^^^^^ --><!-- ^^^^^^^^^^^^^^^^^^^^^^^^ --><!-- ^^^^^^^^^^^^^^^^^^^^^^^^ -->  
<section id="Merchandising">  
            <div id=fila1_izq>
                <h2 id=txt_fila1_izq><a href="#">Libros</a></h2>
            </div>
            <div id=fila1_cen_izq>
                <h2 id=txt_fila1_cen_izq><a href="#">Música</a></h2>
            </div>
            <div id=fila1_cen_der>
                <h2 id=txt_fila1_cen_der><a href="#">Camisetas</a></h2> 
            </div>
            <div id=fila1_der>
                <h2 id=txt_fila1_der><a href="#">Sudaderas</a></h2>
            </div>
            <div id=fila2_izq>
                <h2 id=txt_fila2_izq><a href="#">Hombre</a></h2>
            </div>
            <div id=fila2_cen_izq>
                <h2 id=txt_fila2_cen_izq><a href="#">Mujer</a></h2>
            </div>
            <div id=fila2_cen_der>
                <h2 id=txt_fila2_cen_der><a href="#">Complementos</a></h2>
            </div>
            <div id=fila2_der>
                <h2 id=txt_fila2_der><a href="#">Vinilos</a></h2>
            </div>
           
            <div id=fila3_izq> <h3> <strong>GASTOS DE ENVÍO INCLUIDOS </strong></h3>
                <div>En todos los pedidos peninsulares superiores a 50€</div>
            </div>
            <div id=fila3_cen> <h3><strong>ENVÍOS INTERNACIONALES</strong></h3>
                <div>Servicios de transporte eficaces a cualquier parte del mundo</div>
            </div>
            <div id=fila3_der> <h3><strong>MERCHANDISING OFICIAL</strong></h3>
                <div> Todo el merchandising es 100% oficial y de calidad </div>
            </div>
</section>
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^ --><!-- ^^^^^^^^^^^^^^^^^^^^^^^^ --><!-- ^^^^^^^^^^^^^^^^^^^^^^^^ -->
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^ --><!-- ^^^^^^^^^^^^^^^^^^^^^^^^ --><!-- ^^^^^^^^^^^^^^^^^^^^^^^^ -->

<section id="gira">
        <nav id="btn_gira">
            <ul>
                <li><a href="Proyecto2.php?id=ma#gira">Madrid</a></li>
                <li><a href="Proyecto2.php?id=ba#gira">Barcelona</a></li>
                <li><a href="Proyecto2.php?id=sv#gira">Sevilla</a></li>
                <li><a href="Proyecto2.php?id=va#gira">Valencia</a></li>
                <li><a href="Proyecto2.php?id=bi#gira">Bilbao</a></li>
                <li><a href="Proyecto2.php?id=ca#gira">Cáceres</a></li>
                <li><a href="Proyecto2.php?id=mu#gira">Murcia</a></li>
                <li><a href="Proyecto2.php?id=sdc#gira">Santiago de Compostela</a></li>                                  
            </ul>
        </nav>
        <?php
        if (isset($_GET['id'])) {
        
            switch ($_GET['id']) {
                    
                case 'ma':  
                    $fecha ='VIERNES 04 JUNIO';
                    $estadio= 'Auditorio Miguel Ríos'; 
                    $lugar= 'MADRID';
                    $imagen= 'madrid.jpg';
                    break;

                    case 'ba':  
                    $fecha ='SÁBADO 05 JUNIO';
                    $estadio= 'Parc de Can Zam'; 
                    $lugar= 'BARCELONA';    
                    $imagen= 'barcelona.jpg';
                    break;  

                    case 'sv':  
                    $fecha ='DOMINGO 6 JUNIO';
                    $estadio= 'Estadio de La Cartuja'; 
                    $lugar= 'SEVILLA';
                    $imagen= 'sevilla.jpg';
                    break;

                    case 'va':  
                        $fecha ='LUNES 7 DE JUNIO';
                        $estadio= 'Auditorio Marina Sur'; 
                        $lugar= 'VALENCIA';
                        $imagen= 'valencia.jpg';
                        break;  
                        
                    case 'bi':  
                        $fecha ='MARTES 8 JUNIO';
                        $estadio= 'Kobetamendi'; 
                        $lugar= 'BILBAO';
                        $imagen= 'bilbao.jpg';
                        break;           

                    case 'ca':  
                        $fecha ='MIÉRCOLES 9 JUNIO';
                        $estadio= 'Recinto Feria'; 
                        $lugar= 'CÁCERES';
                        $imagen= 'caceres.jpg';
                        break;    

                    case 'mu':  
                        $fecha ='JUEVES 10 JUNIO';
                        $estadio= 'La FICA'; 
                        $lugar= 'MURCIA';
                        $imagen= 'murcia.jpg';
                        break;    

                    case 'sdc':  
                        $fecha ='DOMINGO 11 JUNIO';
                        $estadio= 'Monte de Gozo'; 
                        $lugar= 'SANTIAGO DE COMPOSTELA';
                        $imagen= 'santiagodecompostela.jpg';
                        break;    
            }

         ?>

        <div id="cont_gira">
            <div id="img_gira">
                <img src="imagenes/<?php echo $imagen; ?>">
            </div>
            <article id="info_gira">

                <p id="titulo_lugar">
                    <?php echo $lugar; ?> 
                </p>
                <p id= "titulo_fecha">
                    <?php echo $fecha; ?>
                </h3>
                <p id= "titulo_estadio">
                    <?php echo $estadio; ?>
                </p>
                   
            </article>    
        </div>
        <?php
        }  else { ?>

            <h3> Selecciona una provincia para obtener mayor información</h3>
        <?php    
        }
        ?>
</section>
 <!-- ^^^^^^^^^^^^^^^^^^^^^^^^ --><!-- ^^^^^^^^^^^^^^^^^^^^^^^^ --><!-- ^^^^^^^^^^^^^^^^^^^^^^^^ -->
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^ --><!-- ^^^^^^^^^^^^^^^^^^^^^^^^ --><!-- ^^^^^^^^^^^^^^^^^^^^^^^^ -->

<section id=contacto>

   <div id= "img_contacto"> 
   <div id=caja_contacto> 
        <form id=form_contacto> Deje aquí vuestro comentario
                <input id= "nombre" type="text" placeholder="Nombre" name= "nombre">
                <input id= "email" type="email" placeholder="Email" name= "email">
                <textarea placeholder="Mensaje" name="msg"></textarea> 
                <input id="submit_contacto" type="submit" >
        </form>
    </div>
    <div id="aviso_contacto">
        <p>
         Aquí podéis contactar con nuestra oficina 
         <a href="mailto:contact@extremoduro.com">contact@extremoduro.com</a>
        </p>
        <p>
        Os adelantamos que, en general, no vamos a grabar vídeo-saludos, hacernos fotos, felicitaciones de cumpleaños, pedidas de mano y este tipo de cosas. Si lo hiciéramos, no podríamos dedicarnos a nuestro trabajo.
        </p>
        <p>
            Esperamos que nos comprendáis.
        </p>
    </div>  
    </div>   
</section>    

<!-- ^^^^^^^^^^^^^^^^^^^^^^^^ --><!-- ^^^^^^^^^^^^^^^^^^^^^^^^ --><!-- ^^^^^^^^^^^^^^^^^^^^^^^^ -->
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^ --><!-- ^^^^^^^^^^^^^^^^^^^^^^^^ --><!-- ^^^^^^^^^^^^^^^^^^^^^^^^ -->
  
    <footer>  
        <nav id="otra_info"> <strong>OTRA INFORMACIÓN</strong> 
                <ul>
                    <li><a href="#AvisoLegal" href="https://extremoduro.com/tienda/contenido/extremoduro-aviso-legal">Aviso Legal</a></li>
                    <li><a href="#Política de envíos y devoluciones">Política de envíos y devoluciones</a></li>
                    <li><a href="#Política de Cookies">Política de Cookies</a></li>
                    <li><a href="#Pagos seguros">Pagos seguros</a></li>

                </ul>
            </nav>
            <div id="el_drome"> <strong>EL DROMEDARIO RECORDS</strong>
                <div>Avenida de los Deportes 4, 1ºA. CP:31010 Barañáin (Navarra)</div>
                <div>628 198 983 (L-V, de 10h a14h / 16h a 19h)</div>
            </div>
  
            <div id="datos"><strong>Nuestras Redes</strong>
                <nav id="redes">
                    <ul>
                        <li>
                            <a  href="https://www.facebook.com/ElDromedarioRecords/" target="_blank">
                                <img id="facebook" src="imagenes/facebook.svg" alt="Facebook">
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/eldromedariorecords/?hl=es" target="_blank">
                                <img id="instagram" src="imagenes/instagram.svg" alt="Instagram">
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/dromedariorock?lang=es"target="_blank" >
                                <img id="twitter" src="imagenes/twitter.svg"alt="Twitter">
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/user/dromedariorecords" target="_blank">
                                <img id="youtube" src="imagenes/youtube.svg" alt="Youtube">
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div id="medios_de_pago"><strong>Medios de Pago</strong>
                <nav id="redes">
                    <ul>
                        <li>
                            <a href="#">
                                <img id="visa" src="imagenes/visa.svg">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img id="mastercard" src="imagenes/mastercard.svg">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img id="american" src="imagenes/american_express.svg">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img id="paypal" src="imagenes/paypal.svg">
                            </a>
                        </li>
                    </ul>
                </nav>
            </div> 
            <div id="Copyright"><strong>© Copyright - El Dromedario Records.</strong></div>
            
       
    </footer>
</body>
</html>