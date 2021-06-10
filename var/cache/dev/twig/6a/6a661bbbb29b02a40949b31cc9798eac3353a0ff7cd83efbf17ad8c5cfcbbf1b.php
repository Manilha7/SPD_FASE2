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

/* eshop/orders.html.twig */
class __TwigTemplate_9094135127aa5ca3126d91f4e3a9210a1049471920e7670865e25054df500f70 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eshop/orders.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eshop/orders.html.twig"));

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
\t\t\t\t\t\t\t\t<h5><span class=\"glyphicon glyphicon-shopping-cart\"></span> My Orders</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"panel-body\">
                ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 109, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 110
            echo "                <button  onclick=\"myFunction(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 110), "html", null, true);
            echo ")\" class=\"btn btn-link btn-xs\">
\t\t\t\t\t<span id=\"eye-";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 111), "html", null, true);
            echo "\" class=\"glyphicon glyphicon-eye-open\">Show</span>
\t\t\t\t</button>
                <strong> Encomenda nº ";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 113), "html", null, true);
            echo " (efectuada a ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "created_at", [], "any", false, false, false, 113), "html", null, true);
            echo " ) </strong>
                    <table class=\"table table-hover\" id=\"myDIV-";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 114), "html", null, true);
            echo "\" style=\"display: none\" >
                      <thead>
                        <tr style=\"background-color: #B7BFC0;\">
                            <th>ID</th>
                            <th>Nome do Produto</th>
                            <th>Preço Unidade</th>
                            <th>Quantidade</th>
                            <th>SubTotal</th>
                        </tr>
                      </thead>
                      <tbody>
                      ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders_items"]) || array_key_exists("orders_items", $context) ? $context["orders_items"] : (function () { throw new RuntimeError('Variable "orders_items" does not exist.', 125, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 126
                echo "                        ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "order_id", [], "any", false, false, false, 126), twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 126)))) {
                    // line 127
                    echo "                        <tr style=\"background-color: #EBF0F1;\">
                            <td>";
                    // line 128
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 128), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 129
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 129), "html", null, true);
                    echo "</td>
                            <td style=\"padding-left: 40px;\">";
                    // line 130
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 130), "html", null, true);
                    echo " €</td>
                            <td style=\"padding-left: 40px;\">";
                    // line 131
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 131), "html", null, true);
                    echo "</td>
                            <td style=\"padding-left: 20px;\">";
                    // line 132
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "subtotal", [], "any", false, false, false, 132), "html", null, true);
                    echo " €</td>
                        </tr>
                        ";
                }
                // line 135
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "                        <tr style=\"background-color: white;\">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td style=\"padding-left: 30px; background-color: #EBF0F1;\"><strong>Total:</strong></td>
                            <td style=\"padding-left: 20px; background-color: #EBF0F1;\">";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "total", [], "any", false, false, false, 141), "html", null, true);
            echo " €</td>
                        </tr>
                      </tbody>
                    </table>
                    <hr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<script>
function myFunction(id) {
  var x = document.getElementById(\"myDIV-\"+id);
  var y= document.getElementById(\"eye-\"+id);
  if (x.style.display === \"none\") {
    y.classList.toggle(\"glyphicon-eye-open\",false);
    y.classList.toggle(\"glyphicon-eye-close\",true);
    y.innerHTML= \"Hide\";
    x.style.display = \"\";
  } else {
    x.style.display = \"none\";
    y.classList.toggle(\"glyphicon-eye-open\",true);
    y.classList.toggle(\"glyphicon-eye-close\",false);
    y.innerHTML=\"Show\";
  }
}
</script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "eshop/orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 147,  274 => 141,  267 => 136,  261 => 135,  255 => 132,  251 => 131,  247 => 130,  243 => 129,  239 => 128,  236 => 127,  233 => 126,  229 => 125,  215 => 114,  209 => 113,  204 => 111,  199 => 110,  195 => 109,  175 => 91,  163 => 86,  159 => 85,  155 => 84,  151 => 83,  143 => 77,  131 => 72,  127 => 71,  123 => 70,  119 => 69,  115 => 68,  107 => 62,  105 => 61,  43 => 1,);
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
\t\t\t\t\t\t\t\t<h5><span class=\"glyphicon glyphicon-shopping-cart\"></span> My Orders</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"panel-body\">
                {% for c  in orders %}
                <button  onclick=\"myFunction({{c.id}})\" class=\"btn btn-link btn-xs\">
\t\t\t\t\t<span id=\"eye-{{c.id}}\" class=\"glyphicon glyphicon-eye-open\">Show</span>
\t\t\t\t</button>
                <strong> Encomenda nº {{c.id}} (efectuada a {{c.created_at}} ) </strong>
                    <table class=\"table table-hover\" id=\"myDIV-{{c.id}}\" style=\"display: none\" >
                      <thead>
                        <tr style=\"background-color: #B7BFC0;\">
                            <th>ID</th>
                            <th>Nome do Produto</th>
                            <th>Preço Unidade</th>
                            <th>Quantidade</th>
                            <th>SubTotal</th>
                        </tr>
                      </thead>
                      <tbody>
                      {% for item in orders_items %}
                        {% if item.order_id == c.id %}
                        <tr style=\"background-color: #EBF0F1;\">
                            <td>{{item.id}}</td>
                            <td>{{item.name}}</td>
                            <td style=\"padding-left: 40px;\">{{item.price}} €</td>
                            <td style=\"padding-left: 40px;\">{{item.quantity}}</td>
                            <td style=\"padding-left: 20px;\">{{item.subtotal}} €</td>
                        </tr>
                        {% endif %}
                    {% endfor %}
                        <tr style=\"background-color: white;\">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td style=\"padding-left: 30px; background-color: #EBF0F1;\"><strong>Total:</strong></td>
                            <td style=\"padding-left: 20px; background-color: #EBF0F1;\">{{c.total}} €</td>
                        </tr>
                      </tbody>
                    </table>
                    <hr>
                    {% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<script>
function myFunction(id) {
  var x = document.getElementById(\"myDIV-\"+id);
  var y= document.getElementById(\"eye-\"+id);
  if (x.style.display === \"none\") {
    y.classList.toggle(\"glyphicon-eye-open\",false);
    y.classList.toggle(\"glyphicon-eye-close\",true);
    y.innerHTML= \"Hide\";
    x.style.display = \"\";
  } else {
    x.style.display = \"none\";
    y.classList.toggle(\"glyphicon-eye-open\",true);
    y.classList.toggle(\"glyphicon-eye-close\",false);
    y.innerHTML=\"Show\";
  }
}
</script>
</body>
</html>
", "eshop/orders.html.twig", "C:\\Users\\guibs\\Documents\\GitHub\\SPD_FASE2\\templates\\eshop\\orders.html.twig");
    }
}
