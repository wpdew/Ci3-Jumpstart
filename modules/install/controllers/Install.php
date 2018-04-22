<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Install extends MX_Controller {

    function __construct()
    {
        parent::__construct();
        
        //Definition Language Processing
        if(!isset($_SESSION["language"])){
            $result = 'english'; 
        }else{ 
            $result = $_SESSION["language"]; 
        }
        $this->lang->load('install/install', $result);
        
        //Check whether the install.txt file does not exist
        $seg = $this->uri->segment(2);
        if ($seg!="install" && $seg!= "install_action") {
            if (file_exists('install.txt')) {
                redirect(base_url('install/install'), 'location');
            }
        }
        
    }

	public function index()
    {
        if (!file_exists('install.txt')) {
            redirect(base_url('admin'), 'location');
        }
        $data = array(
            "body" => "page/install", 
            "page_title" => "1 Install Package",
            'text_lang' => $this->lang->line('text_lang'),
            "text_install" => $this->lang->line('text_install'),
            "text_enabled" => $this->lang->line('text_enabled'),
            "text_supported" => $this->lang->line('text_supported'),
            "text_CurlError" => $this->lang->line('text_CurlError'),
            "text_MbstringError" => $this->lang->line('text_MbstringError'),
            "text_SafeMode" => $this->lang->line('text_SafeMode'),
            "text_OpenBasedir" => $this->lang->line('text_OpenBasedir'),
            "text_Allow_Url_Fopen" => $this->lang->line('text_Allow_Url_Fopen'),
            "text_MysqlSupport" => $this->lang->line('text_MysqlSupport'),
            "text_Server_Requirements" => $this->lang->line('text_Server_Requirements'),
            "text_make_following" => $this->lang->line('text_make_following'),
            "text_HostName" => $this->lang->line('text_HostName'),
            "text_DatabaseName" => $this->lang->line('text_DatabaseName'),
            "text_DatabaseUsername" => $this->lang->line('text_DatabaseUsername'),
            "text_DatabasePassword" => $this->lang->line('text_DatabasePassword'),
            "text_AdminPanelLogin" => $this->lang->line('text_AdminPanelLogin'),
            "text_AdminPanelLoginPassword" => $this->lang->line('text_AdminPanelLoginPassword'),
            "text_congratulation" => $this->lang->line('text_congratulation'),
            "text_Install_Now" => $this->lang->line('text_Install_Now'),
            "text_Well_Done" => $this->lang->line('text_Well_Done'),
            "text_Installation_Completed" => $this->lang->line('text_Installation_Completed'),
        );
    
        $this->parser->parse('install.php', $data);
    }
    
    public function install()
    {
        if (!file_exists('install.txt')) {
            redirect(base_url('admin'), 'location');
        }
        $data = array(
            "body" => "page/install", 
            "page_title" => "1 Install Package",
            'text_lang' => $this->lang->line('text_lang'),
            "text_install" => $this->lang->line('text_install'),
            "text_enabled" => $this->lang->line('text_enabled'),
            "text_supported" => $this->lang->line('text_supported'),
            "text_CurlError" => $this->lang->line('text_CurlError'),
            "text_MbstringError" => $this->lang->line('text_MbstringError'),
            "text_SafeMode" => $this->lang->line('text_SafeMode'),
            "text_OpenBasedir" => $this->lang->line('text_OpenBasedir'),
            "text_Allow_Url_Fopen" => $this->lang->line('text_Allow_Url_Fopen'),
            "text_MysqlSupport" => $this->lang->line('text_MysqlSupport'),
            "text_Server_Requirements" => $this->lang->line('text_Server_Requirements'),
            "text_make_following" => $this->lang->line('text_make_following'),
            "text_HostName" => $this->lang->line('text_HostName'),
            "text_DatabaseName" => $this->lang->line('text_DatabaseName'),
            "text_DatabaseUsername" => $this->lang->line('text_DatabaseUsername'),
            "text_DatabasePassword" => $this->lang->line('text_DatabasePassword'),
            "text_AdminPanelLogin" => $this->lang->line('text_AdminPanelLogin'),
            "text_AdminPanelLoginPassword" => $this->lang->line('text_AdminPanelLoginPassword'),
            "text_congratulation" => $this->lang->line('text_congratulation'),
            "text_Install_Now" => $this->lang->line('text_Install_Now'),
            "text_Well_Done" => $this->lang->line('text_Well_Done'),
            "text_Installation_Completed" => $this->lang->line('text_Installation_Completed'),
        );
        
        
        $this->load->view('install', $data);
    }
    
    public function install_action()
    {
        if (!file_exists('install.txt')) {
            redirect(base_url('admin'), 'location');
        }
        $data = array(
            "body" => "page/install", 
            "page_title" => "1 Install Package",
            'text_lang' => $this->lang->line('text_lang'),
            "text_install" => $this->lang->line('text_install'),
            "text_enabled" => $this->lang->line('text_enabled'),
            "text_supported" => $this->lang->line('text_supported'),
            "text_CurlError" => $this->lang->line('text_CurlError'),
            "text_MbstringError" => $this->lang->line('text_MbstringError'),
            "text_SafeMode" => $this->lang->line('text_SafeMode'),
            "text_OpenBasedir" => $this->lang->line('text_OpenBasedir'),
            "text_Allow_Url_Fopen" => $this->lang->line('text_Allow_Url_Fopen'),
            "text_MysqlSupport" => $this->lang->line('text_MysqlSupport'),
            "text_Server_Requirements" => $this->lang->line('text_Server_Requirements'),
            "text_make_following" => $this->lang->line('text_make_following'),
            "text_HostName" => $this->lang->line('text_HostName'),
            "text_DatabaseName" => $this->lang->line('text_DatabaseName'),
            "text_DatabaseUsername" => $this->lang->line('text_DatabaseUsername'),
            "text_DatabasePassword" => $this->lang->line('text_DatabasePassword'),
            "text_AdminPanelLogin" => $this->lang->line('text_AdminPanelLogin'),
            "text_AdminPanelLoginPassword" => $this->lang->line('text_AdminPanelLoginPassword'),
            "text_congratulation" => $this->lang->line('text_congratulation'),
            "text_Install_Now" => $this->lang->line('text_Install_Now'),
            "text_Well_Done" => $this->lang->line('text_Well_Done'),
            "text_Installation_Completed" => $this->lang->line('text_Installation_Completed'),
        );

        if ($_POST) {
            // validation
            $this->form_validation->set_rules('host_name',               '<b>Host Name</b>',                   'trim|required');
            $this->form_validation->set_rules('database_name',           '<b>Database Name</b>',               'trim|required');
            $this->form_validation->set_rules('database_username',       '<b>Database Username</b>',           'trim|required');
            $this->form_validation->set_rules('database_password',       '<b>Database Password</b>',           'trim');
            
            // go to config form page if validation wrong
            if ($this->form_validation->run() == false) {
                return $this->install();
            } else {
                $host_name = addslashes(strip_tags($this->input->post('host_name', true)));
                $database_name = addslashes(strip_tags($this->input->post('database_name', true)));
                $database_username = addslashes(strip_tags($this->input->post('database_username', true)));
                $database_password = addslashes(strip_tags($this->input->post('database_password', true)));

                $con=@mysqli_connect($host_name, $database_username, $database_password);
                if (!$con) {
                    $this->session->set_userdata('mysql_error', "Could not conenect to MySQL.");
                    return $this->index();
                }
                if (!@mysqli_select_db($con,$database_name)) {
                    $this->session->set_userdata('mysql_error', "Database not found.");
                    return $this->index();
                }
                mysqli_close($con);

                 

                //writting application/config/database
                $database_data = "";
$database_data.= "<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');\n
// TEMS
define('CMS_NAME', 'Codeigniter');
define('CMS_DEV', 'RAMStudio');
define('CMS_DEV_URL', 'http://moroz.rv.ua/');

// SISTEM CONFIG
define('FITTING_ADMIN', '0141');
define('VERSION_ADMIN', 'SmartAdmin v1.9.0');
define('VERSION_ENGIN', 'Helper v1.0');

// DB CONFIG
define('DB_USE', 'database');
define('DB_DBDRIVER', 'mysqli');
define('DB_HOSTNAME', '$host_name');
define('DB_USERNAME', '$database_username');
define('DB_PASSWORD', '$database_password');
define('DB_DATABASE', '$database_name');
define('DB_DBPREFIX', '');

// DEVELBAR CONFIG
//enable_develbar = TRUE or FALSE;
define('ENABLE_DEVELBAR', FALSE);
//define('ENABLE_DEVELBAR', TRUE);

?>";
file_put_contents('config.php', $database_data, LOCK_EX);
                  //writting application/config/database

//$home_url = implode('', array_slice(explode('/', $_SERVER['PHP_SELF']), 0, -1));
$home_url = dirname($_SERVER['SCRIPT_NAME']);
$str = array('\\', '/');
$replase   = array('', '');
$home_url = str_replace($str, $replase, $home_url);

$htaccess_data = "#set the site encoding
AddDefaultCharset UTF-8

<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteBase /".$home_url."

    #Removes access to the system folder by users.
    #Additionally this will allow you to create a System.php controller,
    #previously this would not have been possible.
    #'system' can be replaced if you have renamed your system folder.
    RewriteCond %{REQUEST_URI} ^system.*
    RewriteRule ^(.*)$ /index.php?/$1 [L]
    
    #When your application folder isn't in the system folder
    #This snippet prevents user access to the application folder
    #Submitted by: Fabdrol
    #Rename 'application' to your applications folder name.
    RewriteCond %{REQUEST_URI} ^application.*
    RewriteRule ^(.*)$ /index.php?/$1 [L]

    #Checks to see if the user is attempting to access a valid file,
    #such as an image or css document, if this isn't true it sends the
    #request to index.php
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
	RewriteRule .* index.php/$0 [PT,L]
</IfModule>

<IfModule !mod_rewrite.c>
    # If we don't have mod_rewrite installed, all 404's
    # can be sent to index.php, and everything works as normal.
    # Submitted by: ElliotHaughin

    ErrorDocument 404 /index.php
</IfModule>
";
file_put_contents('.htaccess', $htaccess_data, LOCK_EX);

            redirect(base_url('install/install/installs2'));
                  
            }
        }
    }
    
    
    public function installs2(){
        //install step2
        if (!file_exists('install.txt')) {
            redirect(base_url('admin'), 'location');
        }
        $data = array(
            "body" => "page/install", 
            "page_title" => "1 Install Package",
            'text_lang' => $this->lang->line('text_lang'),
            "text_install" => $this->lang->line('text_install'),
            "text_step2" => $this->lang->line('text_step2'),////////
            "text_info_step2" => $this->lang->line('text_info_step2'),
            "text_AdminPanelLogin" => $this->lang->line('text_AdminPanelLogin'),
            "text_AdminPanelLoginPassword" => $this->lang->line('text_AdminPanelLoginPassword'),
            "text_congratulation" => $this->lang->line('text_congratulation'),
            "text_Install_Now" => $this->lang->line('text_Install_Now'),
            "text_Well_Done" => $this->lang->line('text_Well_Done'),
            "text_Installation_Completed" => $this->lang->line('text_Installation_Completed'),
        );
        
        $this->parser->parse('install/install_step2.php', $data);
    }
    
    
    
    
    public function upd_user(){
        // loding database library, because we need to run queries below and configs are already written
        $this->load->database();
        $this->load->model('basic');
        // loding database library, because we need to run queries below and configs are already written

        // dumping sql
        $dump_file_name = 'initial_db.sql';
        $dump_sql_path = 'assets/backup_db/'.$dump_file_name;
        $this->basic->import_dump($dump_sql_path);
        // dumping sql

        //Accept and change the default password ion_auth
        $app_username = addslashes(strip_tags($this->input->post('app_username', true)));
        $app_password = addslashes(strip_tags($this->input->post('app_password', true)));
                
        $this->load->library(array('ion_auth', 'form_validation'));
        
        $data = array(
            'password' => $app_password,
            'username' => $app_username,
        );
                
        $this->ion_auth->update('1', $data);
                
        //deleting the install.txt file,because installation is complete
        if (file_exists('install.txt')) {
            unlink('install.txt');
        }
        //deleting the install.txt file,because installation is complete
        redirect(base_url('install/installcomplite'));
        
    }
    
    
    
    public function installcomplite()
    {
        $data = array(
            "body" => $this->lang->line('text_Installation_Completed'),
            'text_lang' => $this->lang->line('text_lang'), 
            "page_title" => $this->lang->line('text_Installation_Completed'),
            "text_Well_Done" => $this->lang->line('text_Well_Done'),
            );
        $this->load->view('installcomplite', $data);
    }
   
}
