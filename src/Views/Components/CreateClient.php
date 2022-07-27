
<body class="d-flex flex-column mb-3" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/78.jpg');
"> 
        <div class="container d-flex justify-content-center mt-5">
        
		
		<form method="post" action="?action=store" class="bg-light text-dark border border-warning border border-3 text-dark p-5 d-flex justify-content-evenly w-100 mt-5">
        <div class="name_theme d-flex flex-column">
        <div class="mb-2">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input name="client" class="form-control" id="Input1" placeholder="nombre">
        </div>
        <div class="mb-2">
            <label for="exampleFormControlInput1" class="form-label">Theme</label>
            <input name="issue" class="form-control"  id="Input2" placeholder="Theme">
        </div>
        </div>
        <div class="description_buttons d-flex flex-column">
        <div class="mb-4">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="Textarea1" rows="8"></textarea>
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