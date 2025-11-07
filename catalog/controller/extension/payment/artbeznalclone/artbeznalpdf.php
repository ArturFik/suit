<?php
require_once(DIR_SYSTEM . 'art_extra/dompdf/autoload.inc.php');
use Dompdf\Dompdf;
class ControllerExtensionPaymentArtbeznalcloneArtbeznalpdf extends Controller {
	private $pname = 'artbeznal';

	public function getPDF ($data) {
		$dompdf = new Dompdf();
		$dompdf->setPaper('A4', 'portrait');
        $dompdf->load_html($data['html']);
        $dompdf->render();
        $dompdf->stream('invoice-order_' . $data['order_id'] . '.pdf');
	}

	public function atPDF ($data) {
		$dompdf = new Dompdf();
		$dompdf->setPaper('A4', 'portrait');
        $dompdf->load_html($data['html']);
        $dompdf->render();
        return $dompdf->output();
	}

}