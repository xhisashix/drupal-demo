<?php
namespace Drupal\demo\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class DemoForm extends FormBase
{
    /**
     * {@inheritDoc}
     */
    public function getFormId()
    {
        return 'demo_form';
    }

    /**
     * {@inheritDoc}
     */
    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $form['name'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Your name please.'),
        ];
        $form['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('Save'),
        ];
        return $form;
    }

    /**
     * {@inheritDoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        $this->messenger()->addStatus(
            $this->t('Your name is @name', [
                '@name' => $form_state->getValue('name'),
            ])
        );
    }
}
