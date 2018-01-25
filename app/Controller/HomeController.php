<?php
App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class HomeController extends AppController {
	public function index() {
// 		$a = array(100,290,380,480);
// 		$k = array_rand($a);
// 		$v = $a[$k];
// 		print_r($k);
// 		echo $v;
		
// 		$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
// 		$rand_keys = array_rand($input, 2);
// 		echo $input[$rand_keys[0]] . "\n";
// 		echo $input[$rand_keys[1]] . "\n";

		$connection = new MongoClient();
		$collection = $connection->database->user;

		$prize1 = $collection->find(array('prize' => 1));
		$arr1 = array();
		foreach ( $prize1 as $v)
		{
			$arr1[] = $v;
		}
		
		$prize2 = $collection->find(array('prize' => 2));
		$arr2 = array();
		foreach ( $prize2 as $v)
		{
			$arr2[] = $v;
		}
		
		$prize3 = $collection->find(array('prize' => 3));
		$arr3 = array();
		foreach ( $prize3 as $v)
		{
			$arr3[] = $v;
		}
		
		$prize4 = $collection->find(array('prize' => 4));
		$arr4 = array();
		foreach ( $prize4 as $v)
		{
			$arr4[] = $v;
		}
		
		$prize5 = $collection->find(array('prize' => 5));
		$arr5 = array();
		foreach ( $prize5 as $v)
		{
			$arr5[] = $v;
		}
		
		$prize6 = $collection->find(array('prize' => 6));
		$arr6 = array();
		foreach ( $prize6 as $v)
		{
			$arr6[] = $v;
		}
		
	
		$this->set("prize1", $arr1);
		$this->set("prize2", $arr2);
		$this->set("prize3", $arr3);
		$this->set("prize4", $arr4);
		$this->set("prize5", $arr5);
		$this->set("prize6", $arr6);
	}
	
	public function detail($id = null) {
// 		$this->layout = false;
		if (!$id) {
			$this->redirect(array('action' => 'index'));
		}
		
		if ($id == 1) {
			$tittle = "Giải Nhất";
		} elseif ($id == 2) {
			$tittle = "Giải Nhì";
		} elseif ($id == 3) {
			$tittle = "Giải Ba";
		}elseif ($id == 4) {
			$tittle = "Giải Tư";
		}elseif ($id == 5) {
			$tittle = "Giải Khuyến Khích";
		}elseif ($id == 6) {
			$tittle = "Giải Đặc Biệt";
		}
		else {
			$this->redirect(array('action' => 'index'));
		}
		
		$connection = new MongoClient();
		$collection = $connection->database->user;
		$cursor = $collection->find(array('prize' => 0));

		$list = array();
		foreach ( $cursor as $k => $value )
		{
			$list[] = $value;
		}


		
		
		$this->set("list", $list);
		$this->_setJsVar('list',$list);
		$this->_setJsVar('id',$id);
		
		$this->set("tittle", $tittle);
		
		
	}
	
	public function add() {
		if ($this->request->is('post')) {
			if (!empty($this->request->data['name']) && !empty($this->request->data['num'])) {
				$arr = array(	
					'name' => $this->request->data['name'],
					'code' => $this->request->data['num'],
					'prize' => 0
						
				);
				$connection = new MongoClient();
				$collection = $connection->database->user;
				
				$collection->insert( $arr );
			}
		}
	}
	
	public function prize () {
		$this->layout = false;
		$this->autoRender = false;
		
		if (isset($this->request->data) && !empty($this->request->data)) {
			$data = $this->request->data;
			
			$connection = new MongoClient();
			$collection = $connection->database->user;
			$a = $collection->update(
			    array('_id' => new MongoId($data['user']['_id']['$id'])),
			    array('$set' => array('prize' => intval($data['id'])))
			);
			
			return 1;
		}
		return 0;
	}
	
	public function reset() {
		$connection = new MongoClient();
		$collection = $connection->database->user;
		$a = $collection->update(
				array(),
				array('$set' => array('prize' => 0),
						
				),
				array('multiple' => true)
				);
		$this->redirect(array('action' => 'index'));
	}
}