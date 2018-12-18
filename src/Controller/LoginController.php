<?php

/**
 * @file
 * Contains \Drupal\spotify\Controller\LoginController.
 */

namespace Drupal\spotify\Controller;

use Drupal\spotify\Api\SpotifyWebAPIAuthException;
use Drupal\spotify\Api\SpotifyWebAPIException;
use Drupal\spotify\Api\SpotifyWebAPI;
use Drupal\spotify\Api\Session;
use Drupal\spotify\Api\Request;
use Drupal\Core\Routing\TrustedRedirectResponse;
use Drupal\Core\Url;

class LoginController {

  private $access;
  private $session;

  public function __construct(){

    $this->access = new Session(
        '7de446abfd16485fb6a769baab33f20c',
        '11de64c2379e46f2a458b925865c21b9',
        'http://localhost:8888/drupal/authentication'
      );

    $this->session = \Drupal::request()->getSession();

  }

  public function keyUrl() {

    $scopes = array(
      'user-read-email',
      'user-read-private'
    );

    $authorizeUrl = $this->access->getAuthorizeUrl( array(
     'scope' => $scopes
    ));

    return new TrustedRedirectResponse($authorizeUrl);

  }

}
