<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_ctrl extends CI_Controller {

   function __construct() {
   parent::__construct();
   //Load the Model
   $this->load->model('contact_model');
   }

   function insert() {

   $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

   //Validating First Name Field
   $this->form_validation->set_rules('first_name', 'First name ', 'trim|required|max_length[15]');

   //Validating Email Field
   $this->form_validation->set_rules('email','email','trim|required|valid_email');

   //Validating Message Field
   $this->form_validation->set_rules('message', 'Message','trim|required|min_length[10]'); 

               if ($this->form_validation->run() == FALSE)
                   {
                           $this->load->view('pages/contact');
                   }
               else
                   {
                     //Setting values for table columns
                     $data = array(
                     'firstname' => $this->input->post('first_name'),
                     'lastname' => $this->input->post('last_name'),
                     'email' => $this->input->post('email'),
                     'message' => $this->input->post('message')
                     );
                     //Transfering data to Model
                     $check=$this->contact_model->form_insert($data);
                     if($check){
                        echo "<script type='text/javascript'>alert('Submitted successfully! Will reach out to you soon.')</script>";
                        redirect('Pages/view/index');
                        }                     
                  }
   }

   function view_contactdata(){
   		
            
            $data['result'] = $this->contact_model->view_contactdata();
      
           
            //return the data in view  
            $this->load->view('backend_pages/view_contactdata', $data);
   }


   function update_contactdata(){

            $id = $this->uri->segment(3);

            $data['result'] = $this->contact_model->showcontact($id);

            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

            //Validating First Name Field
            $this->form_validation->set_rules('firstname', 'First name ', 'trim|required|max_length[15]');

            //Validating Email Field
            $this->form_validation->set_rules('email','email','trim|required|valid_email');

            //Validating Message Field
            $this->form_validation->set_rules('message', 'Message','trim|required|min_length[10]'); 

                  if ($this->form_validation->run() == FALSE)
                     {
                           $this->load->view('backend_pages/updatecontact',$data);
                     }

                  else{

                     $id= $this->input->post('id');

                     $data = array(
                     'firstname' => $this->input->post('firstname'),
                     'lastname' => $this->input->post('lastname'),
                     'email' => $this->input->post('email'),
                     'message' => $this->input->post('message')
                     );

                     $check = $this->contact_model->update_contactdata($id,$data);
                     if ($check) {
                        echo "<script type='text/javascript'>alert('Updated successfully!')</script>";  
                        redirect('Contact_ctrl/view_contactdata');
                     }

                  }
   }


   function delete_contactdata() {


      $id = $this->uri->segment(3);
      $check = $this->contact_model->delete_contactdata($id);
      if ($check) 
      redirect('Contact_ctrl/view_contactdata');
      

}



}

?>

