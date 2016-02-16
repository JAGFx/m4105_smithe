<?php

/* s4smitheVitrineBundle:Default:mentions.html.twig */
class __TwigTemplate_4074762c8e8d2642f0aca5c1aa53a3804be70e81a54061e378fec3076779fcdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("s4smitheVitrineBundle::layout.html.twig", "s4smitheVitrineBundle:Default:mentions.html.twig", 12);
        $this->blocks = array(
            'linkFollowing' => array($this, 'block_linkFollowing'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "s4smitheVitrineBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86396543859bb12dff2a571dd105d6e869a13f545de9e7b66f979c242c1c7f54 = $this->env->getExtension("native_profiler");
        $__internal_86396543859bb12dff2a571dd105d6e869a13f545de9e7b66f979c242c1c7f54->enter($__internal_86396543859bb12dff2a571dd105d6e869a13f545de9e7b66f979c242c1c7f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "s4smitheVitrineBundle:Default:mentions.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86396543859bb12dff2a571dd105d6e869a13f545de9e7b66f979c242c1c7f54->leave($__internal_86396543859bb12dff2a571dd105d6e869a13f545de9e7b66f979c242c1c7f54_prof);

    }

    // line 14
    public function block_linkFollowing($context, array $blocks = array())
    {
        $__internal_15a026c300fc1530833eb2508e12db8563bab7d10bb39a003314910b7dfa1315 = $this->env->getExtension("native_profiler");
        $__internal_15a026c300fc1530833eb2508e12db8563bab7d10bb39a003314910b7dfa1315->enter($__internal_15a026c300fc1530833eb2508e12db8563bab7d10bb39a003314910b7dfa1315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkFollowing"));

        // line 15
        echo "\t<li class=\"active\">Mentions</li>
";
        
        $__internal_15a026c300fc1530833eb2508e12db8563bab7d10bb39a003314910b7dfa1315->leave($__internal_15a026c300fc1530833eb2508e12db8563bab7d10bb39a003314910b7dfa1315_prof);

    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        $__internal_2c7c7669bae57500d8346abfe355d4c9d6b14cd297ebf24e20646320f74065de = $this->env->getExtension("native_profiler");
        $__internal_2c7c7669bae57500d8346abfe355d4c9d6b14cd297ebf24e20646320f74065de->enter($__internal_2c7c7669bae57500d8346abfe355d4c9d6b14cd297ebf24e20646320f74065de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 19
        echo "\tMentions légales
";
        
        $__internal_2c7c7669bae57500d8346abfe355d4c9d6b14cd297ebf24e20646320f74065de->leave($__internal_2c7c7669bae57500d8346abfe355d4c9d6b14cd297ebf24e20646320f74065de_prof);

    }

    public function getTemplateName()
    {
        return "s4smitheVitrineBundle:Default:mentions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 19,  49 => 18,  41 => 15,  35 => 14,  11 => 12,);
    }
}
/* {#*/
/* 	Fichier : Dafault/mentions.html.twing*/
/* 	Auteur : Emmanuel SMITH*/
/* 	Creation : 09/02/2016*/
/* 	Modification :*/
/* 		> 09/02/2016		Mise en place des mentions*/
/* 		> 12/02/2016		Ajout Template*/
/* */
/* 	Mentions de l'app web e-commerce*/
/* #}*/
/* */
/* {% extends "s4smitheVitrineBundle::layout.html.twig" %}*/
/* */
/* {% block linkFollowing %}*/
/* 	<li class="active">Mentions</li>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* 	Mentions légales*/
/* {% endblock %}*/
