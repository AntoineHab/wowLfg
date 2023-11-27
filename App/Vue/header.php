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
            <li><a href="/wowLfg/connexion">Connexion</a></li>
            <li><a href="/wowLfg/inscription">Inscription</a></li>
        </ul>
        </nav>
    </div>
<?php $header = ob_get_clean()?>