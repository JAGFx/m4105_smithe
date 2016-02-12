<?php

/* base.html.twig */
class __TwigTemplate_418e18aad61ae745c071f16ed0091e928caf948724ba2f065587ebf64939ef0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d08162e2c68c1b68229eda96d4ca3445670e5911ac35906a30ab6c1f1e7a3ac = $this->env->getExtension("native_profiler");
        $__internal_5d08162e2c68c1b68229eda96d4ca3445670e5911ac35906a30ab6c1f1e7a3ac->enter($__internal_5d08162e2c68c1b68229eda96d4ca3445670e5911ac35906a30ab6c1f1e7a3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_5d08162e2c68c1b68229eda96d4ca3445670e5911ac35906a30ab6c1f1e7a3ac->leave($__internal_5d08162e2c68c1b68229eda96d4ca3445670e5911ac35906a30ab6c1f1e7a3ac_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_218641b31b0b8ba9325c5c8f6b9f3c1b026cfab7d0d78fb7e891dafe7becece0 = $this->env->getExtension("native_profiler");
        $__internal_218641b31b0b8ba9325c5c8f6b9f3c1b026cfab7d0d78fb7e891dafe7becece0->enter($__internal_218641b31b0b8ba9325c5c8f6b9f3c1b026cfab7d0d78fb7e891dafe7becece0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_218641b31b0b8ba9325c5c8f6b9f3c1b026cfab7d0d78fb7e891dafe7becece0->leave($__internal_218641b31b0b8ba9325c5c8f6b9f3c1b026cfab7d0d78fb7e891dafe7becece0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c46040d4e96dbabf35a4b5b0653b68a210b1d7387d923f66fba2bc938b6dd9ec = $this->env->getExtension("native_profiler");
        $__internal_c46040d4e96dbabf35a4b5b0653b68a210b1d7387d923f66fba2bc938b6dd9ec->enter($__internal_c46040d4e96dbabf35a4b5b0653b68a210b1d7387d923f66fba2bc938b6dd9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c46040d4e96dbabf35a4b5b0653b68a210b1d7387d923f66fba2bc938b6dd9ec->leave($__internal_c46040d4e96dbabf35a4b5b0653b68a210b1d7387d923f66fba2bc938b6dd9ec_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_72eb4af5ec6677e8309b25d7537235175575a43112d0fdc91aff522c645edf55 = $this->env->getExtension("native_profiler");
        $__internal_72eb4af5ec6677e8309b25d7537235175575a43112d0fdc91aff522c645edf55->enter($__internal_72eb4af5ec6677e8309b25d7537235175575a43112d0fdc91aff522c645edf55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_72eb4af5ec6677e8309b25d7537235175575a43112d0fdc91aff522c645edf55->leave($__internal_72eb4af5ec6677e8309b25d7537235175575a43112d0fdc91aff522c645edf55_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8a08932d5d673b80d8d63ab0c21d3edb0eabc530be0c7aa64405ed59ec80cc76 = $this->env->getExtension("native_profiler");
        $__internal_8a08932d5d673b80d8d63ab0c21d3edb0eabc530be0c7aa64405ed59ec80cc76->enter($__internal_8a08932d5d673b80d8d63ab0c21d3edb0eabc530be0c7aa64405ed59ec80cc76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8a08932d5d673b80d8d63ab0c21d3edb0eabc530be0c7aa64405ed59ec80cc76->leave($__internal_8a08932d5d673b80d8d63ab0c21d3edb0eabc530be0c7aa64405ed59ec80cc76_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
