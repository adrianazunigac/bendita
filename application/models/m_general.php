<?php
	class M_general extends CI_Model
	{
		//Retorna los datos del login para su futura edicion
		public function m_bEditarusr($cod)
		{
			$this->db->where('cod',$cod);
			$sql = $this->db->get('tblusuarios');

			if($sql->num_rows() > 0)
				return $sql;
			else
				return FALSE;
		}//End m bEditarusr

		//Actualiza los datos del usuario
		public function m_editarusr($cod,$login,$pass)
		{
			if($pass != FALSE)
			{
				$pass = do_hash($pass);
				$data = array(
					'login' => $login,
					'password' => $pass
				);
			}
			else
			{
				$data = array(
					'login' => $login
				);
			}

			$this->db->where('cod',$cod);
			$this->db->update('tblusuarios',$data);
		}//End m Editar Usr

		//Buscar clave
		public function m_buscarClave($cod,$pass)
		{
			$this->db->where('cod',$cod);
			$this->db->where('password',$pass);
			$sql = $this->db->get('tblusuarios');

			if($sql->num_rows() == 1)
				return TRUE;
			else
				return FALSE;
		}//End buscar clave
	}//End class
?>