<?php
App::uses('AppController', 'Controller');
/**
 * Journeys Controller
 *
 * @property Journey $Journey
 * @property PaginatorComponent $Paginator
 */
class JourneysController extends AppController {

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
		$this->Journey->recursive = 0;
		$this->set('journeys', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Journey->exists($id)) {
			throw new NotFoundException(__('Invalid journey'));
		}
		$options = array('conditions' => array('Journey.' . $this->Journey->primaryKey => $id));
		$this->set('journey', $this->Journey->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Journey->create();
			if ($this->Journey->save($this->request->data)) {
				$this->Session->setFlash(__('The journey has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The journey could not be saved. Please, try again.'));
			}
		}
		$routes = $this->Journey->Route->find('list');
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
		if (!$this->Journey->exists($id)) {
			throw new NotFoundException(__('Invalid journey'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Journey->save($this->request->data)) {
				$this->Session->setFlash(__('The journey has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The journey could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Journey.' . $this->Journey->primaryKey => $id));
			$this->request->data = $this->Journey->find('first', $options);
		}
		$routes = $this->Journey->Route->find('list');
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
		$this->Journey->id = $id;
		if (!$this->Journey->exists()) {
			throw new NotFoundException(__('Invalid journey'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Journey->delete()) {
			$this->Session->setFlash(__('The journey has been deleted.'));
		} else {
			$this->Session->setFlash(__('The journey could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
