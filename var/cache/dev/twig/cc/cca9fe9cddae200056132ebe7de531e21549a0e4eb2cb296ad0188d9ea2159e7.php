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

/* principal/login.html.twig */
class __TwigTemplate_a0cffa5b719f519f597a710f2c2f5bc6a733464baff5bd7901a724c14e609c48 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "principal/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "principal/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "principal/login.html.twig", 1);
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

        echo "Login";
        
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
        echo "<script>
    ";
        // line 25
        echo "</script>

<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Login ✅</h1>

    <form class=\"m-t\" role=\"form\" action=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("confirmarLogin");
        echo "\" method=\"post\" >
    
    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" name=\"usuario\" id=\"usuario\" placeholder=\"Usuario\" autocomplete=\"off\" />
                    </div>
                    <div class=\"form-group\">
                        <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\" placeholder=\"Contraseña\" autocomplete=\"off\" />
                    </div>
                   
                    <div  id=\"errorLogin\" style=\"background-color: red;color: white; display:none\" >
                        <div id=\"msg_error\" ></div>                     
                    </div>
                    
                    <button type=\"submit\" class=\"btn bt block full-width m-b style\" id=\"enviar\" name=\"enviar\" >Ingresar</button>

                     ";
        // line 50
        if ((0 !== twig_compare((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 50, $this->source); })()), ""))) {
            // line 51
            echo "                    <div data-aos=\"zoom-in\" >
                        <div id=\"errorLogin\"  style=\"background-color: red;color: white\"><p> ";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 52, $this->source); })()), "html", null, true);
            echo "!</p></div>                     
                    </div>
                     ";
        }
        // line 54
        echo " 
    </form>
        
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "principal/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 54,  126 => 52,  123 => 51,  121 => 50,  103 => 35,  91 => 25,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Login{% endblock %}

{% block body %}
<script>
    {# \$(document).ready(function() {
        \$(\"#enviar\").click(function(){
            var usuario = \$(\"#usuario\").val(); 
            var password = \$(\"#password\").val(); 
            
            \$.post(\"{{path('confirmarlogin')}}\", { usuario: usuario,password:password }, function(response) {           
                if (response.respuesta == 'Encontrado') {
                        location.href =  \"{{path('ingreso')}}\";
                        \$(\"#errorLogin\").hide();
                    }
                    else{
                        \$(\"#msg_error\").html(response.error);
                        \$(\"#errorLogin\").show();                     
                    };   
                // \$(\"#form\").submit();
                });         
         });
    }) #}
</script>

<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Login ✅</h1>

    <form class=\"m-t\" role=\"form\" action=\"{{path('confirmarLogin')}}\" method=\"post\" >
    
    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" name=\"usuario\" id=\"usuario\" placeholder=\"Usuario\" autocomplete=\"off\" />
                    </div>
                    <div class=\"form-group\">
                        <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\" placeholder=\"Contraseña\" autocomplete=\"off\" />
                    </div>
                   
                    <div  id=\"errorLogin\" style=\"background-color: red;color: white; display:none\" >
                        <div id=\"msg_error\" ></div>                     
                    </div>
                    
                    <button type=\"submit\" class=\"btn bt block full-width m-b style\" id=\"enviar\" name=\"enviar\" >Ingresar</button>

                     {% if error != \"\" %}
                    <div data-aos=\"zoom-in\" >
                        <div id=\"errorLogin\"  style=\"background-color: red;color: white\"><p> {{ error}}!</p></div>                     
                    </div>
                     {% endif %} 
    </form>
        
</div>
{% endblock %}
", "principal/login.html.twig", "C:\\wamp64\\www\\proyectos\\curso\\templates\\principal\\login.html.twig");
    }
}
