<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/ajaxlog')) {
            // frontwise_ajaxlog_log_loadactivity
            if ($pathinfo === '/ajaxlog/loadActivity') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_frontwise_ajaxlog_log_loadactivity;
                }

                return array (  '_controller' => 'Frontwise\\AjaxLogBundle\\Controller\\LogController::loadActivity',  '_route' => 'frontwise_ajaxlog_log_loadactivity',);
            }
            not_frontwise_ajaxlog_log_loadactivity:

            // frontwise_ajaxlog_log_create
            if (preg_match('#^/ajaxlog(?:/(?P<level>[^/]++))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_frontwise_ajaxlog_log_create;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'frontwise_ajaxlog_log_create')), array (  'level' => 'info',  '_controller' => 'Frontwise\\AjaxLogBundle\\Controller\\LogController::createAction',));
            }
            not_frontwise_ajaxlog_log_create:

        }

        if (0 === strpos($pathinfo, '/vu/api/v2')) {
            if (0 === strpos($pathinfo, '/vu/api/v2/search')) {
                // dive_api_divetv_search
                if ($pathinfo === '/vu/api/v2/search') {
                    return array (  '_controller' => 'Dive\\APIBundle\\Controller\\DIVEtvController::searchAction',  '_route' => 'dive_api_divetv_search',);
                }

                // dive_api_divetv_searchids
                if ($pathinfo === '/vu/api/v2/searchids') {
                    return array (  '_controller' => 'Dive\\APIBundle\\Controller\\DIVEtvController::searchIdsAction',  '_route' => 'dive_api_divetv_searchids',);
                }

            }

            if (0 === strpos($pathinfo, '/vu/api/v2/entity')) {
                // dive_api_divetv_details
                if ($pathinfo === '/vu/api/v2/entity/details') {
                    return array (  '_controller' => 'Dive\\APIBundle\\Controller\\DIVEtvController::detailsAction',  '_route' => 'dive_api_divetv_details',);
                }

                if (0 === strpos($pathinfo, '/vu/api/v2/entity/related')) {
                    // dive_api_divetv_relatedness
                    if ($pathinfo === '/vu/api/v2/entity/relatedness') {
                        return array (  '_controller' => 'Dive\\APIBundle\\Controller\\DIVEtvController::relatednessAction',  '_route' => 'dive_api_divetv_relatedness',);
                    }

                    // dive_api_divetv_relatedtest
                    if ($pathinfo === '/vu/api/v2/entity/related/test') {
                        return array (  '_controller' => 'Dive\\APIBundle\\Controller\\DIVEtvController::relatedTestAction',  '_route' => 'dive_api_divetv_relatedtest',);
                    }

                    // dive_api_divetv_related
                    if ($pathinfo === '/vu/api/v2/entity/related') {
                        return array (  '_controller' => 'Dive\\APIBundle\\Controller\\DIVEtvController::relatedAction',  '_route' => 'dive_api_divetv_related',);
                    }

                }

            }

            // dive_api_divetv_cacheflush
            if ($pathinfo === '/vu/api/v2/cache/flush/yesiamsure') {
                return array (  '_controller' => 'Dive\\APIBundle\\Controller\\DIVEtvController::cacheFlushAction',  '_route' => 'dive_api_divetv_cacheflush',);
            }

        }

        if (0 === strpos($pathinfo, '/europeana/api/v2')) {
            if (0 === strpos($pathinfo, '/europeana/api/v2/search')) {
                // dive_api_europeanadata_search
                if ($pathinfo === '/europeana/api/v2/search') {
                    return array (  '_controller' => 'Dive\\APIBundle\\Controller\\EuropeanaDataController::searchAction',  '_route' => 'dive_api_europeanadata_search',);
                }

                // dive_api_europeanadata_searchids
                if ($pathinfo === '/europeana/api/v2/searchids') {
                    return array (  '_controller' => 'Dive\\APIBundle\\Controller\\EuropeanaDataController::searchIdsAction',  '_route' => 'dive_api_europeanadata_searchids',);
                }

            }

            if (0 === strpos($pathinfo, '/europeana/api/v2/entity')) {
                // dive_api_europeanadata_details
                if ($pathinfo === '/europeana/api/v2/entity/details') {
                    return array (  '_controller' => 'Dive\\APIBundle\\Controller\\EuropeanaDataController::detailsAction',  '_route' => 'dive_api_europeanadata_details',);
                }

                // dive_api_europeanadata_related
                if ($pathinfo === '/europeana/api/v2/entity/related') {
                    return array (  '_controller' => 'Dive\\APIBundle\\Controller\\EuropeanaDataController::relatedAction',  '_route' => 'dive_api_europeanadata_related',);
                }

            }

            // dive_api_europeanadata_cacheflush
            if ($pathinfo === '/europeana/api/v2/cache/flush/yesiamsure') {
                return array (  '_controller' => 'Dive\\APIBundle\\Controller\\EuropeanaDataController::cacheFlushAction',  '_route' => 'dive_api_europeanadata_cacheflush',);
            }

            if (0 === strpos($pathinfo, '/europeana/api/v2/entity/related')) {
                // dive_api_europeanadata_relatedness
                if ($pathinfo === '/europeana/api/v2/entity/relatedness') {
                    return array (  '_controller' => 'Dive\\APIBundle\\Controller\\EuropeanaDataController::relatednessAction',  '_route' => 'dive_api_europeanadata_relatedness',);
                }

                // dive_api_europeanadata_relatedtest
                if ($pathinfo === '/europeana/api/v2/entity/related/test') {
                    return array (  '_controller' => 'Dive\\APIBundle\\Controller\\EuropeanaDataController::relatedTestAction',  '_route' => 'dive_api_europeanadata_relatedtest',);
                }

            }

        }

        // dive_front_browse_index
        if (preg_match('#^/(?P<dataset>[^/]++)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dive_front_browse_index')), array (  'dataset' => 'vu',  '_controller' => 'Dive\\FrontBundle\\Controller\\BrowseController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/co')) {
            if (0 === strpos($pathinfo, '/collection')) {
                // dive_front_collection_create
                if ($pathinfo === '/collection/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_dive_front_collection_create;
                    }

                    return array (  '_controller' => 'Dive\\FrontBundle\\Controller\\CollectionController::createAction',  '_route' => 'dive_front_collection_create',);
                }
                not_dive_front_collection_create:

                // dive_front_collection_delete
                if (preg_match('#^/collection/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_dive_front_collection_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dive_front_collection_delete')), array (  '_controller' => 'Dive\\FrontBundle\\Controller\\CollectionController::deleteAction',));
                }
                not_dive_front_collection_delete:

                // dive_front_collection_list
                if (0 === strpos($pathinfo, '/collection/list') && preg_match('#^/collection/list(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dive_front_collection_list')), array (  'id' => 0,  '_controller' => 'Dive\\FrontBundle\\Controller\\CollectionController::listAction',));
                }

                // dive_front_collection_search
                if ($pathinfo === '/collection/search') {
                    return array (  '_controller' => 'Dive\\FrontBundle\\Controller\\CollectionController::searchAction',  '_route' => 'dive_front_collection_search',);
                }

                if (0 === strpos($pathinfo, '/collection/entit')) {
                    // dive_front_collection_entity
                    if ($pathinfo === '/collection/entity') {
                        return array (  '_controller' => 'Dive\\FrontBundle\\Controller\\CollectionController::entityAction',  '_route' => 'dive_front_collection_entity',);
                    }

                    // dive_front_collection_entities
                    if (rtrim($pathinfo, '/') === '/collection/entities') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'dive_front_collection_entities');
                        }

                        return array (  '_controller' => 'Dive\\FrontBundle\\Controller\\CollectionController::entitiesAction',  '_route' => 'dive_front_collection_entities',);
                    }

                }

                // dive_front_collection_details
                if (preg_match('#^/collection/(?P<id>[^/]++)/details$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_dive_front_collection_details;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dive_front_collection_details')), array (  '_controller' => 'Dive\\FrontBundle\\Controller\\CollectionController::detailsAction',));
                }
                not_dive_front_collection_details:

                // dive_front_collection_add
                if (preg_match('#^/collection/(?P<id>[^/]++)/add$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_dive_front_collection_add;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dive_front_collection_add')), array (  '_controller' => 'Dive\\FrontBundle\\Controller\\CollectionController::addAction',));
                }
                not_dive_front_collection_add:

                // dive_front_collection_edit
                if (preg_match('#^/collection/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_dive_front_collection_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dive_front_collection_edit')), array (  '_controller' => 'Dive\\FrontBundle\\Controller\\CollectionController::editAction',));
                }
                not_dive_front_collection_edit:

                // dive_front_collection_remove
                if (preg_match('#^/collection/(?P<id>[^/]++)/remove$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_dive_front_collection_remove;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dive_front_collection_remove')), array (  '_controller' => 'Dive\\FrontBundle\\Controller\\CollectionController::removeAction',));
                }
                not_dive_front_collection_remove:

            }

            if (0 === strpos($pathinfo, '/comment')) {
                // dive_front_comment_incrementvotecountbyone
                if ($pathinfo === '/comment/incrementVoteCount') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_dive_front_comment_incrementvotecountbyone;
                    }

                    return array (  '_controller' => 'Dive\\FrontBundle\\Controller\\CommentController::incrementVoteCountByOne',  '_route' => 'dive_front_comment_incrementvotecountbyone',);
                }
                not_dive_front_comment_incrementvotecountbyone:

                // dive_front_comment_decrementvotecountbyone
                if ($pathinfo === '/comment/decrementVoteCount') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_dive_front_comment_decrementvotecountbyone;
                    }

                    return array (  '_controller' => 'Dive\\FrontBundle\\Controller\\CommentController::decrementVoteCountByOne',  '_route' => 'dive_front_comment_decrementvotecountbyone',);
                }
                not_dive_front_comment_decrementvotecountbyone:

                // dive_front_comment_add
                if ($pathinfo === '/comment/add') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_dive_front_comment_add;
                    }

                    return array (  '_controller' => 'Dive\\FrontBundle\\Controller\\CommentController::addAction',  '_route' => 'dive_front_comment_add',);
                }
                not_dive_front_comment_add:

            }

        }

        if (0 === strpos($pathinfo, '/entity')) {
            // dive_front_diveentity_returnmostpopularentity
            if ($pathinfo === '/entity/mostPopular') {
                return array (  '_controller' => 'Dive\\FrontBundle\\Controller\\DiveEntityController::returnMostPopularEntity',  '_route' => 'dive_front_diveentity_returnmostpopularentity',);
            }

            // dive_front_diveentity_count
            if ($pathinfo === '/entity/count') {
                return array (  '_controller' => 'Dive\\FrontBundle\\Controller\\DiveEntityController::countAction',  '_route' => 'dive_front_diveentity_count',);
            }

            // dive_front_diveentity_getdescription
            if ($pathinfo === '/entity/getDesc') {
                return array (  '_controller' => 'Dive\\FrontBundle\\Controller\\DiveEntityController::getDescription',  '_route' => 'dive_front_diveentity_getdescription',);
            }

            if (0 === strpos($pathinfo, '/entity/co')) {
                if (0 === strpos($pathinfo, '/entity/comments')) {
                    // dive_front_diveentity_comments
                    if ($pathinfo === '/entity/comments') {
                        return array (  '_controller' => 'Dive\\FrontBundle\\Controller\\DiveEntityController::commentsAction',  '_route' => 'dive_front_diveentity_comments',);
                    }

                    // dive_front_diveentity_multiplecomments
                    if (rtrim($pathinfo, '/') === '/entity/comments/multiple') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'dive_front_diveentity_multiplecomments');
                        }

                        return array (  '_controller' => 'Dive\\FrontBundle\\Controller\\DiveEntityController::multipleCommentsAction',  '_route' => 'dive_front_diveentity_multiplecomments',);
                    }

                }

                // dive_front_diveentity_collections
                if ($pathinfo === '/entity/collections') {
                    return array (  '_controller' => 'Dive\\FrontBundle\\Controller\\DiveEntityController::collectionsAction',  '_route' => 'dive_front_diveentity_collections',);
                }

            }

            if (0 === strpos($pathinfo, '/entity/get')) {
                // dive_front_diveentity_getvideostat
                if ($pathinfo === '/entity/getVideoStat') {
                    return array (  '_controller' => 'Dive\\FrontBundle\\Controller\\DiveEntityController::getVideoStat',  '_route' => 'dive_front_diveentity_getvideostat',);
                }

                // dive_front_diveentity_getallvideostat
                if ($pathinfo === '/entity/getAllVideoStat') {
                    return array (  '_controller' => 'Dive\\FrontBundle\\Controller\\DiveEntityController::getAllVideoStat',  '_route' => 'dive_front_diveentity_getallvideostat',);
                }

            }

            // dive_front_diveentity_incrementvideostat
            if ($pathinfo === '/entity/incrementVideoStat') {
                return array (  '_controller' => 'Dive\\FrontBundle\\Controller\\DiveEntityController::incrementVideoStat',  '_route' => 'dive_front_diveentity_incrementvideostat',);
            }

        }

        if (0 === strpos($pathinfo, '/search/images')) {
            // dive_front_image_cacheflush
            if ($pathinfo === '/search/images/cache/flush/yesiamsure') {
                return array (  '_controller' => 'Dive\\FrontBundle\\Controller\\ImageController::cacheFlushAction',  '_route' => 'dive_front_image_cacheflush',);
            }

            // dive_front_image_index
            if (preg_match('#^/search/images/(?P<keywords>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dive_front_image_index')), array (  '_controller' => 'Dive\\FrontBundle\\Controller\\ImageController::indexAction',));
            }

        }

        // dive_front_security_createuser
        if ($pathinfo === '/testuser') {
            return array (  '_controller' => 'Dive\\FrontBundle\\Controller\\SecurityController::createUserAction',  '_route' => 'dive_front_security_createuser',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // dive_front_user_current
            if ($pathinfo === '/user/current') {
                return array (  '_controller' => 'Dive\\FrontBundle\\Controller\\UserController::currentAction',  '_route' => 'dive_front_user_current',);
            }

            // dive_front_user_profile
            if ($pathinfo === '/user/profile') {
                return array (  '_controller' => 'Dive\\FrontBundle\\Controller\\UserController::profileAction',  '_route' => 'dive_front_user_profile',);
            }

            // dive_front_user_signup
            if ($pathinfo === '/user/signup') {
                return array (  '_controller' => 'Dive\\FrontBundle\\Controller\\UserController::signupAction',  '_route' => 'dive_front_user_signup',);
            }

            // dive_front_user_activate
            if (0 === strpos($pathinfo, '/user/activate') && preg_match('#^/user/activate/(?P<id>[^/]++)/(?P<hash>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dive_front_user_activate')), array (  '_controller' => 'Dive\\FrontBundle\\Controller\\UserController::activateAction',));
            }

            // dive_front_user_requestpassword
            if ($pathinfo === '/user/requestPassword') {
                return array (  '_controller' => 'Dive\\FrontBundle\\Controller\\UserController::requestPasswordAction',  '_route' => 'dive_front_user_requestpassword',);
            }

            // dive_front_user_newpassword
            if (0 === strpos($pathinfo, '/user/newPassword') && preg_match('#^/user/newPassword/(?P<id>[^/]++)/(?P<hash>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dive_front_user_newpassword')), array (  '_controller' => 'Dive\\FrontBundle\\Controller\\UserController::newPasswordAction',));
            }

        }

        // dive_front_videostat_changevideostat
        if ($pathinfo === '/HOIchangeVideoStat') {
            return array (  '_controller' => 'Dive\\FrontBundle\\Controller\\VideoStatController::changeVideoStat',  '_route' => 'dive_front_videostat_changevideostat',);
        }

        if (0 === strpos($pathinfo, '/user/log')) {
            // login
            if ($pathinfo === '/user/login') {
                return array (  '_controller' => 'Dive\\FrontBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
            }

            // logout
            if ($pathinfo === '/user/logout') {
                return array('_route' => 'logout');
            }

            // login_check
            if ($pathinfo === '/user/login_check') {
                return array('_route' => 'login_check');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
