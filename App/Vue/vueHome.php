<?php ob_start()?>
    <div class="space_box space_box_1">
        <?=$header?>
        <div class="space_big">  
        </div>
        <h1>Bienvenue !</h1>
        <div class="space_big">  
        </div>
        <div class="space_big">  
        </div>
        <article class="color_beige centered">
            Bienvenue sur World Of Warcraft Looking For Group ! 
            Joueur de ce jeu depuis plus de 10 ans et actuellement en reconversion professionelle dans
            le développement web, j'associe mes deux hobbies pour créer un site qui va nous simplifier 
            nos recherche de groupe de Raid et de Donjon ! L'utilisation est très facile, que vous soyez 
            Raid leader ou Pick UP, il suffit de se connecter et se rendre sur la page calendrier !
        </article>

    </div>
    <div class="space_box space_box_2">
        <div class="space_big">  
        </div>
        <div class="space_big">  
        </div>
        <h1>Comment ça marche ?</h1>
        <div class="space_big">
        </div>
        <div class="space_big">  
        </div>
        <article class="color_beige centered">
            Pour utiliser le site, il vous suffit de vous connecter à votre compte battle.net via le boutton connexion en haut de page,
            puis d'aller sur la page calendrier pour voir les Raid / groupes M+ disponible ! Pour s'inscrire, rien de plus simple ! Cliquez sur
            l'evênement qui vous interesse pour afficher les informations de ce dernier; si tout vous convient, appuyez sur <em>s'inscrire</em> !
            Il ne vous restera plus qu'a attendre que Raid leader confirme votre place au sein du roster. Vous retrouverez toutes vos candidatures 
            dans <em>Mon compte</em> !
            
        </article>
        <div class="space_big">  
        </div>
        <div class="centered"><a href="/wowLfg/calendrier"><button class ="go" >C'est parti !</button></a></div>
    </div>
<?php $content = ob_get_clean()?>