<?php

/**
 * Class that alllow map the table to OOP.
 */
class ArticleModel extends Crud {

  /**
   * Table name.
   *
   * @var string
   */
  private $table = 'article';

  /**
   * ArticleModel constructor.
   */
  public function __construct() {
    $this->fields = [
      'id',
      'title',
      'content',
    ];

    parent::__construct($this->table);
  }

}
