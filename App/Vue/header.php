<?php ob_start()?>
    <div class ="container">
        <nav class="nav">
            <ul>
                <li><a href="/wowLfg/">Accueil</a></li>
                <li><a href="/wowLfg/calendrier">Calendrier</a></li>
            </ul>
        </nav>
        <nav class="nav nav_2">
        <ul>
            <?php if(isset($_SESSION['connected'])):?>
            <li><a href="/wowLfg/moncompte">Mon compte</a></li>
            <li><a href="/wowLfg/deconnexion">Se deconnecter</a></li>
            <?php else:?>
            <li><a href="/wowLfg/connexion">Connexion</a></li>
            <li><a href="/wowLfg/inscription">Inscription</a></li>
            <?php endif;?>
        </ul>
        </nav>
    </div>
<?php $header = ob_get_clean()?>