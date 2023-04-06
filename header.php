<?php
?>
<header id="header" class="transparent-header-modern fixed-header-bg-white w-100">
            <div class="navB">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg navbar-light p-0"> <a class="navbar-brand position-relative" href="index.php"><img class="nav-logo" src="" alt=""></a>
                                
                                <div class="" id="">
                                    <nav style="flex; justify-content: 'space-between;'">
                                        
                                    <ul class="navbar-nav ">
                                        <b><li class=""> <a class="nav-link" href="../login-registration/index.php" role="button" aria-haspopup="true" aria-expanded="false">Home</a></li></b>
										
										<li class="nav-item"> <a class="nav-link" href="../login-registration/about.php">About</a> </li>
										
                                        <li class="nav-item"> <a class="nav-link" href="../login-registration/games.php">Games</a> </li>
                            
                                        
										<?php  if(isset($_SESSION['uid']))
										{ ?>
										<li class="">
											
												<li class="nav-item"> <a class="nav-link" href="../login-registration/profile.php">Profile</a> </li>
             	
												<li class="nav-item"><a class="nav-link" href="../login-registration/logout.php">Logout</a> </li>	
                                        
											
                                        </li>
										<?php } else { ?>
										<li class="nav-item"> <a class="nav-link" href="../login-registration/login.php">Login/Register</a> </li>
										<?php } ?>
										
                                    </ul>
                                    
                                
                                    </nav> 
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>