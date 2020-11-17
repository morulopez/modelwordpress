<?php


//informacion child theme

define('CHILD_THEME_NAME','mundo-hippie-theme');
define('CHILD_THEME_NAME','URL');
define('CHILD_THEME_VERSION',0.1);
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
 
//soporte para HTM5
add_theme_support('html5',array('search-form','comment-form','comment-list'));   

/*font awesome */
add_action( 'wp_enqueue_scripts', 'jc_load_font_awesome' );
/**
 * Instalar Font Awesome 5
 */
function jc_load_font_awesome() {

    wp_enqueue_style( 'font-awesome-free', '//use.fontawesome.com/releases/v5.3.1/css/all.css' );

}
// Incluir Bootstrap CSS
function bootstrap_css() {
  wp_enqueue_style( 'bootstrap_css', 
            get_stylesheet_directory_uri() . '/css/bootstrap.min.css', 
            array(), 
            '4.1.3'
            ); 
}
add_action( 'wp_enqueue_scripts', 'bootstrap_css');

// Incluir Bootstrap JS
function bootstrap_js() {
  wp_enqueue_script( 'bootstrap_js', 
            get_stylesheet_directory_uri() . '/js/bootstrap.min.js', 
            array('jquery'), 
            '4.1.3', 
            true); 
}

add_action( 'wp_enqueue_scripts', 'myjs');

// Incluir Bootstrap JS
function myjs() {
  wp_enqueue_script( 'bootstrap_js', 
            get_stylesheet_directory_uri() . '/js/myjs.js', 
            array('jquery'), 
            '4.1.3', 
            true); 
}


function wpdocs_excerpt_more() {
   if ( ! is_single() ) {
        $more = sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
            get_permalink( get_the_ID() ),
            __( 'Leer mas', 'textdomain' )
        );
    }
    return $more;
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

function modal(){
    if(!isset($_COOKIE["doamazon"])){
        echo "<div class='modal-cookies' id='modal-cookies'>
            <div class='row'>
                <div class='col-md-4'>
                </div>
                <div class='col-md-4 modalcontent'>
                    <div class='row'>
                        <div class='col-md-12'>
                            <p>
                                Nosotros y nuestros socios usamos cookies o tecnologías similares para garantizar el correcto funcionamiento del portal, recoger información sobre su uso, mejorar nuestros servicios y mostrarte publicidad personalizada basándonos en el análisis de tu navegación.
                                Puedes configurar o rechazar en cualquier momento la utilización de cookies y también puedes retirar tu consentimiento u oponerte al tratamiento de tus datos que hacemos en base al interés legítimo. Para obtener información sobre cómo hacerlo pincha aquí o visita nuestra política de privacidad.Si quieres saber quiénes son nuestros socios accede aquí. 
                                Nosotros y nuestros socios hacemos el siguiente tratamiento de datos con su consentimiento y/o nuestro interés legítimo:
                                Almacenar o acceder a información en un dispositivo, Anuncios y contenido personalizados, medición de anuncios y del contenido, información sobre el público y desarrollo de productos, Datos de localización geográfica precisa e identificación mediante las características de dispositivos
                            </p>
                        </div>
                        <div class='col-md-6 text-right'>
                            <button class='button-cookies no-cookies' onclick='cookies()'>Rechazar</button>
                        </div>
                        <div class='col-md-6 text-left'>
                            <button class='button-cookies yes-cookies' onclick='cookies()'>Aceptar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
    }
}
add_action('wp_body_open','modal');

?>