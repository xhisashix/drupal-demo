<?php

namespace Drupal\demo\Plugins\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provide a simple block.
 *
 * @Block(
 * id= "demo_block",
 * admin_label = @Translation("Demo Block")
 * )
 */
class DemoBlock extends BlockBase {

  /**
   * {@inheritBoc}
   */
  public function build()
  {
    return ["#markup" => $this->t("Test")];
  }
}

?>
