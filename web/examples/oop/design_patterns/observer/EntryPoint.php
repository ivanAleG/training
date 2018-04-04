<?php

$root = (php_sapi_name() === 'cli' ? getcwd() . '/examples' : $_SERVER['DOCUMENT_ROOT']);

include_once $root . '/tools.php';

spl_autoload_register(function ($class_name) {
  include $class_name . '.php';
});

/**
 * Class that allow execute the example of implementation.
 */
class EntryPoint {

  /**
   * Object that represent the Subject of the pattern.
   *
   * @var News
   */
  private $news;

  /**
   * EntryPoint constructor.
   */
  public function __construct() {
    $this->news = new News();
  }

  /**
   * Allow add articles to news from array.
   *
   * @param array $list
   *   Data of all articles to attach in the news.
   */
  public function addArticles(array $list = []) {
    foreach ($list as $element) {
      $article = new Article();

      $article->setId($element['id']);
      $article->setTitle($element['title']);
      $article->setContent($element['content']);

      $this->news->attachArticle($article);
    }
  }

  /**
   * Execute the functionality of the Observer pattern.
   */
  public function start() {

    $reader1 = new Reader();
    $reader1->setName('Charly');

    $reader2 = new Reader();
    $reader2->setName('Ruby');

    $reader3 = new Reader();
    $reader3->setName('Fernando');

    $this->news->attach($reader1);
    $this->news->attach($reader2);
    $this->news->attach($reader3);

    $listArticles = [
      [
        'id' => 1,
        'title' => 'What is Lorem Ipsum?',
        'content' => 'Is simply dummy text of the printing...',
      ],
      [
        'id' => 2,
        'title' => 'Why do we use it?',
        'content' => 'It is a long established fact...',
      ],
      [
        'id' => 3,
        'title' => 'Where does it come from?',
        'content' => 'Contrary to popular belief...',
      ],
    ];

    $this->addArticles($listArticles);

    Printer::text("\n\n###################### Public all articles and notify all readers. ######################\n\n");

    $this->news->publishArticles([1, 2, 3]);

    Printer::text("\n\n###################### Public articles 1 & 3 and notify all readers. ######################\n\n");

    $this->news->publishArticles([1, 3]);

    Printer::text("\n\n###################### Public all articles and remove reader 1. ######################\n\n");

    $this->news->detach($reader1);
    $this->news->publishArticles([1, 2, 3]);
  }

}

// Execute example.
$entry_point = new EntryPoint();

$entry_point->start();
