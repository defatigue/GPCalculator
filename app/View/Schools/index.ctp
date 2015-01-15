

        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="index.php"><i class="fa fa-table fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="yourtasks.php"><i class="fa fa-edit fa-fw"></i>Your Tasks</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i> Appraisal Setup<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="./viewappraisees.php">View Appraisees</a>
                            </li>
                            <li>
                                <a href="./createtasks.php">Create Tasks</a>
                            </li>
                            <li>
                                <a href="./managetasks.php">Manage Tasks</a>

                            </li>
                          </ul>
                        <!-- /.nav-second-level -->
                    </li> 
                    
					<!--<li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i> Employee Setup <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="./createemployee.php">Create Employees</a>
                            </li>
							<li>
                                <a href="./manageemployee.php">Manage Employees</a>
                            </li>
                            </ul>
                        <!-- /.nav-second-level -->
                   <!-- </li> -->
					
                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->

<div id="page-wrapper">
            <div class="row">
			<div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
					</div>
                <!-- /.col-lg-12 -->
               </div>
            <!-- /.row -->

                    <div class="row">
                    <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Summary
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-employee">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>School_Name</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach($schools as $school){

										/*$result = getEmployeeByID(16);

										$row = mysql_fetch_assoc($result);
										$row2 = mysql_fetch_assoc(getDeptNameByID($row['deptid']));
										$row3 = mysql_fetch_assoc(getJobTitleByID($row['jobtitleid']));
										$row4 = mysql_fetch_assoc(getEmployeeByID($row['linemanager']));*/
								echo "<tr class=\"odd gradeA\">";
 								echo"<td><b>".$school['School']['school_id']."</b></td>";
								echo"<td>".$school['School']['school_name']."</td>";
								echo"</tr>";
												}

										?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->


            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>

</html>
