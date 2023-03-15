<?php
session_start();

if (isset($_POST['pg1'])) {
    $resp1 = $_POST['pg1'];

    $_SESSION['resp1'] = $resp1;

    header('location:pg2.php');
}
if (isset($_POST['pg2'])) {
    $resp2 = $_POST['pg2'];

    echo $resp2;
    $_SESSION['resp2'] = $resp2;

    header('location:pg3.php');
}

if (isset($_POST['pg3'])) {
    $resp3 = $_POST['pg3'];

    $_SESSION['resp3'] = $resp3;
    header('location:pg4.php');
}

if (isset($_POST['pg4'])) {
    $resp4 = $_POST['pg4'];

    $_SESSION['resp4'] = $resp4;
    header('location:pg5.php');
}

if (isset($_POST['pg5'])) {
    $resp5 = $_POST['pg5'];

    $_SESSION['resp5'] = $resp5;

    header('location:pg6.php');
}

if (isset($_POST['pg6'])) {
    $resp6 = $_POST['pg6'];

    $_SESSION['resp6'] = $resp6;

    header('location:pg7.php');
}

if (isset($_POST['pg7'])) {
    $resp7 = $_POST['pg7'];

    $_SESSION['resp7'] = $resp7;

    header('location:pg8.php');
}

if (isset($_POST['pg8'])) {
    $resp8 = $_POST['pg8'];

    $_SESSION['resp8'] = $resp8;

    header('location:pg9.php');
}

if (isset($_POST['pg9'])) {
    $resp9 = $_POST['pg9'];

    $_SESSION['resp9'] = $resp9;

    header('location:pg10.php');
}

if (isset($_POST['pg10'])) {
    $resp10 = $_POST['pg10'];

    $_SESSION['resp10'] = $resp10;

    header('location:pg11.php');
}

if (isset($_POST['pg11'])) {
    $resp11 = $_POST['pg11'];

    $_SESSION['resp11'] = $resp11;

    header('location:pg12.php');
}

if (isset($_POST['pg12'])) {
    $resp12 = $_POST['pg12'];

    $_SESSION['resp12'] = $resp12;

    header('location:pg13.php');
}

if (isset($_POST['pg13'])) {
    $resp13 = $_POST['pg13'];

    $_SESSION['resp13'] = $resp13;

    header('location:pg14.php');
}

if (isset($_POST['pg14'])) {
    $resp14 = $_POST['pg14'];

    $_SESSION['resp14'] = $resp14;

    header('location:pg15.php');
}

if (isset($_POST['pg15'])) {
    $resp15 = $_POST['pg15'];

    $_SESSION['resp15'] = $resp15;

    header('location:pg16.php');
}

if (isset($_POST['pg16'])) {
    $resp16 = $_POST['pg16'];

    $_SESSION['resp16'] = $resp16;

    header('location:pg17.php');
}

if (isset($_POST['pg17'])) {
    $resp17 = $_POST['pg17'];

    $_SESSION['resp17'] = $resp17;

    header('location:pg18.php');
}

if (isset($_POST['pg18'])) {
    $resp18 = $_POST['pg18'];

    $_SESSION['resp18'] = $resp18;

    header('location:pg19.php');
}

if (isset($_POST['pg19'])) {
    $resp19 = $_POST['pg19'];

    $_SESSION['resp19'] = $resp19;

    header('location:pg20.php');
}

if (isset($_POST['pg20'])) {
    $resp20 = $_POST['pg20'];

    $_SESSION['resp20'] = $resp20;

    header('location:pg21.php');
}

if (isset($_POST['pg21'])) {
    $resp21 = $_POST['pg21'];

    $_SESSION['resp21'] = $resp21;

    header('location:pg22.php');
}

if (isset($_POST['pg22'])) {
    $resp22 = $_POST['pg22'];

    $_SESSION['resp22'] = $resp22;

    header('location:pg23.php');
}

if (isset($_POST['pg23'])) {
    $resp23 = $_POST['pg23'];

    $_SESSION['resp23'] = $resp23;

    header('location:pg24.php');
}

if (isset($_POST['pg24'])) {
    $resp24 = $_POST['pg24'];

    $_SESSION['resp24'] = $resp24;

    header('location:pg25.php');
}

if (isset($_POST['pg25'])) {
    $resp25 = $_POST['pg25'];

    $_SESSION['resp25'] = $resp25;

    header('location:pg26.php');
}

if (isset($_POST['pg26'])) {
    $resp26 = $_POST['pg26'];

    $_SESSION['resp26'] = $resp26;

    header('location:pg27.php');
}

if (isset($_POST['pg27'])) {
    $resp27 = $_POST['pg27'];

    $_SESSION['resp27'] = $resp27;

    header('location:pg28.php');
}

if (isset($_POST['pg28'])) {
    $resp28 = $_POST['pg28'];

    $_SESSION['resp28'] = $resp28;

    header('location:pg29.php');
}

if (isset($_POST['pg29'])) {
    $resp29 = $_POST['pg29'];

    $_SESSION['resp29'] = $resp29;

    header('location:pg30.php');
}

if (isset($_POST['pg30'])) {
    $resp30 = $_POST['pg30'];

    $_SESSION['resp30'] = $resp30;

    header('location:end.php');
}

function alerta($type, $title, $msg)
	{
		echo "<script type='text/javascript'>
		Swal.fire({
			icon: '$type',
			title: '$title',
			text: '$msg',
			showConfirmButton: false,
			timer: 2000
		});
		</script>";
	}
	alerta("success", false, "Informações atualizadas");
    ?>
    <script src="../../../sweetalert.js"></script>