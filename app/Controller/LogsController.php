<?php
App::uses('AppController', 'Controller');
/**
 * Logs Controller
 *
 * @property Log $Log
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class LogsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Log->recursive = 0;
		$this->set('logs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Log->exists($id)) {
			throw new NotFoundException(__('Invalid log'));
		}
		$options = array('conditions' => array('Log.' . $this->Log->primaryKey => $id));
		$this->set('log', $this->Log->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Log->create();
			if ($this->Log->save($this->request->data)) {
				$this->Session->setFlash(__('The log has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The log could not be saved. Please, try again.'));
			}
		}
		$stations = $this->Log->Station->find('list');
		$this->set(compact('stations'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Log->exists($id)) {
			throw new NotFoundException(__('Invalid log'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Log->save($this->request->data)) {
				$this->Session->setFlash(__('The log has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The log could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Log.' . $this->Log->primaryKey => $id));
			$this->request->data = $this->Log->find('first', $options);
		}
		$stations = $this->Log->Station->find('list');
		$this->set(compact('stations'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Log->id = $id;
		if (!$this->Log->exists()) {
			throw new NotFoundException(__('Invalid log'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Log->delete()) {
			$this->Session->setFlash(__('The log has been deleted.'));
		} else {
			$this->Session->setFlash(__('The log could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
