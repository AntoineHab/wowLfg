<?php ob_start()?>
<div class="space_box space_box_2">
        <?=$header?>
        <div class="space_medium">
        </div>
        <h1>Connexion</h1>
        <div class="space_big">
        </div>
        <div class="space_big">
        </div>
        <div class="inscription">
            <article class="color_beige centered blur textInscr">
                 
            </article>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="label color_beige centrer">
                    <li>
                    <ul><label for="nom_utilisateur">Nom de compte :</label></ul>
                    <ul><input type="text" name="nom_utilisateur" required></ul>
                    <ul><label for="">Mot de passe :</label></ul>
                    <ul><input type="password" name="password_utilisateur" required></ul>
                    <ul><div class ="buttonLog"><button class ="go go_2 ">Me Connecter</button></div></ul>
                    </li>
                </div>
            </form>
        </div>
</div>
<?php $content = ob_get_clean()?>