<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* eshop/checkout.html.twig */
class __TwigTemplate_9183d8ed380d61788a60435ea840a3364813827647b9274199c0ccea7b016675 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eshop/checkout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eshop/checkout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Bootstrap Example</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js\"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }
        body {
            background-color:white;
        }

        
        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }

        .carousel-inner img {
            width: 50%; /* Set width to 100% */
            margin: auto;
            min-height:100px;
        }


        .card {
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: 40%;
        }

        .card:hover {
          box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        .container {
          padding: 2px 16px;
        }

        /* Hide the carousel text when the screen is less than 600 pixels wide */
        @media (max-width: 200px) {
            .carousel-caption {
                display: none;
            }
        }
        
    </style>
</head>
<body>
";
        // line 61
        if ((0 !== twig_compare((isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 61, $this->source); })()), ""))) {
            // line 62
            echo "<nav class=\"navbar navbar-inverse\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <a class=\"navbar-brand\" href=\"#\"><strong>AndasTorto</strong></a>
    </div>
    <ul class=\"nav navbar-nav navbar-right\">
      <li><a href=\"#\">Welcome ";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 68, $this->source); })()), "html", null, true);
            echo "</a></li>
      <li ><a href=\"";
            // line 69
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products");
            echo "\">Home</a></li>
      <li><a href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Logout</a></li>
      <li><a href=\"";
            // line 71
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orders");
            echo "\">My Orders</a></li>
      <li><a href=\"";
            // line 72
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout");
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 72, $this->source); })()), "html", null, true);
            echo " € (";
            echo twig_escape_filter($this->env, (isset($context["n_prod"]) || array_key_exists("n_prod", $context) ? $context["n_prod"] : (function () { throw new RuntimeError('Variable "n_prod" does not exist.', 72, $this->source); })()), "html", null, true);
            echo " items)<span class=\"glyphicon glyphicon-shopping-cart\"></span></a></li>
    </ul>
  </div>
</nav>
";
        } else {
            // line 77
            echo "<nav class=\"navbar navbar-inverse\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <a class=\"navbar-brand\" href=\"#\"><strong>AndasTorto</strong></a>
    </div>
    <ul class=\"nav navbar-nav navbar-right\">
      <li ><a href=\"";
            // line 83
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products");
            echo "\">Home</a></li>
      <li><a href=\"";
            // line 84
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">Register</a></li>
      <li><a href=\"";
            // line 85
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Login</a></li>
      <li><a href=\"";
            // line 86
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout");
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 86, $this->source); })()), "html", null, true);
            echo " € (";
            echo twig_escape_filter($this->env, (isset($context["n_prod"]) || array_key_exists("n_prod", $context) ? $context["n_prod"] : (function () { throw new RuntimeError('Variable "n_prod" does not exist.', 86, $this->source); })()), "html", null, true);
            echo " items)<span class=\"glyphicon glyphicon-shopping-cart\"></span></a></li>
    </ul>
  </div>
</nav>
";
        }
        // line 91
        echo "<br>
<br>
<div class=\"container align-content-center\">
\t<div class=\"row \">
    <div class=\"col-sm-1\">
    </div>
