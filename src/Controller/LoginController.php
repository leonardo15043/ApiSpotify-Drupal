<?php

/**
 * @file
 * Contains \Drupal\spotify\Controller\LoginController.
 */

namespace Drupal\spotify\Controller;

class LoginController {
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Pantalla de inicio'),
    );
  }
}
