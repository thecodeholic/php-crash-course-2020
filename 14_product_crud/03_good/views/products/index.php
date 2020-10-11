<h1>Product CRUD</h1>

<p>
    <a href="/products/create" type="button" class="btn btn-sm btn-success">Add Product</a>
</p>
<form action="" method="get">
    <div class="input-group mb-3">
      <input type="text" name="search" class="form-control" placeholder="Search" value="<?php echo $keyword ?>">
      <div class="input-group-append">
        <button class="btn btn-success" type="submit">Search</button>
      </div>
    </div>
</form>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Title</th>
        <th scope="col">Price</th>
        <th scope="col">Create Date</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $i => $product) { ?>
        <tr>
            <th scope="row"><?php echo $i + 1 ?></th>
            <td>
                <?php if ($product['image']): ?>
                    <img src="/<?php echo $product['image'] ?>" alt="<?php echo $product['title'] ?>" class="product-img">
                <?php endif; ?>
            </td>
            <td><?php echo $product['title'] ?></td>
            <td><?php echo $product['price'] ?></td>
            <td><?php echo $product['create_date'] ?></td>
            <td>
                <a href="/products/update?id=<?php echo $product['id'] ?>" class="btn btn-sm btn-outline-primary">Edit</a>
                <form method="post" action="/products/delete" style="display: inline-block">
                    <input  type="hidden" name="id" value="<?php echo $product['id'] ?>"/>
                    <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                </form>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>