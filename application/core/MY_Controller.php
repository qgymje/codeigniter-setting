<?php

/**
 *  封装request以及response常用方法 
 */
class MY_Controller extends CI_Controller {
	function render($type,$options){
        //判断根据type调用的func是否存在
        //调用
	}

    private function render_json($options){

    }

    private function render_html($options){
        
    }

    function set_status($status){
        
    }
    function set_header($key,$val){
        
    }
    
    private function request_method(){
        return strtoupper($_SERVER['REQUEST_METHOD']);
    }
    
    function is_get(){
        return $this->request_method() === 'GET';
    }

    function is_post(){
        return $this->request_method() === 'POST';
    }

    function is_delete(){
        return $this->request_method() === 'DELETE';
    }

    function is_put(){
        return $this->request_method() === 'PUT';
    }

    function is_option(){
        return $this->request_method() === 'OPTION';
    }

    /**
     * 简化post获取,并且可以简化默认值
     * @param $key
     * @param bool $default_value
     * @return mixed
     */
    function post($key,$default_value = false){
        return $this->param('post',$key,$default_value);
    }

    /**
     * 简化get获取,并且可以设置默认值
     * @param $key
     * @param bool $default_value
     * @return mixed
     */
    private function get($key,$default_value = false){
        return $this->param('get',$key,$default_value);
    }

    private function param($type,$key,$default_value){
        $val = $this->input->$type($key);
        return $val ? $val : $default_value;
    }

}