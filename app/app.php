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

  // 1. GET Route for home page
    $app->get('/', function() use ($app) {
        return $app['twig']->render('jobs.html.twig', array('jobs' => Job::getAll()));
    });

  // 2. POST Route for sending instantiated new object (new task) to /tasks URL
    $app->post('/jobs', function() use ($app) {
        $job = new Job($_POST['title']);
        $save = $job->save();

        return $app['twig']->render('new_job.html.twig', array('newtitle' => $job));
    });






  // 3. Route for deleting all tasks
    // $app->post('/e', funce () {
    //     xxxxxxxxxxxx;
    //     r ('');
    // });

    return $app;

?>
