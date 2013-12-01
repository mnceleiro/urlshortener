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

    public function add($length = 5, $uc = TRUE, $n = TRUE, $sc = FALSE) {
        $source = 'abcdefghijklmnopqrstuvwxyz';
        if ($uc == 1)
            $source .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        if ($n == 1)
            $source .= '1234567890';
        if ($sc == 1)
            $source .= '|@#~$%()=^*+[]{}-_';
        if ($length > 0) {
            $rstr = "";
            $source = str_split($source, 1);
            for ($i = 1; $i <= $length; $i++) {
            mt_srand((double) microtime() * 1000000);
            $num = mt_rand(1, count($source));
            $rstr .= $source[$num - 1];
            }
        }
        $fechaHoy=date('Y-m-d');
        $usuario=$this->Auth->user();
        $usuarioActual=$usuario['id'];
        

        if ($this->request->is('post')) {
            $this->Link->create();
            if($this->Link->save(array("user_id"=>$usuarioActual,"linkLargo"=>$this->data['Link']['linkLargo'],"linkCorto"=>$rstr,"fechaCreac"=>$fechaHoy,"nombreLink"=>$this->data['Link']['nombreLink']))){
            $this->Session->setFlash(__($rstr));
            $this->redirect(array('controller'=>'links','action' => 'index',$rstr));
            } else {
            $this->Session->setFlash(__('El usuario no pudo ser guardado. Por favor, inténtelo de nuevo.'));
            }
        }
    }
    
    private function get($id = null) {
        
    }
}

?>