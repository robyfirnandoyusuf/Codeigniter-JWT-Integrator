<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sayang extends CI_Controller {
    private $_c_extends;
    private $_mo_extends;
    private $_mi_extends;
    private $_templateLoc;
    private $_tab       = "\t";
    private $_tab2      = "\t\t";
    private $_tab3      = "\t\t\t";

    private $_ret       = "\n";
    private $_ret2      = "\n\n";
    private $_rettab    = "\n\t";
    private $_tabret    = "\t\n";
    private $_replace   = array();
  
public function __construct()
    {
        parent::__construct();
     
        echo "\033[33m  ____                                
 / ___|  __ _ _   _  __ _ _ __   __ _ 
 \___ \ / _` | | | |/ _` | '_ \ / _` |
  ___) | (_| | |_| | (_| | | | | (_| |
 |____/ \__,_|\__, |\__,_|_| |_|\__, |
              |___/             |___/    {$this->_ret2} \033[37m";
        echo "\033[0;32mPHP Version : ".phpversion()."\n";
        echo "\033[0;32m CI Version  : ".CI_VERSION."\n\033[37m";

    }

    public function _remap($method, $params=array())
    {
        if(strpos($method,':'))
        {
            $method = str_replace(':','_',$method);
        }
        if(method_exists($this,$method))
        {
            return call_user_func_array(array($this,$method),$params);
        }
    }

public function index(){echo"{$this->$a3}Welcome to PHP Sayang\nThank you to : Allah SWT , Prophet Muhammad SAW, And All My Friends\n type help to show available commands\n";}public function help(){echo"==[ Available Commands ]== {$this->_ret}";echo"- sayang make:jwt{$this->_ret}";}public function make_jwt(){$m5=$this->_fileLoader(APPPATH.base64_decode('aGVscGVycy9qd3RfaGVscGVyLnBocA=='),base64_decode('aHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL3JvYnlmaXJuYW5kb3l1c3VmL0NvZGVpZ25pdGVyLVN0YXJ0ZXItSldUL21hc3Rlci9oZWxwZXJzL2p3dF9oZWxwZXIucGhw'));if($m5){echo base64_decode('W1NVQ0NFU1NdIC0gR2VuZXJhdGVkIEhlbHBlciA9PiA=').APPPATH.base64_decode('aGVscGVycy9qd3RfaGVscGVyLnBocA==').$this->_ret2;}$e6=$this->_fileLoader(APPPATH.base64_decode('bGlicmFyaWVzL0JlZm9yZVZhbGlkRXhjZXB0aW9uLnBocA=='),base64_decode('aHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL3JvYnlmaXJuYW5kb3l1c3VmL0NvZGVpZ25pdGVyLVN0YXJ0ZXItSldUL21hc3Rlci9saWJyYXJpZXMvQmVmb3JlVmFsaWRFeGNlcHRpb24ucGhw'));if($e6){echo base64_decode('W1NVQ0NFU1NdIC0gR2VuZXJhdGVkIExpYnJhcnkgPT4g').APPPATH.base64_decode('bGlicmFyaWVzL0JlZm9yZVZhbGlkRXhjZXB0aW9uLnBocA==').$this->_ret2;}$y7=$this->_fileLoader(APPPATH.base64_decode('bGlicmFyaWVzL0V4cGlyZWRFeGNlcHRpb24ucGhw'),base64_decode('aHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL3JvYnlmaXJuYW5kb3l1c3VmL0NvZGVpZ25pdGVyLVN0YXJ0ZXItSldUL21hc3Rlci9saWJyYXJpZXMvRXhwaXJlZEV4Y2VwdGlvbi5waHA='));if($y7){echo base64_decode('W1NVQ0NFU1NdIC0gR2VuZXJhdGVkIExpYnJhcnkgPT4g').APPPATH.base64_decode('bGlicmFyaWVzL0V4cGlyZWRFeGNlcHRpb24ucGhw').$this->_ret2;}$x8=$this->_fileLoader(APPPATH.base64_decode('bGlicmFyaWVzL0Zvcm1hdC5waHA='),base64_decode('aHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL3JvYnlmaXJuYW5kb3l1c3VmL0NvZGVpZ25pdGVyLVN0YXJ0ZXItSldUL21hc3Rlci9saWJyYXJpZXMvRm9ybWF0LnBocA=='));if($x8){echo base64_decode('W1NVQ0NFU1NdIC0gR2VuZXJhdGVkIExpYnJhcnkgPT4g').APPPATH.base64_decode('bGlicmFyaWVzL0Zvcm1hdC5waHA=').$this->_ret2;}$d9=$this->_fileLoader(APPPATH.base64_decode('bGlicmFyaWVzL0pXVC5waHA='),base64_decode('aHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL3JvYnlmaXJuYW5kb3l1c3VmL0NvZGVpZ25pdGVyLVN0YXJ0ZXItSldUL21hc3Rlci9saWJyYXJpZXMvSldULnBocA=='));if($d9){echo base64_decode('W1NVQ0NFU1NdIC0gR2VuZXJhdGVkIExpYnJhcnkgPT4g').APPPATH.base64_decode('bGlicmFyaWVzL0pXVC5waHA=').$this->_ret2;}$ea=$this->_fileLoader(APPPATH.base64_decode('bGlicmFyaWVzL1JFU1RfQ29udHJvbGxlci5waHA='),base64_decode('aHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL3JvYnlmaXJuYW5kb3l1c3VmL0NvZGVpZ25pdGVyLVN0YXJ0ZXItSldUL21hc3Rlci9saWJyYXJpZXMvUkVTVF9Db250cm9sbGVyLnBocA=='));if($ea){echo base64_decode('W1NVQ0NFU1NdIC0gR2VuZXJhdGVkIExpYnJhcnkgPT4g').APPPATH.base64_decode('bGlicmFyaWVzL1JFU1RfQ29udHJvbGxlci5waHA=').$this->_ret2;}$ab=$this->_fileLoader(APPPATH.base64_decode('bGlicmFyaWVzL1Jlc3QucGhw'),base64_decode('aHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL3JvYnlmaXJuYW5kb3l1c3VmL0NvZGVpZ25pdGVyLVN0YXJ0ZXItSldUL21hc3Rlci9saWJyYXJpZXMvUmVzdC5waHA='));if($ab){echo base64_decode('W1NVQ0NFU1NdIC0gR2VuZXJhdGVkIExpYnJhcnkgPT4g').APPPATH.base64_decode('bGlicmFyaWVzL1Jlc3QucGhw').$this->_ret2;}$cc=$this->_fileLoader(APPPATH.base64_decode('bGlicmFyaWVzL1NpZ25hdHVyZUludmFsaWRFeGNlcHRpb24ucGhw'),base64_decode('aHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL3JvYnlmaXJuYW5kb3l1c3VmL0NvZGVpZ25pdGVyLVN0YXJ0ZXItSldUL21hc3Rlci9saWJyYXJpZXMvU2lnbmF0dXJlSW52YWxpZEV4Y2VwdGlvbi5waHA='));if($cc){echo base64_decode('W1NVQ0NFU1NdIC0gR2VuZXJhdGVkIExpYnJhcnkgPT4g').APPPATH.base64_decode('bGlicmFyaWVzL1NpZ25hdHVyZUludmFsaWRFeGNlcHRpb24ucGhw').$this->_ret2;}$td=$this->_fileLoader(APPPATH.base64_decode('Y29udHJvbGxlcnMvQXV0aEFQSS5waHA='),base64_decode('aHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL3JvYnlmaXJuYW5kb3l1c3VmL0NvZGVpZ25pdGVyLVN0YXJ0ZXItSldUL21hc3Rlci9jb250cm9sbGVycy9BdXRoQVBJLnBocA=='));if($td){echo base64_decode('W1NVQ0NFU1NdIC0gR2VuZXJhdGVkIENvbnRyb2xsZXIgPT4g').APPPATH.base64_decode('Y29udHJvbGxlcnMvQXV0aEFQSS5waHA=').$this->_ret2;}}private function _fileLoader($ce='',$ef=''){$r10=file_put_contents($ce,file_get_contents($ef));return $r10;}
}

/* End of file Sayang.php */
/* Location: ./application/controllers/Sayang.php */