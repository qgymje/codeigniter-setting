<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 封装db常用方法
 */
class MY_Model extends CI_Model {

	protected $db_conn = array();

	const ONE_DAY = 86400;

	function __construct() {
		parent::__construct();
	}

	/**
	 * 切换DB
	 * @param  string $db_flag
	 * @return [type]
	 */
	public function getDB($db_flag = 'default') {
        //如果已经自动加载了database
        if(!is_null($this->db)){
            $this->db_conn["default"] = &$this->db;
        }
		if (isset($this->db_conn[$db_flag])) {
			return $this->db_conn[$db_flag];
		}

		$this->db_conn[$db_flag] = &$this->load->database($db_flag, true);

        $CI =&get_instance();
        $db_name = $db_flag.'_db';
        if( !isset( $CI->$db_name) ){
            $CI->$db_name = &$this->db_conn[$db_flag];
        }

        return $this->db_conn[$db_flag];
	}

    public function insert($table_name,$data){
        
    }

    public function insert_batch($talbe_name,$datas){
        
    }
    
    public function update($table_name,$options){
        
    }

    public function delete($table_name,$where){
        
    }

    public function query($table_name,$where){
        
    }

}
