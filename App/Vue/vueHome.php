<?php ob_start()?>
    <div class="space_box space_box_1">
        <?=$header?>
        <div class="space_medium">  
        </div>
        <h1>Bienvenue !</h1>
        <div class="space_big">  
        </div>
        <div class="space_big">  
        </div>
        <article class="color_beige centered blur">
            Bienvenue sur World Of Warcraft Looking For Group ! 
            Joueur de ce jeu depuis plus de 10 ans et actuellement en reconversion professionelle dans
            le développement web, j'associe mes deux hobbies pour créer un site qui va nous simplifier 
            nos recherche de groupe de Raid et de Donjon ! L'utilisation est très facile, que tu sois
            Raid leader ou Pick UP, il te suffit de te connecter et de te rendre sur la page calendrier !
        </article>
        <div class ="space_big"></div><div class="fleche"><a href="#ancre"><img src="./Public/asset/content/fleche.png" alt="fleche" class ="homefleche"></a></div>
    </div>
    <div class="space_box space_box_2"id="ancre">
        <div class="space_big">  
        </div>
        <h1>Comment ça marche ?</h1>
        <div class="space_big">
        </div>
        <div class="space_big">  
        </div>
        <article class="color_beige centered blur" >
            Pour utiliser le site, connecte toi à ton compte ou inscrit toi via les boutons connexion / inscription en haut de page,
            puis va sur la page calendrier pour voir les Raid / groupes M+ disponible ! Pour s'inscrire, rien de plus simple ! Cliques sur
            l'evênement qui t'interesses pour en afficher les informations ; si ça te convient, appuis sur <em>s'inscrire</em> !
            Il ne te restes plus qu'a attendre que Raid leader confirme ta place au sein du roster.
        </article>
        <div class="space_big">  
        </div>
        <div class="centered"><a href="/wowLfg/connexion"><button class ="go" >C'est parti !</button></a></div>
    </div>
<?php $content = ob_get_clean()?>