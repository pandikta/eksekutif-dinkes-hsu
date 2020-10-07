<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion col-lg-1,5" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class=" fas fa-chalkboard-teacher"></i>
        </div>
        <div class="sidebar-brand-text mx-3" style="padding-right: 5%;">Eksekutif Dinkes HSU</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">


    <?php
    $role_id = $this->session->userdata('role_id');
    $query = "SELECT `menu`.`id`,`menu`.`name_menu` FROM `menu`
                JOIN `user_access` ON `menu`.`id` = `user_access`.`menu_id`
                WHERE `user_access`.`role_id` = $role_id ORDER BY `role_id` ASC";

    $menu = $this->db->query($query)->result_array();
    ?>
    <?php foreach ($menu as $m) : ?>
        <div class="sidebar-heading pt-3">
            <?= $m['name_menu']; ?>
        </div>
        <!-- SIAPKAN/MENAMPILKAN SUB-MENU PADA SIDEBAR SESUAI DENGAN LAMAN ROLE MENU -->
        <?php
        $menuId = $m['id'];
        $querySubMenu = "SELECT *
                            FROM `menu` JOIN `sub_menu` ON `menu`.`id` = `sub_menu`.`menu_id`
                            WHERE `sub_menu`.`menu_id` = $menuId 
                            AND `sub_menu`.`is_active` = 1
                            ";
        $subMenu = $this->db->query($querySubMenu)->result_array(); //sub menu berdasarkan menu
        ?>

        <?php foreach ($subMenu as $sm) : ?>
            <?php if ($title == $sm['title']) : ?>
                <li class="nav-item active">
                <?php else : ?>
                <li class="nav-item">
                <?php endif; ?>
                <a class="nav-link pb-0 pt-3" href="<?= base_url($sm['url']); ?>">
                    <i class="<?= $sm['icon']; ?> "></i>
                    <span><?= $sm['title']; ?> </span></a>
                </li>
            <?php endforeach ?>
            <!-- Divider/garis putih-->
            <hr class="sidebar-divider mt-2">
        <?php endforeach ?>








        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
                <i class="fas fa-sign-out-alt fa-fw"></i>
                <span>Keluar</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

</ul>
<!-- End of Sidebar -->