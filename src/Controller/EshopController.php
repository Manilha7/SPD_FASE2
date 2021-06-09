<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use App\Controller\Eshop_modelController;
use Symfony\Component\HttpFoundation\Cookie;

class EshopController extends AbstractController
{
    
	private $session;
	private $eshop_model;
	private $validator;
	
	public function __construct( SessionInterface $session, Eshop_modelController $eshop_model, ValidatorInterface $validator)
    {
		$this->session = $session;
		$this->eshop_model = $eshop_model;
 		$this->validator = $validator;
    }
	
		
    /**
 * @Route("/eshop/products/{cat_id?}", name="products")
 */
public function products(Request $request, $cat_id= FALSE){
    $remember_digest = $request->cookies->get('siteAuth');
    $session= null;
    if ($remember_digest != null) {
        $session = $this->eshop_model->check_remember_digest($remember_digest);
    }
    if ($session != null) {
        $this->session->set('id', $session['id']);
        $this->session->set('username', $session['name']);
    }

    $cart=$this->session->get('cart');
    if ($cart!= null) {
        $data['n_prod']=  $this->session->get('n_prod');
        $data['total'] = $this->session->get('total');
    }else {
        $data['n_prod']= 0;
        $data['total'] = 0;
    }

    
    $data['products'] = $this->eshop_model->get_products(null);
    $data['categories'] = $this->eshop_model->get_categories();
    $username= $this->session->get('username');
    $data['username']= $username;
    $data['user_id']= $this->session->get('id');
    $data['cat_id']= $cat_id;
    return $this->render('eshop/products.html.twig', $data);     
   }


/**
 * @Route("/eshop/register", name="register")
 */
public function register(){
    $data['errors'] = 0;
    $data['username'] = '';
    $data['email'] = '';
    $cart=$this->session->get('cart');
    if ($cart!= null) {
        $data['n_prod']=  $this->session->get('n_prod');
        $data['total'] = $this->session->get('total');
    }else {
        $data['n_prod']= 0;
        $data['total'] = 0;
    }

    return $this->render('eshop/register.html.twig', $data);
}
/**
 * @Route("/eshop/register_action", name="register_action")
 */
public function register_action(Request $request, ValidatorInterface $validator){
    $token= $request->request->get("token");

    if (!$this->isCsrfTokenValid('register_form', $token)) {
        return new Response("Operation not allowed", Response::HTTP_OK,
            ['content-type' => 'text/plain']);
    }


    $username=$request->request->get('username');
    $email=$request->request->get('email');
    $password=$request->get('password');
    $passconf=$request->get('password-confirmed');

    $valueemail = $this->eshop_model->check_email($email);
    if ($valueemail == false)
        $value = '';
    else
        $value = $valueemail['email'];

    $input = ['password' => $password, 'passconf' => $passconf, 'username' => $username, 'email' => $email];

    $constraints = new Assert\Collection([
             
        'email' => [new Assert\NotEqualTo(['value' => $value, 'message' => 'Este Email já existe na base de dados']),
                            new Assert\NotBlank([ 'message' => 'Todos os campos tem de ser preenchidos'])],
        'password' => [ new Assert\EqualTo(['value' => $passconf, 'message' => 'Passwords não coincidem']),
                            new Assert\notBlank([ 'message' => 'Todos os campos tem de ser preenchidos'])],
        'username' => [new Assert\NotBlank([ 'message' => 'Todos os campos tem de ser preenchidos'])],
        'passconf' => [new Assert\notBlank(['message' => 'Todos os campos tem de ser preenchidos'])],            
    ]);

   
    $violations = $validator->validate($input, $constraints);
    

    if (count($violations) > 0) {

        $accessor = PropertyAccess::createPropertyAccessor();

        $errorMessages = [];

        foreach ($violations as $violation) {

            $accessor->setValue($errorMessages,
                $violation->getPropertyPath(),
                $violation->getMessage());
        }
        
        $data['username'] = $username;
        $data['email'] = $email;

        $data['errors'] = count($violations);
        $data['errorMessages'] = $errorMessages;
        $cart=$this->session->get('cart');
        if ($cart!= null) {
            $data['n_prod']=  $this->session->get('n_prod');
            $data['total'] = $this->session->get('total');
        }else {
            $data['n_prod']= 0;
            $data['total'] = 0;
        }
    
        return $this->render('eshop/register.html.twig', $data);
        }
        $this->eshop_model->register_user($username,$email,$password);
        $this->session->set('msg', 0);
        return $this->redirectToRoute('message');
    }


/**
* @Route("/eshop/login", name="login")
*/
public function login()
{
    $data['errors'] = 0;
    $data['email'] = '';
    $cart=$this->session->get('cart');
    if ($cart!= null) {
        $data['n_prod']=  $this->session->get('n_prod');
        $data['total'] = $this->session->get('total');
    }else {
        $data['n_prod']= 0;
        $data['total'] = 0;
    }

    return $this->render('eshop/login.html.twig', $data);
}



/**
* @Route("/eshop/login_action", name="login_action")
*/
public function login_action(Request $request, ValidatorInterface $validator)
{
    $token= $request->request->get("token");

    if (!$this->isCsrfTokenValid('login_form', $token)) {
        return new Response("Operation not allowed", Response::HTTP_OK,
            ['content-type' => 'text/plain']);
    }

    $email=$request->request->get('email');
    $password=$request->get('password');
    $autologin=$request->get('autologin');

    $user = $this->eshop_model->validate_user($email, $password);
    if ($user == false)
        $value = '';
    else
        $value = $password;

    
   
    
    $input = ['password' => $password,'email' => $email];

    $constraints = new Assert\Collection([
        'email' => [new Assert\NotBlank([ 'message' => 'Todos os campos tem de ser preenchidos'])],
        'password' => [new Assert\notBlank([ 'message' => 'Todos os campos tem de ser preenchidos']),
                        new Assert\EqualTo(['value' => $value, 'message' => 'Wrong email or password'])],               
    ]);

   
    $violations = $validator->validate($input, $constraints);
    

    if (count($violations) > 0) {

        $accessor = PropertyAccess::createPropertyAccessor();

        $errorMessages = [];

        foreach ($violations as $violation) {

            $accessor->setValue($errorMessages,
                $violation->getPropertyPath(),
                $violation->getMessage());
        }
        $data['email']= $email;
        $data['errors'] = count($violations);
        $data['errorMessages'] = $errorMessages;

        
        $cart=$this->session->get('cart');
        if ($cart!= null) {
            $data['n_prod']=  $this->session->get('n_prod');
            $data['total'] = $this->session->get('total');
        }else {
            $data['n_prod']= 0;
            $data['total'] = 0;
        }
    
        return $this->render('eshop/login.html.twig', $data);
    }
    if ($autologin==1) {
        $response = new Response();
        $cookie_name = 'siteAuth';
        $cookie_time = time()+(60 * 24 * 30); // 30 days
        $remember_digest = substr(md5(time()),0,32);
        $update = $this->eshop_model->set_remember_digest($email, $remember_digest);
        if ($update == true) {
            $response->headers->setCookie(Cookie::create($cookie_name,$remember_digest,$cookie_time,'daw.deei.fct.ualg.pt'));
            $response->send();
        }
    }
    $this->session->set('id', $user['id']);
    $this->session->set('username', $user['name']);
    $this->session->set('msg', 6);
    return $this->redirectToRoute('message');
}




/**
 * @Route("/eshop/logout", name="logout")
 */

public function logout()
{
    $response = new Response();
    $this->session->set('id', '');
    $this->session->set('username', '');
    $response->headers->setCookie(Cookie::create('siteAuth','',time(),'daw.deei.fct.ualg.pt'));
    $response->send();
    return $this->redirectToRoute('products');
}



/**
* @Route("/eshop/add_product/{id}/{cat_id?}", name="addProduct")
*/
public function add_product($id,$cat_id=FALSE)
{
    $cart=$this->session->get('cart');
    if ($cart == null) {
        $cart[$id]=1;
        $this->session->set('cart', $cart);
    }else {
        if (isset($cart[$id])) {
            $cart[$id]++;
        }else {
            $cart[$id]=1;
        }
        $this->session->set('cart', $cart);
    }
    $n_prod=0;
    $total=0;
    $cart=$this->session->get('cart');
    if ($cart != null) {
        foreach ($cart as $prod=>$quant) {
            $n_prod+=$quant;
            $product= $this->eshop_model->get_products($prod);
            $total+= $quant * $product['price'];
        
        }
    }
    $this->session->set('n_prod', $n_prod);
    $this->session->set('total', $total);
    if ($cat_id!=null) {
        return $this->redirectToRoute('products',['cat_id'=> $cat_id]);
    }
    else {
        return $this->redirectToRoute('products');
    }
}


/**
* @Route("/eshop/checkout", name="checkout")
*/
public function checkout(Request $request)
{
    $remember_digest = $request->cookies->get('siteAuth');
    $session= null;
    if ($remember_digest != null) {
        $session = $this->eshop_model->check_remember_digest($remember_digest);
    }
    if ($session != null) {
        $this->session->set('id', $session['id']);
        $this->session->set('username', $session['name']);
    }

    $cart=$this->session->get('cart');
    if ($cart!= null) {
        $data['n_prod']=  $this->session->get('n_prod');
        $data['total'] = $this->session->get('total');
    }else {
        $data['n_prod']= 0;
        $data['total'] = 0;
    }

    $data['products'] = $this->eshop_model->get_products(null);
    $data['categories'] = $this->eshop_model->get_categories();
    $username= $this->session->get('username');
    $data['username']= $username;
    $data['user_id']= $this->session->get('id');

    $cart=$this->session->get('cart');
    $total=0;
    if ($cart!= null) {
        foreach ($cart as $prod=>$quant) {
            $product= $this->eshop_model->get_products($prod);
            $checkout_array= array('id' => $product['id'], 'name'=>$product['name'], 
            'price'=> $product['price'],'qty' => $quant, 'subtotal' => $quant * $product['price']);
            
            $total+= $quant * $product['price'];
            $check[]= $checkout_array;
        }
    }

    if(isset($check)){
        $data['checkout']= $check;
        $data['noitems'] = false;
    }else {
        $data['noitems'] = true;
    }
    $data['total']= $total;
    
    return $this->render('eshop/checkout.html.twig', $data);
}


/**
* @Route("/eshop/checkout_action/{id}/{action}", name="checkout_action")
*/
public function checkout_action($id, $action)
{
    $cart=$this->session->get('cart');
    if (isset($cart[$id])) {
        if ($action == '1') {
            $cart[$id]++;
        }
        else if ($action == '2') {
            $cart[$id]--;
            if ($cart[$id] == 0) {
                unset($cart[$id]);
            }
        }
        else if ($action == '0') {
            unset($cart[$id]);
            }
    }
    $this->session->set('cart', $cart);
    $n_prod=0;
    $total=0;
    $cart=$this->session->get('cart');
    if ($cart != null) {
        foreach ($cart as $prod=>$quant) {
            $n_prod+=$quant;
            $product= $this->eshop_model->get_products($prod);
            $total+= $quant * $product['price'];
        }
    }
    $this->session->set('n_prod', $n_prod);
    $this->session->set('total', $total);
    return $this->redirectToRoute('checkout');
}

/**
* @Route("/eshop/order_action", name="order_action")
*/
public function order_action()
{
    $user_id= $this->session->get('id');
    $total= $this->session->get('total');
    if ($user_id== '') {
        $this->session->set('msg', 4);
        return $this->redirectToRoute('message');
    }
    $this->eshop_model->create_order($user_id, $total);
    $order = $this->eshop_model->get_orders($user_id);
    $order_id= $order[0]['id'];
    $cart=$this->session->get('cart');
    foreach ($cart as $prod=>$quant) {
        $this->eshop_model->create_order_items($order_id, $prod, $quant);
    }
    $this->session->remove('cart');
    $this->session->set('msg', 7);
    return $this->redirectToRoute('message');
}



/**
* @Route("/eshop/orders", name="orders")
*/
public function orders(Request $request)
{
    $remember_digest = $request->cookies->get('siteAuth');
    $session= null;
    if ($remember_digest != null) {
        $session = $this->eshop_model->check_remember_digest($remember_digest);
    }
    if ($session != null) {
        $this->session->set('id', $session['id']);
        $this->session->set('username', $session['name']);
    }
    $user_id= $this->session->get('id');
    if ($user_id == '') {
        $this->session->set('msg', 4);
        return $this->redirectToRoute('message');
    }

    //cart check
    $cart=$this->session->get('cart');
    if ($cart!= null) {
        $data['n_prod']=  $this->session->get('n_prod');
        $data['total'] = $this->session->get('total');
    }else {
        $data['n_prod']= 0;
        $data['total'] = 0;
    }

    $username= $this->session->get('username');
    $data['username']= $username;

    
    $orders = $this->eshop_model->get_orders($user_id);
    $orders_items = $this->eshop_model->get_order_items();
    $max= count($orders_items);
    for ($i=0; $i < $max; $i++) { 
       $orders_items[$i]['subtotal']=  $orders_items[$i]['quantity']*$orders_items[$i]['price'];
    }
    //dd($orders_items);
    $data['orders']= $orders;
    $data['orders_items']=$orders_items;
    return $this->render('eshop/orders.html.twig', $data);
}






    /**
 * @Route("/eshop/message", name="message")
 */
public function message(){
    $msg= $this->session->get('msg');
    switch ($msg) {
        case '0':
            $data['type']= "bg-success";
            $data['Message']="Registo efectuado com Sucesso!";
            break;
        case '1':
            $data['type']= "bg-danger";
            $data['Message']= "See you back soon!";
            break;
        case '2':
            $data['type']= "bg-success";
            $data['Message']= "SUCCESS: Post updated";
            break;
        case '3':
            $data['type']= "bg-success";
            $data['Message']= "SUCCESS: Post Created";
            break;
        case '4':
            $data['type']= "bg-danger";
            $data['Message']= "ERROR: Login First";
            break;
        case '5':
            $data['type']= "bg-danger";
            $data['Message']= "ERROR: Not allowed";
            break;
        case '6':
            $data['type']= "bg-success";
            $username= $this->session->get('username');
            $data['Message']= "Welcome Back $username! ";
            break;
        case '7':
            $data['type']= "bg-success";
            $data['Message']="Thank you for your order!";
            break;
        default:
            break;    
        }
        return $this->render('eshop/message.html.twig', $data);    
    }
}
