<?php
    require_once('koneksi.php');

    $sql = "SELECT * FROM articles";
    $articles = $koneksi->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body class="bg-dark">

    <div class="container py-5">
        <div class="row">
            <div class="col-15 mx-auto">
                <div class="card rounded-0">

                    <div class="card-header">
                        <h1 class="text-center">Data Articles at Nokensoft</h1>
                        <a href="" class="btn btn-primary rounded-0 ">
                            Add Articles 
                        </a>
                    </div>
                    <!-- .card header end -->

                    <div class="card-body">
                        <!-- table start -->
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="txt-center">No</th>
                                    <th class="text-center">Short Description</th>
                                    <th class="text-center">Full Description</th>
                                    <th class="text-center">Category Id</th>
                                    <th class="text-center">Author Id</th>
                                    <th class="text-center">Options</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php 
                                    $no = 1;
                                    if((mysqli_num_rows($articles) > 0))
                                    {
                                        while($article = mysqli_fetch_assoc($articles))
                                        {
                                            echo "
                                                <tr>
                                                    <td>
                                                        " . $no++ . "
                                                    </td>
                                                    <td>
                                                        " . $article['short_description'] . "
                                                    </td>
                                                    <td>
                                                        " . $article['full_description'] . "
                                                    </td>
                                                    <td>
                                                        " . $article['category_id'] . "
                                                    </td>
                                                    <td>
                                                        " . $article['author_id'] . "
                                                    </td>
                                                    <td class='d-flex gap-1'>
                                                        <a href='#' class='btn btn-sm btn-primary rounded-0'>View</a>
                                                        <a href='#' class='btn btn-sm btn-outline-success rounded-0'>Edit</a>
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