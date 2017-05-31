<div id="wrapper" class="active">  

    <div id="sidebar-wrapper">
        <ul id="sidebar_menu" class="sidebar-nav">
           <li class="sidebar-brand"><a href="#"><div class="logo"> <img src='../assets/images/FIXX Copy.png' height='150px' width='150px'>
	</div></a></li>
        </ul>
        <ul class="sidebar-nav" id="sidebar">
		<li>Hai, <?php
		foreach($rows as $row){
			echo $row -> nama_member;
		}
		?></li>
          <li><a href="<?= site_url('login/pindah_pengguna');?>"><span class="fa fa-user"></span> Pengguna</a></li>
          <li><a href="<?= site_url('login/pindah_booking');?>"><span class="fa fa-book"></span> Pemesanan</a></li>
          <li><a href="<?= site_url('login/pindah_list');?>"><span class="fa fa-car"></span> Daftar Mobil</a></li>
<!--		  <li><a href="#"><span class="fa fa-envelope"></span> Hubungi Kami</a></li>-->
		  <li><a href="<?= site_url('login/logout');?>"><span class="fa fa-sign-out"></span> Log Out</a></li>
        </ul>
      <!--</div>-->
          
     
      
</div>