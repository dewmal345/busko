<?php
App::uses('AppController', 'Controller');
/**
 * Drives Controller
 *
 * @property Drive $Drive
 * @property PaginatorComponent $Paginator
 */
class DrivesController extends AppController {

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
		$this->Drive->recursive = 0;
		$this->set('drives', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Drive->exists($id)) {
			throw new NotFoundException(__('Invalid drive'));
		}
		$options = array('conditions' => array('Drive.' . $this->Drive->primaryKey => $id));
		$this->set('drive', $this->Drive->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Drive->create();
			if ($this->Drive->save($this->request->data)) {
				$this->Session->setFlash(__('The drive has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The drive could not be saved. Please, try again.'));
			}
		}
		$drivers = $this->Drive->Driver->find('list');
		$assistants = $this->Drive->Assistant->find('list');
		$this->set(compact('drivers', 'assistants'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Drive->exists($id)) {
			throw new NotFoundException(__('Invalid drive'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Drive->save($this->request->data)) {
				$this->Session->setFlash(__('The drive has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The drive could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Drive.' . $this->Drive->primaryKey => $id));
			$this->request->data = $this->Drive->find('first', $options);
		}
		$drivers = $this->Drive->Driver->find('list');
		$assistants = $this->Drive->Assistant->find('list');
		$this->set(compact('drivers', 'assistants'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Drive->id = $id;
		if (!$this->Drive->exists()) {
			throw new NotFoundException(__('Invalid drive'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Drive->delete()) {
			$this->Session->setFlash(__('The drive has been deleted.'));
		} else {
			$this->Session->setFlash(__('The drive could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
