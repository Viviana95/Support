<html>
<head>
<!-- demás elementos-->
<style type=”text/css”>
navbar {color:#000033;}
h2 {color:#003300;}
</style>
</head>

<body class="d-flex flex-column"style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/33.jpg'); background-repeat:no-repeat mt-5"> 
    <main>
        <div id="wrapper">
            <div id="content-wrapper" class="d-flex flex-column mt-5">
                <div id="content">
                    <div class="container-fluid">
                        <div class="card shadow border-warning border border-3 mt-5">
                            
                        <div class="card-body">
                            <div class="table-responsive">
                                    
                                <table class="table table-bordered" scope="row" id="dataTable" cellspacing="1">
                                 <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Name</th>
                                            <th>Theme</th>
                                            <th>Detail</th>
                                            <th>id</th>
                                            <th><a href="?action=index">
                                            <button type="button" class="btn btn-outline-dark go-add-task float-end btn-mg">completed</button>
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
                        <a href='?action=edit&id={$client->getId()}'><button>edit</button></a>          
                        <a href='?action=delete&id={$client->getId()};
                                 ?action=index'><button>delete</button></a>
                        </td>
                    </tr>
                    ";
                } ?>

            </tbody>
        </table>
    </main>
 
</body>

</html>
