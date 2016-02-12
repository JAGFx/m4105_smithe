<?php

/* s4smitheVitrineBundle:Default:mentions.html.twig */
class __TwigTemplate_4074762c8e8d2642f0aca5c1aa53a3804be70e81a54061e378fec3076779fcdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("s4smitheVitrineBundle::layout.html.twig", "s4smitheVitrineBundle:Default:mentions.html.twig", 3);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "s4smitheVitrineBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a583073117c6ccda556dcf129c1e7a3b73ebfd8779c54c193405fe253d32a03 = $this->env->getExtension("native_profiler");
        $__internal_3a583073117c6ccda556dcf129c1e7a3b73ebfd8779c54c193405fe253d32a03->enter($__internal_3a583073117c6ccda556dcf129c1e7a3b73ebfd8779c54c193405fe253d32a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "s4smitheVitrineBundle:Default:mentions.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a583073117c6ccda556dcf129c1e7a3b73ebfd8779c54c193405fe253d32a03->leave($__internal_3a583073117c6ccda556dcf129c1e7a3b73ebfd8779c54c193405fe253d32a03_prof);

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
        return array (  11 => 3,);
    }
}
/* */
/* */
/* 		{% extends "s4smitheVitrineBundle::layout.html.twig" %}*/
