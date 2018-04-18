<?php
if(!isset($_SESSION)){session_start();} 
      if(isset($_GET['lang']) && $_GET['lang']=="ru") {
      $_SESSION['language']='russian'; 
        if($_SERVER['REQUEST_METHOD']==="GET"){header("Location: " . $_SERVER['REQUEST_URI'] . "?");}
      }
      if(isset($_GET['lang']) && $_GET['lang']=="ua") {
      $_SESSION['language']='ukrainian';
        if($_SERVER['REQUEST_METHOD']==="GET"){header("Location: " . $_SERVER['REQUEST_URI'] . "?");}
      }
      if(isset($_GET['lang']) && $_GET['lang']=="en") {
      $_SESSION['language']='english';
        if($_SERVER['REQUEST_METHOD']==="GET"){header("Location: " . $_SERVER['REQUEST_URI'] . "?");}
      }
?>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><? echo $page_title; ?></title>	
    <!-- core CSS -->
<link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet" />
<link href="<?php echo base_url('assets/css/font-awesome.min.css')?>" rel="stylesheet" />

<link id="page_favicon" href="<?php echo base_url('assets/favicon.png')?>" rel="icon" type="image/x-icon" />   
</head>
  <body>
  
  <!--<div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="<?php echo base_url()?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
          
          <a class="navbar-right blog-nav-item" href="<?php echo base_url()?>admin"><i class="fa fa-tachometer" aria-hidden="true"></i> Admin</a>
        </nav>    
      </div>
  </div>-->
  
	<div class="container">
    
    
    
    
		<div class="row">
        <div class="span3">
<script language ="JavaScript"> 
<!-- 
function paramChange() { 
  document.form.submit();
} 
-->
</script> 
                <form action="" name="myForm" method="get">
                    <select onchange="document.forms['myForm'].submit()" id="selectbasic" name="lang" class="form-control"> 
                        <option selected="en"><?= $text_lang; ?></option>
                        <option value="en">English</option> 
                        <option value="ru">Русский</option>
                        <option value="ua">Українська</option>
                    </select>
                 </form>   
            </div>
        
<style>
.hovereffect {
width:100%;
/*height:100%;*/
float:left;
overflow:hidden;
position:relative;
text-align:center;
cursor:default;
border: 1px dashed #0080FF;
box-shadow: 0 0 10px rgba(0,0,0,0.5);
padding: 15px;
}

.hovereffect .overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  background-color: rgba(0,0,0,0.6);
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transform: translate(460px, -100px) rotate(180deg);
  -ms-transform: translate(460px, -100px) rotate(180deg);
  transform: translate(460px, -100px) rotate(180deg);
  -webkit-transition: all 0.2s 0.4s ease-in-out;
  transition: all 0.2s 0.4s ease-in-out;
}

.hovereffect img {
  display: block;
  position: relative;
  -webkit-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}

.hovereffect h2 {
  text-transform: uppercase;
  color: #fff;
  text-align: center;
  position: relative;
  font-size: 17px;
  padding: 10px;
  background: rgba(0, 0, 0, 0.6);
}

.hovereffect a.info {
  display: inline-block;
  text-decoration: none;
  padding: 7px 14px;
  text-transform: uppercase;
  color: #fff;
  border: 1px solid #fff;
  margin: 50px 0 0 0;
  background-color: transparent;
  -webkit-transform: translateY(-200px);
  -ms-transform: translateY(-200px);
  transform: translateY(-200px);
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}

.hovereffect a.info:hover {
  box-shadow: 0 0 5px #fff;
}

.hovereffect:hover .overlay {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transition-delay: 0s;
  transition-delay: 0s;
  -webkit-transform: translate(0px, 0px);
  -ms-transform: translate(0px, 0px);
  transform: translate(0px, 0px);
}

.hovereffect:hover h2 {
  -webkit-transform: translateY(0px);
  -ms-transform: translateY(0px);
  transform: translateY(0px);
  -webkit-transition-delay: 0.5s;
  transition-delay: 0.5s;
}

.hovereffect:hover a.info {
  -webkit-transform: translateY(0px);
  -ms-transform: translateY(0px);
  transform: translateY(0px);
  -webkit-transition-delay: 0.3s;
  transition-delay: 0.3s;
}
</style>        
<div class="row">
<br /><br />
<div class="col-sm-4 col-sm-offset-2">
    <div class="hovereffect">
        <img class="pull-right img-responsive" src="<?php echo base_url('modules/install/views/assets/front.png')?>" alt="">
        <div class="overlay">
           <h2>Front site</h2>
           <a class="info" href="<?php echo base_url()?>">Go Home</a>
        </div>
    </div>
</div>
<div class="col-sm-4">
    <div class="hovereffect">
        <img class="pull-left img-responsive" src="<?php echo base_url('modules/install/views/assets/back.png')?>" alt="">
        <div class="overlay">
           <h2>Administration</h2>
           <a class="info" href="<?php echo base_url()?>admin">Go Admin</a>
        </div>
    </div>
</div>
<br /><br />
</div>        
        
			
            
		</div>
        
        <div class="row">
            <div class="col-sm-12"><br />
                <div class="alert alert-success alert-dismissable">
                    
                      <strong><?= $text_Well_Done; ?></strong> 
                </div>
            </div>
        </div>
        
	</div>
	
	
   	
            
    
    <div id="footer">
      <div class="container">
        <p class="text-muted">
        Page rendered in <strong>{elapsed_time}</strong> seconds. 
        <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
        </p>
      </div>
    </div>
    
       
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
  </body>
</html>