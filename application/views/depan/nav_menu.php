<nav>
  <ul class="nav nav-pills" id="mainNav">
    <li class="<?php echo activate_menu('');?>">
      <a href="<?php echo base_url();?>">
        Home
      </a>
    </li>
    <li class="dropdown <?php echo activate_menu('kata_sambutan'); echo activate_menu('guru'); echo activate_menu('visi_misi'); echo activate_menu('galeri'); echo activate_menu('fasilitas');?>">
      <a class="dropdown-toggle" href="#">
        Profil Sekolah
      </a>
      <ul class="dropdown-menu">
        <li><a href="<?php echo base_url('kata_sambutan')?>">Sambutan Kepala Sekolah</a></li>
        <li class="dropdown-submenu">
          <a class="dropdown-toggle" href="#">Guru</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo base_url('guru/bsm')?>">Bosowa School Makassar</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('guru/sab')?>">Sekolah Alam Bosowa</a></li>
          </ul>
        </li>
        <li><a href="<?php echo base_url('visi_misi')?>">Visi dan Misi</a></li>
        <li><a href="<?php echo base_url('sejarah')?>">Sejarah</a></li>
        <li><a href="<?php echo base_url('galeri')?>">Galeri</a></li>
        <li class="dropdown-submenu">
          <a class="dropdown-toggle" href="#">Fasilitas</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo base_url('fasilitas/fasilitas_bsm')?>">Bosowa School Makassar</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('fasilitas/fasilitas_sab')?>">Sekolah Alam Bosowa</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li class="dropdown <?php echo activate_menu('Bsm'); echo activate_menu('Sab');?>">
      <a class="dropdown-toggle" href="#">
        Program
      </a>
      <ul class="dropdown-menu">
        <li class="dropdown-submenu">
          <a class="dropdown-item" href="#">Bosowa School Makassar</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo base_url('Bsm/info_sma')?>">SMA</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('Bsm/info_smp')?>">SMP</a></li>
          </ul>
        </li>
        <li class="dropdown-submenu">
          <a class="dropdown-item" href="#">Sekolah Alam Bosowa</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo base_url('Sab/info_sd')?>">SD</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('Sab/info_tk')?>">TK</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('Sab/info_pg')?>">Play Group</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li class="dropdown <?php echo activate_menu('berita'); echo activate_menu('umum'); echo activate_menu('pengumuman'); echo activate_menu('insight_reading'); echo activate_menu('emagazine');?>">
      <a class="dropdown-toggle" href="#">
        Info
      </a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="<?php echo base_url('berita')?>">Berita</a></li>
        <li><a class="dropdown-item" href="<?php echo base_url('umum')?>">Berita Umum / Media Massa</a></li>
        <li><a class="dropdown-item" href="<?php echo base_url('pengumuman')?>">Pengumuman | Acara</a></li>
        <li><a class="dropdown-item" href="<?php echo base_url('insight_reading')?>">Insight reading</a></li>
        <li><a class="dropdown-item" href="<?php echo base_url('emagazine')?>">E-Magazine</a></li>
      </ul>
    </li>
    <li class="<?php echo activate_menu('prestasi_siswa');?>">
      <a href="<?php echo base_url('prestasi_siswa')?>">
        Prestasi
      </a>
    </li>
    <li class="dropdown <?php echo activate_menu('program');?>">
      <a class="dropdown-toggle" href="#">Keunggulan</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="<?php echo base_url('program/program_bsm')?>">Bosowa School Makassar</a></li>
        <li><a class="dropdown-item" href="<?php echo base_url('program/program_sab')?>">Sekolah Alam Bosowa</a></li>
      </ul>
    </li>
    <li class="<?php echo activate_menu('kontak');?>">
      <a href="<?php echo base_url('kontak')?>">
        Hubungi Kami
      </a>
    </li>
  </ul>
</nav>
