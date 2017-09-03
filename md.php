
<ul>
    <?php
    foreach ($noticias as $k => $v) {

        ?>

        <li> <?php echo $v['noticias'] ?> </li>

        <?php
    }
    ?>
</ul>

<h4>Datos de usuario en especifico:</h4>
<p> <?php echo $noticias ['titulo']  ?></p>
<p> <?php echo $noticias ['contenido']  ?></p>
