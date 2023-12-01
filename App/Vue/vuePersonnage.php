<?php foreach($tab as $perso):?>
    <div class="afficherPerso listeEtAjout_g3">
        <li class="labelPersonnage">
        <ul><p><?=$perso->getNom()?></p></ul>
        <ul><p><?=$perso->getServeur()?></p></ul>
        <ul><p><?=$perso->getClasse()?></p></ul>
        <ul><p><?=$perso->getRole()?></p></ul>
        <ul><p><a href="<?=$perso->getRio()?>" target='_blank'>Raider.io</a></p></ul>
        <ul><button class="deletePerso"><a href="/wowLfg/supprimerpersonnage?nom=<?=$perso->getNom()?>&serveur=<?=$perso->getServeur()?>">Supprimer</a></button></ul>
        </li>
    </div>
    <div class ="space_xshort"></div>
<?php endforeach?>