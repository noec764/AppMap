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

/* app/map.html.twig */
class __TwigTemplate_0d01f87c0e9a3a503b91683b55948084f9faf1bb0d84072569b79133f98e74c5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app/map.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "app/map.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "app/map.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello AppController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <section class=\"accueil\">
        <accueil>
            <h2>Bienvenue sur AppMap</h2>
            <div class=\"content\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, corporis eveniet
                laudantium maiores odit quae saepe vel voluptate! Amet autem commodi dignissimos doloribus error eum
                facilis itaque laboriosam libero minus mollitia nam nihil officia ratione reiciendis, rem similique
                soluta voluptatum? A aliquam consectetur deleniti earum nesciunt odit officia pariatur quam sed. Ex
                hic inventore laborum natus obcaecati officiis quis vero vitae voluptate. Ab incidunt laborum,
                necessitatibus quibusdam rerum velit. A amet animi aperiam architecto dolor dolorem eaque eius est
                et itaque iure laboriosam magnam maiores minima, modi molestiae mollitia nam necessitatibus, nihil
                nostrum nulla odio omnis placeat quas quis repudiandae rerum saepe sapiente similique suscipit totam
                vel veritatis, vero? Cumque enim, eos eum explicabo facilis, iusto neque omnis possimus quos repellat
                saepe sapiente temporibus voluptas! Beatae distinctio ducimus ea eligendi ipsum magni modi, nulla odit
                placeat voluptas! Ab accusamus at blanditiis consequuntur corporis debitis dolor eveniet exercitationem
                fuga impedit ipsam iste laboriosam libero minus mollitia nobis nostrum pariatur placeat quas quidem quos
                reiciendis repudiandae sequi, similique tempore unde, velit! Incidunt laudantium quae voluptas. Ad
                delectus error magnam minus officia! Debitis dolor doloremque ducimus, fugiat nihil numquam quia quisquam
                quos vero voluptatem! Debitis explicabo facilis labore nemo numquam odio odit sapiente?
            </div>
        </accueil>

    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "app/map.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello AppController!{% endblock %}

{% block body %}
    <section class=\"accueil\">
        <accueil>
            <h2>Bienvenue sur AppMap</h2>
            <div class=\"content\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, corporis eveniet
                laudantium maiores odit quae saepe vel voluptate! Amet autem commodi dignissimos doloribus error eum
                facilis itaque laboriosam libero minus mollitia nam nihil officia ratione reiciendis, rem similique
                soluta voluptatum? A aliquam consectetur deleniti earum nesciunt odit officia pariatur quam sed. Ex
                hic inventore laborum natus obcaecati officiis quis vero vitae voluptate. Ab incidunt laborum,
                necessitatibus quibusdam rerum velit. A amet animi aperiam architecto dolor dolorem eaque eius est
                et itaque iure laboriosam magnam maiores minima, modi molestiae mollitia nam necessitatibus, nihil
                nostrum nulla odio omnis placeat quas quis repudiandae rerum saepe sapiente similique suscipit totam
                vel veritatis, vero? Cumque enim, eos eum explicabo facilis, iusto neque omnis possimus quos repellat
                saepe sapiente temporibus voluptas! Beatae distinctio ducimus ea eligendi ipsum magni modi, nulla odit
                placeat voluptas! Ab accusamus at blanditiis consequuntur corporis debitis dolor eveniet exercitationem
                fuga impedit ipsam iste laboriosam libero minus mollitia nobis nostrum pariatur placeat quas quidem quos
                reiciendis repudiandae sequi, similique tempore unde, velit! Incidunt laudantium quae voluptas. Ad
                delectus error magnam minus officia! Debitis dolor doloremque ducimus, fugiat nihil numquam quia quisquam
                quos vero voluptatem! Debitis explicabo facilis labore nemo numquam odio odit sapiente?
            </div>
        </accueil>

    </section>
{% endblock %}
", "app/map.html.twig", "/home/noe/Documents/4A/AppMap/AppMap/templates/app/map.html.twig");
    }
}
