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
use \Utilisateur\Entity\Users;

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
    
        $u = array();
        $user = null;
        
        if(!empty($email) and !empty($password)) {
        
            $em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
            $user = $em->getRepository('Utilisateur\Entity\Users')->findOneBy(
                    array('email' => $email, 'password' => sha1($password)));
        }
        return new ViewModel(array('user' => $user));
    }
    
    public function logoutAction()
    {
        return new ViewModel();
    }
    

}
