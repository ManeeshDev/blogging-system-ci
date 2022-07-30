<!--
	@author maneesh
 -->
<?php
	class Queries extends CI_Model {

		public function register($data){
			return $this->db->insert('users', $data);
		}

		public function login($email, $password){
			$query = $this->db->where(['email' =>$email, 'password' =>$password])->get('users');

			if ($query->num_rows() > 0) {
				return $query->row();
			}
		}

		public function insertPost($data){
			return $this->db->insert('posts', $data);
		}

		public function getPosts(){
			$this->db->select('*');
			$this->db->from('posts');
			$this->db->order_by('id', 'DESC');
			$query = $this->db->get();
			return $query->result();
		}

		public function getSinglePost($postid){
			$query = $this->db->where(['Id'=>$postid])->get('posts');

			if ($query->num_rows() > 0) {
				return $query->row();
			}
		}

		public function updateThePost($data, $postid){
			return $this->db->where('Id', $postid)->update('posts', $data);
		}

		public function deleteThePost($postid){
			return $this->db->delete('posts', ['Id'=>$postid]);
		}

	}
?>
