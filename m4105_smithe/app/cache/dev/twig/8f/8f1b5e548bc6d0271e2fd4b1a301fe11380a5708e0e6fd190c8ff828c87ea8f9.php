<?php

/* s4smitheVitrineBundle::header.html.twig */
class __TwigTemplate_4b5bcd58c63dd493d06a784c9802656ad122e62241558323b151f377ab9ed4a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_056988e7f0e21018892e7603cab92243ce9eb27fe78bd528888aa198a4bca05f = $this->env->getExtension("native_profiler");
        $__internal_056988e7f0e21018892e7603cab92243ce9eb27fe78bd528888aa198a4bca05f->enter($__internal_056988e7f0e21018892e7603cab92243ce9eb27fe78bd528888aa198a4bca05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "s4smitheVitrineBundle::header.html.twig"));

        // line 1
        echo "<!--
\tFichier : header.html.twing
\tAuteur : Emmanuel SMITH
\tCreation : 12/02/2016
\tModification :
\t\t> 12/02/2016\t\tMise en place du header pour le Template

\tEntête par défaut des toutes les pages
-->

";
        // line 11
        $this->displayBlock('header', $context, $blocks);
        // line 67
        echo "\t";
        
        $__internal_056988e7f0e21018892e7603cab92243ce9eb27fe78bd528888aa198a4bca05f->leave($__internal_056988e7f0e21018892e7603cab92243ce9eb27fe78bd528888aa198a4bca05f_prof);

    }

    // line 11
    public function block_header($context, array $blocks = array())
    {
        $__internal_04de14780bd76f5c8441eaeff549330c72e16fd928e207730c445cec99a0df9e = $this->env->getExtension("native_profiler");
        $__internal_04de14780bd76f5c8441eaeff549330c72e16fd928e207730c445cec99a0df9e->enter($__internal_04de14780bd76f5c8441eaeff549330c72e16fd928e207730c445cec99a0df9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 12
        echo "\t<header>
\t\t<nav class=\"navbar navbar-inverse navbar-default\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<a class=\"navbar-brand\" href=\"#\">Brand</a>
\t\t\t\t</div>

\t\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#\">Link <span class=\"sr-only\">(current)</span></a></li>
\t\t\t\t\t\t<li><a href=\"#\">Link</a></li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t\t<li role=\"separator\" class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t\t\t<li role=\"separator\" class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">One more separated link</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<form class=\"navbar-form navbar-left\" role=\"search\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\">Submit</button>
\t\t\t\t\t</form>
\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t<li><a href=\"#\">Link</a></li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Action</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Another action</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Something else here</a></li>
\t\t\t\t\t\t\t\t<li role=\"separator\" class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Separated link</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div><!-- /.navbar-collapse -->
\t\t\t</div><!-- /.container-fluid -->
\t\t</nav>
\t</header>
";
        
        $__internal_04de14780bd76f5c8441eaeff549330c72e16fd928e207730c445cec99a0df9e->leave($__internal_04de14780bd76f5c8441eaeff549330c72e16fd928e207730c445cec99a0df9e_prof);

    }

    public function getTemplateName()
    {
        return "s4smitheVitrineBundle::header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  44 => 11,  37 => 67,  35 => 11,  23 => 1,);
    }
}
/* <!--*/
/* 	Fichier : header.html.twing*/
/* 	Auteur : Emmanuel SMITH*/
/* 	Creation : 12/02/2016*/
/* 	Modification :*/
/* 		> 12/02/2016		Mise en place du header pour le Template*/
/* */
/* 	Entête par défaut des toutes les pages*/
/* -->*/
/* */
/* {% block header %}*/
/* 	<header>*/
/* 		<nav class="navbar navbar-inverse navbar-default">*/
/* 			<div class="container-fluid">*/
/* 				<!-- Brand and toggle get grouped for better mobile display -->*/
/* 				<div class="navbar-header">*/
/* 					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/* 						<span class="sr-only">Toggle navigation</span>*/
/* 						<span class="icon-bar"></span>*/
/* 						<span class="icon-bar"></span>*/
/* 						<span class="icon-bar"></span>*/
/* 					</button>*/
/* 					<a class="navbar-brand" href="#">Brand</a>*/
/* 				</div>*/
/* */
/* 				<!-- Collect the nav links, forms, and other content for toggling -->*/
/* 				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/* 					<ul class="nav navbar-nav">*/
/* 						<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>*/
/* 						<li><a href="#">Link</a></li>*/
/* 						<li class="dropdown">*/
/* 							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>*/
/* 							<ul class="dropdown-menu">*/
/* 								<li><a href="#">Action</a></li>*/
/* 								<li><a href="#">Another action</a></li>*/
/* 								<li><a href="#">Something else here</a></li>*/
/* 								<li role="separator" class="divider"></li>*/
/* 								<li><a href="#">Separated link</a></li>*/
/* 								<li role="separator" class="divider"></li>*/
/* 								<li><a href="#">One more separated link</a></li>*/
/* 							</ul>*/
/* 						</li>*/
/* 					</ul>*/
/* 					<form class="navbar-form navbar-left" role="search">*/
/* 						<div class="form-group">*/
/* 							<input type="text" class="form-control" placeholder="Search">*/
/* 						</div>*/
/* 						<button type="submit" class="btn btn-default">Submit</button>*/
/* 					</form>*/
/* 					<ul class="nav navbar-nav navbar-right">*/
/* 						<li><a href="#">Link</a></li>*/
/* 						<li class="dropdown">*/
/* 							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>*/
/* 							<ul class="dropdown-menu">*/
/* 								<li><a href="#">Action</a></li>*/
/* 								<li><a href="#">Another action</a></li>*/
/* 								<li><a href="#">Something else here</a></li>*/
/* 								<li role="separator" class="divider"></li>*/
/* 								<li><a href="#">Separated link</a></li>*/
/* 							</ul>*/
/* 						</li>*/
/* 					</ul>*/
/* 				</div><!-- /.navbar-collapse -->*/
/* 			</div><!-- /.container-fluid -->*/
/* 		</nav>*/
/* 	</header>*/
/* {% endblock %}	*/
