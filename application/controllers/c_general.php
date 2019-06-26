<?php
	class C_general extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('m_general');
		}

		public function index()
		{
			$this->session->sess_destroy();

			echo "<script>
					alert('Datos cambiados correctamente.');
				</script>";

			$this->load->view('v_frmlogin');
		}

		//se conecta con modelo para buscar datos de login y los carga al formulario de edicion
		public function c_bEditarUsr()
		{
			$cod = $this->session->userdata('cod');

			$this->load->model('m_general');
			$consulta = $this->m_general->m_bEditarusr($cod);

			if($consulta != FALSE)
				$data = array('registro' => $consulta);

			$this->load->view('v_frmEditarUsr',$data);

		}//End c Editar

		//Se conecta con modelo para enviar los datos a cambiar del usuario
		public function c_editarusr()
		{
			$cod = $this->input->post('hcod',TRUE);
			$login = $this->input->post('txtlogin',TRUE);
			$pass = $this->input->post('txtpassword',TRUE);


			if($cod != FALSE && $login != FALSE && $pass != FALSE)
			{

				$this->load->model('m_general');
				$this->m_general->m_editarusr($cod,$login,$pass);
				$this->index();
			}
			else
			{
				echo "<script>
						alert('Por favor ingrese una nueva clave.');
					</script>";
				$this->c_bEditarUsr();
			}
		}//End c editarUsr

		public function c_buscarClave($cod,$pass)
		{
			$this->load->model('m_general');
			$consulta = $this->m_general->m_buscarClave($cod,$pass);

			if($consulta == TRUE)
				return TRUE;
			else
				return FALSE;
		}//End buscar Clave

/*Funcion para generar la serie Fibonacci*/

		public function c_fibonacci()
		{
			
			$final_data['flag'] = 'busqueda';
			$final_number = $this->input->post('num_final',TRUE);
			$full_response='';

			if(!empty($final_number)){

				$n1=1;
                $n2=0;
                $last_number = 0; 
                for($i = 1; $i <= $final_number; $i++){

                  $suma=$n1+$n2;
                  $n1=$n2;
                  $n2=$suma;
                  $full_response.= $suma.",";
                  $last_number = $suma;

            }

            $final_data['full_response'] = substr($full_response, 0, -1);
            $final_data['last_number'] = $last_number;
            $final_data['final_number'] = $final_number;      
            $final_data['flag'] = 'resultado';    

			}

			$final_data['titulo'] = 'Fibonacci';
			$final_data['content'] = "./opcion/v_fibonacci";
			$this->load->view('layout/template', $final_data);
		}

/*Funcion para generar el punto Monedero*/
		public function c_monedero()
		{
			
			$final_data['titulo'] = 'Monedero';
			$final_data['content'] = "./opcion/v_monedero";
			$this->load->view('layout/template', $final_data);
		}

/*Funcion para generar el punto Monedero*/
		public function c_trenes()
		{
			
			$final_data['titulo'] = 'Trenes';
			$final_data['content'] = "./opcion/v_trenes";
			$this->load->view('layout/template', $final_data);
		}		

	}
?>