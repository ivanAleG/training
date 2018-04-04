<?php

/**
 * Structure base to any shape.
 */
interface ShapeInterface {

  /**
   * Calculate the area of the shape.
   */
  public function area();

  /**
   * Render area of the shape.
   */
  public function draw();

}
