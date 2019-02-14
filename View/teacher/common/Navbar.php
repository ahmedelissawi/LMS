<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <button id="menu-toggle" type="button" class="btn btn-outline-success"><i class="fas fa-bars"></i></button>
    <a class="navbar-brand" style="padding-left: 10px" href="./home.php?id=<?= $user->ID ?>"><i class="fas fa-chalkboard-teacher"></i> LMS</a>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown no-arrow">

            <button class="btn Navbtn dropdown-toggle" id="userDropdown"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../Images/User.png" class="rounded-circle" alt="User Img" width="30px" height="30px">&nbsp; &nbsp; <?= $user->profession?>  <?= $user->Name ?></button>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="./home.php?id=<?= $user->ID ?>"><i class="fas fa-home"></i>&nbsp; &nbsp; Home</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="./Courses.php?id=<?= $user->ID ?>"><i class="fas fa-book-open"></i>&nbsp; &nbsp; Courses</a>
                <a class="dropdown-item" href="./students.php?id=<?= $user->ID ?>"><i class="fas fa-user-graduate"></i>&nbsp; &nbsp; Students</a>
                <a class="dropdown-item" href="./editAccountInfo.php?id=<?= $user->ID ?>"><i class="fas fa-cog"></i>&nbsp; &nbsp; Settings</a>
                <a class="dropdown-item" href="../../index.php?id=<?= $user->ID ?>"><i class="fas fa-sign-out-alt"></i>&nbsp; &nbsp; Sign out</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="./about_us.php?id=<?= $user->ID ?>"><i class="fas fa-info"></i>&nbsp; &nbsp; About us</a>
                <a class="dropdown-item" href="./contact_us.php?id=<?= $user->ID ?>"><i class="fas fa-info"></i>&nbsp; &nbsp; Contact us</a>
            </div>
        </li>
    </ul>
</nav>


<div id="wrapper">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
            <?= $user->profession?>  <?= $user->Name ?>
            </li>
            <li>
                <a href="./home.php?id=<?= $user->ID ?>"><i class="fas fa-home"></i>&nbsp; &nbsp; Home</a>
            </li>
            <li>
                <a href="./Courses.php?id=<?= $user->ID ?>"><i class="fas fa-book-open"></i>&nbsp; &nbsp; Courses</a>
            </li>
            <li>
                <a href="./students.php?id=<?= $user->ID ?>"><i class="fas fa-user-graduate"></i>&nbsp; &nbsp; Students</a>
            </li>
            <li>
                <a href="./time_table.php?id=<?= $user->ID ?>"><i class="far fa-calendar-times"></i>&nbsp; &nbsp; Time Table</a>
            </li>

            <li>
                <a href="./files_Annoucments.php?id=<?= $user->ID ?>"><i class="fas fa-folder"></i>&nbsp; &nbsp; Files</a>
            </li>
            <li>
                <a href="./about_us.php?id=<?= $user->ID ?>"><i class="fas fa-info"></i>&nbsp; &nbsp; About us</a>
            </li>

            <li>
                <a href="./contact_us.php?id=<?= $user->ID ?>"><i class="fas fa-info"></i>&nbsp; &nbsp; Contact us</a>
            </li>
        </ul>
    </div>
