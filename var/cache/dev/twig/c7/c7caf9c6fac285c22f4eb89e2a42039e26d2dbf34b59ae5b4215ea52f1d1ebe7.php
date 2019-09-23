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

/* base.html.twig */
class __TwigTemplate_10b434e73ca82793871a28dc0717603fb8f004872297e1ac14c13ea38af294b9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">

    <head>
        <!-- Required meta tags -->
        <meta charset=\"utf-8\">
        <meta
        content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" name=\"viewport\">

        <!-- Bootstrap CSS -->
        <link crossorigin=\"anonymous\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" rel=\"stylesheet\">
        <title>E-commerce shopping cart</title>
    </head>

    <body>
        <div class=\"mt-5 container\">
\t\t";
        // line 17
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17)) {
            echo "\t\t\t\t\t   
            <span class=\"float-right\">&nbsp;You are logged in as ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "email", [], "any", false, false, false, 18), "html", null, true);
            echo "
\t\t\t\t<a href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">logout</a> </span>
\t\t\t\t";
        } else {
            // line 21
            echo "\t\t\t<span class=\"float-right\">&nbsp;You are not logged in
                <a href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">login</a>
            </span>
\t\t\t";
        }
        // line 24
        echo "\t\t   
            <span class=\"float-right\">
                <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
        echo "\">Your cart (";
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 26), "get", [0 => "cart_data"], "method", false, true, false, 26), "total_amount", [], "array", true, true, false, 26) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 26), "get", [0 => "cart_data"], "method", false, true, false, 26), "total_amount", [], "array", false, false, false, 26)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 26), "get", [0 => "cart_data"], "method", false, true, false, 26), "total_amount", [], "array", false, false, false, 26), "html", null, true))) : (print (0)));
        echo ")</a>
            </span>
            <h1>
                <span class=\"text-info\">SUPER</span>
                <span class=\"text-danger\">SHOP</span>
            </h1>
            <p class=\"text-success\">The best online store</p>
            <hr>
            <div class=\"row\">
            ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "            </div>
        </div>
    </body>

</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 35
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 35,  104 => 36,  102 => 35,  88 => 26,  84 => 24,  78 => 22,  75 => 21,  70 => 19,  66 => 18,  62 => 17,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

    <head>
        <!-- Required meta tags -->
        <meta charset=\"utf-8\">
        <meta
        content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" name=\"viewport\">

        <!-- Bootstrap CSS -->
        <link crossorigin=\"anonymous\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" rel=\"stylesheet\">
        <title>E-commerce shopping cart</title>
    </head>

    <body>
        <div class=\"mt-5 container\">
\t\t{% if app.user %}\t\t\t\t\t   
            <span class=\"float-right\">&nbsp;You are logged in as {{app.user.email}}
\t\t\t\t<a href=\"{{path('app_logout')}}\">logout</a> </span>
\t\t\t\t{% else %}
\t\t\t<span class=\"float-right\">&nbsp;You are not logged in
                <a href=\"{{path('app_login')}}\">login</a>
            </span>
\t\t\t{% endif %}\t\t   
            <span class=\"float-right\">
                <a href=\"{{path('cart')}}\">Your cart ({{ app.session.get('cart_data')['total_amount'] ?? 00 }})</a>
            </span>
            <h1>
                <span class=\"text-info\">SUPER</span>
                <span class=\"text-danger\">SHOP</span>
            </h1>
            <p class=\"text-success\">The best online store</p>
            <hr>
            <div class=\"row\">
            {% block body %}{% endblock %}
            </div>
        </div>
    </body>

</html>

", "base.html.twig", "E:\\symfony\\shop\\templates\\base.html.twig");
    }
}
