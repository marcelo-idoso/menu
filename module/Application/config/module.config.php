<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
            'chartjs' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/charts/chartjs',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Charts',
                        'action'     => 'chartjs',
                    ),
                ),
            ),
            'morris' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/charts/morris',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Charts',
                        'action'     => 'morris',
                    ),
                ),
            ),
            'flot' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/charts/flot',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Charts',
                        'action'     => 'flot',
                    ),
                ),
            ),
            'inlinechat' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/charts/inlinechat',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Charts',
                        'action'     => 'inlinechat',
                    ),
                ),
            ),
            
            'calendar' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/calendar',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Calendar',
                        'action'     => 'calendar',
                    ),
                ),
            ),
            
            'invoice' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/examples/invoice',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Examples',
                        'action'     => 'invoice',
                    ),
                ),
            ),
            
            'profile' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/examples/profile',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Examples',
                        'action'     => 'profiles',
                    ),
                ),
            ),
            
            'login' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/examples/login',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Examples',
                        'action'     => 'login',
                    ),
                ),
            ),
            
            'register' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/examples/register',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Examples',
                        'action'     => 'register',
                    ),
                ),
            ),
            
            'lockscreen' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/examples/lockscreen',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Examples',
                        'action'     => 'lockscreen',
                    ),
                ),
            ),
            
            'widgets' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/widgets',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Widgets',
                        'action'     => 'widgets',
                    ),
                ),
            ),
            
            'general' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/uielements/general',
                    'defaults' => array(
                        'controller' => 'Application\Controller\UiElements',
                        'action'     => 'general',
                    ),
                ),
            ),
            
            'icons' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/uielements/icons',
                    'defaults' => array(
                        'controller' => 'Application\Controller\UiElements',
                        'action'     => 'icons',
                    ),
                ),
            ),
            
            'buttons' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/uielements/buttons',
                    'defaults' => array(
                        'controller' => 'Application\Controller\UiElements',
                        'action'     => 'buttons',
                    ),
                ),
            ),
                     
            'sliders' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/uielements/sliders',
                    'defaults' => array(
                        'controller' => 'Application\Controller\UiElements',
                        'action'     => 'sliders',
                    ),
                ),
            ),
            
            'timeline' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/uielements/timeline',
                    'defaults' => array(
                        'controller' => 'Application\Controller\UiElements',
                        'action'     => 'timeline',
                    ),
                ),
            ),
            'modals' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/uielements/modals',
                    'defaults' => array(
                        'controller' => 'Application\Controller\UiElements',
                        'action'     => 'modals',
                    ),
                ),
            ),
            
            'generalelements' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/froms/generalelements',
                    'defaults' => array(
                        'controller' => 'Application\Controller\FormsController',
                        'action'     => 'generalelements',
                    ),
                ),
            ),
            
            'advancedelements' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/froms/advancedelements',
                    'defaults' => array(
                        'controller' => 'Application\Controller\FormsController',
                        'action'     => 'advancedelements',
                    ),
                ),
            ),
            
            'editors' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/froms/editors',
                    'defaults' => array(
                        'controller' => 'Application\Controller\FormsController',
                        'action'     => 'editors',
                    ),
                ),
            ),
            
            'simplestables' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/tables/simplestables',
                    'defaults' => array(
                        'controller' => 'Application\Controller\TablesController',
                        'action'     => 'simplestables',
                    ),
                ),
            ),
            
            'datatables' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/tables/datatables',
                    'defaults' => array(
                        'controller' => 'Application\Controller\MailboxController',
                        'action'     => 'datatables',
                    ),
                ),
            ),
            
            'mailbox' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/mailbox',
                    'defaults' => array(
                        'controller' => 'Application\Controller\MailboxController',
                        'action'     => 'mailbox',
                    ),
                ),
            ),
            
            
            
            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /application/:controller/:action
            'application' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/application',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'factories' => array(
            'translator' => 'Zend\Mvc\Service\TranslatorServiceFactory',
            'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Application\Controller\Index'      => Controller\IndexController::class ,
            'Application\Controller\Calendar'   => Controller\CalendarController::class ,
            'Application\Controller\Examples'   => Controller\ExamplesController::class ,
            'Application\Controller\Forms'      => Controller\FormsController::class ,
            'Application\Controller\Mailbox'    => Controller\MailboxController::class ,
            'Application\Controller\Tables'     => Controller\TablesController::class ,
            'Application\Controller\UiElements' => Controller\UiElementsController::class ,
            'Application\Controller\Widgets'    => Controller\WidgetsController::class ,
            'Application\Controller\Charts'     => Controller\ChartsController::class
        
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);
