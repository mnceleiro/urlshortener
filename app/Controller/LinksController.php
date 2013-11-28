<?php

class LinksController extends AppController {
    public $helpers = array('Html', 'Form');
    public $components = array('Session');
    public $name = 'Links';

    public function index() {
    }

    public function showHistory() {
        $this->set('links', $this->Link->find('all'));
    }
    // public function add($id = null) {
    // 	if ($this->request->is('link')) {
    //         $this->request->data = $this->Link->find('first', array(
    //             'conditions' => array('id =' => $id)
    //             )) {
    //                 $this->Link->save($this->request->data);
    //         }
    // 		$this->Link->save('Your link has been saved.');
    // 	}
    // }

    private function get($id = null) {
        
    }
}

?>