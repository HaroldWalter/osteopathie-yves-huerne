<?php

$pageDemandee = PAGE_ACCUEIL;
$pageExiste = true;

// Test de l'existence de la page et auquel cas, conservation de son id
if (isset($_GET[PARAM_URL_PAGE])) {
   $pageExiste = false;
   foreach (PAGES as $page => $donneesPages)
      if ($page == $_GET[PARAM_URL_PAGE]) {
         $pageDemandee = $page;
         $pageExiste = true;
         break;
      }
}

// Action finale : inclusion de la vue OU redirection vers page 404
require_once
   TEMPLATES[($pageExiste ?
      PAGES[$pageDemandee][ATTR_PAGE_TEMPLATE] : TEMPLATE_PAGE_INTROUVABLE)][TEMPLATE_ATTR_FICHIER];
