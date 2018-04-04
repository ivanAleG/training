<?php

/**
 * Triangle shape.
 */
class Triangle implements ShapeInterface {

  /**
   * {@inheritdoc}
   */
  public function area() {
    Printer::text("\nCalculate triangle's area.\n");
  }

  /**
   * {@inheritdoc}
   */
  public function draw() {
    Printer::text("\nDraw triangle.\n");
  }

}
