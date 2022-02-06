<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_details{

    //public  $message_no='';
    function  __construct()
    {
    	//$this->CI = &get_instance();
        $CI =& get_instance();

        $CI->load->model('user/User_model','user');
        if (isset($_SESSION['user_id'])) {
           $usr_id=$_SESSION['user_id'];
           $this->user_data=$CI->user->user_details($usr_id);
        
        
        /*
            //$pending_tasks=$CI->User_model->user_pending_tasks($usr_id);
            $user_projects=$CI->User_model->user_projects($usr_id);
            foreach ($user_projects as $key => $value) {
                $user_projects[$key]['pending_task']=count($CI->User_model->user_pending_tasks($usr_id,$value['id']));
            }
            $this->pending_tasks=$user_projects;
            //echo "<pre>";print_r($user_projects);exit();
        

            $user_list=$CI->User_model->all_users($usr_id);
            foreach ($user_list as $key => $value) {
                $user_list[$key]['task_count']=count($CI->User_model->user_pending_tasks_count($value['user_id'],""));
            }
            $this->user_list=$user_list;*/
        }
       // echo "<pre>";print_r($_SESSION);exit();
	}
	
      
	 
}

