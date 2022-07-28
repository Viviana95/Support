<?php

namespace App\Controllers;

use App\Core\View;
use App\Models\Clients;


class ClientsController {

   

    public function __construct()
    {
		
        
        if (isset($_GET["action"]) && ($_GET["action"] == "create")) {
            $this->create();
            return;
        }

        if (isset($_GET["action"]) && ($_GET["action"] == "store")) {
            $this->store($_POST);
            return;
            var_dump($_POST['name']);
        }

        if (isset($_GET["action"]) && ($_GET["action"] == "edit")) {
            $this->edit($_GET["id"]);
            return;
        }

        if (isset($_GET["action"]) && ($_GET["action"] == "update")) {
            $this->update($_POST, $_GET["id"]);
            return;
        }

        if (isset($_GET["action"]) && ($_GET["action"] == "delete")) {

            $this->delete($_GET["id"]);
            return;
        }

        $this->index();
    }

    public function index(): void  //aqui recupero el array(clientList)y se lo paso a la vista
    {
        $client = new Clients();
        $client = $client->all();
        new View("ClientsList", ["client" => $client]);
    }

    public function create(): void
    {
        /*echo 'Aqui tendremos el Formulario para crear';*/
        new View("CreateClient");
		

        
    }

    public function store(array $request): void
    {
        var_dump($request["client"]);
        var_dump($request["issue"]);
        var_dump($request["description"]);

	
		// crea un objeto de tipo cliente sin id
        $newClient = new Clients(Null,$request["client"],$request["issue"],$request["description"],);

		//hace in INSERT en la base de datos un nuevo registro con los datos del cliente
        $newClient->save();

        //$this-> logger->logCreate($newClient);


        $this->index(); //aqui vuelve a la vista index/home
    }

    public function delete($id)
    {
        $clientHelper = new Clients();
        $client = $clientHelper->findById($id);
        $client->delete();
       

        $this->index(); //aqui vuelve a la vista index/home
    }

    public function edit($id) : void
    {
     //encuentra al cliente por el id
        
        $clientHelper = new Clients();
        $client = $clientHelper->findById($id);
       
        new View("EditClient", ["client" => $client]); //carga la vista con el formulario de edicion y le pasa un objeto cliente para editar
        
    }
    
    public function update(array $request, $id)
    {
        // Update client By ID
        $clientHelper = new Clients();
        $client = $clientHelper->findById($id);
		
        $client->setclient($request["client"]);
		$client->setissue($request["issue"]);
		$client->setdetail($request["detail"]);
		
		
		//hace UPDATE en la base de datos con los datos del objeto cliente en el registro con Id = $id
        $client->update();
        
        //$this-> logger->logUpdate($client);

        // Return to View List
        $this->index(); //aqui vuelve a la vista index/home(ClientsList)
    }
}