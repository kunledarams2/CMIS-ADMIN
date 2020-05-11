 <?php 
 class Posts extends CI_Controller{
    public function index(){
        
        $data['title'] = 'Latest Post';

        $data['posts']= $this->posts_model->get_post();

        $this->load->view('templates/header');
        $this->load->view('posts/index',$data);
        $this->load->view('templates/footer');

    }

    public function view($slug=NULL){
        $data['post'] = $this->posts_model->get_post($slug);

        if(empty($data['post'])){
            show_404();   
        }
        $data['title'] = $data['post']['title'];
        $this->load->view('templates/header');
        $this->load->view('posts/view',$data);
        $this->load->view('templates/footer');
    }

    public function create(){

        $data['title'] = 'Create Post';
        
        $this->form_validation->set_rules('title', 'Title','required' );
        $this->form_validation->set_rules('body', 'Body','required');

        if($this->form_validation->run()===FALSE){

            $this->load->view('templates/header');
            $this->load->view('posts/create',$data);
             $this->load->view('templates/footer');
        }
        else{
            $this->posts_model->create_post();
            return redirect('posts');
        }
        
    }

    public function delete($id){
        $this->posts_model->delete_post($id);
        redirect('posts');
    }
 }