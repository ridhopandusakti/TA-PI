<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Sistem Informasi Kepegawaian</title>
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<!--[if IE]>
<link rel="stylesheet" media="all" type="text/css" href="css/pro_dropline_ie.css" />
<![endif]-->

<!--  jquery core -->
<script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>

<!--  checkbox styling script -->
<script src="js/jquery/ui.core.js" type="text/javascript"></script>
<script src="js/jquery/ui.checkbox.js" type="text/javascript"></script>
<script src="js/jquery/jquery.bind.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
	$('input').checkBox();
	$('#toggle-all').click(function(){
 	$('#toggle-all').toggleClass('toggle-checked');
	$('#mainform input[type=checkbox]').checkBox('toggle');
	return false;
	});
});
</script>  

<![if !IE 7]>

<!--  styled select box script version 1 -->
<script src="js/jquery/jquery.selectbox-0.5.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect').selectbox({ inputClass: "selectbox_styled" });
});
</script>
 

<![endif]>

<!--  styled select box script version 2 --> 
<script src="js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect_form_1').selectbox({ inputClass: "styledselect_form_1" });
	$('.styledselect_form_2').selectbox({ inputClass: "styledselect_form_2" });
});
</script>

<!--  styled select box script version 3 --> 
<script src="js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect_pages').selectbox({ inputClass: "styledselect_pages" });
});
</script>

<!--  styled file upload script --> 
<script src="js/jquery/jquery.filestyle.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
  $(function() {
      $("input.file_1").filestyle({ 
          image: "images/forms/choose-file.gif",
          imageheight : 21,
          imagewidth : 78,
          width : 310
      });
  });
</script>

<!-- Custom jquery scripts -->
<script src="js/jquery/custom_jquery.js" type="text/javascript"></script>
 
<!-- Tooltips -->
<script src="js/jquery/jquery.tooltip.js" type="text/javascript"></script>
<script src="js/jquery/jquery.dimensions.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
	$('a.info-tooltip ').tooltip({
		track: true,
		delay: 0,
		fixPNG: true, 
		showURL: false,
		showBody: " - ",
		top: -35,
		left: 5
	});
});
</script> 


<!--  date picker script -->
<link rel="stylesheet" href="css/datePicker.css" type="text/css" />
<script src="js/jquery/date.js" type="text/javascript"></script>
<script src="js/jquery/jquery.datePicker.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
        $(function()
{

// initialise the "Select date" link
$('#date-pick')
	.datePicker(
		// associate the link with a date picker
		{
			createButton:false,
			startDate:'01/01/2005',
			endDate:'31/12/2020'
		}
	).bind(
		// when the link is clicked display the date picker
		'click',
		function()
		{
			updateSelects($(this).dpGetSelected()[0]);
			$(this).dpDisplay();
			return false;
		}
	).bind(
		// when a date is selected update the SELECTs
		'dateSelected',
		function(e, selectedDate, $td, state)
		{
			updateSelects(selectedDate);
		}
	).bind(
		'dpClosed',
		function(e, selected)
		{
			updateSelects(selected[0]);
		}
	);
	
var updateSelects = function (selectedDate)
{
	var selectedDate = new Date(selectedDate);
	$('#d option[value=' + selectedDate.getDate() + ']').attr('selected', 'selected');
	$('#m option[value=' + (selectedDate.getMonth()+1) + ']').attr('selected', 'selected');
	$('#y option[value=' + (selectedDate.getFullYear()) + ']').attr('selected', 'selected');
}
// listen for when the selects are changed and update the picker
$('#d, #m, #y')
	.bind(
		'change',
		function()
		{
			var d = new Date(
						$('#y').val(),
						$('#m').val()-1,
						$('#d').val()
					);
			$('#date-pick').dpSetSelected(d.asString());
		}
	);

// default the position of the selects to today
var today = new Date();
updateSelects(today.getTime());

// and update the datePicker to reflect it...
$('#d').trigger('change');
});
</script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
</head>
<body> 
<!-- Start: page-top-outer -->
<div id="page-top-outer">    

<!-- Start: page-top -->
<div id="page-top">

	<!-- start logo -->
	<div id="logo">
	<a href=""><img src="images/shared/disnakertrans.png" width="156" height="40" alt="" /></a>
	</div>
	<!-- end logo -->
	<div id="top-search">
	<form name="Tick" > 
