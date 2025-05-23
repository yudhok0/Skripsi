<?php 
$this->load->view('admin/head');
?>

<!--tambahkan custom css disini-->

<?php
$this->load->view('admin/topbar');
$this->load->view('admin/sidebar');
?>

<!-- Content Header (Page header) -->


<!-- Main content -->
<section class="content">

    <div class="callout callout-warning">
        <h4>Selamat Datang, <?= $this->session->userdata('nama');?> </h4>
        
    </div>

    <div class="box box-success box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Petunjuk Penggunaan</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <dl>

                <dd>
                    <ol>
                        <li><b>Kelola Soal Ujian</b></li>
                        Melihat daftar soal ujian, dengan memfilter mata pelajaran apa yang ingin anda lihat. Lalu dapat menambah, mengedit, dan menghapus mata pelajaran dan menambah data pelaran sesuai mata pelajaran anda. 
                        <li><b>Ganti Password</b></li>
                        Mengganti password sesuai keinginan anda setelah anda mendapatkan password default dari pihak admin. ketika anda lupa password, anda dapat menghubungi pihak administrator agar mendapatkan password baru.
                    </ol>
                </dd>
                
            </dl>
        </div><!-- /.box-body -->
    </div>

</section><!-- /.content -->
  
<?php 
$this->load->view('admin/js');
?>

<!--tambahkan custom js disini-->

<script type="text/javascript">

	$(function(){
		$('#data-tables').dataTable();
	});

	$('.alert-message').alert().delay(3000).slideUp('slow');

</script>


<?php
$this->load->view('admin/foot');
?>

