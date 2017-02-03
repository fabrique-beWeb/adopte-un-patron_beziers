//<?php

//namespace Utilisateur\Model;

 // Add these import statements
// use Zend\InputFilter\InputFilter;
// use Zend\InputFilter\InputFilterAwareInterface;
// use Zend\InputFilter\InputFilterInterface;

// class Skill implements InputFilterAwareInterface
// {
//	   public $formContrat;
//
//     protected $inputFilter;
//
//     public function exchangeArray($data)
//     {
//       $this->contrat  = (isset($data['contrat']))  ? $data['contrat']  : null;
//     }
//
//     // Add content to these methods:
//     public function setInputFilter(InputFilterInterface $inputFilter)
//     {
//         throw new \Exception("Not used");
//     }
//
//     public function getInputFilter()
//     {
//         if (!$this->inputFilter) {
//             $inputFilter = new InputFilter();
//
//					 	$inputFilter->add(array(
//                 'name'     => 'contratvalidation',
//                 'required' => true,
//                 'filters'  => array(
//                     array('name' => 'StripTags'),
//                     array('name' => 'StringTrim'),
//                 ),
//
//                 'validators' => array(
//                     array(
//                         'name'    => 'StringLength',
//                         'options' => array(
//                             'encoding' => 'UTF-8',
//                             'min'      => 2,
//                             'max'      => 32000,
//                         ),
//                     ),
//                 ),
//             ));
//
//             $this->inputFilter = $inputFilter;
//         }
//
//         return $this->inputFilter;
//
//     }
// }
