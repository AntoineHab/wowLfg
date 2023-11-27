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
                Inscrivez-vous pour pouvoir utiliser le site. 
            </article>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="label color_beige centrer">
                    <li>
                    <ul><label for="nom_utilisateur">Nom de Compte :</label></ul>
                    <ul><input type="text" name="nom_utilisateur"></ul>
                    <ul><label for="email_utilisateur">Email du compte :</label></ul>
                    <ul><input type="email" name="email_utilisateur"></ul>
                    <ul><label for="">Mot de passe :</label></ul>
                    <ul><input type="password" name="password_utilisateur"></ul>
                    <ul><label for="repeat_password_utilisateur">Re saisir le Mot de passe :</label></ul>
                    <ul><input type="password" name="repeat_password_utilisateur"></ul>
                    </li>
                </div>
            </form>
            <div class ="buttonLog"><a href=""><button class ="go go_2 ">M'inscrire</button></a></div>
        </div>
</div>
<?php $content = ob_get_clean()?>