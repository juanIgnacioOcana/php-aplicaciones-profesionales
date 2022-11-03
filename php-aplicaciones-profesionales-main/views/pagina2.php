<?php $this->layout('layouts/layout', [
    'mainTitle' => 'Pagina 2'
]); ?>

<h1>Hola</h1>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae sit reiciendis natus impedit laudantium fugit, sint voluptatum veritatis et molestias fuga soluta quasi, omnis rem molestiae fugiat adipisci doloremque maxime.</p>

<ul>
    <li>items *</li>
    <li>items *</li>
    <li>items *</li>
    <li>items *</li>
</ul>

<?php $this->start('footerLinks') ?>
<p>
    <a href="#">Link 0</a>
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
</p>
<?php $this->stop() ?>

<?php $this->start('footerJS') ?>
<script></script>
<?php $this->stop() ?>