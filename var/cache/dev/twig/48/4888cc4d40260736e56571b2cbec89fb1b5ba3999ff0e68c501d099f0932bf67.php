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

/* eshop/products.html.twig */
class __TwigTemplate_f9fe38b7ff6a8253a1117b04cb00ba2854302c594d582bdc64a285b749b1afeb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eshop/products.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eshop/products.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
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

        .card button {
        border: none;
        outline: 0;
        padding: 12px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
        }

        ard button:hover {
        opacity: 0.7;
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
        // line 77
        if ((0 !== twig_compare((isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 77, $this->source); })()), ""))) {
            // line 78
            echo "<nav class=\"navbar navbar-inverse\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <a class=\"navbar-brand\" href=\"#\"><strong>AndasTorto</strong></a>
    </div>
    <ul class=\"nav navbar-nav navbar-right\">
      <li><a href=\"#\">Welcome ";
            // line 84
            echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 84, $this->source); })()), "html", null, true);
            echo "</a></li>
      <li ><a href=\"";
            // line 85
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products");
            echo "\">Home</a></li>
      <li><a href=\"";
            // line 86
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Logout</a></li>
      <li><a href=\"";
            // line 87
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orders");
            echo "\">My Orders</a></li>
      <li><a href=\"";
            // line 88
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout");
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 88, $this->source); })()), "html", null, true);
            echo " € (";
            echo twig_escape_filter($this->env, (isset($context["n_prod"]) || array_key_exists("n_prod", $context) ? $context["n_prod"] : (function () { throw new RuntimeError('Variable "n_prod" does not exist.', 88, $this->source); })()), "html", null, true);
            echo " items)<span class=\"glyphicon glyphicon-shopping-cart\"></span></a></li>
    </ul>
  </div>
</nav>
";
        } else {
            // line 93
            echo "<nav class=\"navbar navbar-inverse\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <a class=\"navbar-brand\" href=\"#\"><strong>AndasTorto</strong></a>
    </div>
    <ul class=\"nav navbar-nav navbar-right\">
      <li ><a href=\"";
            // line 99
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products");
            echo "\">Home</a></li>
      <li><a href=\"";
            // line 100
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">Register</a></li>
      <li><a href=\"";
            // line 101
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Login</a></li>
      <li><a href=\"";
            // line 102
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout");
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 102, $this->source); })()), "html", null, true);
            echo " € (";
            echo twig_escape_filter($this->env, (isset($context["n_prod"]) || array_key_exists("n_prod", $context) ? $context["n_prod"] : (function () { throw new RuntimeError('Variable "n_prod" does not exist.', 102, $this->source); })()), "html", null, true);
            echo " items)<span class=\"glyphicon glyphicon-shopping-cart\"></span></a></li>
    </ul>
  </div>
</nav>
";
        }
        // line 107
        echo "
<div class=\"container text-center\" style=\"background:white\">
    <h2><strong>Produtos</strong></h2>
</div>

