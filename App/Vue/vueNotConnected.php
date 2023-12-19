<?php ob_start()?>
<div class="space_box space_box_1">
        <?=$header?>
        <div class="space_big">  
        </div>
    <p class = "label">Tu dois être connecté pour accèder à cette page</p>
</div>
<?php $content = ob_get_clean()?>