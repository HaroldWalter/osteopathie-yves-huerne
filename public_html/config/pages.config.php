<?php

define("ATTR_PAGE_TITRE", "titre");
define("ATTR_PAGE_NOM_FICHIER", "nomFichier");
define("ATTR_PAGE_TEMPLATE", "template");

define("PAGE_ACCUEIL", "accueil");
define("PAGE_MENTIONS_LEGALES", "mentions-legales");

define("PAGES", [
   PAGE_ACCUEIL => [
      ATTR_PAGE_TITRE => "Accueil",
      ATTR_PAGE_NOM_FICHIER => "accueil",
      ATTR_PAGE_TEMPLATE => TEMPLATE_STANDARD,
   ],

   PAGE_MENTIONS_LEGALES => [
      ATTR_PAGE_TITRE => "Mentions Légales",
      ATTR_PAGE_NOM_FICHIER => "mentions-legales",
      ATTR_PAGE_TEMPLATE => TEMPLATE_STANDARD,
   ],

]);
