<?php
App::uses('AppController', 'Controller');
/**
 * Birds Controller
 *
 * @property Bird $Bird
 * @property PaginatorComponent $Paginator
 */
class BirdsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Bird->recursive = 0;
		$this->set('birds', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Bird->exists($id)) {
			throw new NotFoundException(__('Invalid bird'));
		}
		$options = array('conditions' => array('Bird.' . $this->Bird->primaryKey => $id));
		$this->set('bird', $this->Bird->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Bird->create();
			if ($this->Bird->save($this->request->data)) {
				$this->Session->setFlash(__('The bird has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bird could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Bird->exists($id)) {
			throw new NotFoundException(__('Invalid bird'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Bird->save($this->request->data)) {
				$this->Session->setFlash(__('The bird has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bird could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Bird.' . $this->Bird->primaryKey => $id));
			$this->request->data = $this->Bird->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Bird->id = $id;
		if (!$this->Bird->exists()) {
			throw new NotFoundException(__('Invalid bird'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Bird->delete()) {
			$this->Session->setFlash(__('The bird has been deleted.'));
		} else {
			$this->Session->setFlash(__('The bird could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
