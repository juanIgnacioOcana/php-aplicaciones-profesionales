<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spaghetti</title>
    <link rel="shortcut icon" href="assets/images/ms-icon-310x310.png" type="image/png" />
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <h1>Spaghetti PHP!!!</h1>
    
    <?php
    
    require '../vendor/autoload.php';
    use Carbon\Carbon;
    use Lib\Breadcrumbs;
    use Lib\Dates;
    use League\Plates\Engine;

    $templates = new Engine('../views');

    $date = Carbon::now();
    echo $date->format('Y');

    Carbon::setLocale('es');
    $today = Carbon::now();
    $tomorrow = $today->addDays(1);
    echo $tomorrow->isoFormat('dddd DD [de] MMMM');

    //include '../Lib/Dates.php';  -> no son necesarios , tenemos autoload.php de Composer
    //include '../Lib/Breadcrumbs.php';
    $crumbs = new Lib\Breadcrumbs();
    $crumbs->add('/link', 'Sección');
    $crumbs->show();
    ?>

    <p>
        Con PHP es fácil hacer Spaghetti Code y mezclar la presentación, el HTML con código
    </p>
    <p>
        Pero en 
        <?= Dates::longDate(Dates::tomorrow()) ?>
        lo vamos a solucionar
    </p>

    <?php
    
       echo $templates->render('template-test', [
        'subtitle' => 'Bienvenidos a EscuelaIT'
       
       ]);
    ?>

</body>
</html>