<?php

$root = (php_sapi_name() === 'cli' ? getcwd() . '/examples' : $_SERVER['DOCUMENT_ROOT']);

include_once $root . '/tools.php';

spl_autoload_register(function ($class_name) {
  include $class_name . '.php';
});

/**
 * Example of use abstract classes.
 */
class EntryPoint {

  /**
   * Execute example.
   */
  public function start() {

    $article = new ArticleModel();

    $article->add([
      34,
      'Home',
      'Content home',
    ]);

    $article->get(33);

    $article->delete(33);
  }

}

// Test.
$entryPoint = new EntryPoint();
$entryPoint->start();
