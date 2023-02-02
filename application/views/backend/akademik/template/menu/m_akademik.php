<li class="has-sub">
	<a href="javascript:;"><b class="caret pull-right"></b><i class="ion-ios-gear-outline bg-blue"></i><span>Management Setup</span></a>
	<ul class="sub-menu">
		<li><a href="<?php echo base_url('setup/'); ?>"><i	class="menu-icon fa fa-paper-plane "></i>&nbsp;Institut</a></li>
		<li><a href="<?php echo base_url('periode/'); ?>"><i class="menu-icon fa fa-paper-plane"></i>&nbsp;Periode</a></li>	
		<li><a href="<?php echo base_url('programkategori/'); ?>"><i class="menu-icon fa fa-paper-plane"></i>&nbsp;Kategori Program</a></li>	
		<li><a href="<?php echo base_url('program/'); ?>"><i class="menu-icon fa fa-paper-plane"></i>&nbsp;Program</a></li>
		<li><a href="<?php echo base_url('prodi/'); ?>"><i class="menu-icon fa fa-paper-plane"></i>&nbsp;Program studi</a></li>
	</ul>
</li>

<li class="has-sub">
	<a href="javascript:;"><b class="caret pull-right"></b><i
			class="ion-ios-color-filter-outline bg-purple"></i><span>Master Data</span></a>
			<ul class="sub-menu">
		<li><a href="<?php echo base_url('users/'); ?>"><i	class="menu-icon fa fa-paper-plane "></i>&nbsp;Data User</a></li>
		<li><a href="#"><i	class="menu-icon fa fa-paper-plane "></i>&nbsp;Data Instansi</a></li>
		<li><a href="#"><i	class="menu-icon fa fa-paper-plane "></i>&nbsp;Data Domisili</a></li>
		<li><a href="#"><i	class="menu-icon fa fa-paper-plane "></i>&nbsp;Data File</a></li>
	</ul>
</li>

<li><a href="#"><i class="ion-ios-personadd-outline bg-danger"></i><span>Dosen</span></a></li>
<li><a href="<?php echo base_url('mahasiswa/'); ?>"><i class="ion-university bg-warning"></i><span>Mahasiswa<span class="label label-warning pull-right">APPROVAL</span></span></a></li>
<li><a href="<?php echo base_url('berkas/'); ?>"><i class="ion-ios-paper-outline bg-gradient-blue"></i><span>Berkas<span class="label label-info pull-right">APPROVAL</span></span></a></li>



 <li class="has-sub">
	<a href="javascript:;"><b class="caret pull-right"></b><i class="ion-ios-browsers-outline bg-purple"></i><span>View Data Program</span></a>
	<ul class="sub-menu">
	<?php foreach ($program_kategori as $kategori): ?>
		<li><a href="#"><i class="menu-icon fa fa-paper-plane"></i>&nbsp;<?php echo $kategori['nama_kategori']; ?></a></li>	
		<?php endforeach; ?>  
	</ul>
 </li>


<li class="has-sub">
	<a href="javascript:;"><b class="caret pull-right"></b><i class="ion-printer bg-info"></i><span>Report</span></a>
	<ul class="sub-menu">
		<li><a href="#"><i class="menu-icon fa fa-paper-plane"></i>&nbsp;Data PKL</a></li>
		<li><a href="#"><i class="menu-icon fa fa-paper-plane"></i>&nbsp;Data MBKM</a></li>
		<li><a href="#"><i class="menu-icon fa fa-paper-plane"></i>&nbsp;Data KKN</a></li>
		<li><a href="#"><i class="menu-icon fa fa-paper-plane"></i>&nbsp;Data Skripsi</a></li>
	</ul>
</li>
<li><a href="<?php echo site_url('dashboard/backup_db') ?>"><i class="ion-ios-cloud-download-outline bg-success"></i><span>Backup DB</span></a></li>
