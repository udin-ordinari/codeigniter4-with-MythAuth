<!DOCTYPE html>
<html lang="en" data-layout="horizontal" data-topbar="dark" data-preloader="disable">
<head>
    <meta charset="UTF-8">
    <title><?php echo service('settings')->get('App.siteName'); ?> | Dashboard</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url('public/assets/img/favicon.ico'); ?>">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap" rel="stylesheet">
	<?php echo link_tag('public/assets/libs/sweetalert2/sweetalert2.css');?>


    <!-- Layout config Js -->
    <script src="public/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <?php echo link_tag('public/assets/css/bootstrap.min.css'); ?>
    <!-- Icons Css -->
    <?php echo link_tag('public/assets/css/icons.min.css'); ?>
    <!-- App Css-->
    <?php echo link_tag('public/assets/css/app.min.css'); ?>

    <?php echo link_tag('public/assets/css/lobibox.min.css');?>
</head>
<body>
	<div id="layout-wrapper">

		<?= $this->include('templates/top_menu'); ?>
		<?= $this->include('templates/navbar'); ?>





<footer class="footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6">
				<script>document.write(new Date().getFullYear())</script> © <?php echo service('settings')->get('App.siteName'); ?>
                        </div>
                        <div class="col-sm-6">
				<div class="text-sm-end d-none d-sm-block"> Bottom Description </div>
                        </div>
		</div>
	</div>
</footer>
</div>
<button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top"> <i class="ri-arrow-up-line"></i> </button>

<div id="preloader">
	<div id="status">
		<div class="spinner-border text-primary avatar-sm" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
	</div>
</div>

   



    <!-- JAVASCRIPT -->
<?php echo script_tag('public/assets/js/jquery-3.6.0.min.js');?>
<?php echo script_tag('public/assets/js/bootstrap.bundle.min.js');?>
<?php echo script_tag('public/assets/js/simplebar.min.js');?>
<?php echo script_tag('public/assets/js/waves.min.js');?>
<?php echo script_tag('public/assets/js/feather.min.js');?>
<?php echo script_tag('public/assets/js/lord-icon-2.1.0.js');?>
<?php echo script_tag('public/assets/js/plugins.js');?>
<?php echo script_tag('public/assets/js/apexcharts.min.js');?>
<?php echo script_tag('public/assets/js/dashboard-projects.init.js');?>
<?php echo script_tag('public/assets/js/app.js');?>

<?php echo script_tag('public/assets/js/lobibox.min.js');?>
<?php echo script_tag('public/assets/js/notifications.min.js');?>
<?php echo script_tag('public/assets/libs/sweetalert2/sweetalert2.js'); ?>

<script type="text/javascript">
function showTime()
{
	var a_p = " ";
        var today = new Date();
        var curr_hour = today.getHours();
        var curr_minute = today.getMinutes();
        var curr_second = today.getSeconds();
        if (curr_hour < 24)
	{
            a_p = "";
        }
	else
	{
            a_p = "";
        }
        if (curr_hour == 0)
	{
            curr_hour = 24;
        }
        if (curr_hour > 24)
	{
            curr_hour = curr_hour - 24;
        }
        curr_hour = checkTime(curr_hour);
        curr_minute = checkTime(curr_minute);
        curr_second = checkTime(curr_second);
	document.getElementById('jam').innerHTML=curr_hour + " : " + curr_minute + " : " + curr_second + " " + a_p;
}
function checkTime(i)
{
	if (i < 10)
	{
            i = "0" + i;
        }
        return i;
}
setInterval(showTime, 500);

var hari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
var bulan = ['Januari', 'Februari', 'Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];

var tanggal = new Date().getDate();
var xhari = new Date().getDay();
var xbulan = new Date().getMonth();
var xtahun = new Date().getYear();

var hari = hari[xhari];
var bulan = bulan[xbulan];
var tahun = (xtahun < 1000)?xtahun + 1900 : xtahun;
document.getElementById('tanggal').innerHTML=hari +', ' + tanggal + ' ' + bulan + ' ' + tahun;


function Logout()
{
	$.get("<?php echo base_url('logout');?>", function(response)
	{
		var res = response;
		let timerInterval;
		Swal.fire({
			title: res.title,
			html: 'Anda Berhasil Keluar.<br>Anda Akan Dialihkan Dalam <b></b>.',
			icon: 'success',
			timer: 1500,
			timerProgressBar: true,
			didOpen: () => {
				Swal.showLoading();
				const timer = Swal.getPopup().querySelector("b");
				timerInterval = setInterval(() => {
					timer.textContent = `${Swal.getTimerLeft()}`;
				}, 100);
			},
			willClose: () => {
				clearInterval(timerInterval);
			}
		}).then((result) => {
			if (result.dismiss === Swal.DismissReason.timer) {
				location.reload();
			}
		});
	});
}

</script>
</body>
</html>
