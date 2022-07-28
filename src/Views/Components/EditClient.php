<?php
// var_dump($data['client']);

$myCliente = $data['client'];
?>
<body class="d-flex flex-column mb-3" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/89.jpg') ; 
<div class=" container d-flex justify-content-center mt-5">
<form method="post" action="?action=store" class="img-fluid text-dark text-white p-2 m-5 d-flex justify-content-evenly w-100 "  ;>
<div class="name_theme d-flex flex-column">
             <div class="card border border-dark border border-2 " style="width: 30rem; "> 
                <div class="card-header">
                    <div class="bg-secondary text-center light mb-4 ">
                        <label for="exampleFormControlTextarea1" class="form-label" style> <strong> DETALLE </strong> 🔎 </p></label>

                    </div>

                    <div class="mb-2">
                        <label for="exampleFormControlInput1" class="form-label text-dark"><strong>Nombre</strong></label>
                        <input name="client" class="form-control" id="Input1"  value="<?php echo ($myCliente->getclient()); ?>" 
                    </div>
                    <div class="mb-2">
                        <label for="exampleFormControlInput1" class="form-label text-dark"><strong>Tema</strong></label>
                        <input name="issue" class="form-control" id="Input2" value="<?php echo ($myCliente->getissue()); ?>" >
                    </div>

                    <div class="bg-light text light mb-4">
                        <label for="exampleFormControlInput1" class="form-label text-dark"><strong>Descripción</strong></label>
                        <textarea name="description" class="form-control" id="Textarea1"value="<?php echo ($myCliente->getdetail()); ?>"  rows="8"></textarea>
                    </div>
                </div>
            </div>
            <div class="botones d-flex justify-content-evenly mt-5" style="margin-bottom:2rem">
                    <input class="btn-mg btn-outline-success go-add-task float" type="submit" value="Cancel">
                    <input class="btn-mg btn-outline-warning go-add-task float" type="reset" value="Reset">
                    <input class="btn-mg btn-outline-success go-add-task float" type="submit" value="Send">
                </div>
        </form>
    </div>
    </div>
</body>


</html>