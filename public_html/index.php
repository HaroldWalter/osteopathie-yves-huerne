<?php

require_once "./config/fichiers.config.php";
require_once "./config/templates.config.php";
require_once "./config/urls.config.php";
require_once "./config/ancres.config.php";
require_once "./config/pages.config.php";
require_once "./config/menus.config.php";
require_once "./config/actions.config.php";


require_once
  isset($_GET[PARAM_URL_ACTION]) ?
  CHEMIN_CONTROLEURS . "controleur-actions.php" :
  CHEMIN_CONTROLEURS . "controleur-pages.php";
