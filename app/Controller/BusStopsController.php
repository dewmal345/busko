<?php
App::uses('AppController', 'Controller');
/**
 * BusStops Controller
 *
 * @property BusStop $BusStop
 * @property PaginatorComponent $Paginator
 */
class BusStopsController extends AppController {

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
		$this->BusStop->recursive = 0;
		$this->set('busStops', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->BusStop->exists($id)) {
			throw new NotFoundException(__('Invalid bus stop'));
		}
		$options = array('conditions' => array('BusStop.' . $this->BusStop->primaryKey => $id));
		$this->set('busStop', $this->BusStop->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BusStop->create();
			if ($this->BusStop->save($this->request->data)) {
				$this->Session->setFlash(__('The bus stop has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bus stop could not be saved. Please, try again.'));
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
		if (!$this->BusStop->exists($id)) {
			throw new NotFoundException(__('Invalid bus stop'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->BusStop->save($this->request->data)) {
				$this->Session->setFlash(__('The bus stop has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bus stop could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('BusStop.' . $this->BusStop->primaryKey => $id));
			$this->request->data = $this->BusStop->find('first', $options);
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
		$this->BusStop->id = $id;
		if (!$this->BusStop->exists()) {
			throw new NotFoundException(__('Invalid bus stop'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BusStop->delete()) {
			$this->Session->setFlash(__('The bus stop has been deleted.'));
		} else {
			$this->Session->setFlash(__('The bus stop could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
