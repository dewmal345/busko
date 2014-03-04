<?php
App::uses('AppController', 'Controller');
/**
 * EmployeePhones Controller
 *
 * @property EmployeePhone $EmployeePhone
 * @property PaginatorComponent $Paginator
 */
class EmployeePhonesController extends AppController {

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
		$this->EmployeePhone->recursive = 0;
		$this->set('employeePhones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EmployeePhone->exists($id)) {
			throw new NotFoundException(__('Invalid employee phone'));
		}
		$options = array('conditions' => array('EmployeePhone.' . $this->EmployeePhone->primaryKey => $id));
		$this->set('employeePhone', $this->EmployeePhone->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EmployeePhone->create();
			if ($this->EmployeePhone->save($this->request->data)) {
				$this->Session->setFlash(__('The employee phone has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employee phone could not be saved. Please, try again.'));
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
		if (!$this->EmployeePhone->exists($id)) {
			throw new NotFoundException(__('Invalid employee phone'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EmployeePhone->save($this->request->data)) {
				$this->Session->setFlash(__('The employee phone has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employee phone could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EmployeePhone.' . $this->EmployeePhone->primaryKey => $id));
			$this->request->data = $this->EmployeePhone->find('first', $options);
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
		$this->EmployeePhone->id = $id;
		if (!$this->EmployeePhone->exists()) {
			throw new NotFoundException(__('Invalid employee phone'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EmployeePhone->delete()) {
			$this->Session->setFlash(__('The employee phone has been deleted.'));
		} else {
			$this->Session->setFlash(__('The employee phone could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
