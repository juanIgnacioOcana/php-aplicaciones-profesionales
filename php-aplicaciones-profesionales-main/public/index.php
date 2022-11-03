    
    <?php
    
    require '../vendor/autoload.php';
    
    use League\Plates\Engine;
    $templates = new Engine('../views');

    $router = new AltoRouter();

    $router->map( 'GET', '/', 'FrontController#home', 'home' );
    
    
    
