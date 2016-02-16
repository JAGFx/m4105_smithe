<?php

/* s4smitheVitrineBundle::layout.html.twig */
class __TwigTemplate_d7936853e6f99d16b29d54fcb11ab2bf3cbd2f6bb1b7185feaf5b56245e93625 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'linkFollowing' => array($this, 'block_linkFollowing'),
            'categoriesList' => array($this, 'block_categoriesList'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9e1f79442b92a9954b1a0d14ad8cb2e4e9c6b5632d9dc2b9a00b468b7b2fbe9 = $this->env->getExtension("native_profiler");
        $__internal_b9e1f79442b92a9954b1a0d14ad8cb2e4e9c6b5632d9dc2b9a00b468b7b2fbe9->enter($__internal_b9e1f79442b92a9954b1a0d14ad8cb2e4e9c6b5632d9dc2b9a00b468b7b2fbe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "s4smitheVitrineBundle::layout.html.twig"));

        // line 10
        echo "
<!DOCTYPE html>
<html>
\t<head>
\t\t<title>Hello</title>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
\t\t
\t\t<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/s4smithevitrine/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
\t\t<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/s4smithevitrine/bootstrap/css/bootstrap-theme-cust.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
\t</head>
\t<body>
\t\t";
        // line 23
        $this->loadTemplate("s4smitheVitrineBundle::header.html.twig", "s4smitheVitrineBundle::layout.html.twig", 23)->display($context);
        // line 24
        echo "
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"container\">
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("s4smithe_vitrine_homepage");
        echo "\">Accueil</a></li>
\t\t\t\t\t";
        // line 29
        $this->displayBlock('linkFollowing', $context, $blocks);
        // line 31
        echo "\t\t\t\t</ol>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<p class=\"lead\">Shop Name</p>
\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t";
        // line 35
        $this->displayBlock('categoriesList', $context, $blocks);
        // line 37
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t\t\t
\t\t</div>
\t\t
\t\t";
        // line 49
        $this->loadTemplate("s4smitheVitrineBundle::footer.html.twig", "s4smitheVitrineBundle::layout.html.twig", 49)->display($context);
        // line 50
        echo "\t\t
\t\t<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/s4smithevitrine/bootstrap/js/jquery-2.2.0.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/s4smithevitrine/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t</body>
</html>";
        
        $__internal_b9e1f79442b92a9954b1a0d14ad8cb2e4e9c6b5632d9dc2b9a00b468b7b2fbe9->leave($__internal_b9e1f79442b92a9954b1a0d14ad8cb2e4e9c6b5632d9dc2b9a00b468b7b2fbe9_prof);

    }

    // line 29
    public function block_linkFollowing($context, array $blocks = array())
    {
        $__internal_cd5f24b42e6ac37eee9dacfb5c809266648724c17e5eac6601d118a3dbfc0957 = $this->env->getExtension("native_profiler");
        $__internal_cd5f24b42e6ac37eee9dacfb5c809266648724c17e5eac6601d118a3dbfc0957->enter($__internal_cd5f24b42e6ac37eee9dacfb5c809266648724c17e5eac6601d118a3dbfc0957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkFollowing"));

        // line 30
        echo "\t\t\t\t\t";
        
        $__internal_cd5f24b42e6ac37eee9dacfb5c809266648724c17e5eac6601d118a3dbfc0957->leave($__internal_cd5f24b42e6ac37eee9dacfb5c809266648724c17e5eac6601d118a3dbfc0957_prof);

    }

    // line 35
    public function block_categoriesList($context, array $blocks = array())
    {
        $__internal_538025125c48a0d8cc9f338e5f375f52fa9c42243c728bff5b2ad990e8c1783f = $this->env->getExtension("native_profiler");
        $__internal_538025125c48a0d8cc9f338e5f375f52fa9c42243c728bff5b2ad990e8c1783f->enter($__internal_538025125c48a0d8cc9f338e5f375f52fa9c42243c728bff5b2ad990e8c1783f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "categoriesList"));

        // line 36
        echo "\t\t\t\t\t\t";
        
        $__internal_538025125c48a0d8cc9f338e5f375f52fa9c42243c728bff5b2ad990e8c1783f->leave($__internal_538025125c48a0d8cc9f338e5f375f52fa9c42243c728bff5b2ad990e8c1783f_prof);

    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        $__internal_9984a998287c590ecbd07eecdc8c04f8dfa586ec09c5f062da6f08da9f080642 = $this->env->getExtension("native_profiler");
        $__internal_9984a998287c590ecbd07eecdc8c04f8dfa586ec09c5f062da6f08da9f080642->enter($__internal_9984a998287c590ecbd07eecdc8c04f8dfa586ec09c5f062da6f08da9f080642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 43
        echo "\t\t\t\t\t\t";
        
        $__internal_9984a998287c590ecbd07eecdc8c04f8dfa586ec09c5f062da6f08da9f080642->leave($__internal_9984a998287c590ecbd07eecdc8c04f8dfa586ec09c5f062da6f08da9f080642_prof);

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
        return array (  135 => 43,  129 => 42,  122 => 36,  116 => 35,  109 => 30,  103 => 29,  93 => 52,  89 => 51,  86 => 50,  84 => 49,  77 => 44,  75 => 42,  68 => 37,  66 => 35,  60 => 31,  58 => 29,  54 => 28,  48 => 24,  46 => 23,  40 => 20,  36 => 19,  25 => 10,);
    }
}
/* {# */
/* 	Fichier : layout.html.twing*/
/* 	Auteur : Emmanuel SMITH*/
/* 	Creation : 12/02/2016*/
/* 	Modification :*/
/* 		> 12/02/2016		Mise en place d'un Template communs de page*/
/* */
/* 	Template par défaut des toutes les pages*/
/* #}*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/* 	<head>*/
/* 		<title>Hello</title>*/
/* 		<meta charset="utf-8">*/
/* 		<meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* 		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/* 		*/
/* 		<link href="{{ asset('bundles/s4smithevitrine/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>*/
/* 		<link href="{{ asset('bundles/s4smithevitrine/bootstrap/css/bootstrap-theme-cust.min.css') }}" rel="stylesheet" type="text/css"/>*/
/* 	</head>*/
/* 	<body>*/
/* 		{% include "s4smitheVitrineBundle::header.html.twig" %}*/
/* */
/* 		<div class="container-fluid">*/
/* 			<div class="container">*/
/* 				<ol class="breadcrumb">*/
/* 					<li><a href="{{ path('s4smithe_vitrine_homepage') }}">Accueil</a></li>*/
/* 					{% block linkFollowing %}*/
/* 					{% endblock %}*/
/* 				</ol>*/
/* 				<div class="col-md-3">*/
/* 					<p class="lead">Shop Name</p>*/
/* 					<div class="list-group">*/
/* 						{% block categoriesList %}*/
/* 						{% endblock %}*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<div class="col-md-9">*/
/* 					<div class="row">*/
/* 						{% block content %}*/
/* 						{% endblock %}*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>			*/
/* 		</div>*/
/* 		*/
/* 		{% include "s4smitheVitrineBundle::footer.html.twig" %}*/
/* 		*/
/* 		<script src="{{ asset('bundles/s4smithevitrine/bootstrap/js/jquery-2.2.0.min.js') }}" type="text/javascript"></script>*/
/* 		<script src="{{ asset('bundles/s4smithevitrine/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>*/
/* 	</body>*/
/* </html>*/
