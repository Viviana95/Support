<?php

namespace App;

require_once("./src/Controllers/Controller.php");
require_once("./src/Models/Logger.php");
require_once("./src/Models/Clients.php");
require_once("./src/Views/Components/Nav.php");
require_once("./src/Views/Components/Layout.php");
require_once("./src/Core/View.php");

use App\Controllers\ClientsController;
use App\Models\Logger;

$controller = new ClientsController(new Logger());


require_once("./src/Views/Components/Footer.php");
?>
</html>