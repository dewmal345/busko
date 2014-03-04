<?php
App::uses('AppController', 'Controller');
/**
 * Repairs Controller
 *
 * @property Repair $Repair
 * @property PaginatorComponent $Paginator
 */
class RepairsController extends AppController {

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
		$this->Repair->recursive = 0;
		$this->set('repairs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Repair->exists($id)) {
			throw new NotFoundException(__('Invalid repair'));
		}
		$options = array('conditions' => array('Repair.' . $this->Repair->primaryKey => $id));
		$this->set('repair', $this->Repair->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Repair->create();
			if ($this->Repair->save($this->request->data)) {
				$this->Session->setFlash(__('The repair has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The repair could not be saved. Please, try again.'));
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
		if (!$this->Repair->exists($id)) {
			throw new NotFoundException(__('Invalid repair'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Repair->save($this->request->data)) {
				$this->Session->setFlash(__('The repair has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The repair could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Repair.' . $this->Repair->primaryKey => $id));
			$this->request->data = $this->Repair->find('first', $options);
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
		$this->Repair->id = $id;
		if (!$this->Repair->exists()) {
			throw new NotFoundException(__('Invalid repair'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Repair->delete()) {
			$this->Session->setFlash(__('The repair has been deleted.'));
		} else {
			$this->Session->setFlash(__('The repair could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
