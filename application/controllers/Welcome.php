<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use SimpleExcel\SimpleExcel;

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
		$this->load->view('welcome_message');
	}

	public function hello() {
		echo "hellp";
	}

	public function test_composer(){
		$excel = new \SimpleExcel\SimpleExcel('xml'); // instantiate new object (will automatically construct the parser & writer type as XML)
 
	    $excel->writer->setData(
	      array
	      (
	        array('ID', 'Name', 'Kode' ),
	        array('1', 'Kab. Bogor', '1' ),
	        array('2', 'Kab. Cianjur', '1' ),
	        array('3', 'Kab. Sukabumi', '1' ),
	        array('4', 'Kab. Tasikmalaya', '2' )
	      )
	    ); // add some data to the writer
	    $excel->writer->saveFile('example'); // save the file with specified name (example.xml)
	    // and specified target (default to browser)
	}
}
