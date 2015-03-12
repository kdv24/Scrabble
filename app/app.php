<?php

    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Scrabble.php';

    $app = new Silex\Application();
    $app['debug']=true;

    $app->register(new Silex\Provider\TwigServiceProvider, array('twig.path' => __DIR__.'/../views'));

    $app->get("/", function() use ($app)
    {
            return $app['twig'] -> render('home.twig');
    });

// scrabble_logic is path from form

    $app->post("/scrabble_logic", function() use ($app)
    {
        $new_scrabble_input = new Scrabble;
        $output = $new_scrabble_input->getWordValue ($_POST['scrabble_input']);


        return $app['twig'] -> render ('results.twig', array('scrabble_value' => $output));
    });


return $app;



?>
