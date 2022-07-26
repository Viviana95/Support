<html>

<body class="d-flex flex-column"style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/79.jpg');
            "> 
    <main>
        <div id="wrapper">
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <div class="container-fluid">
                        <div class="card shadow border-warning border border-3">
                            
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
                                            <th><a href="?action=create">
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
                        <a href='?action=edit&id={$client->getId()}'><i class='lnr lnr-pencil'></i></a>
                            <a href='?action=delete&id={$client->getId()}'><i class='lnr lnr-trash'></i>X</a><br>
                            <a href='?action=edit&id={$client->getId()}'><i class='lnr lnr-pencil'></i>edit</a>
                        </td>
                    </tr>
                    ";
                } ?>

            </tbody>
        </table>
    </main>
 
</body>

</html>