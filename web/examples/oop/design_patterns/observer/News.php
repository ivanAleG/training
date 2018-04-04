<?php

/**
 * This class has the responsibility of the register and notified all observers.
 */
class News implements \SplSubject {

  /**
   * List of observers related to news.
   *
   * @var array
   */
  private $observers = [];

  /**
   * List of articles related to news.
   *
   * @var array
   */
  private $articles = [];

  /**
   * List of articles to published.
   *
   * @var array
   */
  private $articlesPublished = [];

  /**
   * Add observers to object of Subject type.
   *
   * @param SplObserver $observer
   *   Observer to add.
   */
  public function attach(SplObserver $observer) {
    $this->observers[] = $observer;
  }

  /**
   * Remove observers to object of Subject type.
   *
   * @param SplObserver $observer
   *   Observer to remove.
   */
  public function detach(SplObserver $observer) {
    $key = array_search($observer, $this->observers, TRUE);

    if ($key !== FALSE) {
      unset($this->observers[$key]);
    }
  }

  /**
   * This method encapsulate the trigger the update to all observers.
   */
  public function notify() {
    foreach ($this->observers as $observer) {
      $observer->update($this);
    }
  }

  /**
   * Attach article to news object.
   *
   * @param Article $article
   *   Object of article type.
   */
  public function attachArticle(Article $article) {
    $this->articles[] = $article;
  }

  /**
   * Publish Articles.
   *
   * This method check if Ids exist in the articles related to news and trigger
   * the notify to all Observers.
   *
   * @param array $ids
   *   Ids of articles.
   */
  public function publishArticles(array $ids = []) {
    $this->articlesPublished = [];

    foreach ($ids as $id) {
      foreach ($this->articles as $article) {
        if ($id == $article->getId()) {
          $this->articlesPublished[] = $article;
        }
      }
    }

    if (count($this->articlesPublished) > 0) {
      $this->notify();
    }
  }

  /**
   * Allow Retrieve the articles that will published.
   *
   * @return array
   *   Articles to publish.
   */
  public function getArticlesPublished() {
    return $this->articlesPublished;
  }

}