<embed src="images/5005-white.swf?TimeZone=Indonesia_Surabaya&"  width="120" height="40" wmode="transparent" type="application/x-shockwave-flash">
</form> 
	</div>
	


</div>
<!-- End: page-top -->

</div>
<!-- End: page-top-outer -->
<!--  start nav-outer-repeat................................................................................................. START -->
<div class="nav-outer-repeat"> 
<!--  start nav-outer -->
<div class="nav-outer"> 

		<!-- start nav-right -->
		<div id="nav-right">
		
			
			<div class="nav-divider">&nbsp;</div>
			
		
			
			<!--  end account-content -->
		
		</div>
		<!-- end nav-right -->


		<!--  start nav -->
		<div class="nav">
		<div class="table">
		
		<ul class="select"><li><a href="index.php"><b>Home</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		 <div class="select_sub">
			<ul class="sub">
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="../index.php" >Keluar</a></li>
			</ul>
		</div>--> 
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		 <?php
		 if($_SESSION['level']=="admin" || $_SESSION['level']=="tu"){
		 ?>              
		<ul class="select"><li><b><a href="about.php">About</b><!--[if IE 7]><!--></a><!--<![endif]-->
		</li>
		</ul>
		<?php
		}
		?>
		
		<!--  start nav -->

</div>
<div class="clear"></div>
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->

  <div class="clear"></div>
 
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">

	<!--  start page-heading -->
	<div id="page-heading">
		<h1 align="center">Selamat Datang di Sistem Informasi Kepegawaian</h1>
	</div>
	<!-- end page-heading -->

	<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	<tr>
		<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
		<th class="topleft"></th>
		<td id="tbl-border-top">&nbsp;</td>
		<th class="topright"></th>
		<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
	</tr>
	<tr>
		<td id="tbl-border-left"></td>
		<td>
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">
		
			<!--  start table-content  -->
			<div id="table-content">
			<div align="center">
	<h2><a href="#"></a></h2>
	<p><?php echo date("H:m:s, d F Y") ?></p>
	
<body>
<div>
	<h2 style="padding-bottom: 15px;">VISI & MISI </h2>
	<h2><p style="padding-bottom: 15px;"> VISI </p></h2>
	<p style="padding-bottom: 15px;">Terwujudnya Iklim Ketenagakerjaan dan Ketransmigrasian yang kondusif dan berkualitas menuju masyarakat sejahtera.</p>
	<h2><p style="padding-bottom: 15px;"> MISI </p></h2>
	<p style="padding-bottom: 15px;"> Meningkatkan ketrampilan tenaga kerja. </p>
	<p style="padding-bottom: 15px;"> Meningkatkan perluasan kesempatan kerja dan penempatan transmigrasi. </p>
	<p style="padding-bottom: 15px;"> Meningkatkan pembinaan hubungan industrial. </p>
	<p style="padding-bottom: 15px;"> Meningkatkan perlindungan tenaga kerja. </p>
	<p style="padding-bottom: 15px;"> Meningkatkan sarana pelayanan ketenaga-kerjaan dan ketransmigrasian. </p>
	<h2><p style="padding-bottom: 15px;"> DASAR HUKUM </p></h2>
	<p style="padding-bottom: 15px;"> Dalam melaksanakan misi tsb Disnakertrans berlandaskan ketentuan sbb : </p>
	<p style="padding-bottom: 15px;">  Undang - undang No. 15 tahun 1997 ttg Ketransmigrasian.</p>

	 <p style="padding-bottom: 15px;">Undang – undang No. 32 tahun 2004 ttg Pemerintah Daerah.</p>
     <p style="padding-bottom: 15px;">  Undang – undang No. 25 tahun 1999 ttg Perimbangan Keuangan antara </p>
     <p style="padding-bottom: 15px;"> Pemerintah Pusat dan Daerah.</p>
     <p style="padding-bottom: 15px;">  Undang – undang No. 13 tahun 2003 ttg Ketenagakerjaan.</p>
     <p style="padding-bottom: 15px;">  Peraturan Menteri No. PER-06/ MEN/ III/ 2006. ttg Organisasi dan Tata Kerja Unit</p>
     <p style="padding-bottom: 15px;">  Pelaksana Teknis di Lingkungan Departemen Tenaga Kerja dan Transmigrasi</p>
	 <p style="padding-bottom: 15px;"> Keputusan Menteri Dalam Negeri No. 130 – 67 tahun 2002 ttg Pengakuan
        Kewenangan Kabupaten dan Kota.</p>
     <p style="padding-bottom: 15px;"> Peraturan Pemerintah No. 2 tahun 1999 ttg Penyelenggaraan Transmigrasi.
     <p style="padding-bottom: 15px;">  Peraturan Daerah Kota Semarang No. 12 tahun 2008 ttg Organisasi dan Tata
        Kerja Dinas Daerah</p>
     <p style="padding-bottom: 15px;">  Keputusan Walikota Semarang No. 27 tahun 2008 ttg Penjabaran Tugas dan
        Fungsi Dinas Tenaga Kerja dan Transmigrasi Kota Semarang. </p>
	<p style="padding-bottom: 15px;">  </p>
	
	<br><h2><div style="text-align: center;">PRESIDEN REPUBLIK INDONESIA </div></h2>
	<h2><div style="text-align: center;"> UNDANG-UNDANG  REPUBLIK  INDONESIA </div></h2>
	    <div style="text-align: left;">MENIMBANG:</div> 
	     <li><div align="justify"> bahwa pembangunan nasional dilaksana pembangunan manusia Indonesia seutuhnya dan  pembangunan masyarakat Indonesia seluruhnya untuk 
