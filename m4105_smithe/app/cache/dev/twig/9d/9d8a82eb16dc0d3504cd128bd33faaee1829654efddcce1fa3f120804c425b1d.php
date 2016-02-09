<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_76a32c5c55f392c2b92c273097e86bf0dd5a36aaa36b07c1cfffbb523550ba57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c5fa460c5b998fb9b7dee3cbb8b31914e8eb252165c15c540f75705365f8ab3 = $this->env->getExtension("native_profiler");
        $__internal_1c5fa460c5b998fb9b7dee3cbb8b31914e8eb252165c15c540f75705365f8ab3->enter($__internal_1c5fa460c5b998fb9b7dee3cbb8b31914e8eb252165c15c540f75705365f8ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c5fa460c5b998fb9b7dee3cbb8b31914e8eb252165c15c540f75705365f8ab3->leave($__internal_1c5fa460c5b998fb9b7dee3cbb8b31914e8eb252165c15c540f75705365f8ab3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d8194491cc9a68e32e354317ddeb14ff24204ba7f0fb39136c6eda05961b2d29 = $this->env->getExtension("native_profiler");
        $__internal_d8194491cc9a68e32e354317ddeb14ff24204ba7f0fb39136c6eda05961b2d29->enter($__internal_d8194491cc9a68e32e354317ddeb14ff24204ba7f0fb39136c6eda05961b2d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d8194491cc9a68e32e354317ddeb14ff24204ba7f0fb39136c6eda05961b2d29->leave($__internal_d8194491cc9a68e32e354317ddeb14ff24204ba7f0fb39136c6eda05961b2d29_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b611c1500f1bfe21ad947d14dd981daa04971d866f8c3fd246c2228a979230b7 = $this->env->getExtension("native_profiler");
        $__internal_b611c1500f1bfe21ad947d14dd981daa04971d866f8c3fd246c2228a979230b7->enter($__internal_b611c1500f1bfe21ad947d14dd981daa04971d866f8c3fd246c2228a979230b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b611c1500f1bfe21ad947d14dd981daa04971d866f8c3fd246c2228a979230b7->leave($__internal_b611c1500f1bfe21ad947d14dd981daa04971d866f8c3fd246c2228a979230b7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2cf816e0bf667589ae545e496b8fabfc8f6e4a937216ec6496f979ed3d07b971 = $this->env->getExtension("native_profiler");
        $__internal_2cf816e0bf667589ae545e496b8fabfc8f6e4a937216ec6496f979ed3d07b971->enter($__internal_2cf816e0bf667589ae545e496b8fabfc8f6e4a937216ec6496f979ed3d07b971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2cf816e0bf667589ae545e496b8fabfc8f6e4a937216ec6496f979ed3d07b971->leave($__internal_2cf816e0bf667589ae545e496b8fabfc8f6e4a937216ec6496f979ed3d07b971_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
