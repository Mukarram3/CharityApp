<div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                        <?php echo $_SESSION["name"]; ?>
                    </a>
                </div>
                <ul class="nav">
                    <!-- <li>
                        <a class="nav-link" href="dashboard.php">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li> -->
                    <li class="nav-item active">
                        <a class="nav-link" href="../user.php">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="../usersList/view.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Users</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="../slider/view.php">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Slider</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="../gallery/view.php">
                        <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
  <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
  <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z"/>
</svg></i>
                            <p>Gallery</p>
                        </a>
                    </li>
                    <!-- <li>
                        <a class="nav-link" href="../maps.php">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Maps</p>
                        </a>
                    </li> -->
                    <li>
                        <a class="nav-link" href="../sponoredChild/view.php">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Sponsored Child</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../about/view.php">
                            <i class="nc-icon nc-alien-33"></i>
                            <p>About</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../donators/view.php">
                            <i class="nc-icon nc-alien-33"></i>
                            <p>Donators</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../usersContacts/view.php">
                            <i class="nc-icon nc-alien-33"></i>
                            <p>Users Contacts</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../activities/view.php">
                            <i class="nc-icon nc-alien-33"></i>
                            <p>Activities</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>