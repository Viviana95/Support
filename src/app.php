<?php

namespace App;

require_once("./src/Controllers/Controller.php");
require_once("./src/Models/Clients.php");
require_once("./src/Views/Components/Nav.php");
require_once("./src/Views/Components/Layout.php");
require_once("./src/Core/View.php");

use App\Controllers\ClientsController;
use App\Models\Clients;

$controller = new ClientsController(new Clients());


require_once("./src/Views/Components/Footer.php");
?>

</html>