<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/admin/dist')?>/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Petugas Perpustakaan</p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
          <br>
          <br>
            <li><a href="<?php echo base_url('/Perpustakaan/listBuku'); ?>"><i class="fa fa-circle-o"></i>Data Buku</a></li>
            <li><a href="<?php echo base_url('/Perpustakaan/listAnggota'); ?>"><i class="fa fa-circle-o"></i>Data Anggota</a></li>
            <li><a href="<?php echo base_url('/Perpustakaan/listPeminjaman'); ?>"><i class="fa fa-circle-o"></i>Data Peminjaman Buku</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Sign Out</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
