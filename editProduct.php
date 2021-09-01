<?php 

require_once 'config/connect.php'; 

$product_id = $_GET['id'];

$product = mysqli_query($connect, "SELECT * FROM `products` WHERE id = $product_id");
$product = mysqli_fetch_assoc($product);


?>

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
                <h2 class="text-center my-4">
                    Form (Update Product)
                </h2>
            </div>
            <div class="col-8 offset-2">
                <form action="vendor/updateProduct.php" method="POST">
                <div class="mb-3 d-none">
                        <label for="id" class="form-label">Id Product</label>
                        <input type="text" class="form-control" id="id" name="id" value="<?= $product_id ?>">
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Product Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?= $product['title'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Product Price</label>
                        <input type="number" class="form-control" id="price" name="price" value="<?= $product['price'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Product Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"><?= $product['description'] ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Add</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
