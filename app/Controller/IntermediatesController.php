<?php
App::uses('AppController', 'Controller');
/**
 * Intermediates Controller
 *
 * @property Intermediate $Intermediate
 * @property PaginatorComponent $Paginator
 */
class IntermediatesController extends AppController {

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
		$this->Intermediate->recursive = 0;
		$this->set('intermediates', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Intermediate->exists($id)) {
			throw new NotFoundException(__('Invalid intermediate'));
		}
		$options = array('conditions' => array('Intermediate.' . $this->Intermediate->primaryKey => $id));
		$this->set('intermediate', $this->Intermediate->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Intermediate->create();
			if ($this->Intermediate->save($this->request->data)) {
				$this->Session->setFlash(__('The intermediate has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The intermediate could not be saved. Please, try again.'));
			}
		}
		$routes = $this->Intermediate->Route->find('list');
		$this->set(compact('routes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Intermediate->exists($id)) {
			throw new NotFoundException(__('Invalid intermediate'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Intermediate->save($this->request->data)) {
				$this->Session->setFlash(__('The intermediate has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The intermediate could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Intermediate.' . $this->Intermediate->primaryKey => $id));
			$this->request->data = $this->Intermediate->find('first', $options);
		}
		$routes = $this->Intermediate->Route->find('list');
		$this->set(compact('routes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Intermediate->id = $id;
		if (!$this->Intermediate->exists()) {
			throw new NotFoundException(__('Invalid intermediate'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Intermediate->delete()) {
			$this->Session->setFlash(__('The intermediate has been deleted.'));
		} else {
			$this->Session->setFlash(__('The intermediate could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
