<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
    <title>Control Panel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
<body>
<header class="header">
    <nav class="navbar navbar-toggleable-md navbar-light pt-0 pb-0 ">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand p-0 mr-5" href="#"><img src="http://via.placeholder.com/61x14"></a>
        <div class="float-left"> <a href="#" class="button-left"><span class="fa fa-fw fa-bars "></span></a> </div>
        <div class="collapse navbar-collapse flex-row-reverse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item dropdown messages-menu">
                  <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-bell-o"></i>
                    <span class="label label-success bg-success">10</span>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <ul class="dropdown-menu-over list-unstyled">
                      <li class="header-ul text-center">You have 4 messages</li>
                      <li>
                        <!-- inner menu: contains the actual data -->
                        <ul class="menu list-unstyled">
                          <li><!-- start message -->
                          <a href="#">
                            <div class="pull-left">
                              <img src="http://via.placeholder.com/160x160" class="rounded-circle  " alt="User Image">
                            </div>
                            <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                        <!-- end message -->
                        <li>
                          <a href="#">
                            <div class="pull-left">
                              <img src="http://via.placeholder.com/160x160" class="rounded-circle " alt="User Image">
                            </div>
                            <h4>
                            AdminLTE Design Team
                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <div class="pull-left">
                              <img src="http://via.placeholder.com/160x160" class="rounded-circle " alt="User Image">
                            </div>
                            <h4>
                            Developers
                            <small><i class="fa fa-clock-o"></i> Today</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <div class="pull-left">
                              <img src="http://via.placeholder.com/160x160" class="rounded-circle " alt="User Image">
                            </div>
                            <h4>
                            Sales Department
                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <div class="pull-left">
                              <img src="http://via.placeholder.com/160x160" class="rounded-circle " alt="User Image">
                            </div>
                            <h4>
                            Reviewers
                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="footer-ul text-center"><a href="#">See All Messages</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item dropdown notifications-menu">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-warning bg-warning">10</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <ul class="dropdown-menu-over list-unstyled">
                    <li class="header-ul text-center">You have 10 notifications</li>
                    <li>
                      <!-- inner menu: contains the actual data -->
                      <ul class="menu list-unstyled">
                        <li>
                          <a href="#">
                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                            page and may cause design problems
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-users text-red"></i> 5 new members joined
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-user text-red"></i> You changed your username
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="footer-ul text-center"><a href="#">View all</a></li>
                  </ul>
                </div>
              </li>
              
              <li class="nav-item dropdown  user-menu">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="http://via.placeholder.com/160x160" class="user-image" alt="User Image" >
                  <span class="hidden-xs">bootstrap develop</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <div class="main" style="display:flex;">
        <aside style="width:20%; height:100vh;">
          <div class="sidebar left ">
            <div class="user-panel">
              <div class="pull-left image">
                <img src="http://via.placeholder.com/160x160" class="rounded-circle" alt="User Image">
              </div>
              <div class="pull-left info">
                <p>bootstrap develop</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
              </div>
            </div>
            <ul class="list-sidebar bg-defoult">
              <li> <a href="/adminpanel" class="active" > <i class="fa fa-home"></i> <span class="nav-label"> Dashboards </span></a></li>
            <li> <a href="/adminpanel/user"><i class="fa fa-users"></i> <span class="nav-label">Users</span></a> </li>
            <li> <a href="/"><i class="fa fa-caret-square-left"></i> <span class="nav-label">Go to site</span></a> </li>
            <li> <a href="/adminpanel/logout"><i class="fa fa-sign-out-alt"></i><span class="nav-label">Log out</span></a></li>            
      <!--<li> <a href=""><i class="fa fa-pie-chart"></i> <span class="nav-label">Metrics</span> </a></li>
      <li> <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span></a> </li>
      <li> <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span></a> </li>
      <li> <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span></a> </li>
      <li> <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span></a> </li>
      <li> <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span></a> </li>
      -->
    </ul>
    </div>
    
    </aside>
    <div class="content right" style="width:80%; padding:10px;">
        <?php include $content_view; ?>
    </div>
    </div>
<style>
@import "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
@import url('https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700');

