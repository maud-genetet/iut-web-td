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

/* series/index.html.twig */
class __TwigTemplate_4312852fb7fb7c326dbb9828e4096c6d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "series/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "series/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "series/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Series index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <style>
        img {
            height : 10vh;
        }
        tbody tr{
            background-color: #d4d4d4;
        }
        tbody tr:hover{
            background-color: #a3a3a3;
        }
        table {
            border-spacing: 0px 3px;
        }
        a{
            background-color : #c99393;
            color: white;
            padding : 5px;
            border-radius : 5px;
            display : flex;
            margin : 5px;
        }
        a:hover {
            background-color : black;
        }
    </style>
    <h1>Series index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Plot</th>
                <th>Imdb</th>
                <th>Poster</th>
                <th>Director</th>
                <th>YoutubeTrailer</th>
                <th>Awards</th>
                <th>YearStart</th>
                <th>YearEnd</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["series"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["series"]) {
            // line 51
            echo "            <tr>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["series"], "id", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                <td><b>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["series"], "title", [], "any", false, false, false, 53), "html", null, true);
            echo "</b></td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["series"], "plot", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                <td><a href=\"https://www.imdb.com/title/";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["series"], "imdb", [], "any", false, false, false, 55), "html", null, true);
            echo "/\">lien Imdb</a></td>
                <td><img src=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_poster", ["id" => twig_get_attribute($this->env, $this->source, $context["series"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\"/></td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["series"], "director", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                <td><a href='";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["series"], "youtubeTrailer", [], "any", false, false, false, 58), "html", null, true);
            echo "'>lien bande annonce</a></td>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["series"], "awards", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["series"], "yearStart", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["series"], "yearEnd", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_series_show", ["id" => twig_get_attribute($this->env, $this->source, $context["series"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\">show</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 67
            echo "            <tr>
                <td colspan=\"11\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['series'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "        </tbody>
    </table>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "series/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 71,  192 => 67,  183 => 63,  178 => 61,  174 => 60,  170 => 59,  166 => 58,  162 => 57,  158 => 56,  154 => 55,  150 => 54,  146 => 53,  142 => 52,  139 => 51,  134 => 50,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Series index{% endblock %}

{% block body %}
    <style>
        img {
            height : 10vh;
        }
        tbody tr{
            background-color: #d4d4d4;
        }
        tbody tr:hover{
            background-color: #a3a3a3;
        }
        table {
            border-spacing: 0px 3px;
        }
        a{
            background-color : #c99393;
            color: white;
            padding : 5px;
            border-radius : 5px;
            display : flex;
            margin : 5px;
        }
        a:hover {
            background-color : black;
        }
    </style>
    <h1>Series index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Plot</th>
                <th>Imdb</th>
                <th>Poster</th>
                <th>Director</th>
                <th>YoutubeTrailer</th>
                <th>Awards</th>
                <th>YearStart</th>
                <th>YearEnd</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for series in series %}
            <tr>
                <td>{{ series.id }}</td>
                <td><b>{{ series.title }}</b></td>
                <td>{{ series.plot }}</td>
                <td><a href=\"https://www.imdb.com/title/{{ series.imdb }}/\">lien Imdb</a></td>
                <td><img src=\"{{ path('app_poster', {'id': series.id}) }}\"/></td>
                <td>{{ series.director }}</td>
                <td><a href='{{ series.youtubeTrailer }}'>lien bande annonce</a></td>
                <td>{{ series.awards }}</td>
                <td>{{ series.yearStart }}</td>
                <td>{{ series.yearEnd }}</td>
                <td>
                    <a href=\"{{ path('app_series_show', {'id': series.id}) }}\">show</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"11\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock %}
", "series/index.html.twig", "/mnt/roost/users/mgenetet/Cours/IUT_S3/web/http/rendu/r3.01_remise_tds_maudgenetet/TD_Symfony/shows/templates/series/index.html.twig");
    }
}
