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
use Utilisateur\Entity\Users;
use Zend\Session\Container;

class LoginController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
    
    public function loginAction()
    {
        $email = Requests::vars('post', 'email', 'email', true);
        $password = Requests::vars('post', 'string', 'password', false);
    
        $user = null;
        $session = new Container('user');
        
        if(!empty($email) and !empty($password)) {
        
            $em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
            $user = $em->getRepository('Utilisateur\Entity\Users')->findOneBy(
                    array('email' => $email, 'password' => sha1($password)));
            
            if (!empty($user)) {
                
                $session->offsetSet('id', $user->getId());
                $session->offsetSet('email', $user->getEmail());
                $session->offsetSet('type', $user->getType());
            }
        }
        return new ViewModel(array('user' => $user, 'session' => $session));
    }
    
    public function logoutAction()
    {
        $session = new Container('user');
        $session->getManager()->getStorage()->clear('user');
        return new ViewModel();
    }
    

}
