<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Room extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
    

    public function roomAssign($page=null, $room_number=0) {
		
			if ($this->input->post()){
				
                $params = array(
                    'room_number' => $this->input->post('room_number'),
                    'status' => $this->input->post('status'),
                    'access_key' => $this->input->post('access_key'),
                    'startdate' => $this->input->post('startdate'),
                    'enddate' => $this->input->post('enddate'),
                );
                
                $roomkey_id = $this->Roomkey_model->add_roomkey($params);
			}
			if ($page == "add") {
			
				$this->load->view('header');
				$this->load->view('room/room_add');
				$this->load->view('footer');
			} elseif ($page == "edit") {
				
				$data['roomkey'] = $this->Roomkey_model->get_roomkey($room_number);
				$this->load->view('header');
				$this->load->view('room/room_edit', $data);
				$this->load->view('footer');
			}else if($page == "view") {
				$data['roomkey'] = $this->Roomkey_model->get_roomkey($room_number);

				$this->load->view('header');
				$this->load->view('room/room_view', $data);
				$this->load->view('footer');
			} else {
				$data['roomkey'] = $this->Roomkey_model->get_all_roomkeys();
				$this->load->view('header');
				$this->load->view('room/room_index', $data);
				$this->load->view('footer');
			} 	
		
	}
}