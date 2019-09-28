<?php

define("APPLICATION", "application");
define("CONTROLLER_PATH", APPLICATION. "/controllers/");
define("MODEL_PATH", APPLICATION. "/models/");
define("VIEW_PATH", APPLICATION. "/views/");

require_once("core/db.php");
require_once("core/route.php");
require_once APPLICATION. '/core/model.php';
require_once APPLICATION. '/core/view.php';
require_once APPLICATION. '/core/controller.php';

define("ERRORMODE", true);

Route::start();