\t\t<div class=\"col-sm-10\">
\t\t\t<div class=\"panel panel-info\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<div class=\"panel-title\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t\t<h5><span class=\"glyphicon glyphicon-shopping-cart\"></span> Shopping Cart</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
                    <table class=\"table table-hover\">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Preço</th>
                          <th></th>
                          <th>Qty</th>
                          <th></th>
                          <th>SubTotal</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                      ";
        // line 123
        if ((0 === twig_compare((isset($context["noitems"]) || array_key_exists("noitems", $context) ? $context["noitems"] : (function () { throw new RuntimeError('Variable "noitems" does not exist.', 123, $this->source); })()), false))) {
            // line 124
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["checkout"]) || array_key_exists("checkout", $context) ? $context["checkout"] : (function () { throw new RuntimeError('Variable "checkout" does not exist.', 124, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 125
                echo "                        <tr>
                        <td>";
                // line 126
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 126), "html", null, true);
                echo "</td>
                        <td>";
                // line 127
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 127), "html", null, true);
                echo "</td>
                        <td>";
                // line 128
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "price", [], "any", false, false, false, 128), "html", null, true);
                echo " €</td>
                        <td>
                            <a type=\"button\" href=\"";
                // line 130
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout_action", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 130), "action" => "2"]), "html", null, true);
                echo "\" class=\"btn btn-link btn-xs\">
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-minus\"> </span>
\t\t\t\t\t\t\t</a>
                        </td>
                        <td>";
                // line 134
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "qty", [], "any", false, false, false, 134), "html", null, true);
                echo "</td>
                        <td>
                            <a type=\"button\" href=\"";
                // line 136
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout_action", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 136), "action" => "1"]), "html", null, true);
                echo "\" class=\"btn btn-link btn-xs\">
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-plus\"> </span>
\t\t\t\t\t\t\t</a>
                        </td>
                        <td>";
                // line 140
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "subtotal", [], "any", false, false, false, 140), "html", null, true);
                echo " €</td>
                        <td>
                            <a type=\"button\" href=\"";
                // line 142
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout_action", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 142), "action" => "0"]), "html", null, true);
                echo "\" class=\"btn btn-link btn-xs\">
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-trash\"> </span>
\t\t\t\t\t\t\t</a>
                        </td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "                        ";
        } else {
            // line 149
            echo "                        ";
        }
        // line 150
        echo "                      </tbody>
                    </table>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t<div class=\"row text-center\">
\t\t\t\t\t\t<div class=\"col-xs-9\">
\t\t\t\t\t\t\t<h4 class=\"text-right\">Total: <strong>";
        // line 156
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 156, $this->source); })()), "html", null, true);
        echo " €</strong></h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-3\">
            ";
        // line 159
        if ((0 === twig_compare((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 159, $this->source); })()), 0))) {
            // line 160
            echo "              <a type=\"button\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products");
            echo "\" class=\"btn btn-success btn-block\">
\t\t\t\t\t\t\t  Adicionar Artigos
\t\t\t\t\t\t\t</a>
            ";
        } elseif ((0 !== twig_compare(        // line 163
(isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 163, $this->source); })()), ""))) {
            // line 164
            echo "\t\t\t\t\t\t\t<a type=\"button\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_action");
            echo "\" class=\"btn btn-success btn-block\">
