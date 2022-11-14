<?php $this->layout('layouts/layout', [
    'mainTitle' => 'Home del proyecto',
]) ?>

<h1>Manuales</h1>

<?= $this->insert('partials/search-form') ?>

<p>
    <a href="/manuales/nuevo">Crear un manual</a>
</p>

 <?php foreach($manuals as $manual): ?>
    <div class="manual">
        <h2> <?= $manual['title'] ?> </h2>
        <p>
            <?= $manual['excerpt'] ?>
            <a href="/manuales/<?= $manual['slug'] ?>">Acceder</a>
            <a href="/manuales/<?= $manual['slug'] ?>/editar">Editar</a>
        </p>
    </div>
 <?php endforeach ?>   
    
<?php $this->start('footerLinks') ?>

<p>
    <a href="/otra/carpeta">Otra ruta</a>
    <a href="/producto/1">Producto 1</a>
    <a href="/producto/1">Producto 22</a>
    <a href="/producto/99">Producto 99</a>
</p>

<?php $this->stop() ?>