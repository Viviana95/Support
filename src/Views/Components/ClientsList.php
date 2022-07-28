<html>
<head>
<!-- demás elementos-->
<style type=”text/css”>
navbar {color:#000033;}
h2 {color:#003300;}
</style>
</head>

<<<<<<< HEAD
<body class="d-flex flex-column"style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/33.jpg'); background-repeat:no-repeat mt-5"> 
=======
<body class="d-flex flex-column text-white"style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/89.jpg');
            "> 
>>>>>>> laura
    <main>
        <div id="wrapper mt-5">
            <div id="content-wrapper" class="d-flex flex-column mt-5">
                <div id="content">
                    <div class="container">
                        <div class="card shadow border-dark border border-2">
                        <div class="bg-secondary text-center light mb-4 m-label" style> <strong> LIST </strong>📃 </p></label> </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table" scope="row" id="dataTable" cellspacing="1">
                                 <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Name</th>
                                            <th>Theme</th>
                                            <th>Detail</th>
                                            <th>id</th>
                                            <th></th>
                                        </a>
                                        </th>
                                        </thead>
                                    
<tbody>
                <?php
                foreach ($data["client"] as $client) {
                    echo "
                    <tr>
                        <td>{$client->getdate()}</td>
                        <td>{$client->getclient()}</td>
                        <td>{$client->getissue()}</td>
                        <td>{$client->getdetail()}</td>
                        <td>{$client->getId()}</td>
                        <td>               
                           <div> 
                    
                            <a href='?action=edit&id={$client->getId()}'><i class='fa-solid fa-marker'></i></a>
                            <a href='?action=delete&id={$client->getId()}'><i class='fa-solid fa-trash-can'></i></a></div>
                            
                        </td>
                    </tr>
                    ";
                } ?>

            </tbody>
        </table>
    </main>
 
</body>

</html>
