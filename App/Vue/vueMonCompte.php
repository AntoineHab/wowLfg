<?php ob_start()?>
<div class="space_box space_box_1">
    <?= $header?>
    <div class ="space_big"></div>
    <h1>Bonjour <?=$_SESSION['nom']?></h1>
    <div class ="space_medium"></div>
    <?php include 'vuePersonnage.php' ?>
    <div class ="space_big"></div>
    <div class="inscription ">
        <div class="inscription label color_beige">
            <form action="" method="post" enctype="multipart/form-data">  
                <li>
                <ul><label for="nom_personnage">Nom du personnage :</label></ul>
                <ul><input type="text" name="nom_personnage"required></ul>
                <ul><label for="serveur_personnage">Serveur :</label></ul>
                <ul><input type="text" name="serveur_personnage" required></ul>
                <ul><label for="classe_personnage">Classe :</label></ul>
                <ul><select name="classe_personnage" >
                    <option value="Guerrier">Guerrier</option>
                    <option value="Paladin">Paladin</option>
                    <option value="Chasseur">Chasseur</option>
                    <option value="Moine">Moine</option>
                    <option value="Voleur">Voleur</option>
                    <option value="Chevalier de la mort">Chevalier de la mort</option>
                    <option value="Prêtre">Prêtre</option>
                    <option value="Chasseur de démon">Chasseur de démon</option>
                    <option value="Démoniste">Démoniste</option>
                    <option value="Mage">Mage</option>
                    <option value="Chaman">Chaman</option>
                    <option value="Druide">Druide</option>
                    <option value="Evocateur">Evocateur</option>
                    </select>
                </ul>
                <ul><label for="role_personnage">Rôle :</label></ul>
                <ul><select name="role_personnage" >
                    <option value="Tank">Tank</option>
                    <option value="Heal">Heal</option>
                    <option value="Dps">Dps</option>
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