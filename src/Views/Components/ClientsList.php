<html>

<body class="d-flex flex-column"style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/79.jpg');
            "> 
    <main>
        <div id="wrapper mt-5">
            <div id="content-wrapper" class="d-flex flex-column mt-5">
                <div id="content">
                    <div class="container">
                        <div class="card shadow border-info border border-3">
                        <h2 class="text-center bg-info" >List <i class="fa-solid fa-list"></i></h2>
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