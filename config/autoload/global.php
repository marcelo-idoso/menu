<?php

/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */
return array(
    'navigation' => array(
        'default' => array(
            array(
                'label' => 'Dashboard',
                'route' => 'home',
                'icon' => 'fa fa-dashboard',
                'pages' => array(
                    array(
                        'label' => 'Inicio',
                        'route' => 'home'
                    ),
                ),
            ),
            array(
                'label' => 'Charts',
                'route' => 'application',
                'icon'  => 'fa fa-pie-chart',
                'pages' => array(
                    array(
                        'label' => 'Charts',
                        'route' => 'chartjs',
                    ),
                    array(
                        'label' => 'Morris',
                        'route' => 'morris',
                    ),
                    array(
                        'label' => 'Flot',
                        'route' => 'flot',
                    ),
                    array(
                        'label' => 'Inline Charts',
                        'route' => 'inlinechat',
                    ),
                ),
            ),
            array(
                'label' => 'Calendar',
                'route' => 'calendar',
                'icon' => 'fa fa-calendar'
            ),
            array(
                'label' => 'Widgets',
                'route' => 'widgets',
                'icon'  => 'fa fa-th'
            ),
            array(
                'label' => 'Examples',
                'route' => 'application',
                'icon' => 'fa fa-folder',
                'pages' => array(
                    array(
                        'label' => 'Invoice',
                        'route' => 'invoice',
                    ),
                    array(
                        'label' => 'Profile',
                        'route' => 'profile',
                    ),
                    array(
                        'label' => 'Login',
                        'route' => 'login',
                    ),
                    array(
                        'label' => 'Register',
                        'route' => 'register',
                    ),
                    array(
                        'label' => 'Lockscreen',
                        'route' => 'lockscreen'
                    ),
                ),
            ),
            array(
                'label' => 'UI Elements',
                'route' => 'application',
                'icon' => 'fa fa-laptop',
                'pages' => array(
                    array(
                        'label' => 'General',
                        'route' => 'general',
                    ),
                    array(
                        'label' => 'Icons',
                        'route' => 'icons',
                    ),
                    array(
                        'label' => 'Buttons',
                        'route' => 'buttons',
                    ),
                    array(
                        'label' => 'Sliders',
                        'route' => 'sliders',
                    ),
                    array(
                        'label' => 'Timeline',
                        'route' => 'timeline'
                    ),
                    array(
                        'label' => 'modals',
                        'route' => 'modals'
                    ),
                ),
            ),
            array(
                'label' => 'Forms',
                'route' => 'application',
                'icon' => 'fa fa-edit',
                'pages' => array(
                    array(
                        'label' => 'General Elements',
                        'route' => 'generalelements',
                    ),
                    array(
                        'label' => 'Advanced Elements',
                        'route' => 'advancedelements',
                    ),
                    array(
                        'label' => 'Editors',
                        'route' => 'editors',
                    ),
                ),
            ),
            array(
                'label' => 'Tables',
                'route' => 'application',
                'icon' => 'fa fa-table',
                'pages' => array(
                    array(
                        'label' => 'Simples Tables',
                        'route' => 'simplestables',
                    ),
                    array(
                        'label' => 'Data Tables',
                        'route' => 'datatables',
                    ),
                ),
            ),
             array(
                'label' => 'MailBox',
                'route' => 'mailbox',
                'icon' => 'fa fa-envelope',
            ),
        ),
    ),
);
