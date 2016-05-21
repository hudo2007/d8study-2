<?php

namespace Drupal\study\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class StudyConfig.
 *
 * @package Drupal\study\Form
 */
class StudyConfig extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'study.studyconfig',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'study_config';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('study.studyconfig');
    $form['name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Name'),
      '#description' => $this->t('Input your Name'),
      '#maxlength' => 64,
      '#size' => 64,
      '#default_value' => $config->get('name'),
    ];
    $form['age'] = [
      '#type' => 'select',
      '#title' => $this->t('Age'),
      '#description' => $this->t('Select your Age group'),
      '#options' => array('0-2' => $this->t('0-2'), '2-18' => $this->t('2-18'), '18-25' => $this->t('18-25'), '25-35' => $this->t('25-35'), '35-50' => $this->t('35-50'), '50-60' => $this->t('50-60'), '60+' => $this->t('60+')),
      '#size' => 1,
      '#default_value' => $config->get('age'),
    ];
    $form['gender'] = [
      '#type' => 'radios',
      '#title' => $this->t('Gender'),
      '#description' => $this->t('Select your gender'),
      '#options' => array('male' => $this->t('male'), 'female' => $this->t('female')),
      '#default_value' => $config->get('gender'),
    ];
    return parent::buildForm($form, $form_state);
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
    parent::submitForm($form, $form_state);

    $this->config('study.studyconfig')
      ->set('name', $form_state->getValue('name'))
      ->set('age', $form_state->getValue('age'))
      ->set('gender', $form_state->getValue('gender'))
      ->save();
  }

}
