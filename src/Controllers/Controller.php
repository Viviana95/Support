<?php

namespace App\Controllers;

use App\Core\View;
use App\Models\Clients;


class ClientsController
{



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

    public function index(): void
    {
        $client = new Clients();
        $client = $client->all();
        new View("ClientsList", ["client" => $client]);
    }

    public function create(): void
    {
        new View("CreateClient");
    }

    public function store(array $request): void
    {
        var_dump($request["client"]);
        var_dump($request["issue"]);
        var_dump($request["description"]);


        $newClient = new Clients(Null, $request["client"], $request["issue"], $request["description"],);

        $newClient->save();



        $this->index();
    }

    public function delete($id)
    {
        $clientHelper = new Clients();
        $client = $clientHelper->findById($id);
        $client->delete();


        $this->index();
    }

    public function edit($id): void
    {


        $clientHelper = new Clients();
        $client = $clientHelper->findById($id);

        new View("EditClient", ["client" => $client]);
    }

    public function update(array $request, $id)
    {
        $clientHelper = new Clients();
        $client = $clientHelper->findById($id);

        $client->setclient($request["client"]);
        $client->setissue($request["issue"]);
        $client->setdetail($request["detail"]);


        $client->update();


        $this->index();
    }
}
