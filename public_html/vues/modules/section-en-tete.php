<header class="main-header">
   <div class="container-fluid">
      <nav >
         <a href="./?<?= PARAM_URL_PAGE ?>=<?= MENUS[NAV_VERS_PAGES][NAV_VERS_ACCUEIL][ATTR_ITEM_MENU_PAGE] ?>">
            <img src="<?= CHEMIN_IMAGES ?>logo_baseline.webp" alt="logo" width="100" height="100">
         </a>
         

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
                  <button class="bttnRDV nav-item" type="button" onclick="window.location.href='https://us.cloudamo.com/index.php/apps/appointments/pub/O6%2B%2Bil3TjvYevRxivClmyH_nfIdUuu8ijwfgbw%3D%3D/form';">Prendre RDV</button>
               </li>
            </ul>
            <div class="hamburger">
               <span class="barre"></span>
               <span class="barre"></span>
               <span class="barre"></span>
            </div>
         </div>
      </nav>
   </div>


</header>