<?php
	class C_login extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
		}

		public function index()
		{
			$this->inicio();
		}

		//Funcion Home
		public function inicio()
		{
			$active_group = 'default';
			if($this->session->userdata('login'))
			{
				$codnivel = $this->session->userdata('nivel');
				$this->load->view('v_menuprincipal');
			}
			else
			{
				$this->load->view('v_frmlogin');
			}
		}//End Home

		//function validar ingreso
		public function c_validar()
		{
			$active_group = 'default';
			if(!$this->session->userdata('login'))
			{
				$usr = $this->input->post('txtnombre',TRUE);
				$pass = $this->input->post('txtpass',TRUE);

				$pass = do_hash($pass);

				$this->load->model('m_login');

				$registro = $this->m_login->m_validar($usr,$pass);

				if($registro)
				{

					$fila = $registro->row();

					$data = array(
						'cod' => $fila->cod,
						'user' => $usr,
						'nivel' => $fila->nivel,
						'login' => TRUE
					);


					$this->session->set_userdata($data);

					if($fila->pwdchk == 0)
					{
					
						$primer_inicio = array('registro' => $registro);
						$this->db->close();
						$this->load->view('v_frmprimerinicio',$primer_inicio);
					}
					else
					{
					
						$this->load->view('v_menuprincipal');
					}
				}
				else
				{
					$this->load->view('v_frmlogind');
				}
			}
			else
			{
				$this->load->view('v_menuprincipal');
			}	
		}//End c_validar

		//Redirecciona al menú principal
		public function c_inicio()
		{
			$active_group = 'default';
			if(!$this->session->userdata('login'))
			{
				$this->load->view('v_frmlogin');
			}
			else
			{

				$this->load->view('v_menuprincipal');
			}	
		}//End c_inicio

		//Editar clave usuario primer inicio de sesion
		public function c_editarclave()
		{
			$active_group = 'default';
			$cod = $this->input->post('hcod',TRUE);
			$pass = $this->input->post('txtpassword',TRUE);

			$this->load->model('m_login');

			if($pass != FALSE && $pass != ' ')
			{
				$pass = do_hash($pass);
				$this->m_login->m_editarclave($cod,$pass);
				$this->c_inicio();
			}
			else
			{
				echo "<script>
						alert('Por favor edita tu clave para acceder al sistema.');
					</script>";

				$registro = $this->m_login->m_datosusr($cod);
				$primer_inicio = array('registro' => $registro);
				$this->db->close();

				$this->load->view('v_frmprimerinicio',$primer_inicio);
			}
		}//End editar clave

		public function c_cerrarsession()
		{
			$active_group = 'default';
			$this->session->sess_destroy();
			$this->index();
		}//End cerrar session

	}//End Class
?>