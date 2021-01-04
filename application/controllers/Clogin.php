<?php
class Clogin extends CI_Controller{
    function __Construct(){
        parent::__Construct();
        $this->load->Model('Mlogin');
    }
    public function index(){
        $user = $this->session->userdata('user');
        /* if ($user) {
            return redirect(base_url('trangchu'), 'refresh');
        } */
        if($this->input->post('login')){
            $username= trim($this->input->post('username'));
            $password= trim($this->input->post('password'));
            $user =array();
            $user = $this->Mlogin->check_login($username,$password);
            if(empty($user)){
                return redirect(base_url('login'),'refresh');
            }
            $user = array(
                'name' => $username,
            );
            $this->session->set_userdata('user',$user);
            redirect(base_url('trangchu'));
        }
        $data = [
            'url'               => base_url(),
            'csrf_token_name'   => $this->security->get_csrf_token_name(),
            'csrf_token'        => $this->security->get_csrf_hash()
        ];
        $this->parser->parse('Vlogin',$data);
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('login','refresh');
    }
    
}
?>