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

/* show/template_showEmployee.html.twig */
class __TwigTemplate_37cbce48061854eec47322c403b6f920 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "show/template_showEmployee.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "show/template_showEmployee.html.twig"));

        // line 1
        echo "<div class=\"showEmployee\">
\t<h3>";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 2, $this->source); })()), "name", [], "any", false, false, false, 2), "html", null, true);
        echo "</h3>
\t<p>DNI:
\t\t";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 4, $this->source); })()), "dni", [], "any", false, false, false, 4), "html", null, true);
        echo "</p>
\t<p>Birth date:
\t\t";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 6, $this->source); })()), "birthDate", [], "any", false, false, false, 6), "d/m/Y"), "html", null, true);
        echo "</p>
\t<p>In the company since:
\t\t";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 8, $this->source); })()), "dateStartCompany", [], "any", false, false, false, 8), "d/m/Y"), "html", null, true);
        echo "</p>
\t<p>End of the relationship:
\t\t";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 10, $this->source); })()), "dateEndCompany", [], "any", false, false, false, 10), "d/m/Y"), "html", null, true);
        echo "</p>
\t<p>Position:
\t\t";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 12, $this->source); })()), "position", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
\t<p>Annual salary:
\t\t";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 14, $this->source); })()), "salary", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
\t<p>Situation on the company:
\t\t";
        // line 16
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 16, $this->source); })()), "working", [], "any", false, false, false, 16)) ? ("Working") : ("Not working"));
        echo "</p>
\t";
        // line 17
        if ( !(isset($context["hideElement"]) || array_key_exists("hideElement", $context) ? $context["hideElement"] : (function () { throw new RuntimeError('Variable "hideElement" does not exist.', 17, $this->source); })())) {
            // line 18
            echo "\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_one_employee", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\"><input type=\"button\" class=\"buttons\" value=\"Show\"/>
\t";
        }
        // line 20
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_employee", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
        echo "\"><input type=\"button\" class=\"buttons\" value=\"Edit\"/>
\t</a>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "show/template_showEmployee.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  93 => 20,  87 => 18,  85 => 17,  81 => 16,  76 => 14,  71 => 12,  66 => 10,  61 => 8,  56 => 6,  51 => 4,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"showEmployee\">
\t<h3>{{ employee.name }}</h3>
\t<p>DNI:
\t\t{{ employee.dni }}</p>
\t<p>Birth date:
\t\t{{ employee.birthDate|date(\"d/m/Y\") }}</p>
\t<p>In the company since:
\t\t{{ employee.dateStartCompany|date(\"d/m/Y\") }}</p>
\t<p>End of the relationship:
\t\t{{ employee.dateEndCompany|date(\"d/m/Y\") }}</p>
\t<p>Position:
\t\t{{ employee.position }}</p>
\t<p>Annual salary:
\t\t{{ employee.salary }}</p>
\t<p>Situation on the company:
\t\t{{ employee.working ? \"Working\" : \"Not working\" }}</p>
\t{% if not hideElement %}
\t\t<a href=\"{{ path(\"show_one_employee\", {id: employee.id}) }}\"><input type=\"button\" class=\"buttons\" value=\"Show\"/>
\t{% endif %}
        <a href=\"{{ path(\"edit_employee\", {id: employee.id}) }}\"><input type=\"button\" class=\"buttons\" value=\"Edit\"/>
\t</a>
</div>
", "show/template_showEmployee.html.twig", "/home/uadmin/Documentos/ProxectoFinal/Diseño/finalProject/templates/show/template_showEmployee.html.twig");
    }
}
