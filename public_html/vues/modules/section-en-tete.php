<header class="main-header">
   <div class="container-fluid">
      <nav >
         <a href="./?<?= PARAM_URL_PAGE ?>=<?= MENUS[NAV_VERS_PAGES][NAV_VERS_ACCUEIL][ATTR_ITEM_MENU_PAGE] ?>">
            <img src="<?= CHEMIN_IMAGES ?>logo_baseline.webp" alt="logo" width="100" height="100">
         </a>
         
         <div class="hamburger" tabindex="0">
               <span class="barre"></span>
               <span class="barre"></span>
               <span class="barre"></span>
            </div>
            
            <ul class="menu">
               <?php foreach (MENUS[MENU_PRESENTATION][ATTR_ITEMS_MENUS] as $menuItem) : ?>
                  <?php if (
                     isset($menuItem[ATTR_ITEM_MENU_PAGE])
                     && !is_null($menuItem[ATTR_ITEM_MENU_PAGE])
                  ) : ?>
                     <li class="menu-item">
                        <a class="menu-link" href="./#<?= $menuItem[ATTR_ITEM_MENU_ANCRE] ?>">
                           <?= $menuItem[ATTR_ITEM_MENU_LIBELLE] ?>
                        </a>
                     </li>

                  <?php endif; ?>
               <?php endforeach; ?>

               <li>
                  <button id="bttnMenuRDV" class="bttnRDV nav-item" type="button" >Prendre RDV</button>
               </li>
            </ul>
            
         </div>
      </nav>
   </div>


</header>