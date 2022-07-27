<?php
var_dump($data['client']);

$myCliente = $data['client'];
?>

<body class="d-flex flex-column mb-3" style="background-color: #43372b ");
">
    <div class="container d-flex justify-content-center mt-5">



    <form method="post" action="?action=store" class="img-fluid text-dark border border-dark border border-3 text-white p-2 m-5 d-flex justify-content-evenly w-100 " style="background-image: url('https://raw.githubusercontent.com/lauracastelao/image/main/assets/fondo.png')" ;>

            <div class="name_theme d-flex flex-column">
                <div class="card border border-success border border-3 " style="width: 30rem; ">
                    <div class="card-header">
                        <div class="bg-secondary text-center light mb-4">
                            <label for="exampleFormControlTextarea1" class="form-label" style> <p class= "text-white"<strong> EDIT </strong>📒 </p></label>
                        </div>
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input name="client" class="form-control" id="Input1" value="<?php echo ($myCliente->getclient()); ?>">


                
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label">Theme</label>
                    <input name="issue" class="form-control" id="Input2" value="<?php echo ($myCliente->getissue()); ?>" placeholder="Theme">
                </div>
            </div>
            <div class="description_buttons d-flex flex-column">
                <div class="mb-4">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea name="description" class="form-control" id="Textarea1" rows="8" value="<?php echo ($myCliente->getdetail()); ?>" placeholder="Theme"></textarea>
                </div>
                <div class="botones d-flex justify-content-evenly mt-5" style="margin-bottom:2rem">
                    <input class="btn-mg btn-outline-trasparent go-add-task float" type="submit" value="❌">
                    <input class="btn-mg btn-outline-trasparent go-add-task float" type="reset" value="🔁">
                    <input class="btn-mg btn-outline-trasparentgo-add-task float" type="submit" value="✔️">
                </div>
        </form>
      </div>
    </div>
</body>


</html>