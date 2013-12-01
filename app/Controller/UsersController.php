<?
class UsersController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session', 'Auth');

    public function index() {
    }

    public function beforeFilter() {
    	parent::beforeFilter();
    	$this->Auth->allow('index', 'add');
    }

    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
        }
    }

	public function login() {
	    if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	            return $this->redirect($this->Auth->redirectUrl());
	        } else {
	            $this->Session->setFlash(__('Usuario o contraseña incorrecta.'), 'default', array(), 'auth');
	        }
	    }
	}

	public function logout() {
    return $this->redirect($this->Auth->logout());
}
}
?>