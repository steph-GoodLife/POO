<?php
/*
 * Front controller
 */

/*
 * open session
 */
session_start();

/*
 * Dependencies
 */
require_once "config.php";

/*
 * connect to DB (mysqli procedural)
 */
require_once "mysqliConnect.php";

require_once "controler/publicController.php";

