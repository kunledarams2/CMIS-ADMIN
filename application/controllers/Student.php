<?php

class Student extends CI_Controller{


    function student_dashboard(){

        $this->load->view('templates/header2');
        $this->load->view('student/student_dashboard');
    }
}

