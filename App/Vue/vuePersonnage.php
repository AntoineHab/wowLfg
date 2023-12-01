<?php foreach($tab as $perso):?>
    <div class="afficherPerso">
    <p><?=$perso->getNom()?></p>
    <p><?=$perso->getServeur()?></p>
    <p><?=$perso->getClasse()?></p>
    <p><?=$perso->getRole()?></p>
    <p><a href="<?=$perso->getRio()?>" target='_blank'>Raider.io</a></p>
    <p><a href="/wowLfg/supprimerpersonnage?nom=<?=$perso->getNom()?>&serveur=<?=$perso->getServeur()?>">Supprimer</a></p>
    </div>
    <div class ="space_xshort"></div>
<?php endforeach?>