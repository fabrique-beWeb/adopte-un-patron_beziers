<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonCandidat for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Utilisateur\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Form\Factory;
use Utilisateur\Quantum\Requests;
use Zend\Session\Container;
use Utilisateur\Model\Login;


class ProfileController extends AbstractActionController
{
    public function indexAction()
    {

        $session = new Container('user');
        $userID = null;

        if ($session->offsetExists('id') and !empty($session->offsetGet('id'))) {
            // recupération des info sur la BDD
            $em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
            $userID = $em->getRepository('Utilisateur\Entity\Users')->findOneBy(
                                        array('id' => $session->offsetGet('id')));
        }


        return new ViewModel(array('user' => $userID));

    }

    public function editAction()
    {


        // if ($request->isPost()) {
        //     $loginInfo = new Login();
        //     $form->setInputFilter($loginInfo->getInputFilter());
        //     $form->setData($request->getPost());

        $session = new Container('user');
        $userID = null;

        if ($session->offsetExists('id') and !empty($session->offsetGet('id'))) {
            // recupération des info sur la BDD
            $em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
            $userID = $em->getRepository('Utilisateur\Entity\Users')->findOneBy(
                                        array('id' => $session->offsetGet('id')));
        }


        return new ViewModel(array('user' => $userID));
    }


}
