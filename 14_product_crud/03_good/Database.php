<?php
/**
 * User: TheCodeholic
 * Date: 10/11/2020
 * Time: 10:33 AM
 */

namespace app;

use app\models\Product;
use PDO;

/**
 * Class Database
 *
 * @author  Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package app
 */
class Database
{
    public $pdo = null;
    public static ?Database $db = null;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        self::$db = $this;
    }

    public function getProducts($keyword = '')
    {
        if ($keyword) {
            $statement = $this->pdo->prepare('SELECT * FROM products WHERE title like :keyword ORDER BY create_date DESC');
            $statement->bindValue(":keyword", "%$keyword%");
        } else {
            $statement = $this->pdo->prepare('SELECT * FROM products ORDER BY create_date DESC');
        }
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductById($id)
    {
        $statement = $this->pdo->prepare('SELECT * FROM products WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();

        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function deleteProduct($id)
    {
        $statement = $this->pdo->prepare('DELETE FROM products WHERE id = :id');
        $statement->bindValue(':id', $id);

        return $statement->execute();
    }

    public function updateProduct(Product $product)
    {
        $statement = $this->pdo->prepare("UPDATE products SET title = :title, 
                                        image = :image, 
                                        description = :description, 
                                        price = :price WHERE id = :id");
        $statement->bindValue(':title', $product->title);
        $statement->bindValue(':image', $product->imagePath);
        $statement->bindValue(':description', $product->description);
        $statement->bindValue(':price', $product->price);
        $statement->bindValue(':id', $product->id);

        $statement->execute();
    }

    public function createProduct(Product $product)
    {
        $statement = $this->pdo->prepare("INSERT INTO products (title, image, description, price, create_date)
                VALUES (:title, :image, :description, :price, :date)");
        $statement->bindValue(':title', $product->title);
        $statement->bindValue(':image', $product->imagePath);
        $statement->bindValue(':description', $product->description);
        $statement->bindValue(':price', $product->price);
        $statement->bindValue(':date', date('Y-m-d H:i:s'));

        $statement->execute();
    }
}