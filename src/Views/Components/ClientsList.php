<html>

<body id="fondo" class="d-flex flex-column justify-content-center  my-5 p-2" style="background-color: #43372b; height:max-content"> 
    <main class="img-fluid  justify-content-center mt-5 p-2 m-5" style="background-image: url('https://raw.githubusercontent.com/lauracastelao/image/main/assets/fondo.png')" >
        <div id="wrapper mt-5">
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <div class="container">
                        <div class="card shadow my-5 bg-light border-secondary border border-3">
                        <h3 class="text-center bg-secondary">List <i class="fa-solid fa-list" style="color:bisque"></i></h3>
                        <div class="card-body">
                            <div class="table-responsive-sm">
                                <table class="table text-dark table-hover" scope="row" id="dataTable" cellspacing="1">
                                 <thead>
                                            <tr>
                                            <th>Date</th>
                                            <th>Name</th>
                                            <th>Theme</th>
                                            <th>Detail</th>
                                            <th>id</th>
                                            <th>Action</th>
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
                    
                            <a class='me-3' href='?action=edit&id={$client->getId()}'><i class='fa-solid fa-marker'></i></a>
                            <a href='?action=delete&id={$client->getId()}'><i class='fa-solid fa-trash-can' style='color:red'></i></a></div>
                            
                        </td>
                    </tr>
                    ";
                } ?>

            </tbody>
        </table>
    </main>
 
</body>

</html>