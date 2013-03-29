<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$this->load->view('welcome/welcome_message');
	}

	public function language($lang = 1)
	{
		$data = array(
			1 => array(
				'language' => 'English',
				'message'  => 'Welcome to the regexp route sample',
			),
			2 => array(
				'language' => 'Français',
				'message'  => 'Bienvenue sur l&rsquo;échantillon itinéraire regex',
			),
			3 => array(
				'language' => 'Español',
				'message'  => 'Bienvenidos a la página de ejemplo de rutas con regexp',
			),
		);

		$this->load->view('welcome/language_message', $data[$lang]);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */