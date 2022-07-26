<?php
var_dump($data['client']);

$myCliente = $data['client'];
?>

<body class="d-flex flex-column mb-3  bg-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/2.jpg');
            height: 100vh"> 
        <div class="container d-flex justify-content-center">
        
		
		<form method="post" action="?action=update" class="bg-light text-dark border border-dark border border-8 text-dark p-5 m-5 d-flex justify-content-evenly w-100">
        <div class="name_theme d-flex flex-column">
        <div class="mb-2">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input name="client" class="form-control" id="Input1" value="<?php echo($myCliente->getclient()); ?>">
		
		
        </div>
        <div class="mb-2">
            <label for="exampleFormControlInput1" class="form-label">Theme</label>
            <input name="issue" class="form-control"  id="Input2"value="<?php echo($myCliente->getissue()); ?>"placeholder="Theme">
        </div>
        </div>
        <div class="description_buttons d-flex flex-column">
        <div class="mb-4">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="Textarea1" rows="8" value="<?php echo($myCliente->getdetail()); ?>"placeholder="Theme"></textarea>
        </div>
        <div class="botones" style="margin-bottom:2rem">
        <input class="btn-mg btn-outline-success go-add-task float"type="submit" value="Cancel">
                <input class="btn-mg btn-outline-warning go-add-task float" type="reset" value="Reset">
                <input class="btn-mg btn-outline-success go-add-task float" type="submit" value="Send">  
        </div>
        </form>
        </div>
        </div>
    </body>
 

</html>
