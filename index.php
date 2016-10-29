<?php
  define('BASE_URL', 'http://cabin.com');
  function base_url($path=''){
    return BASE_URL . '/' . $path;
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>CABIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="Indary">
    <meta name="theme-color" content="#12356b">
    <!-- TWITTER -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@cabin">
    <meta name="twitter:creator" content="@indary">
    <meta name="twitter:title" content="Cabin">
    <meta name="twitter:description" content="">
    <meta name="twitter:image:src" content="<?php echo base_url('img/logo.png')?>">
    <!-- FACEBOOK -->
    <meta property="og:site_name" content="CABIN">
    <meta property="og:url" content="<?php echo base_url()?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Cabin">
    <meta property="og:description" content="">
    <meta property="og:image" content="<?php echo base_url('img/logo.png')?>">
    <!-- G++ -->
    <meta itemprop="name" content="CABIN">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="<?php echo base_url('img/logo.png')?>">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
    <!--Import Google Icon Font-->
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="libs/materialize/css/materialize.min.css" type="text/css">
    <link rel="stylesheet" href="libs/wow/css/libs/animate.css" type="text/css">
    <script src="libs/jquery/jquery-1.11.3.min.js"></script>
    <script src="libs/materialize/js/materialize.min.js"></script>
    <script src="libs/wow/wow.min.js"></script>
    <script src="js/global.js"></script>
  </head>
  <body>
    <header>
      <nav id="nav">
        <div class="nav-wrapper">
          <div class="brand-logo center">
            <img id="logo_white" src="img/logo_white.png"/>
            <img id="logo_blue" src="img/logo.png"/>
          </div>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul id="menu" class="right hide-on-med-and-down">
            <li class="menu-item" data-target="bg">INICIO</li>
            <li class="menu-item" data-target="us">NOSOTROS</li>
            <li class="menu-item" data-target="services">SERVICIOS</li>
            <li class="menu-item" data-target="turns">TURNOS</li>
            <li class="menu-item" data-target="contact">CONTACTO</li>
          </ul>
          <ul class="side-nav bg-blue" id="mobile-demo">
            <li class="menu-item" data-target="bg">INICIO</li>
            <li class="menu-item" data-target="us">NOSOTROS</li>
            <li class="menu-item" data-target="services">SERVICIOS</li>
            <li class="menu-item" data-target="turns">TURNOS</li>
            <li  class="menu-item" data-target="contact">CONTACTO</li>
          </ul>
        </div>
      </nav>
    </header>
    <div id="bg">
      <div class="override">
        <div class="container center">
          <h4 class="text">Centro de Aplicaciones Bionucleares</h4>
          <h6 class="text text-min"><b>Comodoro Rivadavia</b></h6>
        </div>
      </div>
    </div>
    <div id="full-wrapper">
      <section id="us" class="white">
        <div class="container">
          <div class="title">SOBRE NOSOTROS</div>
          <p>El CABIN es una Institución Civil sin fines de lucro, que si bien pertenece al Estado Provincial, es administrada por un consorcio conformado por nueve instituciones.</p>
          <p>El CABIN se financia por los recursos que autogenera. El Estado no aporta ningún dinero para atender los costos operativos.</p>
          <p>CABIN se caracteriza por atender en forma gratuita, a todos los pacientes carenciados que son derivados por el Sistema Provincial de Salud, a través de sus efectores (Hospitales Públicos), lo que financieramente representaría un 10% promedio de su facturación, por los que no percibe ningún tipo de compensación.</p>
          <p>Gracias a la inversión en el desarrollo tecnológico y profesional, CABIN se ha transformado en un centro oncológico de excelencia, impulsando a Comodoro Rivadavia, como referente en la derivación de pacientes de Chubut, Santa Cruz y Tierra del Fuego, además del sur de Chile.</p>
          <div class="row center"><b>INSTITUCIONES CONFORMANTES</b></div>
          <div class="row center">
            <div class="col s12 m6 l4 entity wow bounceIn" data-wow-duration="2s">
              <div>
                <img src="img/entidades/chubut.jpg">
              </div>
              <div>Provincia del Chubut</div>
            </div>
            <div class="col s12 m6 l4 entity wow bounceIn" data-wow-duration="2s">
              <div>
                <img src="img/entidades/comodoro.png">
              </div>
              <div>Municipalidad de Comodoro Rivadavia</div>
            </div>
            <div class="col s12 m6 l4 entity wow bounceIn" data-wow-duration="2s">
              <div>
                <img src="img/entidades/radatilly.jpg">
              </div>
              <div>Municipalidad de Rada Tilly</div>
            </div>
          </div>
          <div class="row center">
            <div class="col s12 m6 l4 entity wow bounceIn" data-wow-duration="2s">
              <div>
                <img src="img/entidades/unpsjb.jpg">
              </div>
              <div>Universidad Nacional de la Patagonia San Juan Bosco</div>
            </div>
            <div class="col s12 m6 l4 entity wow bounceIn" data-wow-duration="2s">
              <div>
                <img src="img/entidades/lions.png">
              </div>
              <div>Club de Leones de Comodoro Rivadavia</div>
            </div>
            <div class="col s12 m6 l4 entity wow bounceIn" data-wow-duration="2s">
              <div>
                <img src="img/entidades/pcr.jpg">
              </div>
              <div>Petroquímica Comodoro Ridavia S.A.</div>
            </div>
          </div>
          <div class="row center">
            <div class="col s12 m6 l4 entity wow bounceIn" data-wow-duration="2s">
              <div>
                <img src="img/entidades/scpl.png">
              </div>
              <div>Sociedad Cooperativa Popular Limitada</div>
            </div>
            <div class="col s12 m6 l4 entity wow bounceIn" data-wow-duration="2s">
              <div>
                <img src="img/entidades/aesm.png">
              </div>
              <div>Asociación Española de Socorros Mutuos</div>
            </div>
            <div class="col s12 m6 l4 entity wow bounceIn" data-wow-duration="2s">
              <div>
                <img src="img/entidades/ados.png">
              </div>
              <div>ADOS Comodoro Rivadavia</div>
            </div>
          </div>
          <div class="row">
            <div class="col s12 m12 l12 center"><b>DIRECCIÓN</b></div>
          </div>
          <div class="row">
            <div class="col s12 m6 l6 center"><b>DR. JORGE BRUGNA</b><br>Director Médico</div>
            <div class="col s12 m6 l6 center"><b>LIC. JUAN JOSE NIETO</b><br>Director Administrativo</div>
          </div>
        </div>
      </section>
      <section id="services" class="white-text">
        <div class="container">
          <div class="title">NUESTROS SERVICIOS</div>
          <div class="row service wow bounceIn" data-wow-duration="2s">
            <div class="col s12 m8 l8 service-description">
              <div class="service-title">RADIOTERAPIA</div>
              <div class="service-content">
                <p>La radioterapia es el uso de radiación de alta energía para dañar el ADN de las células cancerosas y destruir su capacidad para dividirse y crecer. Se puede administrar utilizando máquinas llamadas aceleradores, o mediante fuentes radioactivas que se colocan en el interior del paciente en forma temporaria o permanente. La radioterapia puede ayudar a reducir el dolor y el sufrimiento en los pacientes con cáncer avanzado.</p>
              </div>
            </div>
            <div class="col s12 m4 l4 service-team">
              <div class="service-title">EQUIPO</div>
              <div class="service-content">
                <ul>
                  <li>DR. RICARDO CASTAGNINO</li>
                  <li>DRA. MARIANGELES KEROPIAN</li>
                  <li>DR. MIGUEL KEROPIAN</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row service wow bounceIn" data-wow-duration="2s">
            <div class="col s12 m8 l8 service-description">
              <div class="service-title">MEDICINA NUCLEAR</div>
              <div class="service-content">
                <p>La medicina nuclear constituye una subespecialidad del campo de las imágenes médicas que utiliza cantidades muy pequeñas de material radioactivo para diagnosticar y determinar la gravedad, o para tratar, una variedad de enfermedades, incluyendo varios tipos de cánceres, enfermedades cardíacas, gastrointestinales, endocrinas, desórdenes neurológicos, y otras anomalías dentro del cuerpo. Debido a que los procedimientos de medicina nuclear pueden detectar actividades moleculares dentro del cuerpo, ofrecen la posibilidad de identificar enfermedades en sus etapas tempranas, como así también las respuestas inmediatas de los pacientes a las intervenciones terapéuticas.</p>
              </div>
            </div>
            <div class="col s12 m4 l4 service-team">
              <div class="service-title">EQUIPO</div>
              <div class="service-content">
                <ul>
                  <li>DRA. HAYDE GUIBOURG</li>
                  <li>DRA. CELIA LUCERO</li>
                  <li>DR. MARCELO CASAL</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row service wow bounceIn" data-wow-duration="2s">
            <div class="col s12 m8 l8 service-description">
              <div class="service-title">ONCOLOGÍA</div>
              <div class="service-content">
                <p>La oncología es la especialidad médica que se encarga del estudio y tratamiento de los tumores benignos y malignos.</p>
                <p>La oncología, por lo tanto, se encarga del diagnóstico, el tratamiento y el seguimiento del cáncer. En el caso del tratamiento, incluye la cirugía y las terapias no quirúrgicas, como la quimioterapia y la radioterapia. Por otra parte, la oncología se ocupa de los cuidados paliativos de pacientes con enfermedades en estado terminal, los aspectos éticos relacionados con la atención a los enfermos con cáncer y los estudios genéticos relacionados a los tumores.</p>
              </div>
            </div>
            <div class="col s12 m4 l4 service-team">
              <div class="service-title">EQUIPO</div>
              <div class="service-content">
                <ul>
                  <li>DRA. MARIBEL LUTTERAL</li>
                  <li>DRA. ELIZABETH SARQUIS</li>
                  <li>DRA. ROXANA RONSETTI</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row service wow bounceIn" data-wow-duration="2s">
            <div class="col s12 m8 l8 service-description">
              <div class="service-title">LABORATORIO</div>
              <div class="service-content">
                <p>Donde se realizan rutinas de Control, Dosajes Hormonales, Marcadores Tumorales, etc.</p>
              </div>
            </div>
            <div class="col s12 m4 l4 service-team">
              <div class="service-title">EQUIPO</div>
              <div class="service-content">
                <ul>
                  <li>BQ. SUSANA GARCIA DOCAMPO</li>
                  <li>BQ. DIANA HERRERA</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="turns" class="white-text">
        <div class="container">
          <div class="title" data-wow-duration="1s">TURNOS</div>
          <p class="center">Solicitá tu turno y nos comunicaremos con usted a la brevedad</p>
          <div class="row">
            <form id="form_turn" class="col s12">
              <div class="row">
                <div class="input-field col s12 m12 l8">
                  <label for="full_name">NOMBRE Y APELLIDO</label>
                  <input id="full_name" name="full_name" type="text" class="validate">
                </div>
                <div class="input-field col s12 m12 l4">
                  <label for="dni">DNI</label>
                  <input id="dni" name="dni" type="number" class="validate">
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12 m12 l8">
                  <label for="secure">OBRA SOCIAL</label>
                  <input id="secure" name="secure" type="text" class="validate">
                </div>
                <div class="input-field col s12 m12 l4">
                  <label for="age">EDAD</label>
                  <input id="age" name="age" type="number" class="validate">
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12 m12 l6">
                  <label for="telephone">TELÉFONO</label>
                  <input id="telephone" name="telephone" type="number" class="validate">
                </div>
                <div class="input-field col s12 m12 l6">
                  <label for="email">E-MAIL</label>
                  <input id="email" name="email" type="email" class="validate">
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12 m12 l8">
                  <label for="description">DESCRIPCIÓN</label>
                  <textarea id="description" name="description" class="materialize-textarea"></textarea>
                </div>
              </div>
              <div class="row center">
                <button class="btn waves-effect waves-light bg-blue" type="submit" name="action">SOLICITAR
                  <i class="material-icons right">send</i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </section>
    </div>
    <div id="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2778.1629867667007!2d-67.48862248455616!3d-45.86804864378965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xbde4545882692bf7%3A0xa8552c7076b2530d!2sRoque+S%C3%A1enz+Pe%C3%B1a+%26+Democracia%2C+Comodoro+Rivadavia%2C+Chubut!5e0!3m2!1ses-419!2sar!4v1475718073928" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <footer id="contact" class="bg-black-blue white-text">
      <div class="container">
        <div class="title">CONTACTO</div>
        <div id="contact-list" class="row">
          <div class="col s12 m6 l4 center">
            <i class="small material-icons">phone</i><br>(297) 406-1411
          </div>
          <div class="col s12 m6 l4 center">
            <i class="small material-icons">phone</i><br>(297) 406-1412
          </div>
          <div class="col s12 m6 l4 center">
            <i class="small material-icons">room</i><br>R. Sáenz Peña Y Democracia
          </div>
        </div>
        <div class="row">
          <form id="form_contact" class="col s12">
            <div class="row">
              <div class="col l6 m6 s12">
                <div class="row input-field">
                  <label for="contact_name">TU NOMBRE</label><br>
                  <input id="contact_name" name="contact_name" type="text" class="validate">
                </div>
                <div class="row input-field">
                  <label for="contact_email">TU E-MAIL</label><br>
                  <input id="contact_email" name="contact_email" type="email" class="validate">
                </div>
              </div>
              <div class="input-field col l6 m6 s12">
                <label for="contact_message">TU MENSAJE</label><br>
                <textarea id="contact_message" name="contact_message" class="materialize-textarea"></textarea>
              </div>
            </div>
            <div class="row center">
              <button class="btn waves-effect waves-light bg-blue" type="submit" name="action">ENVIAR
                <i class="material-icons right">send</i>
              </button>
            </div>
          </form>
        </div>
      </div>
      <div class="footer-copyright center">
        <div class="container">
          <b>Cabin <?php echo date('Y'); ?></b>
        </div>
      </div>
    </footer>
  </body>
</html>
