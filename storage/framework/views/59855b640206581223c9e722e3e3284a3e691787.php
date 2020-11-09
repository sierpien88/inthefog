<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo e(route('home')); ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>InTheFog</b>CMS</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>InTheFog</b>CMS</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo e(asset("/bower_components/admin-lte/dist/img/user2-160x160.jpg")); ?>" class="user-image" alt="User Image">
                        <span class="hidden-xs"><?php echo e(auth()->user()->name); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?php echo e(asset("/bower_components/admin-lte/dist/img/user2-160x160.jpg")); ?>" class="img-circle" alt="User Image">

                            <p>
                                <?php echo e(auth()->user()->name); ?> <?php echo e(auth()->user()->surname); ?>

                                <?php switch(auth()->user()->role):
                                    case (1): ?>
                                    <small>Pracownik</small>
                                    <?php break; ?>

                                    <?php case (2): ?>
                                    <small>Manager</small>
                                    <?php break; ?>

                                    <?php case (3): ?>
                                    <small>Administrator</small>
                                    <?php break; ?>

                                    <?php default: ?>
                                    <small>Bez roli</small>

                                <?php endswitch; ?>
                            </p>
                        </li>
                        <!-- Menu Body -->

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="" class="btn btn-default btn-flat">Edycja profilu</a>
                            </div>
                            <div class="pull-right">
                                <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" class="btn btn-default btn-flat">Wyloguj</a>
                                <form id="frm-logout" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>

                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>