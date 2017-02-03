<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/jobs.php";

    session_start();                          // For global variable, saving in browser cache
    if (empty($_SESSION['array_of_jobs'])) {
        $_SESSION['array_of_jobs'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));
  // End Red Tape

  // 1. Route for home page
    $app->get('/', function() use ($app) {
        return $app['twig']->render('jobs.html.twig', array('jobs' => Job::getAll()));
    });

  // 2. Route for sending instantiated new object (new task) to /tasks URL
    // $app-
    //     xxxxxxx;
    // });

  // 3. Route for deleting all tasks
    // $app->post('/e', funce () {
    //     xxxxxxxxxxxx;
    //     r ('');
    // });

    return $app;

?>
