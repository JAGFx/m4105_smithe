<?php

/* s4smitheVitrineBundle:Default:index.html.twig */
class __TwigTemplate_04b5268cb09cc23bd2dd5728d7911a86f86c462624e7bc6694a7ae31ad8f7b7f extends Twig_Template
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
        $__internal_2ebb435d728dc967837dc70cce5068bdfea78a6bb0330371e4d2364500a86b8a = $this->env->getExtension("native_profiler");
        $__internal_2ebb435d728dc967837dc70cce5068bdfea78a6bb0330371e4d2364500a86b8a->enter($__internal_2ebb435d728dc967837dc70cce5068bdfea78a6bb0330371e4d2364500a86b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "s4smitheVitrineBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<title>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</title>
\t</head>
\t<body>

\t\t<h1>Hello ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>  ";
        // line 9
        echo "\t\t<a href=\"";
        echo $this->env->getExtension('routing')->getPath("s4smithe_vitrine_homepage", array("name" => "Fabien"));
        echo "\">Fabien</a>
\t\t<a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("s4smithe_vitrine_homepage", array("name" => "Jorge"));
        echo "\">Jorge</a>
\t\t";
        // line 12
        echo "
\t\t";
        // line 13
        echo " 
\t\t";
        // line 15
        echo "
\t</body>
</html>";
        
        $__internal_2ebb435d728dc967837dc70cce5068bdfea78a6bb0330371e4d2364500a86b8a->leave($__internal_2ebb435d728dc967837dc70cce5068bdfea78a6bb0330371e4d2364500a86b8a_prof);

    }

    public function getTemplateName()
    {
        return "s4smitheVitrineBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 15,  49 => 13,  46 => 12,  42 => 10,  37 => 9,  34 => 8,  27 => 4,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* 	<head>*/
/* 		<title>{{ name }}</title>*/
/* 	</head>*/
/* 	<body>*/
/* */
/* 		<h1>Hello {{ name }}!</h1>  {# On définit un bloc appelé "title" #}*/
/* 		<a href="{{ path('s4smithe_vitrine_homepage', { 'name': 'Fabien' }) }}">Fabien</a>*/
/* 		<a href="{{ path('s4smithe_vitrine_homepage', { 'name': 'Jorge' }) }}">Jorge</a>*/
/* 		{# Génère l'URL "/hello/Fabien" #}*/
/* */
/* 		{# On inclut le template "navigation" #} */
/* 		{# {% include "AcmeDemoBundle:Demo:navigation.html.twig" #}*/
/* */
/* 	</body>*/
/* </html>*/
