<?php

/**
 * @file
 * Contains Drupal\page_example\Controller\PageEvent.
 */

namespace Drupal\page_example\Controller;

use Symfony\Component\EventDispatcher\Event;
use Drupal\Core\Config\Config;

class PageEvent extends Event {

  protected $content;

  /**
   * Constructor.
   *
   * @param Config $config
   */
  public function __construct($content) {
    $this->content = $content;
  }

  /**
   * Getter for the config object.
   *
   * @return Config
   */
  public function getContent() {
    return $this->content;
  }

  /**
   * Setter for the config object.
   *
   * @param $config
   */
  public function setContent($content) {
    $this->config = $content;
  }

}
