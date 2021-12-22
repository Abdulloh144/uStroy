<?


// session_start();

// $route = $_GET['route'];
$route = $_GET['route'];

// include_once './includes/db.php';

$arrayPages = [
  
    'contacts'     => ['page_name'   => 'contacts',
                      'page_title'  => 'Контакты'
                     ],
  
    'about'        => ['page_name'   => 'about',
                       'page_title'  => 'О нас'
                      ],
  
    'allObject'        => ['page_name'   => 'allObject',
                      'page_title'  => 'Наши объекты'
                     ],
  
    'brokers'        => ['page_name'   => 'brokers',
                       'page_title'  => 'Брокерам'
                      ],
  
    'property'        => ['page_name'   => 'property',
                       'page_title'  => 'Управление недвижемостью'
                      ],
  
    'questions'         => ['page_name'   => 'questions',
                       'page_title'  => 'Частые вопросы'
                      ]
  
  ];



?>