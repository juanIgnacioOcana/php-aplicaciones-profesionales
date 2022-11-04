<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $mainTitle ?></title>
    <!--<link rel="shortcut icon" href="assets/images/ms-icon-310x310.png" type="image/png" /> -->
    <link rel="shortcut icon" href="/assets/images/ms-icon-310x310.png" type="image/png" />
    <!--<link rel="stylesheet" href="assets/styles.css"> -->
    <link rel="stylesheet" href="/assets/styles.css">
</head>
<body>
    <header>
        <img src="/assets/images/logo.svg" alt="logo">
    </header>
    <main>
    <?= $this->section('content');?>
    </main>

    <footer>
        @ Copyright... EscuelaIT
        <?= $this->section('footerLinks'); ?> 
        
    </footer>
    
    
</body>
</html>