mewujudkan ma
syarakat yang 
sejahtera, adil, makmur, yang merata
, baik materiil maupun spiritual 
berdasarkan Pancasila dan Undang-Undang Dasar Negara Republik 
Indonesia T
ahun 
1945;</div></li>
		 <li><div align="justify">bahwa dalam pelaksanaan pembanguna
n nasional, tenaga kerja 
mempunyai peranan dan kedudukan 
yang sangat penting sebagai 
pelaku dan tujuan pembangunan;  </div></li>
		 <li><div align="justify">bahwa sesuai dengan peranan dan keduduk
an tenaga kerja, diperlukan 
pembangunan ketenagakerjaan
 untuk meningkatkan kualitas tenaga 
kerja dan peransertanya dalam 
pembangunan serta peningkatan 
perlindungan tenaga kerja 
dan keluarganya sesuai dengan harkat dan 
martabat  kemanusiaan; </div></li>
		 <li><div align="justify">bahwa perlindungan te
rhadap tenaga kerja di
maksudkan untuk 
menjamin hak-hak dasar pekerja
/buruh dan menjamin kesamaan 
kesempatan serta perlakuan tanpa di
skriminasi atas dasar apapun 
untuk mewujudkan kesejahteraan 
pekerja/buruh  dan keluarganya 
dengan tetap memperhatikan perkem
bangan kemajuan dunia usaha;  </div></li>
		 <li><div align="justify">bahwa beberapa undang-undang 
di bidang ketenagakerjaan dipandang 
sudah tidak sesuai lagi dengan 
kebutuhan dan tuntut
an pembangunan 
ketenagakerjaan, oleh karena itu perlu 
dicabut dan/atau ditarik kembali;  </div></li>
		 <li><div align="justify">bahwa berdasarkan pertimbangan sebagai
mana tersebut pada huruf  a, 
b, c, d, dan e  perlu mem
bentuk Undang-undang tentang 
Ketenagakerjaan. </div></li>
<div style="text-align: left;">MENGINGAT:</div>
		 <li><div align="justify">Pasal 5 ayat (1), Pasal 20 ayat 
(2), Pasal 27 ayat (2),
 Pasal 28, dan Pasal 
33 ayat (1) Undang-Undang Dasar N
egara  Republik Indonesia Tahun 
1945; </div></li></br>
<br><div>
	<h2><div style="text-align: center;">Dengan  persetujuan 
 bersama  antara  </div></h2>
	<h2><div style="text-align: center;"> DEWAN PERWAKILAN RAKYAT REPUBLIK INDONESIA 
DAN 
PRESIDEN  REPUBLIK  INDONESIA  </div></h2>
<h2><div style="text-align: center;">MEMUTUSKAN :</div></h2>
	    <div style="text-align: left;">Menetapkan : 
UNDANG-UNDANG TENTANG  KETENAGAKERJAAN. </div> 
</div>
		  <div align="justify"></div>
		  <div align="center">BAB  I </div>
