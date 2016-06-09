<?php

namespace Drupal\study_composer\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

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
    $events[KernelEvents::RESPONSE][] = array('addAccessAllowOriginHeaders');
    return $events;
  }

  public function addAccessAllowOriginHeaders(FilterResponseEvent $event) {
    $response= $event->getResponse();
    $response->headers->set('X-Frame-Options', 'Deny');
  }

}
