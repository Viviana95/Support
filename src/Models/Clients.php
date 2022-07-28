<?php
namespace App\Models;


//nos traemos la clase database
require_once(__DIR__.'/../Core/Database.php');
use App\Core\Database;


//Modelo Clientes
class Clients {
    private ?int $id;
    private string $client;
    private ?string $date;
    private string $issue;
    private $database;
    private $table = "support2";
    
    public function __construct( int $id = null, string $client = '', string $issue = '',string $detail='', string $date = '')
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
		if($this->getId()){
			$this->database->mysql->query("UPDATE `{$this->table}` SET `client` =  '{$this->client}', `issue` =  '{$this->issue}', `detail` =  '{$this->detail}', `date` =  '{$this->date}' WHERE `id` = {$this->id}");
   
		} else {
			/* crea lineas nuevas en la tabla */
			$this->database->mysql->query("INSERT INTO `{$this->table}` (`client`, `issue`,`detail`,`date`) VALUES ('$this->client','$this->issue','$this->detail','$this->date')");
		}
		
		
    }

    public function all()//con el metodo all() nos conectamos a la base de datos
    {
        $query = $this->database->mysql->query("SELECT * FROM {$this->table} ORDER BY date DESC");//mediante el método query hacemos una consulta a través de una sentencia sql???
        $clientsArray = $query->fetchAll();//una vez obtenido el resultado de la consulta con el fetch recuperamos todos los datos
                
        $clientList = [];//esto vuelve en formato array, el cual contiene otros arrays(arrays asociativos)
        
        foreach ($clientsArray as $client) {//aqui construimos utilizando nuestro modelo Clients construimos nuestros clientes y hacemos la lista,
            $clientItem = new Clients ($client["id"], $client["client"], $client["issue"], $client["detail"] ,$client["date"]);//esta linea hace que por cada fila de nuestra base de datos se construya un objeto(linea 19)que tiene el formato de ésta linea.Un objeto Clients y lo estoy pusheando en la clientList, esta clientlist desde el controlador recupero el array y se lo paso a la vista.
            
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

        return new Clients($result[0]["id"], $result[0]["client"], $result[0]["issue"] , $result[0]["date"]);
    }


    public function Update()
    {
		//actualiza/modifica el valor de la linea con el id que tenga el objeto clients
        $this->database->mysql->query("UPDATE `{$this->table}` SET `client` =  '{$this->client}', `issue` =  '{$this->issue}' WHERE `id` = {$this->id}");
    }
}