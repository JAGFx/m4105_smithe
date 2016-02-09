<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_717bf4e930caa0ac0b21d0ab96a80ea362ed28a64921d12835b6253b2278a616 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4b5a443a51e985c5a92ac91e3d3fb97e7b9c9978ea7210916754c6ac7c52c28 = $this->env->getExtension("native_profiler");
        $__internal_e4b5a443a51e985c5a92ac91e3d3fb97e7b9c9978ea7210916754c6ac7c52c28->enter($__internal_e4b5a443a51e985c5a92ac91e3d3fb97e7b9c9978ea7210916754c6ac7c52c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4b5a443a51e985c5a92ac91e3d3fb97e7b9c9978ea7210916754c6ac7c52c28->leave($__internal_e4b5a443a51e985c5a92ac91e3d3fb97e7b9c9978ea7210916754c6ac7c52c28_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cdf45df5d3d41cbf87be37cffe35ba9e58a8db1dffcc3af6ba126d322d8b26e3 = $this->env->getExtension("native_profiler");
        $__internal_cdf45df5d3d41cbf87be37cffe35ba9e58a8db1dffcc3af6ba126d322d8b26e3->enter($__internal_cdf45df5d3d41cbf87be37cffe35ba9e58a8db1dffcc3af6ba126d322d8b26e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cdf45df5d3d41cbf87be37cffe35ba9e58a8db1dffcc3af6ba126d322d8b26e3->leave($__internal_cdf45df5d3d41cbf87be37cffe35ba9e58a8db1dffcc3af6ba126d322d8b26e3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_29af8c8ef3cfff850f1cb88c53714a5f36a1a7bc719d41cec000e269afc7b3bf = $this->env->getExtension("native_profiler");
        $__internal_29af8c8ef3cfff850f1cb88c53714a5f36a1a7bc719d41cec000e269afc7b3bf->enter($__internal_29af8c8ef3cfff850f1cb88c53714a5f36a1a7bc719d41cec000e269afc7b3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_29af8c8ef3cfff850f1cb88c53714a5f36a1a7bc719d41cec000e269afc7b3bf->leave($__internal_29af8c8ef3cfff850f1cb88c53714a5f36a1a7bc719d41cec000e269afc7b3bf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff8e8d088aaeed161d49cb792fea03ea6afad14260895325e1de1b0e6807da6f = $this->env->getExtension("native_profiler");
        $__internal_ff8e8d088aaeed161d49cb792fea03ea6afad14260895325e1de1b0e6807da6f->enter($__internal_ff8e8d088aaeed161d49cb792fea03ea6afad14260895325e1de1b0e6807da6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ff8e8d088aaeed161d49cb792fea03ea6afad14260895325e1de1b0e6807da6f->leave($__internal_ff8e8d088aaeed161d49cb792fea03ea6afad14260895325e1de1b0e6807da6f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
