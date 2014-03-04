<?php
App::uses('AppController', 'Controller');
/**
 * Buses Controller
 *
 * @property Bus $Bus
 * @property PaginatorComponent $Paginator
 */
class BusesController extends AppController {

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
		$this->Bus->recursive = 0;
		$this->set('buses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Bus->exists($id)) {
			throw new NotFoundException(__('Invalid bus'));
		}
		$options = array('conditions' => array('Bus.' . $this->Bus->primaryKey => $id));
		$this->set('bus', $this->Bus->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Bus->create();
			if ($this->Bus->save($this->request->data)) {
				$this->Session->setFlash(__('The bus has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bus could not be saved. Please, try again.'));
			}
		}
		$branches = $this->Bus->Branch->find('list');
		$this->set(compact('branches'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Bus->exists($id)) {
			throw new NotFoundException(__('Invalid bus'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Bus->save($this->request->data)) {
				$this->Session->setFlash(__('The bus has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bus could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Bus.' . $this->Bus->primaryKey => $id));
			$this->request->data = $this->Bus->find('first', $options);
		}
		$branches = $this->Bus->Branch->find('list');
		$this->set(compact('branches'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Bus->id = $id;
		if (!$this->Bus->exists()) {
			throw new NotFoundException(__('Invalid bus'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Bus->delete()) {
			$this->Session->setFlash(__('The bus has been deleted.'));
		} else {
			$this->Session->setFlash(__('The bus could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
