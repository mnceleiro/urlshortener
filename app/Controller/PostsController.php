<?
class PostsController extends AppController {
    public $helpers = array('Html', 'Form');
    public $components = array('Session');
    public $name = 'Posts';

    public function index() {
         $this->set('posts', $this->Post->find('all'));
         print_r($posts);
    }

    public function view($id = null) {
        $this->Post->id = $id;
        $this->set('post', $this->Post->read());
    }

    public function add() {
    	debug($this->request->data);
        if ($this->request->is('post')) {
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash('Your post has been saved.');
                $this->redirect(array('controller' => 'posts' ,'action' => 'index'));
            }
        }
	}
	
	function edit($id = null) {
	//$this->render = 'ghjgj';
		$this->Post->id = $id;
		if ($this->request->is('get')) {
		    //$this->request->data = $this->Post->read();
		    $this->request->data = $this->Post->find('first', array(
		    	'conditions' => array(
		    		'id =' => $id
		    		)
    		));
		} else {
		    if ($this->Post->save($this->request->data)) {
		        $this->Session->setFlash('Your post has been updated.');
		        $this->redirect(array('action' => 'index'));
		    }
		}
	}

    function delete($id = null) {
        $this->Post->id = $id;
        $this->Post->delete($this->Post->id);
        $this->Session->setFlash('Your post has been removed.');
        $this->redirect(array('controller' => 'posts', 'action' => 'index'));
    }
}

?>
