<?php

/**
 * @file
 * Contains Drupal\study\EventSubscriber\ContentSubscriber.
 */

namespace Drupal\study\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Drupal\page_example\Controller\PageEvent;

class ContentSubscriber implements EventSubscriberInterface {

  static function getSubscribedEvents() {
    $events['simple_page_load'][] = array('updateContent', 0);
    return $events;
  }

  public function updateContent(PageEvent $event) {
    $event->setContent('This is set from File ' . __FILE__);
  }

}