<?php
 
    class admin extends framework{
        public function login(){
            $username=$this->input('username');
            $password=$this->input('password');
            $password =MD5($password);
            $data=[$username,$password];
            $result = $this->model("adminModel");
            $check = $result->login($data);
            if($check){
                $this->set_session('ADMIN_ID', $check->admin_id);
                $this->flash('success','Admin Login Successfully.');
                $this->redirect('admin/dashboard');
            }
            else{
                $this->flash('warning','Credentials Not Macthed.');
                $this->redirect('admin');
            }
        }

        public function index(){
            $this->view('admin/login');
        }
        
        public function addCour(){
            if($this->middelware('ADMIN_ID')){
                $this->view('admin/addCour');
            }
            else{
                $this->redirect('admin');
            }
            
        }

        public function addUser(){
            if($this->middelware('ADMIN_ID')){
                $this->view('admin/users/addUser');
            }
            else{
                $this->redirect('admin');
            }
            
        }

        public function Dashboard(){
            if($this->middelware('ADMIN_ID')){
                $result = $this->model("courModel");
                $data = $result->fetchcours();
                if($data){
                    $this->view('admin/dashboard',$data);
                }
                else{
                    $this->view('admin/dashboard',$data =[]);
                }
            }
            else{
                $this->redirect('admin');
            }
        }
        public function user_list(){
            if($this->middelware('ADMIN_ID')){
                $result = $this->model("UserModel");
                $data = $result->fetchUsers();
                 
                if($data){
                    $this->view('admin/users/user_list',$data);
                }
                else{
                    $this->view('admin/users/user_list',$data =[]);
                }
            }
            else{
                $this->redirect('admin');
            }
}

public function delete_user($id){
    if($this->middelware('ADMIN_ID')){
        $result = $this->model("UserModel");
        $data = $result->deleteUser($id);
        if($id){
            $this->flash('success','User Deleted Successfully');
            $this->redirect('admin/dashboard');
        }
        else{
            $this->flash('warning','Something went wrong');
            $this->redirect('admin/dashboard');
        }
    }
    else{
        $this->redirect('admin');
    }
}

        public function delete($id){
            if($this->middelware('ADMIN_ID')){
                $result = $this->model("adminModel");
                $data = $result->deleteCours($id);
                if($id){
                    $this->flash('success','Data Deleted Successfully');
                    $this->redirect('admin/dashboard');
                }
                else{
                    $this->flash('warning','Something went wrong');
                    $this->redirect('admin/dashboard');
                }
            }
            else{
                $this->redirect('admin');
            }
        }
        public function search_user(){
            $keyword = $this->input('keyword');
            $data = ["%$keyword%","%$keyword%"];
            $result = $this->model("UserModel");
            $row = $result->searchUser($data);
            $this->view('searchUser',$row);
        }

 public function updateUser_method(){
    if($this->middelware('ADMIN_ID')){
        $id = $this->input('id');
        $firstname=$this->input('firstname');
        $lastname=$this->input('lastname');
        $role=$this->input('role');
        $data=[$firstname,$lastname,$role,$id];
        $result = $this->model("UserModel",$data); 
        $test = $result->updateUser($data);
        if($test){
                $this->flash('success','User Updated Successfully');
                $this->redirect('admin/user_list'); 
                }
            else{
                $this->flash('success','User Updated Successfully');
                $this->redirect('admin/user_list');
                } 
        }
 }
 public function  insert_user(){
    if($this->middelware('ADMIN_ID')){
        $firstname=$this->input('firstname');
        $lastname=$this->input('lastname'); 
        $role=$this->input('role'); 
            
            $data=[$firstname,$lastname,$role];
            $result = $this->model("adminModel",$data);
            $result->insertUser($data);
            if($result){
                $this->flash('success','User Inserted Successfully');
                $this->redirect('admin/user_list');
            } 
            else{
                $this->flash('warning','Something went wrong');
                $this->redirect('admin/user_list');
            }
        }
        $this->redirect('admin');
}



        public function edit($id){
            if($this->middelware('ADMIN_ID')){
                $result = $this->model("courModel");
                $data = $result->fetchCour($id);
                if($data){
                    $this->view('admin/edit_cour',$data);
                }
            }
       }





       public function editUser($id){
        if($this->middelware('ADMIN_ID')){
            $result = $this->model("UserModel");
            $data = $result->fetchUser($id);
            if($data){
                $this->view('admin/users/edit_user',$data);
            }
        }
   }
   
       
        public function update(){
            if($this->middelware('ADMIN_ID')){
                $title=$this->input('title');
                $cour_id=$this->input('cour_id');
                $contenue=$this->input('contenue');
                $dttm = CURRENT_DATE_TIME; 
                if($this->hasfile('image')) {
                    $image = $this->hasfile('image');
                    if(!empty($image['name'])){                
                        if($this->extention($image)){
                            $img =$this->extention($image);
                            if($this->uploadfile($image)){
                                $data=[$title,$contenue,$img,$dttm,$cour_id];
                                $result = $this->model("adminModel",$data);
                                $chk=$result->updateCour_image($data);
                                
                                $this->flash('success','Data Updated Successfully');
                                $this->redirect('admin/Dashboard');
                            }
                        }
                        else{
                            $this->flash('danger','file must be in valid format');
                            $this->redirect('admin/Dashboard');
                        }
                    }
                    else{
                        $data=[$title,$contenue,$dttm,$cour_id];
                        $result = $this->model("adminModel",$data);
                        $chk = $result->updateCour($data);

                        $this->flash('success','Data Updated Successfully');
                        $this->redirect('admin/Dashboard');
                    }                    
                } 
            }
            else{
                $this->redirect('admin');
            }
        }



        public function  insert(){
            if($this->middelware('ADMIN_ID')){
                $title=$this->input('title');
                $contenue=$this->input('contenue');
                $dttm = CURRENT_DATE_TIME;

                if(empty($title)){
                    $error['error_msg']['title'] = $this->error('This field  is reuired');
                }
                
                if(empty($contenue)){
                    $error['error_msg']['contenue'] = $this->error('This field  is reuired');
                }
                if(!empty($title)){
                    $error['set_input']['title'] =  $title;
                }
                if(!empty($contenue)){
                    $error['set_input']['contenue'] =  $contenue;
                }

                if(isset($error['error_msg'] ) && $error['error_msg'] !='') {
                    $this->view('admin/addCour',$error);
                }
                else{
                    if($this->hasfile('image')) {
                        $image = $this->hasfile('image');
                        if(!empty($image['name'])){
                            if($this->extention($image)){
                                if($this->uploadfile($image)){
                                    $img =$this->extention($image);
                                    $data=[$title,$contenue,$img,$dttm];
                                    $result = $this->model("adminModel",$data);
                                    $result->insertCours($data);
                                    if($data){
                                        $this->flash('success','Data Inserted Successfully');
                                        $this->redirect('admin/addCour');
                                    }
                                    else{
                                        $this->flash('warning','Something went wrong');
                                        $this->redirect('admin/addCour');
                                    }
                                }
                            }
                            else{
                                $error['error_msg']['image'] = $this->error('file must be in valid format');
                                $this->view('admin/addCour',$error);
                            }
                            
                        }
                    
                    }
                    else{
                        $error['error_msg']['image'] = $this->error('This field  is reuired');
                        $this->view('admin/addCour',$error);
                    }

                    
                }
            }
            else{
                $this->redirect('admin');
            }
        }
        

        public function logout(){
            $this->redirect('admin');
            session_destroy();
        }
    }
?>