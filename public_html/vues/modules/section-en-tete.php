<header class="main-header">
   <div class="container-fluid">
      <nav class="navbar row">
         <div class="col-md-2">
            <a class="navbar-brand" href="./?<?= PARAM_URL_PAGE ?>=<?= MENUS[NAV_VERS_PAGES][NAV_VERS_ACCUEIL][ATTR_ITEM_MENU_PAGE] ?>">
               <img src="<?= CHEMIN_IMAGES ?>logo_baseline.png" alt="logo">
                           </a>
         </div>

         
               <?php foreach (MENUS[MENU_PRESENTATION][ATTR_ITEMS_MENUS] as $menuItem) : ?>
                  <?php if (
                     isset($menuItem[ATTR_ITEM_MENU_PAGE])
                     && !is_null($menuItem[ATTR_ITEM_MENU_PAGE])
                  ) : ?>
                     <div class="col-md-2 nav-item">
                        <a class="nav-link" href="./#<?= $menuItem[ATTR_ITEM_MENU_ANCRE] ?>">
                           <?= $menuItem[ATTR_ITEM_MENU_LIBELLE] ?>
                        </a>

                  </div>
                  <?php endif; ?>
               <?php endforeach; ?>
          
         <div class="col-md-2 nav-item">
         <button class="bttnRDV">
            <a href="https://us.cloudamo.com/index.php/apps/appointments/pub/O6%2B%2Bil3TjvYevRxivClmyH_nfIdUuu8ijwfgbw%3D%3D/form ?>"> Prendre RDV</a></button>
         </div>
      </nav>
   </div>


</header>