body{ font-size: 14px; color: #333; list-style: 26px;font-family: 'Roboto', sans-serif; }

/** ======================  base css ==============================**/

a:hover{ text-decoration: none; }
/** ======================  header ==============================**/
.header{ background-color: #3c8dbc }
.header .dropdown-menu {
    position: absolute;
    right: 0;
    left: auto;
    border-radius: 0px;
}
.header .user-image {
    float: left;
    width: 25px;
    height: 25px;
    border-radius: 50%;
    margin-right: 10px;
    margin-top: -2px;
}

.header .navbar-light .navbar-nav .nav-link{ color: #fff }
.header .navbar-light .navbar-nav .nav-link:hover, .header .navbar-light .navbar-nav .nav-link:focus   {
    
       background: rgba(0,0,0,0.1);
    color: #f6f6f6;
}
.header .fa.fa-fw.fa-bars{ color: #fff; }
.header .navbar-light .navbar-nav .nav-link {
    color: #fff;
    padding: 10px 20px;
    position: relative;
}
.header  li>a>.label {
    position: absolute;
    top: 9px;
    right: 7px;
    text-align: center;
    font-size: 9px;
    padding: 2px 3px;
    line-height: .9; background-color: #333;    border-radius: .25em;
}
.header  li>a:after{ display: none; }

.header-ul{    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
    background-color: #ffffff;
    padding: 7px 10px;
    border-bottom: 1px solid #f4f4f4;
    color: #333;
    font-size: 14px;}

    .navbar-nav>.notifications-menu>.dropdown-menu, .navbar-nav>.messages-menu>.dropdown-menu, .navbar-nav>.tasks-menu>.dropdown-menu {
    width: 280px;
    padding: 0 0 0 0;
    margin: 0;
    top: 100%;
}
.navbar-nav>.messages-menu>.dropdown-menu li .menu>li>a>div>img {
    margin: auto 10px auto auto;
    width: 40px;
    height: 40px;
}
.navbar-nav>.messages-menu>.dropdown-menu li .menu>li>a ,.navbar-nav>.notifications-menu>.dropdown-menu li .menu>li>a{
    margin: 0;
    padding: 10px 10px;
        display: block;
    white-space: nowrap;
    border-bottom: 1px solid #f4f4f4;
}
.navbar-nav>.messages-menu>.dropdown-menu li .menu>li>a>h4 {
    padding: 0;
    margin: 0 0 0 45px;
    color: #333;
    font-size: 15px;
    position: relative;
}
.navbar-nav>.messages-menu>.dropdown-menu li .menu>li>a>p {
    margin: 0 0 0 45px;
    font-size: 12px;
    color: #888888;
}

.footer-ul a{
	border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 4px;
    border-bottom-left-radius: 4px;
    font-size: 12px;
    background-color: #fff;
    padding: 7px 10px;
    border-bottom: 1px solid #eeeeee;
    color: #333 ; display: block;
    }

      .dropdown-menu-over .menu{  max-height: 200px;
    margin: 0;
    padding: 0;
    list-style: none;
    overflow-x: hidden;}

    .navbar-nav>.notifications-menu>.dropdown-menu li .menu>li>a {
    color: #444444;
    overflow: hidden;
    text-overflow: ellipsis;
    padding: 10px;
}
.navbar-nav>.notifications-menu>.dropdown-menu li .menu>li>a>.glyphicon, .navbar-nav>.notifications-menu>.dropdown-menu li .menu>li>a>.fa, .navbar-nav>.notifications-menu>.dropdown-menu li .menu>li>a>.ion {
    width: 20px;
}

a.navbar-brand {
    width: 165px;
}


/***    left menu ****/

/***********************  TOP Bar ********************/
.sidebar{background-color:#000;transition: all 0.5s  ease-in-out; height:100%; }
.bg-defoult{background-color:#222; height:100%;}
.sidebar ul{ list-style:none; margin:0px; padding:0px;  }
.sidebar li a,.sidebar li a.collapsed.active{ display:block; padding:8px 12px; color:#fff;border-left:0px solid #dedede;  text-decoration:none}
.sidebar li a.active{background-color:#000;border-left:5px solid #dedede; transition: all 0.5s  ease-in-out}
.sidebar li a:hover{background-color:#000 !important;}
.sidebar li a i{ padding-right:5px;}
.sidebar ul li .sub-menu li a{ position:relative}
.sidebar ul li .sub-menu li a:before{
    font-family: FontAwesome;
    content: "\f105";
    display: inline-block;
    padding-left: 0px;
    padding-right: 10px;
    vertical-align: middle;
}
.sidebar ul li .sub-menu li a:hover:after {
    content: "";
    position: absolute;
    left: -5px;
    top: 0;
    width: 5px;
    background-color: #111;
    height: 100%;
}
.sidebar ul li .sub-menu li a:hover{ background-color:#222; padding-left:20px; transition: all 0.5s  ease-in-out}
.sub-menu{ border-left:5px solid #dedede;}
	.sidebar li a .nav-label,.sidebar li a .nav-label+span{ transition: all 0.5s  ease-in-out}
	

	.sidebar.fliph li a .nav-label,.sidebar.fliph li a .nav-label+span{ display:none;transition: all 0.5s  ease-in-out}
	.sidebar.fliph {
    width: 42px;transition: all 0.5s  ease-in-out;
   
}
	
.sidebar.fliph li{ position:relative}
.sidebar.fliph .sub-menu {
    position: absolute;
    left: 39px;
    top: 0;
    background-color: #222;
    width: 150px;
    z-index: 100;
}
	

	.user-panel {
    clear: left;
    display: block;
    float: left;
}
.user-panel>.image>img {
    width: 100%;
    max-width: 45px;
    height: auto;
}
.user-panel>.info,  .user-panel>.info>a {
    color: #fff;
}
.user-panel>.info>p {
    font-weight: 600;
    margin-bottom: 9px;
}
.user-panel {
    clear: left;
    display: block;
    float: left;
    width: 100%;
    margin-bottom: 15px;
    padding: 25px 15px;
    border-bottom: 1px solid;
}
.user-panel>.info {
    padding: 5px 5px 5px 15px;
    line-height: 1;
    position: absolute;
    left: 55px;
}

.fliph .user-panel{ display: none; }
</style>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function(){
        $('.button-left').click(function(){
       $('.sidebar').toggleClass('fliph');
   });
});
</script>
</body>
</html>

