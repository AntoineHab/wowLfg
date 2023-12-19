<?php ob_start()?>
    <?php if(isset($_SESSION['connected'])){?>
        <div class="space_big"></div>
        <div class="space_big"></div>
        <div class="inscription">
            <p class = "label"><?=$error?></p>
        </div>
    <?php }else{ ?>
        <div class="inscription">
            <div class="space_big"></div>
            <div class="space_big"></div>
            <p class="label">Vous devez être connecté pour supprimer un personnage</p>
        </div>
    <?php }?>
<?php $content = ob_get_clean()?>