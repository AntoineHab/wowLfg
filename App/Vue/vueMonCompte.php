<?php ob_start()?>
<div class="space_box space_box_1">
    <?= $header?>
    <div class ="space_big"></div>
    <h1>Bonjour <?=$_SESSION['nom']?></h1>
    <div class ="space_medium"></div>
    <?php if(!empty($tab)):?>
    <h3 >Vos Personnages :</h3>
    <?php include 'vuePersonnage.php' ?>
    <?php endif;?>
    <div class ="space_medium"></div>
    <h3>Ajouter un Personnage :</h3>
    <div>
        <div class="inscription ">
            <form action="" method="post" enctype="multipart/form-data" class="label color_beige">  
                <li>
                <ul><label for="nom_personnage">Nom du personnage :</label></ul>
                <ul><input type="text" name="nom_personnage"required></ul>
                <ul><label for="serveur_personnage">Serveur :</label></ul>
                <ul><input type="text" name="serveur_personnage" required></ul>
                <ul><label for="id_classe_personnage">Classe :</label></ul>
                <ul><select name="id_classe_personnage">
                    <?php foreach($classeTab as $classe):?>
                    <option value="<?=$classe->getId()?>"><?=$classe->getNom()?></option>
                    <?php endforeach?>
                    </select>
                </ul>
                <ul><label for="id_rolee_personnage">Rôle :</label></ul>
                <ul><select name="id_rolee_personnage">
                    <?php foreach($roleTab as $role):?>
                    <option value="<?=$role->getId()?>"><?=$role->getNom()?></option>
                    <?php endforeach?>
                    </select>
                </ul>
                <ul><label for="rio_personnage">Lien RIO :</label></ul>
                <ul><input type="text" name="rio_personnage"required></ul>
                <ul><div class ="buttonLog"><button class ="go go_3"type="submit" name="submit">Ajouter mon personnage</button></div></ul>
                <ul><p><?=$error?></p></ul>
                </li>  
            </form>
        </div>
    </div> 
    <div class="space_medium"></div>
</div>
<?php $content = ob_get_clean()?>