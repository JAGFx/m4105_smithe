<?php

/* s4smitheVitrineBundle:Default:index.html.twig */
class __TwigTemplate_04b5268cb09cc23bd2dd5728d7911a86f86c462624e7bc6694a7ae31ad8f7b7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("s4smitheVitrineBundle::layout.html.twig", "s4smitheVitrineBundle:Default:index.html.twig", 12);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "s4smitheVitrineBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_680e1394e44dfb4a169d45aa058b8f6eb3f9ab49572b9a61f302cdd12385bc8f = $this->env->getExtension("native_profiler");
        $__internal_680e1394e44dfb4a169d45aa058b8f6eb3f9ab49572b9a61f302cdd12385bc8f->enter($__internal_680e1394e44dfb4a169d45aa058b8f6eb3f9ab49572b9a61f302cdd12385bc8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "s4smitheVitrineBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_680e1394e44dfb4a169d45aa058b8f6eb3f9ab49572b9a61f302cdd12385bc8f->leave($__internal_680e1394e44dfb4a169d45aa058b8f6eb3f9ab49572b9a61f302cdd12385bc8f_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_2e3aa9caa0549adff082e9fc117c059a2865663cb7bb349835fcd50b115630bf = $this->env->getExtension("native_profiler");
        $__internal_2e3aa9caa0549adff082e9fc117c059a2865663cb7bb349835fcd50b115630bf->enter($__internal_2e3aa9caa0549adff082e9fc117c059a2865663cb7bb349835fcd50b115630bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 15
        echo "\t<div class=\"container\">
\t\t<ol class=\"breadcrumb\">
\t\t\t<li><a href=\"#\">Home</a></li>
\t\t\t<li><a href=\"#\">Library</a></li>
\t\t\t<li class=\"active\">Data</li>
\t\t</ol>
\t\t<div class=\"col-md-3\">
\t\t\t<p class=\"lead\">Shop Name</p>
\t\t\t<div class=\"list-group\">
\t\t\t\t<a href=\"#\" class=\"list-group-item\">Category 1</a>
\t\t\t\t<a href=\"#\" class=\"list-group-item\">Category 2</a>
\t\t\t\t<a href=\"#\" class=\"list-group-item\">Category 3</a>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-md-9\">
\t\t\t<div class=\"row\">\t\t\t\t
\t\t\t\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 33
            echo "\t\t\t\t\t<div class=\"col-sm-4 col-lg-6 col-md-6\">
\t\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t\t<img src=\"http://placehold.it/420x200\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t<h4 class=\"pull-right\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "price", array()), "html", null, true);
            echo "€</h4>
\t\t\t\t\t\t\t\t<h4><a href=\"#\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t<p>See more snippets like this online store item at <a target=\"_blank\" href=\"http://www.bootsnipp.com\">Bootsnipp - http://bootsnipp.com</a>.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t<p class=\"pull-right\">15 reviews</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star\"></span>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t\t\t</div>
\t\t</div>
\t</div>\t\t\t
";
        
        $__internal_2e3aa9caa0549adff082e9fc117c059a2865663cb7bb349835fcd50b115630bf->leave($__internal_2e3aa9caa0549adff082e9fc117c059a2865663cb7bb349835fcd50b115630bf_prof);

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
        return array (  96 => 55,  73 => 38,  69 => 37,  63 => 33,  59 => 32,  40 => 15,  34 => 14,  11 => 12,);
    }
}
/* {#*/
/* 	Fichier : Default/index.html.twing*/
/* 	Auteur : Emmanuel SMITH*/
/* 	Creation : 09/02/2016*/
/* 	Modification :*/
/* 		> 09/02/2016		Mise en place de l'index*/
/* 		> 12/02/2016		Ajout template + catalogue statique*/
/* */
/* 	Page d'accueil de l'app web e-commerce*/
/* #}*/
/* */
/* {% extends "s4smitheVitrineBundle::layout.html.twig" %}*/
/* */
/* {% block content %}*/
/* 	<div class="container">*/
/* 		<ol class="breadcrumb">*/
/* 			<li><a href="#">Home</a></li>*/
/* 			<li><a href="#">Library</a></li>*/
/* 			<li class="active">Data</li>*/
/* 		</ol>*/
/* 		<div class="col-md-3">*/
/* 			<p class="lead">Shop Name</p>*/
/* 			<div class="list-group">*/
/* 				<a href="#" class="list-group-item">Category 1</a>*/
/* 				<a href="#" class="list-group-item">Category 2</a>*/
/* 				<a href="#" class="list-group-item">Category 3</a>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="col-md-9">*/
/* 			<div class="row">				*/
/* 				{% for item in produits %}*/
/* 					<div class="col-sm-4 col-lg-6 col-md-6">*/
/* 						<div class="thumbnail">*/
/* 							<img src="http://placehold.it/420x200" alt="">*/
/* 							<div class="caption">*/
/* 								<h4 class="pull-right">{{ item.price }}€</h4>*/
/* 								<h4><a href="#">{{ item.name }}</a>*/
/* 								</h4>*/
/* 								<p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>*/
/* 							</div>*/
/* 							<div class="ratings">*/
/* 								<p class="pull-right">15 reviews</p>*/
/* 								<p>*/
/* 									<span class="glyphicon glyphicon-star"></span>*/
/* 									<span class="glyphicon glyphicon-star"></span>*/
/* 									<span class="glyphicon glyphicon-star"></span>*/
/* 									<span class="glyphicon glyphicon-star"></span>*/
/* 									<span class="glyphicon glyphicon-star"></span>*/
/* 								</p>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				{% endfor %}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>			*/
/* {% endblock %}	*/
