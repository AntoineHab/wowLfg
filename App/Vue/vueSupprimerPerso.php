<?php ob_start()?>
    <?php if(isset($_SESSION['connected'])){?>
        <div class="inscription">
            <p class = "label"><?=$error?></p>
        </div>
    <?php }else{ ?>
    <?php }?>
<?php $content = ob_get_clean()?>