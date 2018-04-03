<?php

namespace Drupal\om\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class OmController.
 */
class OmController extends ControllerBase {

  /**
   * Om_test.
   *
   * @return string
   *   Return Hello string.
   */
  public function om_test() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: om_test')
    ];
  }

}
