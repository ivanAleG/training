<?php

/**
 * Circle shape.
 */
class Circle implements ShapeInterface {

  /**
   * {@inheritdoc}
   */
  public function area() {
    Printer::text("\nCalculate circle's area.\n");
  }

  /**
   * {@inheritdoc}
   */
  public function draw() {
    Printer::text("\nDraw Circle.\n");
  }

}
