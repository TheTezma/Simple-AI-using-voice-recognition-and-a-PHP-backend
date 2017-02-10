<?php
  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
      case 'pages':
        $controller = new PagesController();
      break;

      case 'question':
      	require_once 'models/recognize.php';
      	$controller = new QuestionController();
      break;

      case 'ai':
      	require_once 'models/components.php';
      	$controller = new Components();
    }

    $controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array('pages' => ['home', 'error'],
  					   'question' => ['ask'],
  					   'ai' => ['timezone']);

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }
?>