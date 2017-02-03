<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/tasks.php";

    session_start();                          // For global variable, saving in browser cache
    if (empty($_SESSION['array_of_tasks'])) {
        $_SESSION['array_of_tasks'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));
  // End Red Tape

  // 1. Route for home page
    $app->get("/", function() use ($app) {
        return xxxxxxxxxxxx;
    });

  // 2. Route for sending instantiated new object (new task) to /tasks URL
    $app->post("/tasks", function() use ($app) {
        $task = new xxxxxxxxxxxx;     // Instantiation
        $save = xxxxxx;
        return $app['twig']->render('xxxxxx', xxxxxxxxxxxx;
    });

  // 3. Route for deleting all tasks
    $app->post('/delete', function() use ($app) {
        xxxxxxxxxxxx;
        return $app['twig']->render('xxxxxx');
    });

    return $app;

?>
