<?php
namespace Drupal\online_tool_map\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a custom block.
 *
 * @Block(
 *   id = "onlinetoolmap_block",
 *   admin_label = @Translation("onlinetoolmap"),
 *   category = @Translation("Custom")
 * )
 */
class OnlineToolMap extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    // Create the render array for your block content.
    $content = [
      '#theme' => 'online_tool_map', // Replace with your template name.
      '#variable_name' => 'null', // Pass variables to the template if needed.
    ];

    return $content;
  }

}
