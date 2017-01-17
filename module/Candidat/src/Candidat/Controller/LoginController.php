<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonCandidat for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Candidat\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Db\TableGateway\TableGateway;

class LoginController extends AbstractActionController
{
    protected $albumTable;
     
    public function indexAction()
    {
        return new ViewModel(array(
             'users' => $this->getUsersTable()->fetchAll(),
         ));
    }
    
    public function loginAction()
    {
        
        
        return new ViewModel();
    }
    
    public function logoutAction()
    {
        return new ViewModel();
    }
    
    public function getUsersTable()
    {
        if (!$this->albumTable) {
            $sm = $this->getServiceLocator();
            $this->albumTable = $sm->get('Candidat\Model\UsersTable');
        }
        return $this->albumTable;
    }
}
