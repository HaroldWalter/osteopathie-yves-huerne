<section id="<?= ANCRE_POUR_QUI ?>">
   <!-- TITRE POUR  ECRANS DE MOINS DE 1140PX DE LARGEURS-->
   <h2 class="titrePetitEcran">Pour qui prendre <br> RDV</h2>

   <div class="row">
      <div class="col-xl-4 colonne-conteneur">

         <article id="nourrisson" tabindex="0" onclick="changeTexte('nourrissonVitrine', 'nourrissonTexte')">
            <div class="pourqui-contenu" >
               <div id='nourrissonVitrine' >
                  <figure><img src="<?= CHEMIN_IMAGES ?>nourrisson.png" alt="une face de nourrisson"></figure>
                  <h3>
                     Les <br> nourrisons
                  </h3>
               </div>
               <div id="nourrissonTexte">
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi totam quae accusamus magnam facilis aut facere vitae enim temporibus ipsa. Repellat aspernatur temporibus iste inventore corrupti harum est quod architecto esse adipisci!</p>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi totam quae accusamus magnam facilis aut facere vitae enim temporibus ipsa. Repellat aspernatur temporibus iste inventore corrupti harum est quod architecto esse adipisci!</p>
               </div>
            </div>
         </article>
         <article id="enfants" tabindex="0" onclick="changeTexte('enfantsVitrine', 'enfantsTexte')">
            <div class="pourqui-contenu" >
               <div id='enfantsVitrine' >
                  <figure><img src="<?= CHEMIN_IMAGES ?>enfants.png" alt="deux faces d'enfants"></figure>
                  <h3>
                     Enfants & adolescents
                  </h3>
               </div>
               <div id="enfantsTexte">
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi totam quae accusamus magnam facilis aut facere vitae enim temporibus ipsa. Repellat aspernatur temporibus iste inventore corrupti harum est quod architecto esse adipisci!</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
               </div>
            </div>
         </article>
      </div>

      <div class="col-xl-4 colonne-conteneur">
         <!-- TITRE POUR ÉCRANS DE PLUS DE 1140PX DE LARGEURS -->
         <h2 class="titreGrandEcran">Pour qui prendre <br> RDV</h2>

         <article id="adultes" tabindex="0" onclick="changeTexte('adultesVitrine', 'adultesTexte')">
            <div class="pourqui-contenu" >
               <div id='adultesVitrine'>
                  <figure><img src="<?= CHEMIN_IMAGES ?>adultes.png" alt="deux faces d'adultes"></figure>
                  <h3>
                     Adultes
                  </h3>
               </div>
               <div id="adultesTexte">
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi totam quae accusamus magnam facilis aut facere vitae enim temporibus ipsa.</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat aspernatur temporibus iste inventore corrupti harum est quod architecto esse adipisci!</p>
               </div>
            </div>
         </article>

         <article id="seniors" tabindex="0" onclick="changeTexte('seniorsVitrine', 'seniorsTexte')">
            <div class="pourqui-contenu" >
               <div id='seniorsVitrine'>
                  <figure><img src="<?= CHEMIN_IMAGES ?>seniors.png" alt="deux faces de seniors"></figure>
                  <h3>
                     Seniors
                  </h3>
               </div>
               <div id="seniorsTexte">
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi totam quae accusamus magnam facilis aut facere vitae enim temporibus ipsa.</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat aspernatur temporibus iste inventore corrupti harum est quod architecto esse adipisci!</p>
               </div>
            </div>
         </article>
      </div>

      <div class="col-xl-4 colonne-conteneur">
         <article id="enceintes" tabindex="0" onclick="changeTexte('enceintesVitrine', 'enceintesTexte')">
            <div class="pourqui-contenu" >
               <div id='enceintesVitrine'>
                  <figure><img src="<?= CHEMIN_IMAGES ?>femme_enceinte.png" alt="une femme enceinte"></figure>
                  <h3>
                     Femmes enceintes
                  </h3>
               </div>
               <div id="enceintesTexte">
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi totam quae accusamus magnam facilis aut facere vitae enim temporibus ipsa.</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat aspernatur temporibus iste inventore corrupti harum est quod architecto esse adipisci!</p>
               </div>
            </div>
         </article>

         <article id="sportifs" tabindex="0" onclick="changeTexte('sportifsVitrine', 'sportifsTexte')">
            <div class="pourqui-contenu" >
               <div id='sportifsVitrine'>
                  <figure><img src="<?= CHEMIN_IMAGES ?>muscle.png" alt="un bras musclé"></figure>
                  <h3>
                     Sportifs
                  </h3>
               </div>
               <div id="sportifsTexte">
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi totam quae accusamus magnam facilis aut facere vitae enim temporibus ipsa.</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat aspernatur temporibus iste inventore corrupti harum est quod architecto esse adipisci!</p>
               </div>
         </article>
      </div>
   </div>
   <button onclick="topFonction()" id="pourQuiTopBttn" title="Retour en haut de la page" class="topBttn"><img src="<?= CHEMIN_IMAGES ?>fleche_haut.png" alt="Flèche vers haut de la page"></button>
</section>