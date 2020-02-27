<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Ansonika">
        <title> Your Solution</title>

        <!-- Favicons-->
        <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

        <!-- Bootstrap core CSS-->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Main styles -->
        <link href="css/admin.css" rel="stylesheet">
        <!-- Icon fonts-->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Plugin styles -->
        <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
        <!-- Your custom styles -->
        <link href="css/custom.css" rel="stylesheet">
    </head>

    <body class="fixed-nav sticky-footer" id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top" style="background-color: #1e166f;" id="mainNav">
            <a class="navbar-brand" href="index.php"><img src="img\brainzone.png" data-retina="true" alt="" width="50" height="50"></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>    </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav navbar-sidenav" id="exampleAccordion" style="top:14px">
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                        <a class="nav-link" href="index.php">
                            <i class="fa fa-fw fa-dashboard"></i>
                            <span class="nav-link-text">Dashboard</span>          </a>        </li>
                    <!--li class="nav-item" data-toggle="tooltip" data-placement="right" title="Videos">
      <a class="nav-link" href="videos.php">
        <i class="fa fa-fw fa-plus-circle"></i>
        <span class="nav-link-text">Add Videos</span>          </a>        </li>
       
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Books">
      <a class="nav-link" href="books.php">
        <i class="fa fa-fw fa-plus-circle"></i>
        <span class="nav-link-text">Add Books</span>          </a>        </li>
    
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Questions">
      <a class="nav-link" href="questions.php">
        <i class="fa fa-fw fa-plus-circle"></i>
        <span class="nav-link-text">Add Questions</span>          </a>        </li>
    
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Answers">
      <a class="nav-link" href="answers.php">
        <i class="fa fa-fw fa-plus-circle"></i>
        <span class="nav-link-text">Add Answers</span>          </a>        </li> -->


                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My profile">

                        <!--li class="nav-item" data-toggle="tooltip" data-placement="right" >
                        <a class="nav-link" href="user.php">
                          <i class="fa fa-fw fa-plus-circle"></i>
                          <span class="nav-link-text">Add User</span>          </a>        </li-->
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" >
                        <a class="nav-link" href="addmanager.php">
                            <i class="fa fa-fw fa-plus-circle"></i>
                            <span class="nav-link-text">Add Manager</span>          </a>        </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" >
                        <a class="nav-link" href="viewmanager.php">
                            <i class="fa fa-fw fa-plus-circle"></i>
                            <span class="nav-link-text">Manager Details</span>          </a>        </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" >
                        <a class="nav-link" href="viewuser.php">
                            <i class="fa fa-fw fa-plus-circle"></i>
                            <span class="nav-link-text">User Details</span>          </a>        </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" >
                        <a class="nav-link" href="addcategory.php">
                            <i class="fa fa-fw fa-plus-circle"></i>
                            <span class="nav-link-text">Add Category</span>          </a>        </li>
                    <!--li class="nav-item" data-toggle="tooltip" data-placement="right" >
<a class="nav-link" href="addsubcategory.php">
<i class="fa fa-fw fa-plus-circle"></i>
<span class="nav-link-text">Add Sub-Category</span>          </a>        </li>

                    <!--li class="nav-item" data-toggle="tooltip" data-placement="right" title="View">
                      <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                        <i class="fa fa-fw fa-eye"></i>
                        <span class="nav-link-text">View</span>          </a>
                      <ul class="sidenav-second-level collapse" id="collapseComponents">
                        <li>
                          <a href="viewuser.php">Users</a>            </li>
                  <li>
                          <a href="viewmanager.php">manager</a>            </li>
                    <!--li>
                    <a href="viewstore.php">Stores</a>            </li>
                    <li>  <a href="viewbook.php">Books</a> </li>
                     <li>  <a href="viewvideo.php">Videos</a> </li>
                      <li>  <a href="viewque.php">Questions</a> </li>
                       <li>  <a href="viewans.php">Answers</a> </li>
          
          
                </ul-->
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Complaints">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#Complaints" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-eye"></i>
                            <span class="nav-link-text">Complaints</span>          </a>
                        <ul class="sidenav-second-level collapse" id="Complaints">
                            <li>
                                <a href="viewpendingcomplaint.php">Pending</a>            </li>
                            <li>
                                <a href="viewsolvedcomplaint.php">Solved</a>            </li>
                            <!--li>
                            <a href="viewstore.php">Stores</a>            </li>
                            <li>  <a href="viewbook.php">Books</a> </li>
                             <li>  <a href="viewvideo.php">Videos</a> </li>
                              <li>  <a href="viewque.php">Questions</a> </li>
                               <li>  <a href="viewans.php">Answers</a> </li-->


                        </ul>
                        <!--li class="nav-item" data-toggle="tooltip" data-placement="right" title="Requests">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#req" data-parent="#exampleAccordion">
                          <i class="fa fa-fw fa-eye"></i>
                          <span class="nav-link-text">Requests</span>          </a>
                        <ul class="sidenav-second-level collapse" id="req">
                          <li>
                            <a href="requestsque.php">Questions</a>            </li>
                    <li>
                            <a href="requestsans.php">Answers</a>            </li>
                            <li>
                            <a href="requestsvid.php">Videos</a>            </li>
                            <li>  <a href="requestsbook.php">Books</a> </li>
                         
                      </ul></li></li></li></ul>
                              
                       
                        <ul class="sidenav-second-level collapse" id="collapseComponents">
                          <li>
                            <a href="charts.php">Charts</a>            </li>
                                      <li>
                            <a href="tables.php">Tables</a>            </li>
                        </ul-->
                    </li>
                </ul>
                <ul class="navbar-nav sidenav-toggler">
                    <li class="nav-item">
                        <a class="nav-link text-center" id="sidenavToggler">
                            <i class="fa fa-fw fa-angle-left"></i>          </a>        </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">

                    <li class="nav-item">

                    </li>
                    <div class="btn-group">
                        <!--div class="user-settings no-bg">
                            
                            <button type="button" class="btn btn-default no-bg micheal_btn">
                               <a href="logout2.php">Go to User Panel</a>

                            </button-->


                    </div>

                    <a class="btn btn-default no-bg micheal_btn" href="" data-toggle="modal" data-target="#exampleModal">
                        <font color="white"><i class="fa fa-sign-out"></i> Log Out</font></a>



            </div>
            <!--  <li class="nav-item">
               <a class="nav-link">
                 Kshitij Parkar</a>        </li> -->
            <!--  <li class="nav-item">
               <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                 <i class="fa fa-fw fa-sign-out"></i>Logout</a>        </li> -->
        </ul>
    </div>
</nav>
<!-- /Navigation-->