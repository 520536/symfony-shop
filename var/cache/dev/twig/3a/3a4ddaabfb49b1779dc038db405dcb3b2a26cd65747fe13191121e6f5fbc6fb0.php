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

/* shopping_cart/cart.html.twig */
class __TwigTemplate_8063b1d5b6f09de589700022d83cc227b762a9791b59eceebfcdeea7b3d76ada extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shopping_cart/cart.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shopping_cart/cart.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "shopping_cart/cart.html.twig", 1);
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
        echo "    <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update-quantities");
        echo "\" method=\"POST\">
        <table class=\"table table-hover table-responsive\">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th class=\"text-center\">Price</th>
                    <th class=\"text-center\">Subtotal</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart_products"]) || array_key_exists("cart_products", $context) ? $context["cart_products"] : (function () { throw new RuntimeError('Variable "cart_products" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 17
            echo "                <tr>
                    <td class=\"col-sm-8 col-md-6\">
                        <div class=\"media\">
                            <img alt=\"\" src=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "url72", [], "array", false, false, false, 20), "html", null, true);
            echo "\">
                            <div class=\"ml-2\">
                                <h4>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "array", false, false, false, 22), "html", null, true);
            echo "</h4>
                                <h5>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "subname", [], "array", false, false, false, 23), "html", null, true);
            echo "</h5>
                            </div>
                        </div>
                    </td>
                    <td class=\"col-sm-1 col-md-1\">
                        <input class=\"form-control\" min=\"0\" name=\"amounts[";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "array", false, false, false, 28), "html", null, true);
            echo "]\" type=\"number\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "amount", [], "array", false, false, false, 28), "html", null, true);
            echo "\">
                    </td>
                    <td class=\"col-sm-1 col-md-1 text-center\">
                        <strong>\$";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "array", false, false, false, 31), "html", null, true);
            echo "</strong>
                    </td>
                    <td class=\"col-sm-1 col-md-1 text-center\">
                        <strong>\$";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "total_price", [], "array", false, false, false, 34), "html", null, true);
            echo "</strong>
                    </td>
                    <td class=\"col-sm-1 col-md-1\">
                        <a class=\"btn btn-danger\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove-from-cart", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "array", false, false, false, 37)]), "html", null, true);
            echo "\" onclick=\"return confirm('Delete the product from the cart?');\" role=\"button\">
                            Remove
                        </a>
                    </td>
                </tr>
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button class=\"btn btn-warning\" type=\"submit\">
                            <span>Update&nbsp;quantities</span>
                        </button>
                    </td>
                    <td class=\"text-right\">
                        <h3>Total price:</h3>
                    </td>
                    <td class=\"text-right\">
                        <h3>
                            <strong>\$";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["total_price"]) || array_key_exists("total_price", $context) ? $context["total_price"] : (function () { throw new RuntimeError('Variable "total_price" does not exist.', 56, $this->source); })()), "html", null, true);
        echo "</strong>
                        </h3>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a class=\"btn btn-info\" href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products");
        echo "\" role=\"button\">
                            Continue&nbsp;shopping
                        </a>
                    </td>
                    <td>
                        <a class=\"btn btn-success\" href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout");
        echo "\" role=\"button\">
                            Checkout
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "shopping_cart/cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 70,  169 => 65,  157 => 56,  142 => 43,  130 => 37,  124 => 34,  118 => 31,  110 => 28,  102 => 23,  98 => 22,  93 => 20,  88 => 17,  84 => 16,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <form action=\"{{path('update-quantities')}}\" method=\"POST\">
        <table class=\"table table-hover table-responsive\">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th class=\"text-center\">Price</th>
                    <th class=\"text-center\">Subtotal</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                {% for product in cart_products %}
                <tr>
                    <td class=\"col-sm-8 col-md-6\">
                        <div class=\"media\">
                            <img alt=\"\" src=\"{{product['url72']}}\">
                            <div class=\"ml-2\">
                                <h4>{{product['name']}}</h4>
                                <h5>{{product['subname']}}</h5>
                            </div>
                        </div>
                    </td>
                    <td class=\"col-sm-1 col-md-1\">
                        <input class=\"form-control\" min=\"0\" name=\"amounts[{{product['id']}}]\" type=\"number\" value=\"{{product['amount']}}\">
                    </td>
                    <td class=\"col-sm-1 col-md-1 text-center\">
                        <strong>\${{product['price']}}</strong>
                    </td>
                    <td class=\"col-sm-1 col-md-1 text-center\">
                        <strong>\${{product['total_price']}}</strong>
                    </td>
                    <td class=\"col-sm-1 col-md-1\">
                        <a class=\"btn btn-danger\" href=\"{{path('remove-from-cart',{id:product['id']})}}\" onclick=\"return confirm('Delete the product from the cart?');\" role=\"button\">
                            Remove
                        </a>
                    </td>
                </tr>
                 {% endfor %}
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button class=\"btn btn-warning\" type=\"submit\">
                            <span>Update&nbsp;quantities</span>
                        </button>
                    </td>
                    <td class=\"text-right\">
                        <h3>Total price:</h3>
                    </td>
                    <td class=\"text-right\">
                        <h3>
                            <strong>\${{total_price}}</strong>
                        </h3>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a class=\"btn btn-info\" href=\"{{path('products')}}\" role=\"button\">
                            Continue&nbsp;shopping
                        </a>
                    </td>
                    <td>
                        <a class=\"btn btn-success\" href=\"{{path('checkout')}}\" role=\"button\">
                            Checkout
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
{% endblock %}

", "shopping_cart/cart.html.twig", "E:\\symfony\\shop\\templates\\shopping_cart\\cart.html.twig");
    }
}
