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

/* shopping_cart/checkout.html.twig */
class __TwigTemplate_ccd898f02dfa0e65df0d1ebb18350b087691d505bbcfae87105df97138845001 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shopping_cart/checkout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shopping_cart/checkout.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "shopping_cart/checkout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"col-md-4 mt-4\">
        <div class=\"row\">
            <form action=\"?action=create-payment\" method=\"POST\">
                <input alt=\"Check out with PayPal\" name=\"submit_red\" src=\"https://www.paypalobjects.com/webstatic/en_US/i/buttons/checkout-logo-large.png\" type=\"image\">
            </form>
        </div>
    </div>
    <div class=\"col-md-4 mt-4\">
        <h4 class=\"d-flex justify-content-between align-items-center mb-3\">
            <span class=\"text-muted\">Your cart</span>
            <span class=\"badge badge-secondary badge-pill\">";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["total_amount"]) || array_key_exists("total_amount", $context) ? $context["total_amount"] : (function () { throw new RuntimeError('Variable "total_amount" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "</span>
        </h4>
        <ul class=\"list-group mb-3\">
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart_products"]) || array_key_exists("cart_products", $context) ? $context["cart_products"] : (function () { throw new RuntimeError('Variable "cart_products" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 18
            echo "            <li class=\"list-group-item d-flex justify-content-between lh-condensed\">
                <div>
                    <h6 class=\"my-0\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "array", false, false, false, 20), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "subname", [], "array", false, false, false, 20), "html", null, true);
            echo "</h6>
                    <small class=\"text-muted\">Amount: ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "amount", [], "array", false, false, false, 21), "html", null, true);
            echo "</small>
                </div>
                <span class=\"text-muted\">\$";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "array", false, false, false, 23), "html", null, true);
            echo "</span>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            <li class=\"list-group-item d-flex justify-content-between\">
                <span>Total (USD)</span>
                <strong>\$";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["total_price"]) || array_key_exists("total_price", $context) ? $context["total_price"] : (function () { throw new RuntimeError('Variable "total_price" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "</strong>
            </li>
        </ul>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "shopping_cart/checkout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 28,  114 => 26,  105 => 23,  100 => 21,  94 => 20,  90 => 18,  86 => 17,  80 => 14,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"col-md-4 mt-4\">
        <div class=\"row\">
            <form action=\"?action=create-payment\" method=\"POST\">
                <input alt=\"Check out with PayPal\" name=\"submit_red\" src=\"https://www.paypalobjects.com/webstatic/en_US/i/buttons/checkout-logo-large.png\" type=\"image\">
            </form>
        </div>
    </div>
    <div class=\"col-md-4 mt-4\">
        <h4 class=\"d-flex justify-content-between align-items-center mb-3\">
            <span class=\"text-muted\">Your cart</span>
            <span class=\"badge badge-secondary badge-pill\">{{total_amount}}</span>
        </h4>
        <ul class=\"list-group mb-3\">
            {% for product in cart_products %}
            <li class=\"list-group-item d-flex justify-content-between lh-condensed\">
                <div>
                    <h6 class=\"my-0\">{{product['name']}} {{product['subname']}}</h6>
                    <small class=\"text-muted\">Amount: {{product['amount']}}</small>
                </div>
                <span class=\"text-muted\">\${{product['price']}}</span>
            </li>
            {% endfor %}
            <li class=\"list-group-item d-flex justify-content-between\">
                <span>Total (USD)</span>
                <strong>\${{total_price}}</strong>
            </li>
        </ul>
    </div>
{% endblock %}

", "shopping_cart/checkout.html.twig", "E:\\symfony\\shop\\templates\\shopping_cart\\checkout.html.twig");
    }
}
