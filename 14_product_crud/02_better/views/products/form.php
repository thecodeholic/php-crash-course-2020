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