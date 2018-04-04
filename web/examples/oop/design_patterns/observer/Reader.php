<?php

/**
 * Class that allow update status of the Observers.
 */
class Reader implements \SplObserver {

  /**
   * Name of the Reader.
   *
   * @var string
   */
  private $name = '';

  /**
   * This method allow set the name of Reader.
   *
   * @param string $name
   *   Name of the reader.
   */
  public function setName($name) {
    $this->name = $name;
  }

  /**
   * Return the name of the reader.
   *
   * @return string
   *   Name of the reader.
   */
  public function getName() {
    return $this->name;
  }

  /**
   * Update current observer.
   *
   * @param SplSubject $subject
   *   Object that contains the notifier.
   */
  public function update(SplSubject $subject) {
    $title = $this->getName() . " there are new contents for you.";
    $long_title = strlen($title) + 4;

    Printer::text("\n\n");
    $this->renderLine('#', $long_title);
    Printer::text("# " . $title . " #\n");
    $this->renderLine('#', $long_title);
    Printer::text("\n");

    $head = FALSE;

    foreach ($subject->getArticlesPublished() as $article) {
      if (!$head) {
        $head = TRUE;
        $this->renderLine('-', 60);
      }

      $this->markupText('Id', $article->getId());
      $this->markupText('Title', $article->getTitle());
      $this->markupText('Content', $article->getContent());

      $this->renderLine('-', 60);
    }
  }

  /**
   * Markup to text that describe the content for the reader.
   *
   * @param string $key
   *   Title of the text.
   * @param mixed $value
   *   Content of the text.
   */
  private function markupText($key, $value) {
    $text = $key . ": " . $value;
    $repeat = str_repeat(" ", (60 - (strlen($text) + 4)));
    Printer::text("| " . $text . $repeat . " |\n");
  }

  /**
   * Allow add lines of the same characters and specific size.
   *
   * @param string $point
   *   Character for the line.
   * @param mixed $size
   *   Size of the line.
   */
  private function renderLine($point, $size) {
    Printer::text(str_repeat($point, $size) . "\n");
  }

}
