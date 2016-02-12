<?php

/* s4smitheVitrineBundle::layout.html.twig */
class __TwigTemplate_d7936853e6f99d16b29d54fcb11ab2bf3cbd2f6bb1b7185feaf5b56245e93625 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c42986a7a76f2f5bcfb6daf5c57250357e3bcb98484ad74aaf847f9c857ef9f = $this->env->getExtension("native_profiler");
        $__internal_4c42986a7a76f2f5bcfb6daf5c57250357e3bcb98484ad74aaf847f9c857ef9f->enter($__internal_4c42986a7a76f2f5bcfb6daf5c57250357e3bcb98484ad74aaf847f9c857ef9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "s4smitheVitrineBundle::layout.html.twig"));

        // line 1
        echo "<!--
\tFichier : layout.html.twing
\tAuteur : Emmanuel SMITH
\tCreation : 12/02/2016
\tModification :
\t\t> 12/02/2016\t\tMise en place d'un Template communs de page

\tTemplate par défaut des toutes les pages
-->

<!DOCTYPE html>
<html>
\t<head>
\t\t<title>Hello</title>
\t\t
\t\t<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/s4smithevitrine/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
\t\t<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/s4smithevitrine/bootstrap/css/bootstrap-theme-cust.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
\t\t
\t\t<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/s4smithevitrine/bootstrap/js/jquery-2.2.0.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/s4smithevitrine/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t</head>
\t<body>
\t\t";
        // line 23
        $this->loadTemplate("s4smitheVitrineBundle::header.html.twig", "s4smitheVitrineBundle::layout.html.twig", 23)->display($context);
        // line 24
        echo "
\t\t<div class=\"container-fluid\">
\t\t\t";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 28
        echo "\t\t</div>
\t\t
\t\t";
        // line 30
        $this->loadTemplate("s4smitheVitrineBundle::footer.html.twig", "s4smitheVitrineBundle::layout.html.twig", 30)->display($context);
        // line 31
        echo "\t</body>
</html>";
        
        $__internal_4c42986a7a76f2f5bcfb6daf5c57250357e3bcb98484ad74aaf847f9c857ef9f->leave($__internal_4c42986a7a76f2f5bcfb6daf5c57250357e3bcb98484ad74aaf847f9c857ef9f_prof);

    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        $__internal_fb6337c5afca8de6219c53a41983a2cdcf44aa790e821b1b53f3cfc577bdaea7 = $this->env->getExtension("native_profiler");
        $__internal_fb6337c5afca8de6219c53a41983a2cdcf44aa790e821b1b53f3cfc577bdaea7->enter($__internal_fb6337c5afca8de6219c53a41983a2cdcf44aa790e821b1b53f3cfc577bdaea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 27
        echo "\t\t\t";
        
        $__internal_fb6337c5afca8de6219c53a41983a2cdcf44aa790e821b1b53f3cfc577bdaea7->leave($__internal_fb6337c5afca8de6219c53a41983a2cdcf44aa790e821b1b53f3cfc577bdaea7_prof);

    }

    public function getTemplateName()
    {
        return "s4smitheVitrineBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 27,  81 => 26,  73 => 31,  71 => 30,  67 => 28,  65 => 26,  61 => 24,  59 => 23,  53 => 20,  49 => 19,  44 => 17,  40 => 16,  23 => 1,);
    }
}
/* <!--*/
/* 	Fichier : layout.html.twing*/
/* 	Auteur : Emmanuel SMITH*/
/* 	Creation : 12/02/2016*/
/* 	Modification :*/
/* 		> 12/02/2016		Mise en place d'un Template communs de page*/
/* */
/* 	Template par défaut des toutes les pages*/
/* -->*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/* 	<head>*/
/* 		<title>Hello</title>*/
/* 		*/
/* 		<link href="{{ asset('bundles/s4smithevitrine/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>*/
/* 		<link href="{{ asset('bundles/s4smithevitrine/bootstrap/css/bootstrap-theme-cust.min.css') }}" rel="stylesheet" type="text/css"/>*/
/* 		*/
/* 		<script src="{{ asset('bundles/s4smithevitrine/bootstrap/js/jquery-2.2.0.min.js') }}" type="text/javascript"></script>*/
/* 		<script src="{{ asset('bundles/s4smithevitrine/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>*/
/* 	</head>*/
/* 	<body>*/
/* 		{% include "s4smitheVitrineBundle::header.html.twig" %}*/
/* */
/* 		<div class="container-fluid">*/
/* 			{% block content %}*/
/* 			{% endblock %}*/
/* 		</div>*/
/* 		*/
/* 		{% include "s4smitheVitrineBundle::footer.html.twig" %}*/
/* 	</body>*/
/* </html>*/
