<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig');
    });

    $app->get("/count_results", function() use ($app) {
        $my_RepeatCounter = new RepeatCounter;
        $word_count = $my_RepeatCounter->countRepeats($_GET['string'], $_GET['word']);
        return $app['twig']->render('results.html.twig', array('result' => $word_count));
    });
    return $app;
?>