<div class=\"container\" style=\"background:white\">
<br>
  <ul class=\"nav nav-tabs\">
    <li ";
        // line 115
        if ((0 === twig_compare((isset($context["cat_id"]) || array_key_exists("cat_id", $context) ? $context["cat_id"] : (function () { throw new RuntimeError('Variable "cat_id" does not exist.', 115, $this->source); })()), null))) {
            echo " class=\"active\" ";
        }
        echo "><a data-toggle=\"tab\" href=\"#home\">Tudo</a></li>
    ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 116, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 117
            echo "    <li ";
            if ((0 === twig_compare((isset($context["cat_id"]) || array_key_exists("cat_id", $context) ? $context["cat_id"] : (function () { throw new RuntimeError('Variable "cat_id" does not exist.', 117, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 117)))) {
                echo " class=\"active\" ";
            }
            echo "><a data-toggle=\"tab\" href=\"#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 117), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 117), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "  </ul>
<br>

  <div class=\"tab-content\">
    <div id=\"home\" class=\"tab-pane fade ";
        // line 123
        if ((0 === twig_compare((isset($context["cat_id"]) || array_key_exists("cat_id", $context) ? $context["cat_id"] : (function () { throw new RuntimeError('Variable "cat_id" does not exist.', 123, $this->source); })()), null))) {
            echo " in active ";
        }
        echo " \">
      <div class=\"row\">
      ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 125, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
            // line 126
            echo "        <div class=\"col-sm-3 \" >
        <br>
            <div class=\"card align-content-center\" style=\"width: 19rem;\">
            <br>
                <img class=\"card-img-top\" src=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["prod"], "image", [], "any", false, false, false, 130)), "html", null, true);
            echo "\"  style=\"width:100%\" alt=\"Card image cap\">
                <div class=\"card-body\">
                    <br>
                     <p class=\"card-text text-center\">";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prod"], "price", [], "any", false, false, false, 133), "html", null, true);
            echo " €</p>
                   <h5 class=\"card-title text-center\"> <strong>";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 134), "html", null, true);
            echo "</strong></h5>
                        <p><button onclick=\"document.location.href='";
            // line 135
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addProduct", ["id" => twig_get_attribute($this->env, $this->source, $context["prod"], "id", [], "any", false, false, false, 135)]), "html", null, true);
            echo "'\">Add to Cart</button></p>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "      </div>
    </div>

    ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 143, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 144
            echo "     <div id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 144), "html", null, true);
            echo "\" class=\"tab-pane fade ";
            if ((0 === twig_compare((isset($context["cat_id"]) || array_key_exists("cat_id", $context) ? $context["cat_id"] : (function () { throw new RuntimeError('Variable "cat_id" does not exist.', 144, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 144)))) {
                echo " in active ";
            }
            echo "\">
      <div class=\"row\">
      ";
            // line 146
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 146, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
                // line 147
                echo "      ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["prod"], "cat_id", [], "any", false, false, false, 147), twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 147)))) {
                    // line 148
                    echo "        <div class=\"col-sm-3 \" >
        <br>
            <div class=\"card align-content-center\" style=\"width: 20rem;\">
            <br>
                <img class=\"card-img-top\" src=\"";
                    // line 152
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["prod"], "image", [], "any", false, false, false, 152)), "html", null, true);
                    echo "\"  style=\"width:100%\" alt=\"Card image cap\">
                <div class=\"card-body\">
                    <br>
                     <p class=\"card-text text-center\">";
                    // line 155
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prod"], "price", [], "any", false, false, false, 155), "html", null, true);
                    echo " €</p>
                   <h5 class=\"card-title text-center\"> <strong>";
                    // line 156
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 156), "html", null, true);
                    echo "</strong></h5>
                         <p><button onclick=\"document.location.href='";
                    // line 157
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addProduct", ["id" => twig_get_attribute($this->env, $this->source, $context["prod"], "id", [], "any", false, false, false, 157), "cat_id" => twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 157)]), "html", null, true);
                    echo "'\">Add to Cart</button></p>
                </div>
            </div>
        </div>
        ";
                }
                // line 162
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "      </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "  </div>
</div>
</div>
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
        return "eshop/products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 166,  334 => 163,  328 => 162,  320 => 157,  316 => 156,  312 => 155,  306 => 152,  300 => 148,  297 => 147,  293 => 146,  283 => 144,  279 => 143,  274 => 140,  263 => 135,  259 => 134,  255 => 133,  249 => 130,  243 => 126,  239 => 125,  232 => 123,  226 => 119,  211 => 117,  207 => 116,  201 => 115,  191 => 107,  179 => 102,  175 => 101,  171 => 100,  167 => 99,  159 => 93,  147 => 88,  143 => 87,  139 => 86,  135 => 85,  131 => 84,  123 => 78,  121 => 77,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
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

        .card button {
        border: none;
        outline: 0;
        padding: 12px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
        }

        ard button:hover {
        opacity: 0.7;
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

<div class=\"container text-center\" style=\"background:white\">
    <h2><strong>Produtos</strong></h2>
</div>

<div class=\"container\" style=\"background:white\">
<br>
  <ul class=\"nav nav-tabs\">
    <li {% if cat_id == null %} class=\"active\" {% endif %}><a data-toggle=\"tab\" href=\"#home\">Tudo</a></li>
    {%for cat in categories %}
    <li {% if cat_id == cat.id %} class=\"active\" {% endif %}><a data-toggle=\"tab\" href=\"#{{cat.id}}\">{{cat.name}}</a></li>
    {% endfor %}
  </ul>
<br>

  <div class=\"tab-content\">
    <div id=\"home\" class=\"tab-pane fade {% if cat_id == null %} in active {% endif %} \">
      <div class=\"row\">
      {%for prod in products %}
        <div class=\"col-sm-3 \" >
        <br>
            <div class=\"card align-content-center\" style=\"width: 19rem;\">
            <br>
                <img class=\"card-img-top\" src=\"{{asset(prod.image)}}\"  style=\"width:100%\" alt=\"Card image cap\">
                <div class=\"card-body\">
                    <br>
                     <p class=\"card-text text-center\">{{prod.price}} €</p>
                   <h5 class=\"card-title text-center\"> <strong>{{prod.name}}</strong></h5>
                        <p><button onclick=\"document.location.href='{{path('addProduct',{'id': prod.id}) }}'\">Add to Cart</button></p>
                </div>
            </div>
        </div>
        {% endfor %}
      </div>
    </div>

    {%for cat in categories %}
     <div id=\"{{cat.id}}\" class=\"tab-pane fade {% if cat_id == cat.id %} in active {% endif %}\">
      <div class=\"row\">
      {%for prod in products %}
      {% if prod.cat_id == cat.id %}
        <div class=\"col-sm-3 \" >
        <br>
            <div class=\"card align-content-center\" style=\"width: 20rem;\">
            <br>
                <img class=\"card-img-top\" src=\"{{asset(prod.image)}}\"  style=\"width:100%\" alt=\"Card image cap\">
                <div class=\"card-body\">
                    <br>
                     <p class=\"card-text text-center\">{{prod.price}} €</p>
                   <h5 class=\"card-title text-center\"> <strong>{{prod.name}}</strong></h5>
                         <p><button onclick=\"document.location.href='{{path('addProduct',{'id': prod.id, 'cat_id': cat.id}) }}'\">Add to Cart</button></p>
                </div>
            </div>
        </div>
        {% endif %}
        {% endfor %}
      </div>
    </div>
    {% endfor %}
  </div>
</div>
</div>
</div>

<script>
</script>
</body>
</html>
", "eshop/products.html.twig", "C:\\Users\\guibs\\Documents\\GitHub\\SPD_FASE2\\templates\\eshop\\products.html.twig");
    }
}
