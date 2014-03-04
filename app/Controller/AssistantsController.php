<?php
App::uses('AppController', 'Controller');
/**
 * Assistants Controller
 *
 * @property Assistant $Assistant
 * @property PaginatorComponent $Paginator
 */
class AssistantsController extends AppController {

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
		$this->Assistant->recursive = 0;
		$this->set('assistants', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Assistant->exists($id)) {
			throw new NotFoundException(__('Invalid assistant'));
		}
		$options = array('conditions' => array('Assistant.' . $this->Assistant->primaryKey => $id));
		$this->set('assistant', $this->Assistant->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Assistant->create();
			if ($this->Assistant->save($this->request->data)) {
				$this->Session->setFlash(__('The assistant has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The assistant could not be saved. Please, try again.'));
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
		if (!$this->Assistant->exists($id)) {
			throw new NotFoundException(__('Invalid assistant'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Assistant->save($this->request->data)) {
				$this->Session->setFlash(__('The assistant has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The assistant could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Assistant.' . $this->Assistant->primaryKey => $id));
			$this->request->data = $this->Assistant->find('first', $options);
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
		$this->Assistant->id = $id;
		if (!$this->Assistant->exists()) {
			throw new NotFoundException(__('Invalid assistant'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Assistant->delete()) {
			$this->Session->setFlash(__('The assistant has been deleted.'));
		} else {
			$this->Session->setFlash(__('The assistant could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
