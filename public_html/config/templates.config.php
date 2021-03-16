<?php

define("TEMPLATE_ATTR_FICHIER", "fichier");

define("TEMPLATE_PAGE_INTROUVABLE", "erreur404");
define("TEMPLATE_STANDARD", "standard");

define("TEMPLATES", [

  TEMPLATE_STANDARD => [
    TEMPLATE_ATTR_FICHIER => CHEMIN_VUES_TEMPLATES . "template-standard.php",
  ],

  TEMPLATE_PAGE_INTROUVABLE => [
    TEMPLATE_ATTR_FICHIER => CHEMIN_STATIC . "404.html",
  ],

]);
