<!-- sidebar is php file so that it can be included to every VIEWED web pages
and add conditions using user login sessions (e.g. if user login session is admin it will
show specific links else not admin it will hide it)   using if else conditions in php

for page ../../../view/.../main.php
-->
 
 

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-11">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a class="menu-top" href="../../../index.php">Home</a></li>

                            <li class="dropdown"">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Maintenance <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu" style="background-color: grey;">
            <li><a href="../../../view/maintenance/equipment/main.php">Equipment</a></li>
            <li><a href="../../../view/maintenance/labor/main.php">Labor</a></li>
            <li><a href="../../../view/maintenance/materials/main.php">Materials</a></li>
           <li class="divider"></li>
           <li><a href="../../../view/maintenance/client/main.php">Client</a></li>
           <li><a href="../../../view/maintenance/employee/main.php">Employee</a></li>
           <li class="divider"></li>
            <li><a href="../../../view/maintenance/scope/main.php">Scope of Work</a></li>
            <li><a href="../../../view/maintenance/subcontractor/main.php">Subcontractor</a></li>
            <li><a href="../../../view/maintenance/part/main.php">Part</a></li>
            <!-- <li><a href="../../../view/maintenance/pay_item/main.php">Items</a></li>
          --> </ul>
        </li>


                            <li class="dropdown"">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Utility <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu" style="background-color: grey;">
            <li><a href="../../../view/others/manage/main.php">Manage Account</a></li>
          </ul>
        </li>
 <li class="dropdown"">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Task <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu" style="background-color: grey;">
            <li><a href="../../../view/transaction/PM/main.php">Project Manager</a></li>
           <li><a href="../../../view/transaction/safety/main.php">Safety Officer</a></li>
          <li><a href="../../../view/transaction/PI/main.php">Project Engineer</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Records <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu" style="background-color: grey;">
           <li><a href="../../../view/transaction/project/main.php">Projects</a></li>
           <li><a href="../../../view/transaction/photo/main.php">Photo Gallery</a></li>
           <li><a href="../../../view/transaction/progress/main.php">Reports</a></li>
          </ul>
        </li>

          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;</i> <?php echo "$persan_user_type"; ?><span class="caret"></span></a>

          <ul class="dropdown-menu" role="menu" style="background-color: grey;">
            <li><a href="../../../view/others/account/main.php">My Account</a></li>
           <li><a href="#" onclick="return logout2();">Logout</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
                </div>
        </div>
