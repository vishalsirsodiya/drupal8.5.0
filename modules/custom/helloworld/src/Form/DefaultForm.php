<?php

namespace Drupal\helloworld\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class DefaultForm.
 */
class DefaultForm extends FormBase {


  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'default_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['conference_name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Conference Name'),
      '#description' => $this->t('Name of openmeeting conference'),
      '#maxlength' => 64,
      '#size' => 64,
      '#default_value' => '',
      '#weight' => '0',
    ];
    $form['description'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Description'),
      '#description' => $this->t('Openmeetings Descriptionl'),
      '#weight' => '0',
    ];
    $form['conference_type'] = [
      '#type' => 'select',
      '#title' => $this->t('Conference Type'),
      '#description' => $this->t('Openmeetings conference type'),
      '#options' => ['Conference' => $this->t('Conference')],
      '#size' => 1,
      '#default_value' => 50,
      '#weight' => '0',
    ];
    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Display result.
    foreach ($form_state->getValues() as $key => $value) {
      drupal_set_message($key . ': ' . $value);
    }

  }

}