<div align="center">KETENTUAN UMUM </div>
<div align="center">Pasal  1 </div>
 <div align="left">Dalam undang-undang ini yang dimaksud dengan</div>
  <div align="justify"></div>
    
    <ol><li><div align="left">Ketenagakerjaan adalah segala
 hal yang  berhubungan  d
engan tenaga kerja pada 
waktu sebelum,  selama, dan sesudah masa kerja.   </div></li>
	<li><div align="left">enaga kerja adalah setiap orang yang mampu melakukan pekerjaan guna 
menghasilkan barang dan/atau jasa baik 
untuk memenuhi kebutuhan sendiri 
maupun untuk masyarakat.     </div> </li>
	<li><div align="left">Pekerja/buruh adalah setiap orang yang
 bekerja dengan menerima upah  atau 
imbalan dalam bentuk lain.</div> </li>
	<li><div align="left"> Pemberi kerja adalah orang pers
eorangan, pengusaha, badan hukum, atau badan-
badan lainnya yang mempek
erjakan tenaga kerja denga
n membayar upah atau 
imbalan dalam bentuk lain.        </div></li>
	<li><div align="left">Pengusaha adalah :<ul><span>
	<li>orang perseorangan, persekutuan, atau ba
dan hukum yang menjalankan suatu 
perusahaan milik sendiri;   </li>
	<li>orang perseorangan, persekutuan, atau 
badan hukum yang secara berdiri 
sendiri menjalankan perusahaan bukan miliknya;  </li>
	<li>orang perseorangan, persekutuan, atau bad
an hukum yang berada di Indonesia 
mewakili perusahaan sebagaimana dimaksud dalam huruf a dan  b  yang 
berkedudukan di luar wilayah Indonesia. </li></span>
	</ul></div></li>
	<li><div align="left">Perusahaan adalah :<ul>
	<li>etiap bentuk usaha yang berbadan
 hukum atau tidak, milik orang 
perseorangan, milik persekutuan, atau 
milik badan hukum, baik milik swasta 
maupun milik negara yang mempekerjak
an pekerja/buruh dengan membayar 
upah atau imbalan dalam bentuk lain; </li>
	<li>usaha-usaha sosial dan usaha-usaha 
lain yang mempunyai pengurus dan 
mempekerjakan orang lain dengan me
mbayar upah atau im
balan dalam bentuk 
lain. </li></ul>
	</div></li>
	<li><div align="left">Perencanaan tenaga kerja adalah proses 
penyusunan rencana ketenagakerjaan 
secara sistematis yang dijadikan das
ar dan acuan dalam penyusunan kebijakan, 
strategi, dan pelaksanaan program 
pembangunan ketenagakerjaan yang 
berkesinambungan. </div></li>
	<li><div align="left">Informasi ketenagakerjaan ada
lah gabungan, rangkaian, dan
 analisis data yang  
berbentuk angka yang telah diolah, naskah dan dokumen yang mempunyai arti, 
nilai dan makna tertentu 
mengenai ketenagakerjaan. </div></li>
	<li><div align="left">Pelatihan kerja adalah kese
luruhan kegiatan untuk me
mberi, memperoleh,  
meningkatkan, serta mengemba
ngkan kompetensi kerja, pr
oduktivitas, disiplin, 
sikap, dan etos kerja pada tingkat kete
rampilan dan keahlian tertentu  sesuai 
dengan jenjang dan kualifikasi 
jabatan atau pekerjaan.  </div></li>
	<li><div align="left">Kompetensi kerja adalah kemampuan kerja 
setiap individu yang mencakup aspek 
pengetahuan, keterampilan, dan sikap ke
rja yang sesuai den
gan standar yang 
ditetapkan.  </div></li>
	<li><div align="left">Pemagangan adalah bagian dari sistem pel
atihan kerja yang diselenggarakan 
secara terpadu antara pelatihan di le
mbaga pelatihan dengan bekerja secara 
langsung di bawah bimbi
ngan dan pengawasan instruktur
 atau pekerja/buruh yang 
lebih berpengalaman, dal
am proses produksi  barang 
 dan/atau jasa  di  perusa-
haan, dalam rangka menguasai keteramp
ilan atau keahlian tertentu.  </div></li>
	<li><div align="left">Pelayanan penempatan t
