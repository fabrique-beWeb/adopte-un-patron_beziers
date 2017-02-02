<?php
namespace Utilisateur\Form;

use Zend\Form\Form;

class SkillForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('SkillForm');
        $this->setAttribute('method', 'post');

        $this->add(array(
      'name' => 'poste',
      'type' => 'textarea',

      'options' => array(
          'label' => 'Intitulé Poste',

      ),
      'attributes' => array(
          'class' => 'form-control',
                          'placeholder' => 'Intitulé du Poste'

      ),
  ));

  $this->add(array(
'name' => 'contrat',
'type' => 'select',

'options' => array(
    'label' => 'Intitulé Poste: Ta maman la catin',

),
'attributes' => array(
    'class' => 'form-control',


),
));


        $this->add(array(
            'name' => 'submit',
            'type' => 'Submit',
            'options' => array(
                'label' => 'Valider',
            ),
            'attributes' => array(
                'value' => 'Valider',
                'class' => 'btn btn-primary'
            ),
        ));
    }
}
