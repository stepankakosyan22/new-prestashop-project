<?php

/* PrestaShopBundle:Admin:Product/list_quicknav.html.twig */
class __TwigTemplate_8a80f29fe7cb791a30ddc1a531243ae1931038f533893d9c5e85034359e72461 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        echo "<div class=\"quicknav-container\">
    <div class=\"quicknav-header\">
        <div class=\"pull-left\"><a href=\"#\" data-toggle=\"sidebar\" data-target=\".sidebar\">&times;</a></div>
        <h2>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quick navigation", array(), "Admin.Global"), "html", null, true);
        echo "</h2>
    </div>
    <div class=\"quicknav-scroller\">
        <table class=\"table table-condensed table-striped product quicknav-products\">
            <thead>
                <tr class=\"column-headers\">
                    <th class=\"hidden-xs hidden-sm hidden-md\">
                        ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID", array(), "Admin.Global"), "html", null, true);
        echo "
                    </th>
                    <th>
                        ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", array(), "Admin.Global"), "html", null, true);
        echo "
                    </th>
                    <th class=\"hidden-xs hidden-sm\">
                        ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price", array(), "Admin.Global"), "html", null, true);
        echo "
                    </th>
                    ";
        // line 43
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 44
            echo "                        <th class=\"hidden-xs\">
                            ";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "
                        </th>
                    ";
        }
        // line 48
        echo "                </tr>
            </thead>
            <tbody>
                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 52
            echo "                    <tr>
                        <td class=\"hidden-xs hidden-sm hidden-md\">
                            <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, (($this->getAttribute($context["product"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "url", array()), "")) : ("")), "html", null, true);
            echo "#tab-step1\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id_product", array()), "html", null, true);
            echo "</a>
                        </td>
                        <td>
                            <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, (($this->getAttribute($context["product"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "url", array()), "")) : ("")), "html", null, true);
            echo "#tab-step1\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["product"], "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "name", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", array(), "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", array(), "Admin.Global"))), "html", null, true);
            echo "</a>
                        </td>
                        <td class=\"hidden-xs hidden-sm\">
                            <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, (($this->getAttribute($context["product"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "url", array()), "")) : ("")), "html", null, true);
            echo "#tab-step2\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["product"], "price", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "price", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", array(), "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", array(), "Admin.Global"))), "html", null, true);
            echo "</a>
                        </td>
                        ";
            // line 62
            if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
                // line 63
                echo "                            <td class=\"hidden-xs product-sav-quantity\"
                                productquantityvalue=\"";
                // line 64
                echo twig_escape_filter($this->env, (($this->getAttribute($context["product"], "sav_quantity", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "sav_quantity", array()), "")) : ("")), "html", null, true);
                echo "\">
                                <a href=\"";
                // line 65
                echo twig_escape_filter($this->env, (($this->getAttribute($context["product"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "url", array()), "")) : ("")), "html", null, true);
                echo "#tab-step3\">
                                    ";
                // line 66
                if (($this->getAttribute($context["product"], "sav_quantity", array(), "any", true, true) && ($this->getAttribute($context["product"], "sav_quantity", array()) > 0))) {
                    // line 67
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "sav_quantity", array()), "html", null, true);
                    echo "
                                    ";
                } else {
                    // line 69
                    echo "                                        <span
                                            class=\"badge badge-danger\">";
                    // line 70
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["product"], "sav_quantity", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["product"], "sav_quantity", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", array(), "Admin.Global"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("N/A", array(), "Admin.Global"))), "html", null, true);
                    echo "</span>
                                    ";
                }
                // line 72
                echo "                                </a>
                            </td>
                        ";
            }
            // line 75
            echo "                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 77
            echo "                    <tr><td colspan=\"5\">
                        ";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("There is no result for this search. Update your filters to view other products.", array(), "Admin.Catalog.Notification"), "html", null, true);
            echo "
                    </td></tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "            </tbody>
        </table>
    </div>
    <div class=\"quicknav-fixed-bottom navbar-form-footer\">
        ";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PrestaShopBundle:Admin\\Common:pagination", array("limit" =>         // line 86
(isset($context["limit"]) ? $context["limit"] : null), "offset" => (isset($context["offset"]) ? $context["offset"] : null), "total" => (isset($context["total"]) ? $context["total"] : null), "caller_parameters" => array("_route" => "admin_product_list", "view" => "quicknav"), "view" => "quicknav")));
        // line 87
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin:Product/list_quicknav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 87,  158 => 86,  157 => 85,  151 => 81,  142 => 78,  139 => 77,  133 => 75,  128 => 72,  123 => 70,  120 => 69,  114 => 67,  112 => 66,  108 => 65,  104 => 64,  101 => 63,  99 => 62,  92 => 60,  84 => 57,  76 => 54,  72 => 52,  67 => 51,  62 => 48,  56 => 45,  53 => 44,  51 => 43,  46 => 41,  40 => 38,  34 => 35,  24 => 28,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrestaShopBundle:Admin:Product/list_quicknav.html.twig", "C:\\OpenServer\\domains\\Prestashop\\src\\PrestaShopBundle/Resources/views/Admin/Product/list_quicknav.html.twig");
    }
}
