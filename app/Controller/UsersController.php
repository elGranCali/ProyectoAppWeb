<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect(array('controller' => 'pages', 'action' => 'display', 'home'));
            }
            $this->Session->setFlash(__('Su combinación nombreUsuario/contraseña es incorrecto, intentelo de nuevo'));
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }


    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow(array('add'));
    }
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Usuario inválido'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('El usuario ha sido guardado.'));
				return $this->redirect(array('action' => 'login'));
			} else {
				$this->Session->setFlash(__('El usuario no ha sido guardado. Por favor, intente de nuevo.'));
			}
		}
		$categories = $this->User->Category->find('list');
		$this->set(compact('categories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Usuario inválido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('El usuario ha sido guardado.'));
				return $this->redirect(array('controller' => 'pages', 'action' => 'display', 'home'));
			} else {
				$this->Session->setFlash(__('El usuario no ha sido guardado. Por favor, intente de nuevo.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$categories = $this->User->Category->find('list');
		$this->set(compact('categories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Usuario inválido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('El usuario ha sido borrado.'));
		} else {
			$this->Session->setFlash(__('El usuario no se ha borrado. Por favo intente de nuevo.'));
		}
		return $this->redirect(array('controller' => 'pages', 'action' => 'display', 'home'));
	}
}
