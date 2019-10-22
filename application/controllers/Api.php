<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'third_party/REST_Controller.php';
require APPPATH . 'third_party/Format.php';

// use Restserver\Libraries\REST_Controller;

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
class Api extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Load these helper to create JWT tokens
        $this->load->helper(['jwt', 'authorization']);
        $this->load->library(['format', 'rest_controller']);
    }


    public function hello_get()
    {
        $tokenData = 'Hello World!';

        // Create a token
        $token = AUTHORIZATION::generateToken($tokenData);
        // Set HTTP status code
        $status = parent::HTTP_OK;
        // Prepare the response
        $response = ['status' => $status, 'token' => $token];
        // REST_Controller provide this method to send responses
        $this->response($response, $status);
    }
}
