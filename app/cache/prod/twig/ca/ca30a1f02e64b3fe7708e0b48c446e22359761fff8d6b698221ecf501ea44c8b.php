<?php

/* PrestaShopBundle:Admin:Common/pagination_quicknav.html.twig */
class __TwigTemplate_f5fef623b2229b98dc8ebad7661e8b337694cbdcc5a8d5b8cb4a16feda003d10 extends Twig_Template
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
        if (((isset($context["previous_url"]) ? $context["previous_url"] : null) || (isset($context["next_url"]) ? $context["next_url"] : null))) {
            // line 26
            echo "<nav>
    <ul class=\"pagination\">
        <li class=\"page-item ";
            // line 28
            if ((isset($context["first_url"]) ? $context["first_url"] : null)) {
            } else {
                echo "disabled";
            }
            echo "\">
            <a class=\"page-link\" ";
            // line 29
            if ((isset($context["first_url"]) ? $context["first_url"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, (isset($context["first_url"]) ? $context["first_url"] : null), "html", null, true);
                echo "\"";
            } else {
                echo "nohref";
            }
            echo ">1</a>
        </li>
        <li class=\"page-item ";
            // line 31
            if ((isset($context["previous_url"]) ? $context["previous_url"] : null)) {
            } else {
                echo "disabled";
            }
            echo "\">
            <a class=\"page-link\" ";
            // line 32
            if ((isset($context["previous_url"]) ? $context["previous_url"] : null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, (isset($context["previous_url"]) ? $context["previous_url"] : null), "html", null, true);
                echo "\"";
            } else {
                echo "nohref";
            }
            echo ">&lt;</a>
        </li>
        <li class=\"page-item active\" style=\"float: left;\">
            <input name=\"paginator_jump_page\" class=\"page-link\" type=\"text\" style=\"width: 4em;\"
                   value=\"";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["current_page"]) ? $context["current_page"] : null), "html", null, true);
            echo "\" psurl=\"";
            echo twig_escape_filter($this->env, (isset($context["jump_page_url"]) ? $context["jump_page_url"] : null), "html", null, true);
            echo "\" psmax=\"";
            echo twig_escape_filter($this->env, (isset($context["page_count"]) ? $context["page_count"] : null), "html", null, true);
            echo "\" pslimit=\"";
            echo twig_escape_filter($this->env, (isset($context["limit"]) ? $context["limit"] : null), "html", null, true);
            echo "\" />
        </li>
        <li class=\"page-item ";
            // line 38
            if ((array_key_exists("next_url", $context) && ((isset($context["next_url"]) ? $context["next_url"] : null) != false))) {
            } else {
                echo "disabled";
            }
            echo "\">
            <a class=\"page-link\" id=\"pagination_next_url\" ";
            // line 39
            if ((array_key_exists("next_url", $context) && ((isset($context["next_url"]) ? $context["next_url"] : null) != false))) {
                echo "href=\"";
                echo twig_escape_filter($this->env, (isset($context["next_url"]) ? $context["next_url"] : null), "html", null, true);
                echo "\"";
            } else {
                echo "nohref";
            }
            echo ">&gt;</a>
        </li>
        <li class=\"page-item ";
            // line 41
            if ((array_key_exists("last_url", $context) && ((isset($context["last_url"]) ? $context["last_url"] : null) != false))) {
            } else {
                echo "disabled";
            }
            echo "\">
            <a class=\"page-link\" ";
            // line 42
            if ((array_key_exists("last_url", $context) && ((isset($context["last_url"]) ? $context["last_url"] : null) != false))) {
                echo "href=\"";
                echo twig_escape_filter($this->env, (isset($context["last_url"]) ? $context["last_url"] : null), "html", null, true);
                echo "\"";
            } else {
                echo "nohref";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["page_count"]) ? $context["page_count"] : null), "html", null, true);
            echo "</a>
        </li>
    </ul>
</nav>
";
        }
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin:Common/pagination_quicknav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 42,  92 => 41,  81 => 39,  74 => 38,  63 => 36,  50 => 32,  43 => 31,  32 => 29,  25 => 28,  21 => 26,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrestaShopBundle:Admin:Common/pagination_quicknav.html.twig", "C:\\OpenServer\\domains\\Prestashop\\src\\PrestaShopBundle/Resources/views/Admin/Common/pagination_quicknav.html.twig");
    }
}
