<?php ob_start()?>
<div class="space_box space_box_1">
    <?= $header?>
    <div class ="space_big"></div>
    <h1 class="apiContact">!! WORK IN PROGRESS !!</h1>
    <div class ="space_big"></div>
    <div class ="space_big"></div>
    <div class="titreCal" >
        <img src="./Public/asset/content/suivant.png" alt="fleche" class ="precedent">
        <h2 id="moi"></h2>
        <img src="./Public/asset/content/suivant.png" alt="fleche" class="suivant">
    </div>
    <div class="space_medium"></div>
    <div id="calendar" class="calendar">
    </div>
</div>
    
<?php $content = ob_get_clean()?>