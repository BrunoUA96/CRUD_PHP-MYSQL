<?php require_once 'config/connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>php mysql</title>
</head>
<style>
    th, td {
        padding: 10px;
    }
</style>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <hr>
            </div>
            <div class="col-12">
                <h1 class="text-center my-4 position-relative">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" style="position: absolute; left:0; top: 50%; transform:translateY(-50%)" data-bs-toggle="modal" data-bs-target="#addNew">
                        Add new
                    </button>

                    Table
                </h1>
            </div>
            <div class="col-12">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr class="table-primary">
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Price</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $products = mysqli_query($connect, 'SELECT * FROM `products`');
                            $products = mysqli_fetch_all($products);
                            foreach ($products as $product) {
                                ?>
                                    <tr>
                                        <th scope="row">
                                            <?= $product[0] ?>
                                        </th>
                                        <td>
                                            <?= $product[1] ?>
                                        </td>
                                        <td>
                                            <?= $product[3] ?>
                                        </td>
                                        <td>
                                            <?= $product[2] ?>
                                        </td>
                                        <td>
                                            <a href="editProduct.php?id=<?= $product[0] ?>">
                                                Update
                                            </a>
                                        </td>
                                        <td>
                                            <a href="#">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addNew" tabindex="-1" aria-labelledby="addNewLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addNewLabel">Form (add new Product)</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="vendor/addNewProduct.php" method="POST">
            <div class="modal-body">
                <div class="mb-3">
                    <label for="title" class="form-label">Product Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Product Price</label>
                    <input type="number" class="form-control" id="price" name="price">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Product Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Add</button>
            </div>
        </form>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
