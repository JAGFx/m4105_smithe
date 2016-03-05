<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        's4smithe_vitrine_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 's4smithe\\VitrineBundle\\Controller\\DefaultController::indexAction',    'name' => 'Visiteur',  ),  2 =>   array (    'name' => '\\w+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\w+',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/accueil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        's4smithe_vitrine_mentions' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 's4smithe\\VitrineBundle\\Controller\\DefaultController::mentionsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mentions',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        's4smithe_vitrine_catalogue' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 's4smithe\\VitrineBundle\\Controller\\CatalogueController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/catalogue',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        's4smithe_vitrine_articlesParCategorie' => array (  0 =>   array (    0 => 'catId',  ),  1 =>   array (    '_controller' => 's4smithe\\VitrineBundle\\Controller\\CategorieController::articlesParCategorieAction',    'catId' => 0,  ),  2 =>   array (    'catId' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'catId',    ),    1 =>     array (      0 => 'text',      1 => '/articlesParCategorie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        's4smithe_vitrine_articlesParMarque' => array (  0 =>   array (    0 => 'markId',  ),  1 =>   array (    '_controller' => 's4smithe\\VitrineBundle\\Controller\\MarqueController::articlesParMarqueAction',    'markId' => 0,  ),  2 =>   array (    'markId' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'markId',    ),    1 =>     array (      0 => 'text',      1 => '/articlesParMarque',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        's4smithe_vitrine_contenuPanier' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 's4smithe\\VitrineBundle\\Controller\\PanierController::contenuPanierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/panier/contenu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        's4smithe_vitrine_addArticlePanier' => array (  0 =>   array (    0 => 'articleId',    1 => 'qte',  ),  1 =>   array (    '_controller' => 's4smithe\\VitrineBundle\\Controller\\PanierController::ajouterUnArticleAction',    'articleId' => 0,    'qte' => 1,  ),  2 =>   array (    'articleId' => '\\d+',    'qte' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'qte',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'articleId',    ),    2 =>     array (      0 => 'text',      1 => '/panier/addArticle',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        's4smithe_vitrine_removeOneArticlePanier' => array (  0 =>   array (    0 => 'articleId',    1 => 'qte',  ),  1 =>   array (    '_controller' => 's4smithe\\VitrineBundle\\Controller\\PanierController::enleverUnArticleAction',    'articleId' => 0,    'qte' => 1,  ),  2 =>   array (    'articleId' => '\\d+',    'qte' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'qte',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'articleId',    ),    2 =>     array (      0 => 'text',      1 => '/panier/removeOneArticle',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        's4smithe_vitrine_removeArticlesPanier' => array (  0 =>   array (    0 => 'articleId',  ),  1 =>   array (    '_controller' => 's4smithe\\VitrineBundle\\Controller\\PanierController::enleverArticlesAction',    'articleId' => 0,  ),  2 =>   array (    'articleId' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'articleId',    ),    1 =>     array (      0 => 'text',      1 => '/panier/removeArticles',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        's4smithe_vitrine_emptyPanier' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 's4smithe\\VitrineBundle\\Controller\\PanierController::emptyPanierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/panier/empty',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        's4smithe_vitrine_manager' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 's4smithe\\VitrineBundle\\Controller\\ManagerController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/manager',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
