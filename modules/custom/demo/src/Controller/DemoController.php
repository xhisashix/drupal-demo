<?php
namespace Drupal\demo\Controller;

use Drupal\Core\Controller\ControllerBase;

class DemoController extends ControllerBase
{
    /**
     * return String
     */
    public function index()
    {
      $form = \Drupal::formBuilder()->getForm('Drupal\demo\Form\DemoForm');
        return $form;
    }
}

?>
