<?php

namespace Drupal\online_tool_map\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * An example controller.
 */
class OnlineToolMapController extends ControllerBase {

  /**
   * Returns a render-able array for a test page.
   */
  public function content() {
      return [
        '#theme' => 'online_tool_map',
        '#template' => 'online-tool-map'
      ];
  }
}