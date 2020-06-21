
<?php
class Admissions extends CI_Controller{

  

    function createaccount(){
        $data['title'] = "Create Account";

        $this->form_validation->set_rules('email_address', 'Email Address', 'required|callback_check_email_exists');
        $this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'matches[password]');


        if($this->form_validation->run()===FALSE){
            $this->load->view('templates/header2');
            $this->load->view('admissions/createaccount', $data);
            $this->load->view('templates/footer');
        }
        else{

            // encret password
            $enc_password= md5($this->input->post('password'));

            $this->addmission_model->send_email($this->input->post('email_address'));
            $this->addmission_model->create_account($enc_password);

            // flashing message before redirect
            $this->session->set_flashData('account_created', 'Your account is successfully created, You can now Log in');
            // die('continue');
            return redirect('admissions/confirm_email');
        }
        
    }


    // check username exist

    function check_username_exists($username){
        $this->form_validation->set_message('check_username_exists', 
        'Username already exist, Please choose a different username');
        if($this->addmission_model->check_username_exists($username)){
            return true;
        }else {
            return false;
        }
    }

    // check email exist
    function check_email_exists($email){
        $this->form_validation->set_message('check_email_exists', 
        'Email already exist, Please choose a different email');
        if($this->addmission_model->check_email_exists($email)){
            return true;
        }else {
            return false;
        }
    }

    function login(){

        $data['title'] = 'Login';

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        // $this->form_validation->set_rules('username', 'Username', 'required');
        if($this->form_validation->run()===FALSE){

        $this->load->view('templates/header2');
        $this->load->view('admissions/login', $data);
        $this->load->view('templates/footer');
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

                  // get application_id
            $application_id = $this->addmission_model->get_application_id( $student_adm_Id);

              $this->session->set_userdata('student_reg_id', $student_adm_Id);
              $id = $this->session->userdata('student_reg_id');
              if($this->addmission_model->check_regist_exist($id)){ 

                return redirect('admissions/studentapplicationform');
              }else{
                  if($this->addmission_model->check_payment($application_id )){
                    return redirect('student/student_dashboard');
                  } else{
                    return redirect('admissions/applicationpaymentform');
                  }
            
                
              }
           

            } else{
            $this->session->set_flashData('login_error', 'Invalid login detail, Please enter correct surname and password');

                return redirect('admissions/login');
            }

            
        }
        
    }

    function studentapplicationform(){
        $reg_id= $this->session->userdata('student_reg_id');
        $application_id = 'CMIS/20/'.$reg_id;
        $data['title'] =   $application_id;

        $this->load->view('templates/header2');
        $this->load->view('admissions/studentapplicationform', $data);
        $this->load->view('templates/footer');

       
        $this->form_validation->set_rules('parentname', 'Name of Parent/Guardian', 'required');
        $this->form_validation->set_rules('parentemail', 'Email', 'trim|required');
        if($this->input->post('submit_application')){
            if($this->form_validation->run()===FALSE){
                $this->session->set_flashData('application_error', 'Please continue to the session before you can submit');;
               }
               else{
                   $this->addmission_model->create_student_biodata($reg_id, $application_id);
                   $this->session->set_userdata('user_full_name', 'surname'.''.'firstname');

                   return redirect('admissions/applicationpaymentform');
       
               }
        }
        

     if($this->input->post('submit')){
            
        }
       
    } 

    function applicationform_2(){

        $this->load->view('admissions/applicationform_2');
    }

    function applicationpaymentform(){

        $data['title'] = "Application Payment";

        $reg_id= $this->session->userdata('student_reg_id');

        $this->load->view('templates/header2');
        $this->load->view('admissions/applicationpaymentform', $data);
        $this->load->view('templates/footer');

        $pay = $this->input->post('pay');
        $amount = $this->input->post('amount');
        $email = $this->addmission_model->get_student_email($reg_id);

        
        if($amount){
       
       $this->Paystack->paystack_standardm($amount, $email);
        
        }
        

    }

    function confirm_email(){
        $data['title'] = "Confirm Email";

        $this->load->view('templates/header2');
        $this->load->view('admissions/confirm_email', $data);
        $this->load->view('templates/footer');
    }


    function payment_verify(){
        $data['title'] = "Payment Status";

        $reg_id = $this->session->userdata("student_reg_id");
        $name = $this->session->userdata("user_full_name");
        $payment_ref=$this->session->userdata('payment_ref');
        $application_id = 'CMIS/20/'.$reg_id;
        $ref = rand(1000000, 9999999999);
        $exam_access_code= $application_id.'/'.$payment_ref;
        $payment_type = 'Application Payment';
       

      $payment_verify_paystack= $this->Paystack->verify_payment($payment_ref);
       $get_payment_info= $this->Paystack-> getPaymentInfo($payment_ref);
       $status =$payment_verify_paystack['status'];

      
       
       if($status==='success'){

        $data['application_id']= $application_id;
        $data['exam_access_code'] =$exam_access_code;
        $data['name']=$name;

        // $payment_type, $payment_ref, $student_id
        $this->addmission_model->save_payment_info($payment_type, $payment_ref, $exam_access_code ,$application_id);

        $this->load->view('templates/header2');
        $this->load->view('admissions/payment_verify', $data);
        $this->load->view('templates/footer');
       }

         
    }
}