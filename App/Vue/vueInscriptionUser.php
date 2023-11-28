<?php ob_start()?>
<div class="space_box space_box_1">
        <?=$header?>
        <div class="space_medium">
        </div>
        <h1>Inscription</h1>
        <div class="space_big">
        </div>
        <div class="space_big">
        </div>
        <div class="inscription">
            <article class="color_beige centered blur textInscr">
                Inscrivez-vous pour pouvoir participer aux évènements ou en créer. 
            </article>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="label color_beige">
                    <li>
                    <ul><label for="nom_utilisateur">Nom de compte :</label></ul>
                    <ul><input type="text" name="nom_utilisateur"required></ul>
                    <ul><label for="mail_utilisateur">Email du compte :</label></ul>
                    <ul><input type="email" name="mail_utilisateur" required></ul>
                    <ul><label for="password_utilisateur">Mot de passe :</label></ul>
                    <ul><input type="password" name="password_utilisateur"required></ul>
                    <ul><label for="repeat_password_utilisateur">Confirmer mot de passe :</label></ul>
                    <ul><input type="password" name="repeat_password_utilisateur"required></ul>
                    <ul><div class ="buttonLog"><button class ="go go_3"type="submit" name="submit">M'inscrire</button></div></ul>
                    <ul><p><?=$error?></p></ul>
                    </li>
                </div>
            </form>
            <article class="color_beige centered blur txt3">
                Vous revevrez une confirmation de création de compte par mail. Merci de valider pour utiliser nos fonctionalités !
            </article>
        </div>
</div>
<?php $content = ob_get_clean()?>