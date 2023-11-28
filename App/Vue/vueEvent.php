<?php ob_start()?>
<div class="space_box space_box_1">
    <?= $header?>
    <div class ="space_big"></div>
    <h1 class=""><?=?></h1>
    <div class ="space_big"></div>
    <div class ="space_big"></div>
    <div class="">
        Boucle for des events
    </div>
    <div class="space_medium"></div>
    <div>
        <button>Creer un event</button>
        <button>Chercher un event</button>
    </div>
</div>
    
<?php $content = ob_get_clean()?>