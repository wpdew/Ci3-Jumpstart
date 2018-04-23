**Installation package Codeigniter**

[![API](https://img.shields.io/badge/Update-May%2018%2C%202018-36ade1.svg)](https://###)
![Codeigniter](https://img.shields.io/badge/Codeigniter-3.1.8-orange.svg)
[![GitHub release][gh-rel-badge]][gh-rel]


## Quick start
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer create-project pomerla/ci3-jumpstart
```

Or download and unzip the latest version of the archive to your hosting.
Go to the directory with the unpacked engine.
Installation will start automatically.
Fill the connection settings to the database and set the administrator login and password.
The install.txt file is required. This file will be automatically deleted after installation.<br />

When you're done, you can delete this ( .gitignore, LICENSE	, README.md, composer.json and dir vendor) with your repository.<br />

Bootstrap and font-awesome are in the assets folders.<br />

A simple CRUD library is included in the assembly.<br />
Example of use

```
function __construct()
	{
		parent::__construct();
	    $this->load->library('common/crud_lib');
	}

	
public function index()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			return show_error($this->lang->line('text_error_1'), '', $heading = $this->lang->line('text_error_h'));
		}
		else
		{
            $data['users'] = $this->crud_lib->select('users');
            //use select('users') where array('ip_address'=>'127.0.0.1') order_by 'id ASC' or 'DESC'
            //$data['users'] = $this->crud_lib->select('users',array('ip_address'=>'127.0.0.1'),'id DESC');
            
            //$dat = array(
			//	'first_name' => 'Admin',
            //    'last_name' => 'Members',
			//	'email' => 'admin@admin.com'
			//);
			
            //$this->crud_lib->insert('users',$dat);
            //$this->crud_lib->delete('users','6');
            //$this->crud_lib->update('users','2',$dat);
            
			$this->load->view('admin_message', $data);
		}
		
	}	
```
    
*We recommend that you open this README in another tab as you perform the tasks below. You can [(watch our video Soon)](https://youtu.be/) for a full demo of all the steps in this tutorial.*

---

## Links

[Codeigniter](https://github.com/bcit-ci/CodeIgniter)<br />
[Codeigniter-hmvc](https://github.com/j4chal/codeigniter-hmvc)<br />
[CodeIgniter-develbar](https://github.com/JCSama/CodeIgniter-develbar/)<br />
[CodeIgniter-Ion-Auth](https://github.com/benedmunds/CodeIgniter-Ion-Auth)<br />

---