enaga kerja adalah kegiat
an untuk mempertemukan 
tenaga kerja  dengan pemberi kerja, sehi
ngga tenaga kerja dapat memperoleh 
pekerjaan yang sesuai dengan bakat, 
minat, dan kemampuannya, dan pemberi 
kerja dapat memperoleh tenaga kerja 
yang sesuai dengan kebutuhannya.  </div></li>
	<li><div align="left">Tenaga kerja asing adalah warga negar
a asing pemegang visa  dengan maksud 
bekerja di wilayah Indonesia.             </div></li>
	<li><div align="left">Perjanjian kerja adalah 
 perjanjian antara pekerja/
buruh dengan pengusaha  atau 
pemberi kerja yang memuat syarat-syarat kerj
a, hak, dan kewajiban para pihak.        </div></li>
	<li><div align="left">Hubungan kerja adalah hubungan 
antara pengusaha dengan pekerja/buruh 
berdasarkan perjanjian kerj
a, yang mempunyai unsur pekerjaan, upah, dan 
perintah.  </div></li>
	<li><div align="left">Hubungan industrial adal
ah suatu sistem hubungan y
ang terbentuk antara para 
pelaku dalam proses produksi barang dan/
atau jasa yang terdiri dari unsur 
pengusaha, pekerja/buruh, dan pemerint
ah yang didasarkan pada nilai-nilai 
Pancasila dan Undang-Undang Dasar Nega
ra Republik Indonesia Tahun 1945. </div></li>
	<li><div align="left">Serikat pekerja/serikat buruh adalah organi
sasi yang dibentuk dari, oleh, dan untuk 
pekerja/buruh baik di perus
ahaan maupun di luar perus
ahaan, yang bersifat bebas, 
terbuka, mandiri, demokratis, dan ber
tanggung jawab guna memperjuangkan, 
membela serta melindungi hak
 dan kepentingan pekerja/
buruh serta meningkatkan 
kesejahteraan pekerja/buruh 
dan keluarganya.    </div></li>
	<li><div align="left">Lembaga kerja sama bipartit adalah foru
m komunikasi dan konsultasi mengenai 
hal-hal yang berkait
an dengan hubungan industrial 
di satu perusahaan yang 
anggotanya terdiri dari  pengusaha dan serikat 
pekerja/serikat buruh yang sudah 
tercatat di instansi yang bertanggung jawa
b di bidang ketenaga
kerjaan atau unsur 
pekerja/buruh.    </div></li>
	<li><div align="left"> Lembaga kerja sama tripartit adalah foru
m komunikasi, konsultasi dan musyawarah 
tentang masalah ketenagakerjaan yang anggot
anya terdiri dari unsur organisasi 
pengusaha, serikat pekerja/seri
kat buruh, dan pemerintah. </div></li>
	<li><div align="left"> Peraturan perusahaan adalah peraturan yang 
dibuat secara tertulis oleh pengusaha  
yang memuat  syarat-syarat kerja dan tata tertib perusahaan. </div></li>
	<li><div align="left">Perjanjian kerja bersama adalah per
janjian yang merupak
an hasil perundingan 
antara serikat pekerja/serikat buruh atau 
beberapa serikat pekerja/serikat buruh 
yang tercatat pada instansi yang bertang
gung jawab di bidang ketenagakerjaan 
dengan pengusaha, atau bebera
pa pengusaha atau perkumpulan pengusaha yang 
memuat syarat-syarat kerja, hak 
dan  kewajiban  kedua belah pihak.  </div></li>
	<li><div align="left">Perselisihan hubungan industrial
 adalah perbedaan pendapat 
yang mengakibatkan
pertentangan antara pengusaha 
atau gabungan pengusaha de
ngan pekerja/buruh 
atau serikat pekerja/serikat buruh ka
rena adanya perselisihan mengenai hak, 
perselisihan kepentingan, dan perse
lisihan pemutusan hubungan kerja serta 
perselisihan
antar serikat pekerja/serikat buruh  hanya
dalam satu perusahaan.     </div></li>
	<li><div align="left">Mogok kerja adalah ti
ndakan pekerja/buruh yang dire
ncanakan dan dilaksanakan 
secara bersama-sama dan/atau oleh se
rikat pekerja/serikat buruh untuk 
menghentikan atau memperlambat pek
erjaan.           </div></li>
	<li><div align="left">Penutupan  perusahaan 
