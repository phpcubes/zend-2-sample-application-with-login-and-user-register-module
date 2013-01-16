<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Album\Controller\Album' => 'Album\Controller\AlbumController',
        ),
    ),

    // The following section is new and should be added to your file
    'router' => array(
        'routes' => array(
            'album' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/album[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+'                    		
                    ),
                    'defaults' => array(
                        'controller' => 'Album\Controller\Album',
                        'action'     => 'index',
                    ),
                ),  
                'may_terminate' => true,
            		
            		'child_routes' => array(
            				// Segment route for viewing one blog post
            				'page' => array(
            						'type' => 'segment',
            						'options' => array(
            								'route' => '[/:action][/:id]/page[/:page]',
            								'constraints' => array(
            										'page' => '[a-zA-Z0-9_-]+'
            								),
            								'defaults' => array(
            										'action' => 'index'
            								)
            						)
            				)
            				 
            		)

            		
            ),
        ),
    ),

    'view_manager' => array(
        'template_path_stack' => array(
            'album' => __DIR__ . '/../view',
        ),
    ),
);