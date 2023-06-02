<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Admin Dashboard | CoC E-leaning</title>
    <link rel="icon" href="img/icon.png" type="image/icon type">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="css/adminDashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
<nav id="sidebar">
            <div class="sidebar-header">
            <div class="brand">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-journal-bookmark-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 1h6v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8V1z"/>
                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                </svg>
                <span><strong>CoC | E-Learning</strong></span>
        </div>
            </div>

            <ul class="list-unstyled components">
                <p>Welcome <b>Admin</b></p>
                
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                    </svg>
                    Home</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Classes</a></li>
                        <li><a href="#">Teachers</a></li>
                        <li><a href="#">E-Books</a></li>
                        <li><a href="#">Students</a></li>
                    </ul>
                </li>
                <li><a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                    Search for Class</a></li>
                <li><a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                </svg>   
                    Requested List</a></li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                    </svg>
                    Manage</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li><a href="#">Overview</a></li>
                        <li><a href="#">Manage Data</a></li>
                    </ul>
                </li>
               
                <li><a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
                </svg>  
                 Support</a></li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li><a href="" class="download">
                    Print Report</a></li>
                <li><a href="index.php" class="article">
                    Download Report</a></li>
            </ul>
</nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-danger">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="userDashboard.php">
                                Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">
                                Calender</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">
                                Policy</a></li>
                            <li class="nav-item"><a class="nav-link" href="index.php">
                                Log out</a></li>
                        </ul>
                    </div>
                </div>
            </nav>


            <h1 class="mb-4">Dashboard</h1>


            <div class="port-performance">
            <span><b>Portfolio Performance</b></span>
            
            <div class="table-1 mt-4 mb-4">
            <div class="row">
                <div class="col-md-4 col-xs-12">
                   
                    <table>
                        <tr>
                            <td class="td-image" rowspan="2"><img src="https://cdn3.iconfinder.com/data/icons/education-flat-icon-1/130/135-512.png" alt=""></td>
                            <th class="td-header">Total Classes</th>
                        </tr>
                        <tr>
                            <td class="td-content">12</td>
                        </tr>
                    </table>

                </div>
                <div class="col-md-4 col-xs-12">
                <table>
                        <tr>
                            <td class="td-image" rowspan="2"><img src="https://cdn-icons-png.flaticon.com/512/1089/1089129.png" alt=""></td>
                            <th class="td-header">Total Teachers</th>
                        </tr>
                        <tr>
                            <td class="td-content">54</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-4 col-xs-12">
                <table>
                        <tr>
                            <td class="td-image" rowspan="2"><img src="https://cdn0.iconfinder.com/data/icons/kameleon-free-pack-rounded/110/Student-3-512.png" alt=""></td>
                            <th class="td-header">Total Students</th>
                        </tr>
                        <tr>
                            <td class="td-content">206</td>
                        </tr>
                    </table>
                </div>
            </div>
            </div>
                <a class="see-more" href="">
                    View Complete Report
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                    </svg> 
                </a>
            </div>


            
            <!--<div class="line"></div>-->



            <div class="row">
            <div class="col-lg-6 col-md-12">

            <div class="port-performance">
            <span><b>Task</b></span>

                    <div class="table-2 mt-4 mb-4">
                    <?php include('task-list.php') ?>
                    </div>

                    <a class="see-more" href="">
                    View Complete Report
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                    </svg> 
                    </a>
            </div>
            </div>

            <div class="col-lg-6 col-md-12 custom-scrollbar-css">
            <div class="port-performance">
            <span><b>Progress</b></span>

                    <div class="table-2 mt-4 mb-4">
                    <?php include('line-progress.php') ?>
                    </div>

                    <a class="see-more" href="">
                    View Complete Report
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                    </svg> 
                    </a>

            </div>

            </div>
            </div>
        
            
            
                
            
            <div class="row">
                <div class="col-lg-4 col-md-12">
                <div class="row-detail">
                    <span><b>CS</b></span>
                    <div class="row">
                    <table class="col-6 mt-4 mb-4">
                        <tr>
                            <td class="td-image" rowspan="2"><img src="https://cdn-icons-png.flaticon.com/512/201/201631.png" alt=""></td>
                            <th class="td-header">E-Book</th>
                        </tr>
                        <tr>
                            <td class="td-content">25</td>
                        </tr>
                    </table>

                    <table class="col-6 mt-4 mb-4">
                        <tr>
                            <td class="td-image" rowspan="2"><img src="https://cdn-icons-png.flaticon.com/512/432/432408.png" alt=""></td>
                            <th class="td-header">Course</th>
                        </tr>
                        <tr>
                            <td class="td-content">4</td>
                        </tr>
                    </table>
                    </div>
                </div>
                </div>

                <div class="col-lg-4 col-md-12">
                <div class="row-detail">
                    <span><b>IT</b></span>
                    <div class="row">
                    <table class="col-6 mt-4 mb-4">
                        <tr>
                            <td class="td-image" rowspan="2"><img src="https://cdn-icons-png.flaticon.com/512/201/201631.png" alt=""></td>
                            <th class="td-header">E-Book</th>
                        </tr>
                        <tr>
                            <td class="td-content">36</td>
                        </tr>
                    </table>

                    <table class="col-6 mt-4 mb-4">
                        <tr>
                            <td class="td-image" rowspan="2"><img src="https://cdn-icons-png.flaticon.com/512/432/432408.png" alt=""></td>
                            <th class="td-header">Course</th>
                        </tr>
                        <tr>
                            <td class="td-content">5</td>
                        </tr>
                    </table>
                    </div>
                </div>
                </div>

                <div class="col-lg-4 col-md-12">
                <div class="row-detail">
                    <span><b>GIS</b></span>
                    <div class="row">
                    <table class="col-6 mt-4 mb-4">
                        <tr>
                            <td class="td-image" rowspan="2"><img src="https://cdn-icons-png.flaticon.com/512/201/201631.png" alt=""></td>
                            <th class="td-header">E-Book</th>
                        </tr>
                        <tr>
                            <td class="td-content">17</td>
                        </tr>
                    </table>

                    <table class="col-6 mt-4 mb-4">
                        <tr>
                            <td class="td-image" rowspan="2"><img src="https://cdn-icons-png.flaticon.com/512/432/432408.png" alt=""></td>
                            <th class="td-header">Course</th>
                        </tr>
                        <tr>
                            <td class="td-content">3</td>
                        </tr>
                    </table>
                    </div>
                </div>
                </div>



            </div>

            
            <div class="btn btn-danger mt-4 d-flex justify-content-center">
            <a class="see-more" style="color: white; padding: 0.5em;" href="">
                    View Complete Report
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                    </svg> 
            </a>
            </div>

        </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
</body>

</html>