<?php

namespace App\Models;


require_once(__DIR__ . '/../Core/Database.php');

use App\Core\Database;


class Clients
{
    private ?int $id;
    private string $client;
    private ?string $date;
    private string $issue;
    private $database;
    private $table = "support2";

    public function __construct(int $id = null, string $client = '', string $issue = '', string $detail = '', string $date = '')
    {
        $this->date = $date;
        $this->client = $client;
        $this->issue = $issue;
        $this->detail = $detail;
        $this->id = $id;

        if (!$this->database) {
            $this->database = new Database();
        }
    }

    public function getdate()
    {
        return $this->date;
    }

    public function setdate($date)
    {
        $this->date = $date;
    }

    public function getissue()
    {
        return $this->issue;
    }

    public function setissue($issue)
    {
        $this->issue = $issue;
    }

    public function getdetail()
    {
        return $this->detail;
    }

    public function setdetail($detail)
    {
        $this->detail = $detail;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getclient()
    {
        return $this->client;
    }

    public function setclient($client)
    {
        $this->client = $client;
    }


    public function save(): void
    {
        if ($this->getId()) {
            $this->database->mysql->query("UPDATE `{$this->table}` SET `client` =  '{$this->client}', `issue` =  '{$this->issue}' WHERE `id` = {$this->id}");
        } else {
            /* crea lineas nuevas en la tabla */
            $this->database->mysql->query("INSERT INTO `{$this->table}` (`client`, `issue`,`detail`,`date`) VALUES ('$this->client','$this->issue','$this->detail','$this->date');");
        }
    }

    public function all()
    {
        $query = $this->database->mysql->query("select * FROM {$this->table}");
        $clientsArray = $query->fetchAll();

        $clientList = [];

        foreach ($clientsArray as $client) {
            $clientItem = new Clients($client["id"], $client["client"], $client["issue"], $client["detail"], $client["date"]);

            array_push($clientList, $clientItem);
        }

        return $clientList;
    }


    public function delete()
    {

        $query = $this->database->mysql->query("DELETE FROM `{$this->table}` WHERE `{$this->table}`.`id` = {$this->id}");
    }

    public function findById($id)
    {
        $query = $this->database->mysql->query("SELECT * FROM `{$this->table}` WHERE `id` = {$id}");
        $result = $query->fetchAll();

        return new Clients($result[0]["id"], $result[0]["client"], $result[0]["issue"], $result[0]["date"]);
    }


    public function Update()
    {

        $this->database->mysql->query("UPDATE `{$this->table}` SET `client` =  '{$this->client}', `issue` =  '{$this->issue}' WHERE `id` = {$this->id}");
    }
}
