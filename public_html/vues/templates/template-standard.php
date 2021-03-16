<!-- SECTION : Ouverture de page -->
<?php require_once CHEMIN_VUES_MODULES . "ouverture-page.php"; ?>
<!-- FIN SECTION : Ouverture de page -->

<!-- SECTION : Section en-tête -->
<?php require_once CHEMIN_VUES_MODULES . "section-en-tete.php"; ?>
<!-- FIN SECTION : Section en-tête -->

<!-- SECTION : Contenu principal -->
<?php require_once CHEMIN_VUES_PAGES . PAGES[$pageDemandee][ATTR_PAGE_NOM_FICHIER] . ".php"; ?>
<!-- FIN SECTION : Contenu principal -->

<!-- SECTION : Footer -->
<?php require_once CHEMIN_VUES_MODULES . "footer.php"; ?>
<!-- FIN SECTION : Footer -->

<!-- SECTION : Fermeture de page -->
<?php require_once CHEMIN_VUES_MODULES . "fermeture-page.php"; ?>
<!-- FIN SECTION : Fermeture de page -->