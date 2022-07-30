<!--
	@author maneesh
 -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$userid = $this->session->userdata('userid');
		$roleid = $this->session->userdata('user_role');
		if (!( $userid )) {

			$this->load->model('welcome_message');

		}elseif ($roleid == 1) {

			$this->load->model('queries');
			$records = $this->queries->getPosts();
			$this->load->view('dashboard_view', ['records' =>$records ]);

		}else{

			$this->load->model('queries');
			$records = $this->queries->getPosts();
			$this->load->view('subscribers_view', ['records' =>$records ]);
		}

	}

	public function addPost(){
		$userid = $this->session->userdata('userid');

		if (!$userid) {
			return redirect('welcome');
		}

		$this->load->view('addPost_view');
	}

//with image upload****************************************************************************

	// public function publishPost(){
		// $config = [
		// 	'upload_path' => './uploads',
		// 	'allowed_types' => 'gif|jpg|png|jpeg',
		// ];

	// 	$config['upload_path']    = FCPATH . './uploads/';
 //        $config['allowed_types']  = 'gif|jpg|png|jpeg';

	// 	$this->load->library('upload', $config);
	// 	$this->form_validation->set_rules('title','Post Title', 'required');
	// 	$this->form_validation->set_rules('description','Post Description', 'required');
	// 	$this->form_validation->set_rules('image','Post Image', 'required');
	// 	$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

	// 	if($this->form_validation->run() && $this->upload->do_upload('image')){
	// 		$data = $this->input->post();
	// 		$info = $this->upload->data();
	// 		$image_path = base_url("uploads/".$info['raw_name'].$info['file_ext']);
	// 		$data['image'] = $image_path;
	// 		unset($data['submit']);
	// 		$this->load->model('queries');
	// 		echo "<pre>";
	// 		print_r($data);
	// 		echo "</pre>";
	// 		exit();

	// 		if ($this->queries->insertPost($data)) {
	// 			$this->session->set_flashdata('response', 'Post Published Successfully..!');
	// 		}else{
	// 			$this->session->set_flashdata('response', 'Post Publishing Failed..!');
	// 		}
	// 		return redirect('dashboard');
	// 	}else{
	// 		$this->addPost();
	// 	}
	// }

	public function publishPost(){

		$this->form_validation->set_rules('title','Post Title', 'required');
		$this->form_validation->set_rules('description','Post Description', 'required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		if($this->form_validation->run()){
			$data = $this->input->post();
			unset($data['submit']);
			$this->load->model('queries');

			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";
			// exit();

			if ($this->queries->insertPost($data)) {
				$this->session->set_flashdata('response', 'Post Published Successfully..!');
			}else{
				$this->session->set_flashdata('response', 'Post Publishing Failed..!');
			}
			return redirect('dashboard');
		}else{
			$this->addPost();
		}
	}

	public function post($postid){

		$this->load->model('queries');
		$posts = $this->queries->getSinglePost($postid);
		$this->load->view('post_view', ['posts' =>$posts ]);
	}

	public function editPost($postid){

		$this->load->model('queries');
		$posts = $this->queries->getSinglePost($postid);
		$this->load->view('editPost_view', ['posts' =>$posts ]);
	}

	public function updatePost($postid){

		$this->form_validation->set_rules('title','Post Title', 'required');
		$this->form_validation->set_rules('description','Post Description', 'required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		if($this->form_validation->run()){
			$data = $this->input->post();
			unset($data['submit']);
			$this->load->model('queries');

			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";
			// exit();

			if ($this->queries->updateThePost($data, $postid)) {
				$this->session->set_flashdata('response', 'Post Updated Successfully..!');
			}else{
				$this->session->set_flashdata('response', 'Post Updating Failed..!');
			}
			return redirect('dashboard');
		}else{
			$this->editPost();
		}
	}

	public function deletePost($postid){

		$this->load->model('queries');

		if ($this->queries->deleteThePost($postid)) {
			$this->session->set_flashdata('response', 'Post Delete Successfully..!');
		}else{
			$this->session->set_flashdata('response', 'Post Deleting Failed..!');
		}
		return redirect('dashboard');
	}

	public function subscribePost($postid){

		$this->load->model('queries');
		$posts = $this->queries->getSinglePost($postid);
		$this->load->view('subscriberPost_view', ['posts' =>$posts ]);
	}

}

?>
