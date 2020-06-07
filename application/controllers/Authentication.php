
<?php
class Authentication extends CI_Controller{


    
    function login(){

        $data['title'] = 'Login';

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        // $this->form_validation->set_rules('username', 'Username', 'required');
        if($this->form_validation->run()===FALSE){

        $this->load->view('templates/header2');
        $this->load->view('authentication/login', $data);
        // $this->load->view('templates/footer');
        } else{

            
            // get login details

            // get username
            $username = $this->input->post('username');
            // get password and encryt it
            $password = md5( $this->input->post('password'));

            // user login
            $student_adm_Id= $this->addmission_model->login_info($username, $password);
            
            // do a check
            if($student_adm_Id){
                
              $this->session->set_userdata('student_reg_id', $student_adm_Id);
              $id = $this->session->userdata('student_reg_id');
              if($this->addmission_model->check_regist_exist($id)){ 

                  // checking if registration id exist on the biodata table
                
                // $this->session->set_flashData('login_success',$id);
                return redirect('admissions/studentapplicationform');
              }else{
            
                return redirect('admissions/applicationpaymentform');
              }
           

            } else{
            $this->session->set_flashData('login_error', 'Invalid login detail, Please enter correct surname and password');

                return redirect('authentication/login');
            }

            
        }
        
    }

}