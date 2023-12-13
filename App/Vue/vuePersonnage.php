<?php foreach($tab as $perso):?>
    <div class="afficherPerso">
        <li class="labelPersonnage">
        <ul><p><?=$perso->getNom()?></p></ul>
        <ul><p><?=$perso->getServeur()?></p></ul>
        <ul><p><?=$perso->nom_classe?></p></ul>
        <ul><p><?=$perso->nom_rolee?></p></ul>
        <ul><p><a href="<?=$perso->getRio()?>" target='_blank'>Raider.io</a></p></ul>
        <ul><button class="deletePerso"><a href="/wowLfg/supprimerpersonnage?nom=<?
        =$perso->getNom()?>&serveur=<?=$perso->getServeur()?>">Supprimer</a></button></ul>
        </li>
    </div>
    <div class ="space_xshort"></div>
<?php endforeach?>