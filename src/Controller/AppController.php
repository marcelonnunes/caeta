<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Core\Configure;
// use Cake\ORM\TableRegistry;
use Cake\Network\Session;


/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        
        /*
         * Enable the following components for recommended CakePHP security settings.
         * see http://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
        
        // CakeDC Users Plugin for CakePHP 3
        $this->loadComponent('CakeDC/Users.UsersAuth');

        $this->set('form_templates', Configure::read('Templates'));
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Network\Response|null|void
     */
    public function beforeRender(Event $event)
    {    	
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
          
        
        //Verifica se existe um usuário logado no sistem para disponibilizar algumas informações na view.
        $session = array();
        if( $this->request->session()->check('Auth.User.id') ){

			$uid = $this->request->session()->read('Auth.User.id');
	
        	$this->loadModel('CakeDC/Users.SocialAccounts');
        	
        	$query = $this->SocialAccounts->find('all')
        		        	        	->where(['SocialAccounts.user_id' => $uid])
        		        	        	->select(['SocialAccounts.avatar']) 
        		        	        	->all()
        		        	        	->first();
        	
			if(!empty($query)){
				$avatar = $query->toArray();
				$this->request->session()->write('Auth.User.avatar',$avatar['avatar']);
			}
			
			$session= $this->request->session()->read('Auth.User');
			
			if(!empty($session['first_name']) && !empty($session['last_name'])){
				$login_name = $session['first_name'].' '.$session['last_name'];
			}elseif (!empty($session['first_name']) && empty($session['last_name'])){
				$login_name =  $session['first_name'];
			}else{
				$login_name = $session['username'];
			}
					
			$this->request->session()->write('Auth.User.login_name',$login_name);
       	}
        	
       	$this->set('session',$session);

    }
}
