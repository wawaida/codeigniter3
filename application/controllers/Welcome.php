<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	// client web service to insert actor data
	function newactor(){
		$client = new \GuzzleHttp\Client();
		$url = 'http://localhost:8080/codeIgniter3/index.php/actor/add';
		$data = [
			'form_params'=>[
				'first_name'=>'John',
				'last_name'=>'Doe'
			]				
		];

        $res = $client->request('POST', $url, $data);
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}
}
