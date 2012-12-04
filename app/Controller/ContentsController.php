<?php
class ContentsController extends AppController {
	
	var $name = 'Contents';
	
	function index() {

		$this->set('contents', $this->Content->find('all'));

	}
	
	function add() {

    	if (!empty($this->data)) {
			if ($this->Content->save($this->data)) {
				$this->flash('element sauvegarde , cliquez ici pour retourner a la page d\'acceuil.','/');
			}
		}

    }
	
	function delete($id) {

    		$this->Content->delete($id);
			$this->flash('L\' entre avec l\'id: '.$id.' a été supprimé , cliquez ici pour retourner a la page d\'acceuil.', '/');

	}
	
	function edit($id = null) {

			if (empty($this->data)) {
				$this->Content->id = $id;
				$this->data = $this->Content->read();
			} else {
				if ($this->Content->save($this->data['Content'])) {
				$this->flash('Votre post a été mis à jour , cliquez ici pour retourner a la page d\'acceuil.','/');
				}
			}
	}
	

	
}
?>