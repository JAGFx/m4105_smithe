<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // s4smithe_vitrine_homepage
        if (0 === strpos($pathinfo, '/accueil') && preg_match('#^/accueil(?:/(?P<name>\\w+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 's4smithe_vitrine_homepage')), array (  '_controller' => 's4smithe\\VitrineBundle\\Controller\\DefaultController::indexAction',  'name' => 'Visiteur',));
        }

        // s4smithe_vitrine_mentions
        if ($pathinfo === '/mentions') {
            return array (  '_controller' => 's4smithe\\VitrineBundle\\Controller\\DefaultController::mentionsAction',  '_route' => 's4smithe_vitrine_mentions',);
        }

        // s4smithe_vitrine_catalogue
        if ($pathinfo === '/catalogue') {
            return array (  '_controller' => 's4smithe\\VitrineBundle\\Controller\\CatalogueController::indexAction',  '_route' => 's4smithe_vitrine_catalogue',);
        }

        if (0 === strpos($pathinfo, '/articlesPar')) {
            // s4smithe_vitrine_articlesParCategorie
            if (0 === strpos($pathinfo, '/articlesParCategorie') && preg_match('#^/articlesParCategorie(?:/(?P<catId>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 's4smithe_vitrine_articlesParCategorie')), array (  '_controller' => 's4smithe\\VitrineBundle\\Controller\\CategorieController::articlesParCategorieAction',  'catId' => 0,));
            }

            // s4smithe_vitrine_articlesParMarque
            if (0 === strpos($pathinfo, '/articlesParMarque') && preg_match('#^/articlesParMarque(?:/(?P<markId>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 's4smithe_vitrine_articlesParMarque')), array (  '_controller' => 's4smithe\\VitrineBundle\\Controller\\MarqueController::articlesParMarqueAction',  'markId' => 0,));
            }

        }

        if (0 === strpos($pathinfo, '/panier')) {
            // s4smithe_vitrine_contenuPanier
            if ($pathinfo === '/panier/contenu') {
                return array (  '_controller' => 's4smithe\\VitrineBundle\\Controller\\PanierController::contenuPanierAction',  '_route' => 's4smithe_vitrine_contenuPanier',);
            }

            // s4smithe_vitrine_addArticlePanier
            if (0 === strpos($pathinfo, '/panier/addArticle') && preg_match('#^/panier/addArticle(?:/(?P<articleId>\\d+)(?:/(?P<qte>\\d+))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 's4smithe_vitrine_addArticlePanier')), array (  '_controller' => 's4smithe\\VitrineBundle\\Controller\\PanierController::ajouterUnArticleAction',  'articleId' => 0,  'qte' => 1,));
            }

            if (0 === strpos($pathinfo, '/panier/remove')) {
                // s4smithe_vitrine_removeOneArticlePanier
                if (0 === strpos($pathinfo, '/panier/removeOneArticle') && preg_match('#^/panier/removeOneArticle(?:/(?P<articleId>\\d+)(?:/(?P<qte>\\d+))?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 's4smithe_vitrine_removeOneArticlePanier')), array (  '_controller' => 's4smithe\\VitrineBundle\\Controller\\PanierController::enleverUnArticleAction',  'articleId' => 0,  'qte' => 1,));
                }

                // s4smithe_vitrine_removeArticlesPanier
                if (0 === strpos($pathinfo, '/panier/removeArticles') && preg_match('#^/panier/removeArticles(?:/(?P<articleId>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 's4smithe_vitrine_removeArticlesPanier')), array (  '_controller' => 's4smithe\\VitrineBundle\\Controller\\PanierController::enleverArticlesAction',  'articleId' => 0,));
                }

            }

            // s4smithe_vitrine_emptyPanier
            if ($pathinfo === '/panier/empty') {
                return array (  '_controller' => 's4smithe\\VitrineBundle\\Controller\\PanierController::emptyPanierAction',  '_route' => 's4smithe_vitrine_emptyPanier',);
            }

        }

        // s4smithe_vitrine_manager
        if ($pathinfo === '/manager') {
            return array (  '_controller' => 's4smithe\\VitrineBundle\\Controller\\ManagerController::indexAction',  '_route' => 's4smithe_vitrine_manager',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
