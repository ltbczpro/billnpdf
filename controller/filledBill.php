<?php


require __DIR__."/../app/loader.php";
require __DIR__."/../model/client.php";
require __DIR__."/../model/profil.php";
require __DIR__."/../model/product.php";
require __DIR__."/../model/bill.php";
use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

$users=browseProfil($_SESSION['userid']);
$client=selectClient($_SESSION['userid'], $_SESSION['selectedid']);
$product=selectProduct($_SESSION["selectid"]);

$name = $users['name'];
$adress = $users['adress'];
$email = $users['email'];
$phone = $users['phone'];
$siren = $users['siren'];
$clientName = $client['name'];
$clientAdress = $client['adress'];
$productName= $product['name'];
$productDesi=$product['designation'];

/*$nbNewProduct=$_POST['nbNewProduct'];
for($i = 1; $i < $nbNewProduct ; $i++) {
    $newProductName = $_POST['productName'.$i];
}*/

$twt= (int)$_POST['upet']*(int)$_POST['quantity'];
$atva= $twt*(int)$_POST['tva']/100;
$aiat= $twt+$atva;

if ($_POST['add']){
		try {
	    ob_start();
	    include (__DIR__.'/../view/newBillPDF.php');
	    $content = ob_get_clean();
	    $html2pdf = new Html2Pdf('P', 'A4', 'fr', true, 'UTF-8', 3);
	    $html2pdf->pdf->SetDisplayMode('fullpage');
	    $html2pdf->writeHTML($content);
	    $name_pdf = date('d-m-Y').$_POST['clientName'].'.pdf'; 
	    $html2pdf->output($_SERVER['DOCUMENT_ROOT']."billnpdf/upload/".$name_pdf,'F');
	    $newBill = saveBill($name_pdf, $_SESSION['userid']);
	   	
	} catch (Html2PdfException $e) {
	    $formatter = new ExceptionFormatter($e);
	    echo $formatter->getHtmlMessage();
	}
}

require __DIR__."/../view/filledBill.php";