\t\t\t\t\t\t\t  CheckOut
\t\t\t\t\t\t\t</a>
            ";
        } else {
            // line 167
            echo " 
              <a type=\"button\" href=\"";
            // line 168
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" class=\"btn btn-success btn-block\">
\t\t\t\t\t\t\t  Login to CheckOut
\t\t\t\t\t\t\t</a>
            ";
        }
        // line 172
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<script>
</script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "eshop/checkout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 172,  310 => 168,  307 => 167,  299 => 164,  297 => 163,  290 => 160,  288 => 159,  282 => 156,  274 => 150,  271 => 149,  268 => 148,  256 => 142,  251 => 140,  244 => 136,  239 => 134,  232 => 130,  227 => 128,  223 => 127,  219 => 126,  216 => 125,  211 => 124,  209 => 123,  175 => 91,  163 => 86,  159 => 85,  155 => 84,  151 => 83,  143 => 77,  131 => 72,  127 => 71,  123 => 70,  119 => 69,  115 => 68,  107 => 62,  105 => 61,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Bootstrap Example</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js\"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }
        body {
            background-color:white;
        }

        
        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }

        .carousel-inner img {
            width: 50%; /* Set width to 100% */
            margin: auto;
            min-height:100px;
        }


        .card {
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: 40%;
        }

        .card:hover {
          box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        .container {
          padding: 2px 16px;
        }

        /* Hide the carousel text when the screen is less than 600 pixels wide */
        @media (max-width: 200px) {
            .carousel-caption {
                display: none;
            }
        }
        
    </style>
</head>
<body>
{% if username != '' %}
<nav class=\"navbar navbar-inverse\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <a class=\"navbar-brand\" href=\"#\"><strong>AndasTorto</strong></a>
    </div>
    <ul class=\"nav navbar-nav navbar-right\">
      <li><a href=\"#\">Welcome {{username}}</a></li>
      <li ><a href=\"{{path('products')}}\">Home</a></li>
      <li><a href=\"{{path('logout')}}\">Logout</a></li>
      <li><a href=\"{{path('orders')}}\">My Orders</a></li>
      <li><a href=\"{{path('checkout')}}\">{{total}} € ({{n_prod}} items)<span class=\"glyphicon glyphicon-shopping-cart\"></span></a></li>
    </ul>
  </div>
</nav>
{% else %}
<nav class=\"navbar navbar-inverse\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <a class=\"navbar-brand\" href=\"#\"><strong>AndasTorto</strong></a>
    </div>
    <ul class=\"nav navbar-nav navbar-right\">
      <li ><a href=\"{{path('products')}}\">Home</a></li>
      <li><a href=\"{{path('register')}}\">Register</a></li>
      <li><a href=\"{{path('login')}}\">Login</a></li>
      <li><a href=\"{{path('checkout')}}\">{{total}} € ({{n_prod}} items)<span class=\"glyphicon glyphicon-shopping-cart\"></span></a></li>
    </ul>
  </div>
</nav>
{% endif %}
<br>
<br>
<div class=\"container align-content-center\">
\t<div class=\"row \">
    <div class=\"col-sm-1\">
    </div>
\t\t<div class=\"col-sm-10\">
\t\t\t<div class=\"panel panel-info\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<div class=\"panel-title\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t\t<h5><span class=\"glyphicon glyphicon-shopping-cart\"></span> Shopping Cart</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
                    <table class=\"table table-hover\">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Preço</th>
                          <th></th>
                          <th>Qty</th>
                          <th></th>
                          <th>SubTotal</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                      {% if noitems == false %}
                      {% for c  in checkout %}
                        <tr>
                        <td>{{c.id}}</td>
                        <td>{{c.name}}</td>
                        <td>{{c.price}} €</td>
                        <td>
                            <a type=\"button\" href=\"{{path('checkout_action',{'id': c.id, 'action': '2'}) }}\" class=\"btn btn-link btn-xs\">
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-minus\"> </span>
\t\t\t\t\t\t\t</a>
                        </td>
                        <td>{{c.qty}}</td>
                        <td>
                            <a type=\"button\" href=\"{{path('checkout_action',{'id': c.id, 'action': '1'}) }}\" class=\"btn btn-link btn-xs\">
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-plus\"> </span>
\t\t\t\t\t\t\t</a>
                        </td>
                        <td>{{c.subtotal}} €</td>
                        <td>
                            <a type=\"button\" href=\"{{path('checkout_action',{'id': c.id, 'action': '0'}) }}\" class=\"btn btn-link btn-xs\">
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-trash\"> </span>
\t\t\t\t\t\t\t</a>
                        </td>
                        </tr>
                        {% endfor %}
                        {% else %}
                        {% endif %}
                      </tbody>
                    </table>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t<div class=\"row text-center\">
\t\t\t\t\t\t<div class=\"col-xs-9\">
\t\t\t\t\t\t\t<h4 class=\"text-right\">Total: <strong>{{total}} €</strong></h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-3\">
            {% if total == 0 %}
              <a type=\"button\" href=\"{{path('products')}}\" class=\"btn btn-success btn-block\">
\t\t\t\t\t\t\t  Adicionar Artigos
\t\t\t\t\t\t\t</a>
            {% elseif username != '' %}
\t\t\t\t\t\t\t<a type=\"button\" href=\"{{path('order_action')}}\" class=\"btn btn-success btn-block\">
\t\t\t\t\t\t\t  CheckOut
\t\t\t\t\t\t\t</a>
            {% else %} 
              <a type=\"button\" href=\"{{path('login')}}\" class=\"btn btn-success btn-block\">
\t\t\t\t\t\t\t  Login to CheckOut
\t\t\t\t\t\t\t</a>
            {% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<script>
</script>
</body>
</html>
", "eshop/checkout.html.twig", "C:\\Users\\guibs\\Documents\\GitHub\\SPD_FASE2\\templates\\eshop\\checkout.html.twig");
    }
}
