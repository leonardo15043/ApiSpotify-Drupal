<?php
namespace Drupal\spotify\Plugin\Block;

use Drupal\spotify\Api\SpotifyWebAPIAuthException;
use Drupal\spotify\Api\SpotifyWebAPIException;
use Drupal\spotify\Api\SpotifyWebAPI;
use Drupal\spotify\Api\Session;
use Drupal\spotify\Api\Request;
use Drupal\Core\Block\BlockBase;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Provides a 'Playlist' Block.
 *
 * @Block(
 *   id = "Playlist_block",
 *   admin_label = @Translation("Playlist Spotify"),
 *   category = @Translation("Spotify")
 * )
 */

class PlaylistBlock extends BlockBase {

    public function build() {

      $session = \Drupal::request()->getSession();
      $api = new SpotifyWebAPI();
      $accessToken = $session->get('accessToken');
      $api->setAccessToken($accessToken);

      if(!$session->get('accessToken')){
         return new RedirectResponse(\Drupal::url('spotify.login'));
      }

      $node = \Drupal::routeMatch()->getParameter('node');
      $field =  $node->get('field_id_categoria');
      $category = $field->getValue();
      $category = $category[0]['value'];
      $valueCategory = $api->getCategoryPlaylists($category);

      if(isset($valueCategory)){
        $results = array(
          '#theme' => 'spotify_playlist',
          '#list' => $valueCategory->playlists->items,
          '#cache' => [
           'max-age' => 0,
          ]
        );
      }else{
        $results = drupal_set_message("Esta categoria no tiene playlist", "error");
      }

      return $results;

    }

}