(lock out)
 adalah tindakan pengusaha untuk menolak 
pekerja/buruh seluruhnya atau s
ebagian untuk menjalankan pekerjaan. </div></li>
	<li><div align="left"> Pemutusan hubungan kerja adalah pengak
hiran hubungan kerja karena suatu hal 
tertentu yang mengakibatkan berakhirnya 
hak dan kewajiban antara pekerja/buruh 
dan pengusaha. </div></li>
	<li><div align="left">Anak adalah setiap orang  yang berum
ur dibawah 18 (delapan belas) tahun. </div></li>
	<li><div align="left"> Siang  hari  adalah  waktu 
 antara pukul 06.00 sampai dengan
pukul  18.00. </div></li>
	<li><div align="left">1 (satu)  hari adalah waktu selama
  24 (dua puluh empat) jam.    </div></li>
	<li><div align="left">Seminggu adalah waktu selama 7 (tujuh) hari.</div></li>
	<li><div align="left">Upah adalah hak pekerja/
buruh yang diterima dan dinyatakan dalam bentuk uang 
sebagai imbalan dari pengusaha atau pember
i kerja kepada pekerja/buruh yang 
ditetapkan dan dibayarkan m
enurut suatu perjanjian ke
rja, kesepakatan, atau 
peraturan perundang-undangan, termasuk  t
unjangan  bagi  pekerja/buruh dan 
keluarganya atas suatu pekerjaan dan/atau jasa 
yang telah atau akan dilakukan.    </div></li>
	<li><div align="left"> Kesejahteraan pekerja/buruh adalah 
suatu pemenuhan kebutuhan dan/atau 
keperluan  yang  bersifat
  jasmaniah dan r
ohaniah, baik di dalam
 maupun di luar 
hubungan kerja, yang secara langsung at
au tidak langsung dapat mempertinggi 
produktivitas kerja dalam lingk
ungan kerja yang aman dan sehat.         </div></li>
	<li><div align="left">Pengawasan  ketenagak
erjaan adalah kegiatan 
mengawasi dan menegakkan 
pelaksanaan peraturan 
perundang- undangan di bidang ketenagakerjaan. </div></li>
	<li><div align="left">Menteri adalah menteri 
yang bertanggung jawab di bi
dang ketenagakerjaan.   </div></li>
	
	</ol>
    <div align="justify"></div>
	</div>	</br>
</body>
	<div>
		<p style="padding-bottom: 15px;">Jika ada yang kurang mengerti bisa menghubungi salah satu dari kontak kami </p>
	</div>
<div>
      
            <ol>Nama 	: Alwin Rudi Handoko</ol>
            <ol>NIM		: A11.2012.070769</ol>
            <ol>E-mail	: <a href="alwinrudi04@gmail.com">alwinrudi04@gmail.com</a></ol>
      
</div>
<div>
      
            <ol>Nama 	: Ridho Pandusakti</ol>
            <ol>NIM		: A11.2012.07219</ol>
            <ol>E-mail 	: <a href="ridho.pandusakti@gmail.com@gmail.com">ridho.pandusakti@gmail.com</a></ol>
      
</div>
			<!--  end table-content  -->
		 
		</div>
		<!--  end content-table-inner ............................................END  -->
		</td>
		<td id="tbl-border-right"></td>
	</tr>
	<tr>
		<th class="sized bottomleft"></th>
		<td id="tbl-border-bottom">&nbsp;</td>
		<th class="sized bottomright"></th>
	</tr>
	</table>
	<div class="clear">&nbsp;</div>

</div>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>
<!--  end content-outer........................................................END -->

<div class="clear">&nbsp;</div>
    
<!-- start footer -->         
<div id="footer">
<!-- <div id="footer-pad">&nbsp;</div> -->
	<!--  start footer-left --
	<div id="footer-left">Sistem Informasi Sekolah Copyright &copy; 2011 Andi Sholihin<br />
	Admin Skin &copy; Copyright Internet Dreams Ltd. <a href="">www.netdreams.co.uk</a>. All rights reserved.</div>
	<!--  end footer-left -->
	<div class="clear">&nbsp;</div>
</div>
<!-- end footer -->
 
</body>
</html>