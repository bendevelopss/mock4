<!-- sidebar is php file so that it can be included to every VIEWED web pages
and add conditions using user login sessions (e.g. if user login session is admin it will
show specific links else not admin it will hide it)   using if else conditions in php

for page view/.../main.php
-->
 
 
    <div  style="background-image:url(assets/img/1.jpg); height:200px width: 100px;">

        <div class="container">
            <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>



            </div>

            <div style=" text-align: center; font-size:60pt; color:#FFFFFF;">
              <img src="assets/img/logo.png"; style="height:140px;" />

              <p><h1 style="font-family: 'Cinzel'; font-size: 65px ">PERSAN Construction Inc.</h1></p>
            </div>
            
        </div>
    </div>
    
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-11">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a class="menu-top" href="index.php">Home</a></li>

                            <li class="dropdown"">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Maintenance <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu" style="background-color: grey;">
            <li><a href="view/maintenance/equipment/main.php">Equipment</a></li>
            <li><a href="view/maintenance/labor/main.php">Labor</a></li>
            <li><a href="view/maintenance/materials/main.php">Materials</a></li>
           <li class="divider"></li>
           <li><a href="view/maintenance/client/main.php">Client</a></li>
           <li><a href="view/maintenance/employee/main.php">Employee</a></li>
           <li class="divider"></li>
            <li><a href="view/maintenance/scope/main.php">Scope of Work</a></li>
            <li><a href="view/maintenance/subcontractor/main.php">Subcontractor</a></li>
            <li><a href="view/maintenance/bar/main.php">Bar Chart</a></li>
            <li><a href="view/maintenance/line/main.php">Line Chart</a></li>
            <li><a href="view/maintenance/photo/main.php">Photo Gallery</a></li>
            <li><a href="view/maintenance/user/main.php">Project</a></li>
          </ul>
        </li>


                            <li class="dropdown"">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Utility <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu" style="background-color: grey;">
            <li><a href="view/utilities/admin/main.php">Manage Account</a></li>
          </ul>
        </li>
 <li class="dropdown"">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Transaction <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu" style="background-color: grey;">
            <li><a href="view/transaction/project/main.php">Projects</a></li>
           <li><a href="view/transaction/progress/main.php">Progress</a></li>

          </ul>
        </li>


                            <li><a href="#">Reports</a></li>
                             <li class="dropdown"">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;</i> <?php echo "$persan_user_type"; ?><span class="caret"></span></a>

          <ul class="dropdown-menu" role="menu" style="background-color: grey;">
            <li><a href="view/utilities/user/main.php">My Account</a></li>
           <li><a href="#" onclick="return logout1();">Logout</a></li>




                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
                </div>
        </div>
