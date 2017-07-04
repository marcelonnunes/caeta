<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\Routing\Router;

class AdminController extends AppController{

    public function index(){

    	$this->set('title', 'Home');
    	
//     	prd($this->request->session()->read('Auth.User'));
//     	prd($this->Auth);
    	
    	// Add at the end of the trail
//     	$this->Breadcrumbs->add(
//     			'Products',
//     			['controller' => 'products', 'action' => 'index']
//     			);
    	
//     	$this->Flash->set('ATENÇÃO É i ó í ê ú ', array('element' => 'success') );
    	
//     	$this->Flash->set('The user has been saved.The user has been saved.The user has been saved.', array('element' => 'notice') );
    	
//     	$this->Flash->set('The user has been saved.The user has been saved.The user has been saved.');
    	
    	
    	
    	
    }

    public function usersManager(){
    	
    	$this->set('title', __d('CakeDC/Users','Permissions'));
    	    
    	//Lista dos usuários do sistema
    	$Users= TableRegistry::get('CakeDC/Users.Users');
    	$usuarios = $Users->find('all')->all();
   

// 		prd($usuarios);  
//     	prd(Router::fullBaseUrl());
    	
    	
    	$this->set(compact('usuarios'));
    }
    
    public function ajaxGetRules($user_id = null){
    	
    	$rules = $this->getResources();

    	$this->set(compact('rules'));
    	
    }
    

    /**
     * Conjunto de funções para listar os Controllers e seus Métodos.
     *
     * Return @var array
     */
    private function getResources(){
    	$controllers = $this->getControllers();
    	$resources = [];
    	foreach($controllers as $controller){
    		$actions = $this->getActions($controller);
    		array_push($resources, $actions);
    	}
    	return $resources;
    }
    
    private function getControllers() {
    	$files = scandir('../src/Controller/');
    	$results = [];
    	$ignoreList = [
    			'.',
    			'..',
    			'Component',
    			'AppController.php',
    			'ErrorController.php'
    	];
    	foreach($files as $file){
    		if(!in_array($file, $ignoreList)) {
    			$controller = explode('.', $file)[0];
    			array_push($results, str_replace('Controller', '', $controller));
    		}
    	}
    	return $results;
    }
    
    private function getActions($controllerName) {
    	
    	$className = 'App\\Controller\\'.$controllerName.'Controller';
    	$class = new \ReflectionClass($className);
    	$actions = $class->getMethods(\ReflectionMethod::IS_PUBLIC);
    	$results = [$controllerName => []];
    	$ignoreList = ['beforeFilter', 'afterFilter', 'initialize'];
    	
    	foreach($actions as $action){
    		if($action->class == $className && !in_array($action->name, $ignoreList)){
    			array_push($results[$controllerName], $action->name);
    		}
    	}
    	return $results;
    }
    

}