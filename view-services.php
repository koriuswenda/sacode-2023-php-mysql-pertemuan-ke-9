<?php
    require_once('koneksi.php');

    $sql = "SELECT * FROM services ";
    $services = $koneksi->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body class="bg-dark">

    <div class="container py-5">
        <div class="row">
            <div class="col-15mx-auto">
                <div class="card rounded-0">

                    <div class="card-header">
                        <h1 class="text-center">Data Services at Nokensoft</h1>
                        <a href="" class="btn btn-primary rounded-0">
                            Add Services
                        </a>
                    </div>
                    <!-- .card header end -->

                    <div class="card-body">
                        <!-- table start -->
                        <table class="table table-bordered table-hover ">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">title</th>
                                    <th class="text-center">description</th>
                                    <th class="text-center">body</th>
                                    <th class="text-center">author</th>
                                    <th class="text-center" >status</th>
                                    <th class="text-center">action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php 
                                    $no = 1;
                                    if((mysqli_num_rows($services) > 0))
                                    {
                                        while($service = mysqli_fetch_assoc($services))
                                        {
                                            echo "
                                                <tr>
                                                    <td>
                                                        " . $no++ . "
                                                    </td>
                                                    <td>
                                                        " . $service['title'] . "
                                                    </td>
                                                    <td>
                                                        " . $service['description'] . "
                                                    </td>
                                                    <td>
                                                        " . $service['body'] . "
                                                    </td>
                                                    <td>
                                                        " . $service['author'] . "
                                                    </td>
                                                    <td>
                                                        " . $service['status'] . "
                                                    </td>
                                                    <td class='d-flex gap-1'>
                                                        <a href='#' class='btn btn-sm btn-primary rounded-0'>View</a>
                                                        <a href='#' class='btn btn-sm btn-outline-warning rounded-0'>Edit</a>
                                                        <a href='#' class='btn btn-sm btn-outline-danger rounded-0'>Delete</a>
                                                    </td>
                                                </tr>
                                            ";
                                        }
                                    } else {
                                        echo "no data!";
                                    }
                                ?>

                            </tbody>
                        </table>
                        <!-- table end -->
                    </div>
                    <!-- .card body end -->
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>