<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Donate_ctrl extends CI_Controller {

   function __construct() {
   parent::__construct();
   //Load the Model
   //$this->load->model('donate_model');
   }


   function getstep1() {

      $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

      //Validating First Name Field
      $this->form_validation->set_rules('fname', 'First name ', 'trim|required|alpha|max_length[15]');

      //Validating Last Name Field
      $this->form_validation->set_rules('lname', 'Last name ', 'trim|required|alpha|max_length[15]');

      //Validating Gender Field
      $this->form_validation->set_rules('gender', 'Gender', 'required');

      //Validating Address Field
      $this->form_validation->set_rules('address', 'Address ', 'trim|required');

      //Validating Zipcode Field
      $this->form_validation->set_rules('zip', 'Zipcode ', 'trim|required|numeric|min_length[6]|max_length[6]');

      //Validating Country Field
      $this->form_validation->set_rules('country', 'Country ', 'trim|required');

      //Validating Email Field
      $this->form_validation->set_rules('email','email','trim|required|valid_email');

      //Validating Mobile Field
      $this->form_validation->set_rules('mobile', 'Mobile','trim|required|numeric|min_length[10]|max_length[10]'); 

                  if ($this->form_validation->run() == FALSE)
                      {
                           $pass['step'] = 1;
                           $this->load->view('pages/donate',$pass);
                      }

                  else{

                           $data1 = array(
                           'firstname' => $this->input->post('fname'),
                           'lastname' => $this->input->post('lname'),
                           'gender' => $this->input->post('gender'),
                           'address' => $this->input->post('address'),
                           'zipcode' => $this->input->post('zip'),
                           'country' => $this->input->post('country'),
                           'email' => $this->input->post('email'),
                           'mobile' => $this->input->post('mobile')
                           );

                           $this->showstep2();
   

                  }     

   }

   function showstep2(){

                           $pass['step']= 2;
                           $this->load->view('pages/donate',$pass);
   }


   function getstep2(){

                          
                           //Validating Amount Field
                           $this->form_validation->set_rules('amount', 'Amount', 'trim|required|numeric');

                           if ($this->form_validation->run() == FALSE) {
                              
                              $this->showstep2();

                           }

                           else{

                               $data2 = array(
                              'amount' => $this->input->post('amount')
                              );

                              $this->showstep3();
   
                           }
         
   }

   function showstep3(){


                           $pass['step']= 3;
                           $this->load->view('pages/donate',$pass);

   }

   function getstep3(){

                          
                           //Validating Terms Checkbox
                           $this->form_validation->set_rules('terms', 'Terms and conditions','required');

                           if ($this->form_validation->run() == FALSE) {
                              
                              $this->showstep3();

                           }

                           else{

                              echo "<script type='text/javascript'>alert('Sincere thanks!')</script>";
                              redirect('Pages/view/index');

                           }

   }

}

?>