<body class="d-flex flex-column mb-3" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/89.jpg') ; 
    <div class=" container d-flex justify-content-center mt-5">

<?php
date_default_timezone_set('Europa/Spain');
$current_date=date("Y-m-d H:i:s");
?>

    <form method="post" action="?action=store" class="img-fluid text-dark text-white p-2 m-5 d-flex justify-content-evenly w-100 "  ;>

        <div class="name_theme d-flex flex-column">
             <div class="card border border-dark border border-2 " style="width: 30rem; "> 
                <div class="card-header">
                    <div class="bg-secondary text-center dark mb-4 ">
                        <label for="exampleFormControlTextarea1" class="form-label" style> <strong> ADD </strong>📒 </p></label>

                        </div>
                        <div class="mb-2">
                            <label for="exampleFormControlInput1" class="form-label text-dark"><strong>Date</strong></label>
                            <input name="date" class="form-control" id="Input3" type="datetime" value="<?=$current_date ?>">
                        </div>

                    <div class="mb-2">
                        <label for="exampleFormControlInput1" class="form-label text-dark"><strong>Nombre</strong></label>
                        <input name="client" class="form-control" id="Input1" placeholder="Nombre">
                    </div>
                    <div class="mb-2">
                        <label for="exampleFormControlInput1" class="form-label text-dark"><strong>Tema</strong></label>
                        <input name="issue" class="form-control" id="Input2" placeholder="Tema">
                    </div>

                    <div class="bg-light text light mb-4">
                        <label for="exampleFormControlInput1" class="form-label text-dark"><strong>Descripción</strong></label>
                        <textarea name="description" class="form-control" id="Textarea1" rows="8"></textarea>
                    </div>
                </div>
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