<!-- Creare una variabile con un paragrafo di testo a vostra scelta. -->
<?php 
    $lorem = '
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sodales porttitor feugiat. Aenean ac metus ut risus pretium rhoncus. Nulla et lobortis eros. Nam mattis, orci sit amet scelerisque eleifend, arcu dolor eleifend turpis, a laoreet est odio quis nunc. Aliquam erat volutpat. Donec at est vitae nunc malesuada volutpat. Cras lobortis a tortor non varius. Ut et dapibus nibh.';
?>
<!-- Stampare a schermo il paragrafo e la sua lunghezza. -->
<h1>
    <?php 
        echo $lorem;
    ?>
</h1>
<!-- Una parola da censurare viene passata dall'utente tramite parametro GET. -->
<!-- Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->
<h1>
    <?php 
        echo str_replace($_GET["censor"], "..." , $lorem);
    ?>
</h1>














