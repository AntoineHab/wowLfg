<?php ob_start()?>
    <?php if(isset($_SESSION['connected'])){?>
        <div class="space_big"></div>
        <div class="space_big"></div>
        <div class="inscription">
            <p class = "label"><?=$error?></p>
        </div>
    <?php }else{ ?>
        <div class="inscription">
            <p class="label">Vous devez être connecté</p>
        </div>
    <?php }?>
<?php $content = ob_get_clean()?>