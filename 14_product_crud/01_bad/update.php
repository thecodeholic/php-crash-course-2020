<?php

require_once "functions.php";

$id = $_GET['id'] ?? null;
if (!$id) {
    header('Location: index.php');
    exit;
}

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$statement = $pdo->prepare('SELECT * FROM products WHERE id = :id');
$statement->bindValue(':id', $id);
$statement->execute();
$product = $statement->fetch(PDO::FETCH_ASSOC);


$title = $product['title'];
$description = $product['description'];
$price = $product['price'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $image = $_FILES['image'] ?? null;
    $imagePath = '';

    if (!is_dir('images')) {
        mkdir('images');
    }

    if ($image) {
        if ($product['image']) {
            unlink($product['image']);
        }
        $imagePath = 'images/' . randomString(8) . '/' . $image['name'];
        mkdir(dirname($imagePath));
        move_uploaded_file($image['tmp_name'], $imagePath);
    }

    if (!$title) {
        $errors[] = 'Product title is required';
    }

    if (!$price) {
        $errors[] = 'Product price is required';
    }

    if (empty($errors)) {
        $statement = $pdo->prepare("UPDATE products SET title = :title, 
                                        image = :image, 
                                        description = :description, 
                                        price = :price WHERE id = :id");
        $statement->bindValue(':title', $title);
        $statement->bindValue(':image', $imagePath);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':id', $id);

        $statement->execute();
        header('Location: index.php');
    }

}

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="app.css" rel="stylesheet"/>
    <title>Products CRUD</title>
</head>
<body>
<p>
    <a href="index.php" class="btn btn-default">Back to products</a>
</p>
<h1>Update Product: <b><?php echo $product['title'] ?></b></h1>

<?php if (!empty($errors)): ?>
    <div class="alert alert-danger">
        <?php foreach ($errors as $error): ?>
            <div><?php echo $error ?></div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<form method="post" enctype="multipart/form-data">
    <?php if ($product['image']): ?>
        <img src="<?php echo $product['image'] ?>" class="product-img-view">
    <?php endif; ?>
    <div class="form-group">
        <label>Product Image</label><br>
        <input type="file" name="image">
    </div>
    <div class="form-group">
        <label>Product title</label>
        <input type="text" name="title" class="form-control" value="<?php echo $title ?>">
    </div>
    <div class="form-group">
        <label>Product description</label>
        <textarea class="form-control" name="description"><?php echo $description ?></textarea>
    </div>
    <div class="form-group">
        <label>Product price</label>
        <input type="number" step=".01" name="price" class="form-control" value="<?php echo $price ?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>