    <nav class="container navbar navbar-expand-lg bg-blue navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <!-- md-auto: left, ml-auto: right, mx-auto: center -->
            <ul class="navbar-nav md-auto">
                <li class="nav-item"><a class="nav-link" id="0" onClick="nav_item_selected(0)" href="index.php">Home</a></li>
                <!-- Dropdown -->
               <li class="nav-item"><a class="nav-link" id="0" onClick="nav_item_selected(0)" href="events.php">Events</a></li>
                <!--<li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="1" onClick="nav_item_selected(1)" data-toggle="dropdown">
                        MIT - Courses
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="feedback.php">Computing and Networking</a>
                        <a class="dropdown-item" href="products.php">Business Informatics</a>
                    </div>
                </li>-->
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="about_us_ravi" id="1" onClick="nav_item_selected(1)" data-toggle="dropdown">
                        About Us
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile_ravi.php">Profile</a>
                        <a class="dropdown-item" href="campus.php">Campus</a>
                        
                    </div>
                </li>
                
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="about_us_ravi" id="1" onClick="nav_item_selected(1)" data-toggle="dropdown">
                        Courses
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="MIT-BI.php">MIT-BI</a>
                        <a class="dropdown-item" href="MIT-CN.php">MIT-CN</a>
                        
                    </div>
                </li>
                
                <li class="nav-item"><a class="nav-link" id="0" onClick="nav_item_selected(0)" href="contact_us.php">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" id="0" onClick="nav_item_selected(0)" href="feedback.php">Staff Feedbacks</a></li>
                
                <li class="nav-item"><a class="nav-link" id="0" onClick="nav_item_selected(0)" href="apply.php">Apply</a></li>
                
                
                
                <?php if(isset($_SESSION['valid_user'])): ?>
                <!--<li class="nav-item">
                    <a class="nav-link" href="apply.php" id="4" onClick="nav_item_selected(4)"><?php echo $_SESSION['name']; ?></a>
                </li>-->
                <li class="nav-item">
                    <!-- <a class="nav-link" href="member.php" id="5" style="display: none;">Sign-up</a> -->
                    <a class="nav-link" href="login .php" id="5" onClick="nav_item_selected(4)">Sign-out</a>
                </li>
                <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="login .php" id="4" onClick="nav_item_selected(4)">Log-in</a>
                </li>
                
                <?php endif; ?>
                
            </ul>
        </div>
        <form class="form-inline" action="search.php">
            <input class="form-control mr-sm-2" type="Search" name="key" placeholder="Search">
            <button class="btn light my-sm-0" type="submit">Search</button>
        </form>
    </nav>
    
    <style>
	.navbar{
    background-color: black;
	
}
	</style>
