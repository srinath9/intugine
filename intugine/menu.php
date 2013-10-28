

 <ul class="nav pull-right">

                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                               
                                <li><a href="features.php"> Product</a></li>

                                <li class="dropdown">
                                    <a href="whatit.php">What it does</a>
                                </li>
                                <?php @session_start();
                                if(!isset($_SESSION["username"]))
                                {
                                    echo' <li class="">
                                    <a data-toggle="modal" href="#myModal" class="">Developers</a>
                                </li> ';
                                }
                                ?>
                                 <li class="dropdown">
                                   
                                    <a href="forum.php">Forum</a>
                                </li>
                                <li >
                                    <a href="preorder.php">Pre-Order</a>
                                </li>

                                <li><a href="contact.php">Contact Us</a></li>
                                 <?php @session_start();
                                if(isset($_SESSION["username"]))
                                {
                                    echo'<li>
  <a class="dropdown" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="/page.html">
    Developer\'s Area <span class="caret"></span>
  </a>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
     <li>
                                    <a href="profile.php">Profile</a>
                                </li> <li>
                                    <a href="settings.php">Settings</a>
                                </li> <li>
                                    <a href="logout.php">Logout</a>
                                </li>
  </ul></li>  ';
                                }
                               ?>
                              
                            </ul>