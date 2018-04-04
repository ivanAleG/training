<?php

/**
 * The class article allow create content for news.
 */
class Article {

  /**
   * Identifier of the article.
   *
   * @var mixed
   */
  private $id;

  /**
   * Stored the title of the article.
   *
   * @var string
   */
  private $title = '';

  /**
   * Stored the content of the article.
   *
   * @var string
   */
  private $content = '';

  /**
   * Allow set the id of the article.
   *
   * @param int $id
   *   Value for the id.
   */
  public function setId($id) {
    $this->id = $id;
  }

  /**
   * Allow set the title of the article.
   *
   * @param string $title
   *   Value for the title.
   */
  public function setTitle($title) {
    $this->title = $title;
  }

  /**
   * Allow set the content of the article.
   *
   * @param string $content
   *   Value for the content.
   */
  public function setContent($content) {
    $this->content = $content;
  }

  /**
   * Allow retrieve the id of the article.
   *
   * @return mixed
   *   Value of id class property
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Allow retrieve the content of the article.
   *
   * @return string
   *   Value of title class property
   */
  public function getTitle() {
    return $this->title;
  }

  /**
   * Allow retrieve the content of the article.
   *
   * @return string
   *   Value of content class property
   */
  public function getContent() {
    return $this->content;
  }

}
