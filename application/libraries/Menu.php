<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu{

    public  $admin_home='',$category='',$location='',$packages='',$sub_category='',$business_list='',$review='',$country='',$state='',$package='',$new_user='',$approved_user='',$suspended_user='',$approved_reg='',$suspended_reg='',$payments='',$reports='',$logout='',$change_password='',$events='',$renewal_notification='',$employee='',$business_user='',$normal_user='',$slider='',$coupon='',$banner='',$subscribe='',$pending_verification='',$enquiry='';
    function  __construct()
    {
        //$this->CI = &get_instance();

        $url = current_url(); 
        $url_array = explode('/', $url); 
        //print_r($url_array); exit();
        if (in_array('admin_home', $url_array)) { 
            $this->admin_home = 'active';  
        }elseif (in_array('category', $url_array)) { 
            $this->category = 'active';
        }elseif (in_array('location', $url_array)) { 
            $this->location = 'active';
        }elseif (in_array('sub_category', $url_array)) { 
            $this->sub_category = 'active';
        }elseif (in_array('packages', $url_array)) { 
            $this->packages = 'active';
        }elseif (in_array('business_list', $url_array)) { 
            $this->business_list = 'active';
        }elseif (in_array('review', $url_array)) { 
            $this->review = 'active';
        }elseif (in_array('country', $url_array)) { 
            $this->country = 'active';
        }elseif (in_array('state', $url_array)) { 
            $this->state = 'active';
        } elseif (in_array('package', $url_array)) { 
            $this->package = 'active';
        } elseif (in_array('new_user', $url_array)) { 
            $this->new_user = 'active';
        }  elseif (in_array('approved_user', $url_array)) { 
            $this->approved_user = 'active';
        }   elseif (in_array('suspended_user', $url_array)) { 
            $this->suspended_user = 'active';
        }    elseif (in_array('approved_reg', $url_array)) { 
            $this->approved_reg = 'active';
        }   elseif (in_array('suspended_reg', $url_array)) { 
            $this->suspended_reg = 'active';
        }    elseif (in_array('payments', $url_array)) { 
            $this->payments = 'active';
        }    elseif (in_array('reports', $url_array)) { 
            $this->reports = 'active';
        }     elseif (in_array('logout', $url_array)) { 
            $this->logout = 'active';
        }     elseif (in_array('change_password', $url_array)) { 
            $this->change_password = 'active';
        }  elseif (in_array('events', $url_array)) { 
            $this->events = 'active';
        }  elseif (in_array('renewal_notification', $url_array)) { 
            $this->renewal_notification = 'active';
        }  elseif (in_array('employee', $url_array)) { 
            $this->employee = 'active';
        }  elseif (in_array('business_user', $url_array)) { 
            $this->business_user = 'active';
        }   elseif (in_array('normal_user', $url_array)) { 
            $this->normal_user = 'active';
        }   elseif (in_array('slider', $url_array)) { 
            $this->slider = 'active';
        } elseif (in_array('coupon', $url_array)) { 
            $this->coupon = 'active';
        }  elseif (in_array('banner', $url_array)) { 
            $this->banner = 'active';
        }   elseif (in_array('subscribe', $url_array)) { 
            $this->subscribe = 'active';
        }    elseif (in_array('pending_verification', $url_array)) { 
            $this->pending_verification = 'active';
        }     elseif (in_array('enquiry', $url_array)) { 
            $this->enquiry = 'active';
        }   
        }
        
 }
    
    
      
     

