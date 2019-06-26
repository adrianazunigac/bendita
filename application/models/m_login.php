<?php
	class M_login extends CI_Model
	{
		function m_validar($usr,$pass)
		{
			$this->db->where('login',$usr);
			$this->db->where('password',$pass);
			$sql = $this->db->get('tblusuarios');

			if($sql->num_rows()>0)
				return $sql;
			else
				return FALSE;

		}//End m_validar

		//Editar clave usuario primer inicio de sesion
		public function m_editarclave($cod,$pass)
		{
			$data = array(
				'password' => $pass,
				'pwdchk' => 1
			);

			$this->db->where('cod',$cod);
			$this->db->update('tblusuarios',$data);
		}//End Editar clave

		//Buscar datos usr
		public function m_datosusr($cod)
		{
			$this->db->where('cod',$cod);
			$sql = $this->db->get('tblusuarios');

			return $sql;
		}//End buscar datos usr
	}
?>