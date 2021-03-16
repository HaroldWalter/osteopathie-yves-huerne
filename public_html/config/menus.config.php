<?php

define("ATTR_ITEMS_MENUS", "items");
define("ATTR_ITEM_MENU_LIBELLE", "libelle");
define("ATTR_ITEM_MENU_PAGE", "page");
define("ATTR_ITEM_MENU_ANCRE", "ancre");

define("MENU_PRESENTATION", "presentation");
define("NAV_VERS_PAGES", "navVersPages");
define("NAV_VERS_RDV", "navVersRDV");
define("NAV_VERS_MENTIONS_LEGALES", "navVersMentionsLegales");


define("MENUS", [
   MENU_PRESENTATION => [
      ATTR_ITEMS_MENUS => [
         [
            ATTR_ITEM_MENU_LIBELLE => "Le Cabinet",
            ATTR_ITEM_MENU_PAGE => PAGE_ACCUEIL,
            ATTR_ITEM_MENU_ANCRE => ANCRE_CABINET,
         ],
         [
            ATTR_ITEM_MENU_LIBELLE => "Pourquoi consulter ?",
            ATTR_ITEM_MENU_PAGE => PAGE_ACCUEIL,
            ATTR_ITEM_MENU_ANCRE => ANCRE_POURQUOI_CONSULTER,
         ],
         [
            ATTR_ITEM_MENU_LIBELLE => "Pour qui ?",
            ATTR_ITEM_MENU_PAGE => PAGE_ACCUEIL,
            ATTR_ITEM_MENU_ANCRE => ANCRE_POUR_QUI,
         ],
         [
            ATTR_ITEM_MENU_LIBELLE => "La consulation ?",
            ATTR_ITEM_MENU_PAGE => PAGE_ACCUEIL,
            ATTR_ITEM_MENU_ANCRE => ANCRE_CONSULTATIONS,
         ],
         [
            ATTR_ITEM_MENU_LIBELLE => "Coordonnées ?",
            ATTR_ITEM_MENU_PAGE => PAGE_ACCUEIL,
            ATTR_ITEM_MENU_ANCRE => ANCRE_COORDONNEES,
         ],

      ],
   ],

   NAV_VERS_PAGES => [

      NAV_VERS_RDV => [
         ATTR_ITEM_MENU_LIBELLE => "Prise de RDV en Ligne",
         ATTR_ITEM_MENU_PAGE => PAGE_PRISE_RDV,
      ],
      NAV_VERS_MENTIONS_LEGALES => [
         ATTR_ITEM_MENU_LIBELLE => "Mentions légales",
         ATTR_ITEM_MENU_PAGE => PAGE_MENTIONS_LEGALES,
      ],


   ],

]);
