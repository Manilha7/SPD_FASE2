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

/* eshop/login.html.twig */
class __TwigTemplate_11b1a363ae559756616efec62ccdf077186dea46e9e620918f7247fcd0c38c0c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eshop/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eshop/login.html.twig"));

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

        /* Hide the carousel text when the screen is less than 600 pixels wide */
        @media (max-width: 200px) {
            .carousel-caption {
                display: none;
            }
        }
    </style>
</head>
<body>

<nav class=\"navbar navbar-inverse\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <a class=\"navbar-brand\" href=\"#\"><strong>AndasTorto</strong></a>
    </div>
    <ul class=\"nav navbar-nav navbar-right\">
      <li ><a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products");
        echo "\">Home</a></li>
      <li><a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo "\">Register</a></li>
      <li><a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\">Login</a></li>
      <li><a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout");
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 48, $this->source); })()), "html", null, true);
        echo " € (";
        echo twig_escape_filter($this->env, (isset($context["n_prod"]) || array_key_exists("n_prod", $context) ? $context["n_prod"] : (function () { throw new RuntimeError('Variable "n_prod" does not exist.', 48, $this->source); })()), "html", null, true);
        echo " items)<span class=\"glyphicon glyphicon-shopping-cart\"></span></a></li>
    </ul>
  </div>
</nav>
<div>
";
        // line 53
        if ((1 === twig_compare((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 53, $this->source); })()), 0))) {
            // line 54
            echo "        <div class=\"alert alert-danger\">
            <p style=\"text-align: center\">";
            // line 55
            echo twig_escape_filter($this->env, twig_first($this->env, (isset($context["errorMessages"]) || array_key_exists("errorMessages", $context) ? $context["errorMessages"] : (function () { throw new RuntimeError('Variable "errorMessages" does not exist.', 55, $this->source); })())), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        // line 58
        echo "</div>
<form method=\"post\" action=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login_action");
        echo "\">
<input type=\"hidden\" name=\"token\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("login_form"), "html", null, true);
        echo "\" />
<div class=\"container text-center\">
    <div class=\"row content\">
        <div class=\"col-sm-2 sidenav\">
        </div>
        <div class=\"col-sm-8 text-center\">
            <h1>Login</h1>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-envelope\"></i></span>
                    <input id=\"email\" type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Email\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 69, $this->source); })()), "html", null, true);
        echo "\" >
                </div>

                <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                    <input id=\"password\" type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"Password\" >
                </div>
            <hr>
            <div class=\"columns text-center\">
            <button style=\"float: bottom\" type=\"submit\" class=\"btn btn-warning\">GO</button>
            </div>
            <br>
\t\t\t<label><input type=\"checkbox\" name=\"autologin\" value=\"1\">Remember me </label>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href=\"password_reset.php\">Forgot password? </a> 
        </div>
        <div class=\"col-sm-2 sidenav\">
        </div>
    </div>
</div>
</form>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "eshop/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 69,  131 => 60,  127 => 59,  124 => 58,  118 => 55,  115 => 54,  113 => 53,  101 => 48,  97 => 47,  93 => 46,  89 => 45,  43 => 1,);
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

        /* Hide the carousel text when the screen is less than 600 pixels wide */
        @media (max-width: 200px) {
            .carousel-caption {
                display: none;
            }
        }
    </style>
</head>
<body>

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
<div>
{% if errors > 0 %}
        <div class=\"alert alert-danger\">
            <p style=\"text-align: center\">{{ errorMessages|first }}</p>
        </div>
    {% endif %}
</div>
<form method=\"post\" action=\"{{ path('login_action') }}\">
<input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('login_form') }}\" />
<div class=\"container text-center\">
    <div class=\"row content\">
        <div class=\"col-sm-2 sidenav\">
        </div>
        <div class=\"col-sm-8 text-center\">
            <h1>Login</h1>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-envelope\"></i></span>
                    <input id=\"email\" type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Email\" value=\"{{email}}\" >
                </div>

                <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                    <input id=\"password\" type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"Password\" >
                </div>
            <hr>
            <div class=\"columns text-center\">
            <button style=\"float: bottom\" type=\"submit\" class=\"btn btn-warning\">GO</button>
            </div>
            <br>
\t\t\t<label><input type=\"checkbox\" name=\"autologin\" value=\"1\">Remember me </label>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href=\"password_reset.php\">Forgot password? </a> 
        </div>
        <div class=\"col-sm-2 sidenav\">
        </div>
    </div>
</div>
</form>
</body>
</html>", "eshop/login.html.twig", "C:\\Users\\guibs\\Documents\\GitHub\\SPD_FASE2\\templates\\eshop\\login.html.twig");
    }
}
