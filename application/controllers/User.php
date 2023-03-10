<?php 
    class User extends CI_controller{
        function create(){
            $this->load->model('Usermodel');            
            $this->form_validation->set_rules('title', 'Title','required');
            $this->form_validation->set_rules('description','Description','required');
            
            if($this->form_validation->run() == false){
                $this->load->view('create');
            }
            else{
                //save entry to db
                $fromArray = array();
                $fromArray['title'] = $this->input->post('title');
                $fromArray['description'] = $this->input->post('description');

                $this->Usermodel->create($fromArray);
                redirect(base_url().'index.php/user/create');
                //http://localhost/php/index.php/article/test
            }
            $this->load->model('usermodel');

            $name = $this->usermodel->getuserdata();
            $data['names'] =  $name;

            $this->load->view('user',$data);
            // $this->load->view('user');

        }

        function delete($id){
            $this->load->model('Usermodel');
            $user = $this->Usermodel->getUser($id);
            // if(!empty($user)){
            //     redirect(base_url().'index.php/user/create');
            // }
            $this->Usermodel->deleteUser($id);
            redirect(base_url().'index.php/user/create');


        }

        function edit($id){
            $this->load->model('Usermodel');
            $user =  $this->Usermodel->getUser($id);
            $data['user'] = $user;
            $this->form_validation->set_rules('title', 'Title','required');
            $this->form_validation->set_rules('description','Description','required');
            
            if($this->form_validation->run() == false){
                $this->load->view('edit',$data);
            }
            else{
                $fromArray = array();
                $fromArray['title'] = $this->input->post('title');
                $fromArray['description'] = $this->input->post('description');

                $this->Usermodel->updateUser($id, $fromArray);
                redirect(base_url().'index.php/user/create');

            }
            
            
        }


    }

?>