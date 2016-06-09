<?php

namespace Drupal\study_composer\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class DefaultSubscriber.
 *
 * @package Drupal\study_composer
 */
class DefaultSubscriber implements EventSubscriberInterface {


  /**
   * Constructor.
   */
  public function __construct() {

  }

  /**
   * {@inheritdoc}
   */
  static function getSubscribedEvents() {
    $events['simple_page_load'] = ['updateContent'];

    return $events;
  }

  /**
   * This method is called whenever the simple_page_load event is
   * dispatched.
   *
   * @param GetResponseEvent $event
   */
  public function updateContent(Event $event) {
    $event->setContent('This is set from File ' . __FILE__);
    drupal_set_message('Event simple_page_load thrown by Subscriber in module study_composer.', 'status', TRUE);
  }

}
