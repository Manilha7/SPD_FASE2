<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\DBAL\Driver\Connection;

class Eshop_modelController extends AbstractController
{
	private $connection;	
	public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function get_products($id)
    {
        if ($id == null) {
            $products = $this->connection->fetchAll("SELECT id, name, image, price, cat_id FROM products");
        }
        else {
            $stmt = $this->connection->prepare("SELECT id, name, image, price, cat_id FROM products WHERE id='$id'");
            $stmt->execute();   
            return $stmt->fetch();
        } 
        return $products;
    }


    public function get_categories()
    {
        $cat = $this->connection->fetchAll("SELECT id, name FROM categories");
        return $cat;
    }

    public function register_user($username,$email,$password)
    {
        $password_enc= substr(md5($password),0,32);
        $register= "INSERT INTO users(name, email, password_digest, created_at, updated_at) VALUES('$username','$email','$password_enc',NOW(),NOW())";
        $stmt = $this->connection->prepare($register);
        $stmt->execute();   
        return true;
    }

    public function check_email($email)
    {
        $email= "SELECT * FROM users where email='$email'";
        $stmt = $this->connection->prepare($email);
        $stmt->execute();   
        return $stmt->fetch();
    }

    public function validate_user($email, $password)
    {
        $password_enc= substr(md5($password),0,32);
        $user= "SELECT * FROM users WHERE email='$email' AND password_digest='$password_enc'";
        $stmt = $this->connection->prepare($user);
        $stmt->execute();   
        return $stmt->fetch();
    }

    public function set_remember_digest($email,$remember_digest)
    {
        $remember_digest= "UPDATE users SET remember_digest = '$remember_digest' WHERE email = '$email'";
        $stmt = $this->connection->prepare($remember_digest);
        $stmt->execute();   
        return true;
    }

    public function check_remember_digest($remember_digest)
    {
        $check_cookie= "SELECT id, name FROM users WHERE remember_digest ='$remember_digest'";
        $stmt = $this->connection->prepare($check_cookie);
        $stmt->execute();   
        return $stmt->fetch();

    }

    public function create_order($customer_id, $total) 
    {
        $create_order= "INSERT INTO orders(user_id,created_at,status,total) VALUES('$customer_id',NOW(),'0','$total')";
        $stmt = $this->connection->prepare($create_order);
        $stmt->execute();   
        return true;
    }

    public function get_orders($customer_id) 
    {
        $orders = $this->connection->fetchAll("SELECT id, user_id, created_at, status, total FROM orders WHERE user_id ='$customer_id' ORDER BY created_at DESC");
        return $orders;
    }

    public function create_order_items($lastOrder, $product_id, $quantity)
    {
        $order_items= "INSERT INTO order_items(order_id, product_id,quantity) VALUES('$lastOrder','$product_id','$quantity')";
        $stmt = $this->connection->prepare($order_items);
        $stmt->execute();   
        return true;

    }

    public function get_order_items()
    {
        $get_order_items = $this->connection->fetchAll( "SELECT order_items.order_id, order_items.id ,products.name,products.price,order_items.quantity FROM products INNER JOIN order_items WHERE order_items.product_id=products.id");
        return $get_order_items;

    }

}
