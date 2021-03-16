<header>
   <div>logo</div>
   <div>
      <nav>
         <ul>
            <?php foreach (MENUS[MENU_PRESENTATION][ATTR_ITEMS_MENUS] as $menuItem) : ?>
               <?php if (
                  isset($menuItem[ATTR_ITEM_MENU_PAGE])
                  && !is_null($menuItem[ATTR_ITEM_MENU_PAGE])
               ) : ?>
                  <li>
                     <a href="./?<?= PARAM_URL_PAGE ?>=<?= $menuItem[ATTR_ITEM_MENU_PAGE] ?>#<?= $menuItem[ATTR_ITEM_MENU_ANCRE] ?>">
                     <?=$menuItem[ATTR_ITEM_MENU_LIBELLE]?>
                  </a>

                  </li>
               <?php endif; ?>
            <?php endforeach; ?>
         </ul>
      </nav>
   </div>
   <div>
      <a href="./?<?= PARAM_URL_PAGE ?>=<?= MENUS[NAV_VERS_PAGES][NAV_VERS_RDV][ATTR_ITEM_MENU_PAGE] ?>"><?= MENUS[NAV_VERS_PAGES][NAV_VERS_RDV][ATTR_ITEM_MENU_LIBELLE] ?></a>
   </div>
</header>