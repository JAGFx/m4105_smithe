<?php

/* s4smitheVitrineBundle:Default:mentions.html.twig */
class __TwigTemplate_4074762c8e8d2642f0aca5c1aa53a3804be70e81a54061e378fec3076779fcdd extends Twig_Template
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
        $__internal_60320ec1426a7e7092f82d16d45404d35c50b6acf68def679f3e96262bcd9712 = $this->env->getExtension("native_profiler");
        $__internal_60320ec1426a7e7092f82d16d45404d35c50b6acf68def679f3e96262bcd9712->enter($__internal_60320ec1426a7e7092f82d16d45404d35c50b6acf68def679f3e96262bcd9712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "s4smitheVitrineBundle:Default:mentions.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<title>Mentions</title>
\t\t<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/s4smithevitrine/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
\t</head>
\t<body class=\"container\">

\t\t<p class=\"col-xs-12\">
\t\t\tCeci sont les mentions legales
\t\t</p>

\t</body>
</html>";
        
        $__internal_60320ec1426a7e7092f82d16d45404d35c50b6acf68def679f3e96262bcd9712->leave($__internal_60320ec1426a7e7092f82d16d45404d35c50b6acf68def679f3e96262bcd9712_prof);

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
        return array (  28 => 5,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* 	<head>*/
/* 		<title>Mentions</title>*/
/* 		<link href="{{ asset('bundles/s4smithevitrine/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>*/
/* 	</head>*/
/* 	<body class="container">*/
/* */
/* 		<p class="col-xs-12">*/
/* 			Ceci sont les mentions legales*/
/* 		</p>*/
/* */
/* 	</body>*/
/* </html>*/
