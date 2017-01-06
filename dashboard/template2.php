<?php
	$team = $_REQUEST['team'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- Custom CSS -->
    <link href="css/ffdatabase.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin</a>
            </div>
            
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>
                    <li class="active">
                    	<a href="#" data-toggle="collapse" data-target="#team-links"><i class="fa fa-fw fa-dashboard"></i> Team Dashboard</a>
                    	
                    	<div class="collapse " id="team-links">
                    		<table id="team-table" class="table table-stripes table-hover" style="font-size: 10px;">
                    			<tbody>
                    			<tr><td>Arizona Cardinals</td></tr>
                    			<tr><td>Atlanta Falcons</td></tr>
                    			<tr><td>Baltimore Ravens</td></tr>
                    			</tbody>
                    		</table>
                    	</div>
                    </li>
                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                    <li>
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                    </li>
                    <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>


		<!-- ==================================================
			 ========== MAIN PAGE CONTENT =====================
			 ================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <b><?php echo $team; ?></b> <small>Dashboard</small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

				<!-- BUTTONS FORR DYNAMIC TESTING 
                <div class="row">
                    <div class="col-lg-12">
                   			<a href="#" class="teamName" id="FIRST">1</a>
							<a class="teamName" id="SECOND">2</a>
							<input type="button" id="myBtn">
                    </div>
                </div>
               -->
               
                <!-- /.row -->

                <div class="row pad-bottom-10" style="background-color: #f8f8f8; ">
                	
                	<h3 style="border-bottom: 1px solid #e7e7e7;" class="pad-left">League Rankings</h3>
                	<!-- Container 1 -->
                    <div class="col-md-2 col-sm-4 col-xs-6 border-right">
                    	<div class="row">
                    		<!-- h1 class="ranking-label"><b>OFF</b>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: green; font-weight: 600; font-size: 150%;">5</span></h1 -->
                    		<h1 class="ranking-value" style="color: green;">6</h1>
                    	</div>
                    	<div class="row">
                    		<p class="ranking-label" style="text-align: center;">Offense</p>
                    	</div>

                    </div>
                    
                    <!-- Container 2 -->
                    <div class="col-md-2 col-sm-4 col-xs-6 border-right">
                    	<div class="row">
                    		<!-- h1 class="ranking-label"><b>OFF</b>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: green; font-weight: 600; font-size: 150%;">5</span></h1 -->
                    		<h1 class="ranking-value" style="color: red;">23</h1>
                    	</div>
                    	<div class="row">
                    		<p class="ranking-label" style="text-align: center;">Defense</p>
                    	</div>
                    </div>
                    
                    <!-- Container 3 -->
                    <div class="col-md-2 col-sm-4 col-xs-6 border-right">
                    	<div class="row">
                    		<!-- h1 class="ranking-label"><b>OFF</b>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: green; font-weight: 600; font-size: 150%;">5</span></h1 -->
                    		<h1 class="ranking-value" style="color: #dbd700;">13</h1>
                    	</div>
                    	<div class="row">
                    		<p class="ranking-label" style="text-align: center;">Rushing</p>
                    	</div>
                    </div>
                    
                    <!-- Container 4 -->
                    <div class="col-md-2 col-sm-4 col-xs-6 border-right">
                    	<div class="row">
                    		<!-- h1 class="ranking-label"><b>OFF</b>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: green; font-weight: 600; font-size: 150%;">5</span></h1 -->
                    		<h1 class="ranking-value" style="color: green;">3</h1>
                    	</div>
                    	<div class="row">
                    		<p class="ranking-label" style="text-align: center;">Passing</p>
                    	</div>
                    </div>
                    
                    <!-- Container 5 -->
                    <div class="col-md-2 col-sm-4 col-xs-6 border-right">
                    	<div class="row">
                    		<!-- h1 class="ranking-label"><b>OFF</b>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: green; font-weight: 600; font-size: 150%;">5</span></h1 -->
                    		<h1 class="ranking-value" style="color: green;">67%</h1>
                    	</div>
                    	<div class="row">
                    		<p class="ranking-label" style="text-align: center;">Win %</p>
                    	</div>
                    </div>
                    
                    <!-- Container 6 -->
                   	<div class="col-md-2 col-sm-4 col-xs-6">
                    	<div class="row">
                    		<!-- h1 class="ranking-label"><b>OFF</b>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: green; font-weight: 600; font-size: 150%;">5</span></h1 -->
                    		<h1 class="ranking-value">23</h1>
                    	</div>
                    	<div class="row">
                    		<p class="ranking-label" style="text-align: center;">Offense</p>
                    	</div>
                    </div>
                </div>
                <!-- /.End top container row -->

                <div class="row v-margin-15">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i>  Current Season</h3>
                            </div>
                            <div class="panel-body">
                            	<div class="row">
                            		<div class="col-xs-12 col-sm-8 border-right">
                            			<div id="tester"></div>
                            		</div>
                            		<div class="col-xs-12 col-sm-4">
                            			<p>This will be the key/checkboxes</p>
                            		</div>
                            	</div>
                                <!-- div id="morris-area-chart"></div -->
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
				
				<!-- 3rd Row -->
                <div class="row">
                	
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Season Totals</h3>
                            </div>
                            <div class="panel-body">
                                <div id="bar-test"></div>
                                <div class="text-right">
                                    <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Season Leaders</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <span class="badge">just now</span>
                                        <i class="fa fa-fw fa-calendar"></i> Calendar updated
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">4 minutes ago</span>
                                        <i class="fa fa-fw fa-comment"></i> Commented on a post
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">23 minutes ago</span>
                                        <i class="fa fa-fw fa-truck"></i> Order 392 shipped
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">46 minutes ago</span>
                                        <i class="fa fa-fw fa-money"></i> Invoice 653 has been paid
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">1 hour ago</span>
                                        <i class="fa fa-fw fa-user"></i> A new user has been added
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">2 hours ago</span>
                                        <i class="fa fa-fw fa-check"></i> Completed task: "pick up dry cleaning"
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">yesterday</span>
                                        <i class="fa fa-fw fa-globe"></i> Saved the world
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">two days ago</span>
                                        <i class="fa fa-fw fa-check"></i> Completed task: "fix error on sales page"
                                    </a>
                                </div>
                                <div class="text-right">
                                    <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Order #</th>
                                                <th>Order Date</th>
                                                <th>Order Time</th>
                                                <th>Amount (USD)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>3326</td>
                                                <td>10/21/2013</td>
                                                <td>3:29 PM</td>
                                                <td>$321.33</td>
                                            </tr>
                                            <tr>
                                                <td>3325</td>
                                                <td>10/21/2013</td>
                                                <td>3:20 PM</td>
                                                <td>$234.34</td>
                                            </tr>
                                            <tr>
                                                <td>3324</td>
                                                <td>10/21/2013</td>
                                                <td>3:03 PM</td>
                                                <td>$724.17</td>
                                            </tr>
                                            <tr>
                                                <td>3323</td>
                                                <td>10/21/2013</td>
                                                <td>3:00 PM</td>
                                                <td>$23.71</td>
                                            </tr>
                                            <tr>
                                                <td>3322</td>
                                                <td>10/21/2013</td>
                                                <td>2:49 PM</td>
                                                <td>$8345.23</td>
                                            </tr>
                                            <tr>
                                                <td>3321</td>
                                                <td>10/21/2013</td>
                                                <td>2:23 PM</td>
                                                <td>$245.12</td>
                                            </tr>
                                            <tr>
                                                <td>3320</td>
                                                <td>10/21/2013</td>
                                                <td>2:15 PM</td>
                                                <td>$5663.54</td>
                                            </tr>
                                            <tr>
                                                <td>3319</td>
                                                <td>10/21/2013</td>
                                                <td>2:13 PM</td>
                                                <td>$943.45</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-right">
                                    <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <!-- script src="js/plugins/morris/morris.min.js"></script -->
    <!-- script src="js/plugins/morris/morris-data.js"></script -->
	
	<!-- Plotly -->
	<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>


	<script>
		var rushTrace = 
		{
			x: [738],
			y: ['Rush YDs'],
			orientation: 'h',
			marker: 
			{
				color: '#03a81c'
			},
			type: 'bar'
		};

		var rushAllowTrace = 
		{
			x: [694],
			y: ['Rush YDs\nAllowed'],
			orientation: 'h',
			marker:
			{
				color: '#b71500'
			},
			type: 'bar'
		};
		
		var passTrace =
		{
			x: [1024],
			y: ['PassYDs'],
			orientation: 'h',
			marker:
			{
				color: '#03a81c'
			},
			type: 'bar'
		};
		
		var passAllowTrace = 
		{
			x: [1116],
			y: ['Pass YDs\nAllowed'],
			orientation: 'h',
			marker:
			{
				color: '#b71500'
			},
			type: 'bar'
		};

		var data = [passAllowTrace, passTrace, rushAllowTrace, rushTrace];
		var layout = 
		{
			title: 'Bar Chart',
			barmode: 'stack'
		};
		Plotly.newPlot('bar-test', data, layout);
		
		
		
		// Plotly Testing BAR GRAPH
		/*
		var data = [{
  		type: 'bar',
  			x: [729, 1223, 954, 1392],
 			y: ['Rush YDs\nAllowed', 'Rush YDs','Pass YDs\nAllowed', 'Pass YDs'],
  			orientation: 'h'
		}];

		Plotly.newPlot('bar-test', data);
		*/
	</script>
		
	<script>
		//Plotly Testing LINE GRAPH
		TESTER = document.getElementById('tester');
		Plotly.plot( TESTER, [{
		x: [1, 2, 3, 4, 5],
		y: [1, 2, 4, 8, 16] }], {
		margin: { t: 0 } } );
		
		Plotly.plot( TESTER, [{
		x: [1, 2, 3, 4, 5],
		y: [3, 2, 3, 2, 8] }], {
		margin: { t: 0 } } );
		
		Plotly.plot( TESTER, [{
		x: [1, 2, 3, 4, 5],
		y: [11, 6, 8, 12, 8] }], {
		margin: { t: 0 } } );
	</script>
	
	<script type="text/javascript">
		// THIS IS FFOR TESTING REMOVE LATER
		$(document).ready(function()
		{
			function main(name)
			{
				//var input = document.getElementById("text").value;
				window.location.href = 'template.php?team=' + name;
			}
			//alert("test");
			$('.teamName').on('click', function()
				{
					//alert($(this).attr('id'));
					main($(this).attr('id'));
				});
		});
		
	</script>

	
</body>

</html>
