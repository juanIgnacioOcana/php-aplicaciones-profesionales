    
    <?php
    
    require '../vendor/autoload.php';
    
    

    $router = new AltoRouter();

    $router->map( 'GET', '/', 'FrontController#home', 'home' );
    $router->map( 'GET', '/otra/carpeta', 'FrontController#otraCarpeta');
    $router->map( 'GET', '/producto/[i:id]', 'FrontController#producto');
    
    $match = $router->match();

    if ($match === false) {
        open404Error();
    }else{
        //callController($match);
    }

    function open404Error(){
        header( $_SERVER["SERVER_PROTOCOL"]. '404 Not Found');
        $controllerObject = new App\Controllers\FrontController;
        $controllerObject->error404();
    }
   
    
    
    
