<?php 
	defined('BASEPATH') or exit('No direct script access allowed');

	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
	use mikehaertl\wkhtmlto\Pdf;

	class Converter extends CI_Controller{

		public function index(){
			$dompdf = new Dompdf\Dompdf();
    		$dompdf->set_option('isRemoteEnabled', TRUE);
 
			$html = $this->load->view('PsyTest/Report/test',[],true);
			$dompdf->loadHtml($html);
			$dompdf->setPaper('A4', 'portrait');
			$dompdf->render();
			$pdf = $dompdf->output();
			$dompdf->stream();
		}

		public function gg(){

			$this->load->view('PsyTest/Report/test/test_dass_student');
		}

		public function client_data_fixed(){
			if($this->input->post('data_gen') == 'gen_pdf'){
				$dompdf = new Dompdf\Dompdf();
	    		$dompdf->set_option('isRemoteEnabled', TRUE);
	 
				$html = $this->load->view('PsyTest/Report/dm_client_fixed',[],true);
				$dompdf->loadHtml($html);
				$dompdf->setPaper('A4', 'landscape');
				$dompdf->render();
				$dompdf->stream("Data Client(".$this->input->post('client_class').")".date('Y-m-d h:i:s A').".pdf",array('Attachment' => false));
				exit(0);
			}else{
				if($this->input->post('client_class') == 'student'){

					$spreadsheet = new Spreadsheet();
					$sheet = $spreadsheet->getActiveSheet();
					$header = 'Report Data Client('.$this->input->post('client_class').') for '.date("F", mktime(0, 0, 0, $this->input->post('what_month'), 10)).' in '.date('Y');
					$count = 2;
					$sheet->setCellValue('B'.$count, $header);
					$sheet->mergeCells('B'.$count.':K'.$count);
					$sheet->getStyle('B'.$count.':K'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF87CEEB');
					$sheet->getStyle('B'.$count.':K'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
					$items = ['No','Appointment Date','Appointment Time','Student ID','Student Name','IC/PP','No Phone','Program','Faculty','Semester'];
					$count++;
					$cells = ['B'.$count,'C'.$count,'D'.$count,'E'.$count,'F'.$count,'G'.$count,'H'.$count,'I'.$count,'J'.$count,'K'.$count];
					$sheet->getStyle('B3:K'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFD3D3D3');
					foreach(array_combine($items, $cells) as $item => $cell){
						$sheet->setCellValue($cell, $item);
					}
					$count++;
					$no = 1;
					foreach($this->converter_model->data_client_student($this->input->post('what_month'),date('Y')) as $r){
						$sheet->setCellValue('B'.$count, $no);
						$sheet->setCellValue('C'.$count, $r->appt_date);
						$sheet->setCellValue('D'.$count, $r->appt_time);
						$sheet->setCellValue('E'.$count, $r->student_no);
						$sheet->setCellValue('F'.$count, $r->student_name);
						$sheet->setCellValue('G'.$count, $r->student_icpp);
						$sheet->setCellValue('H'.$count, $r->student_phone);
						$sheet->setCellValue('I'.$count, $r->student_program);
						$sheet->setCellValue('J'.$count, $r->student_faculty);
						$sheet->setCellValue('K'.$count, $r->student_semester);
						$no++;
						$count++;
					}
					foreach(range('B','K') as $columnID) {
					    $sheet->getColumnDimension($columnID)->setAutoSize(true);
					}
					$sheet->getStyle('B3:K'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
					$styleArray = [
					    'borders' => [
					  		'allBorders' => [
					            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN //fine border
					        ]
					   	 ]
					];
					  
					$sheet->getStyle('B2:K'.--$count)->applyFromArray($styleArray);
					$writer = new Xlsx($spreadsheet);
					
					$filename = "Data Client(".$this->input->post('client_class').")".date('Y-m-d h:i:s A');			 
					header('Content-Type: application/vnd.ms-excel');
					header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
					header('Cache-Control: max-age=0');
					
					$writer->save('php://output');
				}else{
					$spreadsheet = new Spreadsheet();
					$sheet = $spreadsheet->getActiveSheet();
					$header = 'Report Data Client('.$this->input->post('client_class').') for '.date("F", mktime(0, 0, 0, $this->input->post('what_month'), 10)).' in '.date('Y');
					$count = 2;
					$sheet->setCellValue('B'.$count, $header);
					$sheet->mergeCells('B'.$count.':I'.$count);
					$sheet->getStyle('B'.$count.':I'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF87CEEB');
					$sheet->getStyle('B'.$count.':I'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
					$items = ['No','Appointment Date','Appointment Time','Staff ID','Staff Name','IC/PP','No Phone','Department'];
					$count++;
					$cells = ['B'.$count,'C'.$count,'D'.$count,'E'.$count,'F'.$count,'G'.$count,'H'.$count,'I'.$count];
					$sheet->getStyle('B3:I'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFD3D3D3');
					foreach(array_combine($items, $cells) as $item => $cell){
						$sheet->setCellValue($cell, $item);
					}
					$count++;
					$no = 1;
					foreach($this->converter_model->data_client_staff($this->input->post('what_month'),date('Y')) as $r){
						$sheet->setCellValue('B'.$count, $no);
						$sheet->setCellValue('C'.$count, $r->appt_date);
						$sheet->setCellValue('D'.$count, $r->appt_time);
						$sheet->setCellValue('E'.$count, $r->staff_no);
						$sheet->setCellValue('F'.$count, $r->staff_name);
						$sheet->setCellValue('G'.$count, $r->staff_icpp);
						$sheet->setCellValue('H'.$count, $r->staff_phone);
						$sheet->setCellValue('I'.$count, $r->staff_department);
						$no++;
						$count++;
					}
					foreach(range('B','I') as $columnID) {
					    $sheet->getColumnDimension($columnID)->setAutoSize(true);
					}
					$sheet->getStyle('B3:I'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
					$styleArray = [
					    'borders' => [
					  		'allBorders' => [
					            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN //fine border
					        ]
					   	 ]
					];
					  
					$sheet->getStyle('B2:I'.--$count)->applyFromArray($styleArray);
					$writer = new Xlsx($spreadsheet);
					
					$filename = "Data Client(".$this->input->post('client_class').")".date('Y-m-d h:i:s A');			 
					header('Content-Type: application/vnd.ms-excel');
					header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
					header('Cache-Control: max-age=0');
					
					$writer->save('php://output');
				}
			}
		}

		public function client_data_custom(){
			if($this->input->post('data_gen') == 'gen_pdf'){
				$dompdf = new Dompdf\Dompdf();
	    		$dompdf->set_option('isRemoteEnabled', TRUE);
	 
				$html = $this->load->view('PsyTest/Report/dm_client_custom',[],true);
				$dompdf->loadHtml($html);
				$dompdf->setPaper('A4', 'landscape');
				$dompdf->render();
				$dompdf->stream("Data Client(".$this->input->post('client_class').")".date('Y-m-d h:i:s A').".pdf",array('Attachment' => false));
				exit(0);
			}else{
				if($this->input->post('client_class') == 'student'){

					$spreadsheet = new Spreadsheet();
					$sheet = $spreadsheet->getActiveSheet();
					$header = 'Report Data Client('.$this->input->post('client_class').') from '.$this->input->post('what_start').' to '.$this->input->post('what_start');
					$count = 2;
					$sheet->setCellValue('B'.$count, $header);
					$sheet->mergeCells('B'.$count.':K'.$count);
					$sheet->getStyle('B'.$count.':K'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF87CEEB');
					$sheet->getStyle('B'.$count.':K'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
					$items = ['No','Appointment Date','Appointment Time','Student ID','Student Name','IC/PP','No Phone','Program','Faculty','Semester'];
					$count++;
					$cells = ['B'.$count,'C'.$count,'D'.$count,'E'.$count,'F'.$count,'G'.$count,'H'.$count,'I'.$count,'J'.$count,'K'.$count];
					$sheet->getStyle('B3:K'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFD3D3D3');
					foreach(array_combine($items, $cells) as $item => $cell){
						$sheet->setCellValue($cell, $item);
					}
					$count++;
					$no = 1;
					foreach($this->converter_model->data_client_student1($this->input->post('what_start'),$this->input->post('what_end')) as $r){
						$sheet->setCellValue('B'.$count, $no);
						$sheet->setCellValue('C'.$count, $r->appt_date);
						$sheet->setCellValue('D'.$count, $r->appt_time);
						$sheet->setCellValue('E'.$count, $r->student_no);
						$sheet->setCellValue('F'.$count, $r->student_name);
						$sheet->setCellValue('G'.$count, $r->student_icpp);
						$sheet->setCellValue('H'.$count, $r->student_phone);
						$sheet->setCellValue('I'.$count, $r->student_program);
						$sheet->setCellValue('J'.$count, $r->student_faculty);
						$sheet->setCellValue('K'.$count, $r->student_semester);
						$no++;
						$count++;
					}
					foreach(range('B','K') as $columnID) {
					    $sheet->getColumnDimension($columnID)->setAutoSize(true);
					}
					$sheet->getStyle('B3:K'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
					$styleArray = [
					    'borders' => [
					  		'allBorders' => [
					            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN //fine border
					        ]
					   	 ]
					];
					  
					$sheet->getStyle('B2:K'.--$count)->applyFromArray($styleArray);
					$writer = new Xlsx($spreadsheet);
					
					$filename = "Data Client(".$this->input->post('client_class').")".date('Y-m-d h:i:s A');			 
					header('Content-Type: application/vnd.ms-excel');
					header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
					header('Cache-Control: max-age=0');
					
					$writer->save('php://output');
				}else{
					$spreadsheet = new Spreadsheet();
					$sheet = $spreadsheet->getActiveSheet();
					$header = 'Report Data Client('.$this->input->post('client_class').') for '.$this->input->post('what_start').' to '.$this->input->post('what_start');
					$count = 2;
					$sheet->setCellValue('B'.$count, $header);
					$sheet->mergeCells('B'.$count.':I'.$count);
					$sheet->getStyle('B'.$count.':I'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF87CEEB');
					$sheet->getStyle('B'.$count.':I'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
					$items = ['No','Appointment Date','Appointment Time','Staff ID','Staff Name','IC/PP','No Phone','Department'];
					$count++;
					$cells = ['B'.$count,'C'.$count,'D'.$count,'E'.$count,'F'.$count,'G'.$count,'H'.$count,'I'.$count];
					$sheet->getStyle('B3:I'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFD3D3D3');
					foreach(array_combine($items, $cells) as $item => $cell){
						$sheet->setCellValue($cell, $item);
					}
					$count++;
					$no = 1;
					foreach($this->converter_model->data_client_staff1($this->input->post('what_start'),$this->input->post('what_end')) as $r){
						$sheet->setCellValue('B'.$count, $no);
						$sheet->setCellValue('C'.$count, $r->appt_date);
						$sheet->setCellValue('D'.$count, $r->appt_time);
						$sheet->setCellValue('E'.$count, $r->staff_no);
						$sheet->setCellValue('F'.$count, $r->staff_name);
						$sheet->setCellValue('G'.$count, $r->staff_icpp);
						$sheet->setCellValue('H'.$count, $r->staff_phone);
						$sheet->setCellValue('I'.$count, $r->staff_department);
						$no++;
						$count++;
					}
					foreach(range('B','I') as $columnID) {
					    $sheet->getColumnDimension($columnID)->setAutoSize(true);
					}
					$sheet->getStyle('B3:I'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
					$styleArray = [
					    'borders' => [
					  		'allBorders' => [
					            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN //fine border
					        ]
					   	 ]
					];
					  
					$sheet->getStyle('B2:I'.--$count)->applyFromArray($styleArray);
					$writer = new Xlsx($spreadsheet);
					
					$filename = "Data Client(".$this->input->post('client_class').")".date('Y-m-d h:i:s A');			 
					header('Content-Type: application/vnd.ms-excel');
					header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
					header('Cache-Control: max-age=0');
					
					$writer->save('php://output');
				}
			}
		}

		public function data_psycho(){
			if($this->input->post('data_gen')=='gen_pdf'){
				$dompdf = new Dompdf\Dompdf();
	    		$dompdf->set_option('isRemoteEnabled', TRUE);
	 
				$html = $this->load->view('PsyTest/Report/dm_fixed',[],true);
				$dompdf->loadHtml($html);
				$dompdf->setPaper('A4', 'landscape');
				$dompdf->render();
				$pdf = $dompdf->output();
				$dompdf->stream("test.pdf",array('Attachment' => false));
				exit(0);
			}else{
				$spreadsheet = new Spreadsheet();
				$sheet = $spreadsheet->getActiveSheet();
				$no = 1;
				$count = 2;
				if($this->input->post('client_class') == 'student'){
					if($this->input->post('what_test')=='GAD'){
						$header = 'Report Data '.$this->input->post('what_test').' ('.$this->input->post('client_class').') for '.date("F", mktime(0, 0, 0, $this->input->post('what_month'), 10)).' in '.date('Y');
						$sheet->setCellValue('B'.$count, $header);
						$sheet->mergeCells('B'.$count.':P'.$count);
						$sheet->getStyle('B'.$count.':P'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF87CEEB');
						$sheet->getStyle('B'.$count.':P'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$items = ['No','Appointment Date','Student ID','Student Name','Faculty','No Phone','Q1','Q2','Q3','Q4','Q5','Q6','Q7','Score','Result'];
						$count++;
						$cells = ['B'.$count,'C'.$count,'D'.$count,'E'.$count,'F'.$count,'G'.$count,'H'.$count,'I'.$count,'J'.$count,'K'.$count,'L'.$count,'M'.$count, 'N'.$count, 'O'.$count,'P'.$count];
						$sheet->getStyle('B3:P'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFD3D3D3');
						foreach(array_combine($items, $cells) as $item => $cell){
							$sheet->setCellValue($cell, $item);
						}
						$count++;
						foreach($this->converter_model->data_psycho($this->input->post('client_class'), $this->input->post('what_test'), $this->input->post('what_month'), date('Y'), $this->input->post('what_faculty'))  as $dt){
							$sheet->setCellValue('B'.$count, $no);
							$sheet->setCellValue('C'.$count, $dt->gad_date);
							$sheet->setCellValue('D'.$count, $dt->student_no);
							$sheet->setCellValue('E'.$count, $dt->student_name);
							$sheet->setCellValue('F'.$count, $dt->student_faculty);
							$sheet->setCellValue('G'.$count, $dt->student_phone);
							$sheet->setCellValue('H'.$count, $dt->gad_q1);
							$sheet->setCellValue('I'.$count, $dt->gad_q2);
							$sheet->setCellValue('J'.$count, $dt->gad_q3);
							$sheet->setCellValue('K'.$count, $dt->gad_q4);
							$sheet->setCellValue('L'.$count, $dt->gad_q5);
							$sheet->setCellValue('M'.$count, $dt->gad_q6);
							$sheet->setCellValue('N'.$count, $dt->gad_q7);
							$sheet->setCellValue('O'.$count, $dt->gad_score);
							$sheet->setCellValue('p'.$count, $dt->gad_result);
							$no++;
							$count++;
						}
						foreach(range('B','P') as $columnID) {
						    $sheet->getColumnDimension($columnID)->setAutoSize(true);
						}
						$sheet->getStyle('B3:P'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$styleArray = [
						    'borders' => [
						  		'allBorders' => [
						            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN //fine border
							        ]
						   	 ]
						];
							  
						$sheet->getStyle('B2:P'.--$count)->applyFromArray($styleArray);
						$count++;
						$no = 1;
						$filename = "Data Psychometric Test(".$this->input->post('what_test').")".date('Y-m-d h:i:s A');
					}elseif($this->input->post('what_test')=='PHQ'){
						$header = 'Report Data '.$this->input->post('what_test').' ('.$this->input->post('client_class').') for '.date("F", mktime(0, 0, 0, $this->input->post('what_month'), 10)).' in '.date('Y');
						$sheet->setCellValue('B'.$count, $header);
						$sheet->mergeCells('B'.$count.':R'.$count);
						$sheet->getStyle('B'.$count.':R'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF87CEEB');
						$sheet->getStyle('B'.$count.':R'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$items = ['No','Appointment Date','Student ID','Student Name','Faculty','No Phone','Q1','Q2','Q3','Q4','Q5','Q6','Q7','Q8','Q9','Score','Result'];
						$count++;
						$cells = ['B'.$count,'C'.$count,'D'.$count,'E'.$count,'F'.$count,'G'.$count,'H'.$count,'I'.$count,'J'.$count,'K'.$count,'L'.$count,'M'.$count, 'N'.$count, 'O'.$count,'P'.$count,'Q'.$count,'R'.$count];
						$sheet->getStyle('B3:R'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFD3D3D3');
						foreach(array_combine($items, $cells) as $item => $cell){
							$sheet->setCellValue($cell, $item);
						}
						$count++;
						foreach($this->converter_model->data_psycho($this->input->post('client_class'), $this->input->post('what_test'), $this->input->post('what_month'), date('Y'), $this->input->post('what_faculty'))  as $dt){
							$sheet->setCellValue('B'.$count, $no);
							$sheet->setCellValue('C'.$count, $dt->phq_date);
							$sheet->setCellValue('D'.$count, $dt->student_no);
							$sheet->setCellValue('E'.$count, $dt->student_name);
							$sheet->setCellValue('F'.$count, $dt->student_faculty);
							$sheet->setCellValue('G'.$count, $dt->student_phone);
							$sheet->setCellValue('H'.$count, $dt->phq_q1);
							$sheet->setCellValue('I'.$count, $dt->phq_q2);
							$sheet->setCellValue('J'.$count, $dt->phq_q3);
							$sheet->setCellValue('K'.$count, $dt->phq_q4);
							$sheet->setCellValue('L'.$count, $dt->phq_q5);
							$sheet->setCellValue('M'.$count, $dt->phq_q6);
							$sheet->setCellValue('N'.$count, $dt->phq_q7);
							$sheet->setCellValue('O'.$count, $dt->phq_q8);
							$sheet->setCellValue('p'.$count, $dt->phq_q9);
							$sheet->setCellValue('Q'.$count, $dt->phq_score);
							$sheet->setCellValue('R'.$count, $dt->phq_result);
							$no++;
							$count++;
						}
						foreach(range('B','R') as $columnID) {
						    $sheet->getColumnDimension($columnID)->setAutoSize(true);
						}
						$sheet->getStyle('B3:R'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$styleArray = [
						    'borders' => [
						  		'allBorders' => [
						            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN //fine border
							        ]
						   	 ]
						];
							  
						$sheet->getStyle('B2:R'.--$count)->applyFromArray($styleArray);
						$count++;
						$no = 1;
						$filename = "Data Psychometric Test(".$this->input->post('what_test').")".date('Y-m-d h:i:s A');
					}elseif($this->input->post('what_test')=='Whooley'){
						$header = 'Report Data '.$this->input->post('what_test').' ('.$this->input->post('client_class').') for '.date("F", mktime(0, 0, 0, $this->input->post('what_month'), 10)).' in '.date('Y');
						$sheet->setCellValue('B'.$count, $header);
						$sheet->mergeCells('B'.$count.':K'.$count);
						$sheet->getStyle('B'.$count.':K'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF87CEEB');
						$sheet->getStyle('B'.$count.':K'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$items = ['No','Appointment Date','Student ID','Student Name','Faculty','No Phone','Q1','Q2','Score','Result'];
						$count++;
						$cells = ['B'.$count,'C'.$count,'D'.$count,'E'.$count,'F'.$count,'G'.$count,'H'.$count,'I'.$count,'J'.$count,'K'.$count];
						$sheet->getStyle('B3:K'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFD3D3D3');
						foreach(array_combine($items, $cells) as $item => $cell){
							$sheet->setCellValue($cell, $item);
						}
						$count++;
						foreach($this->converter_model->data_psycho($this->input->post('client_class'), $this->input->post('what_test'), $this->input->post('what_month'), date('Y'), $this->input->post('what_faculty'))  as $dt){
							$sheet->setCellValue('B'.$count, $no);
							$sheet->setCellValue('C'.$count, $dt->whooley_date);
							$sheet->setCellValue('D'.$count, $dt->student_no);
							$sheet->setCellValue('E'.$count, $dt->student_name);
							$sheet->setCellValue('F'.$count, $dt->student_faculty);
							$sheet->setCellValue('G'.$count, $dt->student_phone);
							$sheet->setCellValue('H'.$count, $dt->whooley_q1);
							$sheet->setCellValue('I'.$count, $dt->whooley_q2);
							$sheet->setCellValue('J'.$count, $dt->whooley_score);
							$sheet->setCellValue('K'.$count, $dt->whooley_result);
							$no++;
							$count++;
						}
						foreach(range('B','K') as $columnID) {
						    $sheet->getColumnDimension($columnID)->setAutoSize(true);
						}
						$sheet->getStyle('B3:K'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$styleArray = [
						    'borders' => [
						  		'allBorders' => [
						            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN //fine border
							        ]
						   	 ]
						];
							  
						$sheet->getStyle('B2:K'.--$count)->applyFromArray($styleArray);
						$count++;
						$no = 1;
						$filename = "Data Psychometric Test(".$this->input->post('what_test').")".date('Y-m-d h:i:s A');
					}elseif($this->input->post('what_test')=='DASS'){
						$header = 'Report Data '.$this->input->post('what_test').' ('.$this->input->post('client_class').') for '.date("F", mktime(0, 0, 0, $this->input->post('what_month'), 10)).' in '.date('Y');
						$sheet->setCellValue('B'.$count, $header);
						$sheet->mergeCells('B'.$count.':AH'.$count);
						$sheet->getStyle('B'.$count.':AH'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF87CEEB');
						$sheet->getStyle('B'.$count.':AH'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$items = ['No','Appointment Date','Student ID','Student Name','Faculty','No Phone','Q1','Q2','Q3','Q4','Q5','Q6','Q7','Q8','Q9','Q10','Q11','Q12','Q13','Q14','Q15','Q16','Q17','Q18','Q19','Q20','Q21','stress_score','dass_stress','anxiety_score','dass_anxiety','depression_score','dass_depression'];
						$count++;
						$cells = ['B'.$count,'C'.$count,'D'.$count,'E'.$count,'F'.$count,'G'.$count,'H'.$count,'I'.$count,'J'.$count,'K'.$count,'L'.$count,'M'.$count, 'N'.$count, 'O'.$count,'P'.$count,'Q'.$count,'R'.$count,'S'.$count,'T'.$count,'U'.$count,'V'.$count,'W'.$count,'X'.$count,'Y'.$count,'Z'.$count,'AA'.$count,'AB'.$count,'AC'.$count,'AD'.$count,'AE'.$count,'AF'.$count,'AG'.$count,'AH'.$count];
						$sheet->getStyle('B3:AH'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFD3D3D3');
						foreach(array_combine($items, $cells) as $item => $cell){
							$sheet->setCellValue($cell, $item);
						}
						$count++;
						foreach($this->converter_model->data_psycho($this->input->post('client_class'), $this->input->post('what_test'), $this->input->post('what_month'), date('Y'), $this->input->post('what_faculty'))  as $dt){
							$sheet->setCellValue('B'.$count, $no);
							$sheet->setCellValue('C'.$count, $dt->dass_date);
							$sheet->setCellValue('D'.$count, $dt->student_no);
							$sheet->setCellValue('E'.$count, $dt->student_name);
							$sheet->setCellValue('F'.$count, $dt->student_faculty);
							$sheet->setCellValue('G'.$count, $dt->student_phone);
							$sheet->setCellValue('H'.$count, $dt->dass_q1);
							$sheet->setCellValue('I'.$count, $dt->dass_q2);
							$sheet->setCellValue('J'.$count, $dt->dass_q3);
							$sheet->setCellValue('K'.$count, $dt->dass_q4);
							$sheet->setCellValue('L'.$count, $dt->dass_q5);
							$sheet->setCellValue('M'.$count, $dt->dass_q6);
							$sheet->setCellValue('N'.$count, $dt->dass_q7);
							$sheet->setCellValue('O'.$count, $dt->dass_q8);
							$sheet->setCellValue('P'.$count, $dt->dass_q9);
							$sheet->setCellValue('Q'.$count, $dt->dass_q10);
							$sheet->setCellValue('R'.$count, $dt->dass_q11);
							$sheet->setCellValue('S'.$count, $dt->dass_q12);
							$sheet->setCellValue('T'.$count, $dt->dass_q13);
							$sheet->setCellValue('U'.$count, $dt->dass_q14);
							$sheet->setCellValue('V'.$count, $dt->dass_q15);
							$sheet->setCellValue('W'.$count, $dt->dass_q16);
							$sheet->setCellValue('X'.$count, $dt->dass_q17);
							$sheet->setCellValue('Y'.$count, $dt->dass_q18);
							$sheet->setCellValue('Z'.$count, $dt->dass_q19);
							$sheet->setCellValue('AA'.$count, $dt->dass_q20);
							$sheet->setCellValue('AB'.$count, $dt->dass_q21);
							$sheet->setCellValue('AC'.$count, $dt->stress_score);
							$sheet->setCellValue('AD'.$count, $dt->dass_stress);
							$sheet->setCellValue('AE'.$count, $dt->anxiety_score);
							$sheet->setCellValue('AF'.$count, $dt->dass_anxiety);
							$sheet->setCellValue('AG'.$count, $dt->depression_score);
							$sheet->setCellValue('AH'.$count, $dt->dass_depression);
							$no++;
							$count++;
						}
						foreach(range('B','AH') as $columnID) {
						    $sheet->getColumnDimension($columnID)->setAutoSize(true);
						}
						$sheet->getStyle('B3:AH'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$styleArray = [
						    'borders' => [
						  		'allBorders' => [
						            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN //fine border
							        ]
						   	 ]
						];
							  
						$sheet->getStyle('B2:AH'.--$count)->applyFromArray($styleArray);
						$count++;
						$no = 1;
						$filename = "Data Psychometric Test(".$this->input->post('what_test').")".date('Y-m-d h:i:s A');
					}elseif($this->input->post('what_test')=='BAI'){
						$header = 'Report Data '.$this->input->post('what_test').' ('.$this->input->post('client_class').') for '.date("F", mktime(0, 0, 0, $this->input->post('what_month'), 10)).' in '.date('Y');
						$sheet->setCellValue('B'.$count, $header);
						$sheet->mergeCells('B'.$count.':AD'.$count);
						$sheet->getStyle('B'.$count.':AD'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF87CEEB');
						$sheet->getStyle('B'.$count.':AD'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$items = ['No','Appointment Date','Student ID','Student Name','Faculty','No Phone','Score','Q1','Q2','Q3','Q4','Q5','Q6','Q7','Q8','Q9','Q10','Q11','Q12','Q13','Q14','Q15','Q16','Q17','Q18','Q19','Q20','Q21','Result'];
						$count++;
						$cells = ['B'.$count,'C'.$count,'D'.$count,'E'.$count,'F'.$count,'G'.$count,'H'.$count,'I'.$count,'J'.$count,'K'.$count,'L'.$count,'M'.$count, 'N'.$count, 'O'.$count,'P'.$count,'Q'.$count,'R'.$count,'S'.$count,'T'.$count,'U'.$count,'V'.$count,'W'.$count,'X'.$count,'Y'.$count,'Z'.$count,'AA'.$count,'AB'.$count,'AC'.$count,'AD'.$count];
						$sheet->getStyle('B3:AD'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFD3D3D3');
						foreach(array_combine($items, $cells) as $item => $cell){
							$sheet->setCellValue($cell, $item);
						}
						$count++;
						foreach($this->converter_model->data_psycho($this->input->post('client_class'), $this->input->post('what_test'), $this->input->post('what_month'), date('Y'), $this->input->post('what_faculty'))  as $dt){
							$sheet->setCellValue('B'.$count, $no);
							$sheet->setCellValue('C'.$count, $dt->bai_date);
							$sheet->setCellValue('D'.$count, $dt->student_no);
							$sheet->setCellValue('E'.$count, $dt->student_name);
							$sheet->setCellValue('F'.$count, $dt->student_faculty);
							$sheet->setCellValue('G'.$count, $dt->student_phone);
							$sheet->setCellValue('H'.$count, $dt->bai_score);
							$sheet->setCellValue('I'.$count, $dt->bai_q1);
							$sheet->setCellValue('J'.$count, $dt->bai_q2);
							$sheet->setCellValue('K'.$count, $dt->bai_q3);
							$sheet->setCellValue('L'.$count, $dt->bai_q4);
							$sheet->setCellValue('M'.$count, $dt->bai_q5);
							$sheet->setCellValue('N'.$count, $dt->bai_q6);
							$sheet->setCellValue('O'.$count, $dt->bai_q7);
							$sheet->setCellValue('P'.$count, $dt->bai_q8);
							$sheet->setCellValue('Q'.$count, $dt->bai_q9);
							$sheet->setCellValue('R'.$count, $dt->bai_q10);
							$sheet->setCellValue('S'.$count, $dt->bai_q11);
							$sheet->setCellValue('T'.$count, $dt->bai_q12);
							$sheet->setCellValue('U'.$count, $dt->bai_q13);
							$sheet->setCellValue('V'.$count, $dt->bai_q14);
							$sheet->setCellValue('W'.$count, $dt->bai_q15);
							$sheet->setCellValue('X'.$count, $dt->bai_q16);
							$sheet->setCellValue('Y'.$count, $dt->bai_q17);
							$sheet->setCellValue('Z'.$count, $dt->bai_q18);
							$sheet->setCellValue('AA'.$count, $dt->bai_q19);
							$sheet->setCellValue('AB'.$count, $dt->bai_q20);
							$sheet->setCellValue('AC'.$count, $dt->bai_q21);
							$sheet->setCellValue('AD'.$count, $dt->bai_result);
							$no++;
							$count++;
						}
						foreach(range('B','AD') as $columnID) {
						    $sheet->getColumnDimension($columnID)->setAutoSize(true);
						}
						$sheet->getStyle('B3:AD'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$styleArray = [
						    'borders' => [
						  		'allBorders' => [
						            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN //fine border
							        ]
						   	 ]
						];
							  
						$sheet->getStyle('B2:AD'.--$count)->applyFromArray($styleArray);
						$count++;
						$no = 1;
						$filename = "Data Psychometric Test(".$this->input->post('what_test').")".date('Y-m-d h:i:s A');
					}elseif($this->input->post('what_test')=='BDI'){
						$header = 'Report Data '.$this->input->post('what_test').' ('.$this->input->post('client_class').') for '.date("F", mktime(0, 0, 0, $this->input->post('what_month'), 10)).' in '.date('Y');
						$sheet->setCellValue('B'.$count, $header);
						$sheet->mergeCells('B'.$count.':AD'.$count);
						$sheet->getStyle('B'.$count.':AD'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF87CEEB');
						$sheet->getStyle('B'.$count.':AD'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$items = ['No','Appointment Date','Student ID','Student Name','Faculty','No Phone','Score','Q1','Q2','Q3','Q4','Q5','Q6','Q7','Q8','Q9','Q10','Q11','Q12','Q13','Q14','Q15','Q16','Q17','Q18','Q19','Q20','Q21','Result'];
						$count++;
						$cells = ['B'.$count,'C'.$count,'D'.$count,'E'.$count,'F'.$count,'G'.$count,'H'.$count,'I'.$count,'J'.$count,'K'.$count,'L'.$count,'M'.$count, 'N'.$count, 'O'.$count,'P'.$count,'Q'.$count,'R'.$count,'S'.$count,'T'.$count,'U'.$count,'V'.$count,'W'.$count,'X'.$count,'Y'.$count,'Z'.$count,'AA'.$count,'AB'.$count,'AC'.$count,'AD'.$count];
						$sheet->getStyle('B3:AD'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFD3D3D3');
						foreach(array_combine($items, $cells) as $item => $cell){
							$sheet->setCellValue($cell, $item);
						}
						$count++;
						foreach($this->converter_model->data_psycho($this->input->post('client_class'), $this->input->post('what_test'), $this->input->post('what_month'), date('Y'), $this->input->post('what_faculty'))  as $dt){
							$sheet->setCellValue('B'.$count, $no);
							$sheet->setCellValue('C'.$count, $dt->bdi_date);
							$sheet->setCellValue('D'.$count, $dt->student_no);
							$sheet->setCellValue('E'.$count, $dt->student_name);
							$sheet->setCellValue('F'.$count, $dt->student_faculty);
							$sheet->setCellValue('G'.$count, $dt->student_phone);
							$sheet->setCellValue('H'.$count, $dt->bdi_score);
							$sheet->setCellValue('I'.$count, $dt->bdi_q1);
							$sheet->setCellValue('J'.$count, $dt->bdi_q2);
							$sheet->setCellValue('K'.$count, $dt->bdi_q3);
							$sheet->setCellValue('L'.$count, $dt->bdi_q4);
							$sheet->setCellValue('M'.$count, $dt->bdi_q5);
							$sheet->setCellValue('N'.$count, $dt->bdi_q6);
							$sheet->setCellValue('O'.$count, $dt->bdi_q7);
							$sheet->setCellValue('P'.$count, $dt->bdi_q8);
							$sheet->setCellValue('Q'.$count, $dt->bdi_q9);
							$sheet->setCellValue('R'.$count, $dt->bdi_q10);
							$sheet->setCellValue('S'.$count, $dt->bdi_q11);
							$sheet->setCellValue('T'.$count, $dt->bdi_q12);
							$sheet->setCellValue('U'.$count, $dt->bdi_q13);
							$sheet->setCellValue('V'.$count, $dt->bdi_q14);
							$sheet->setCellValue('W'.$count, $dt->bdi_q15);
							$sheet->setCellValue('X'.$count, $dt->bdi_q16);
							$sheet->setCellValue('Y'.$count, $dt->bdi_q17);
							$sheet->setCellValue('Z'.$count, $dt->bdi_q18);
							$sheet->setCellValue('AA'.$count, $dt->bdi_q19);
							$sheet->setCellValue('AB'.$count, $dt->bdi_q20);
							$sheet->setCellValue('AC'.$count, $dt->bdi_q21);
							$sheet->setCellValue('AD'.$count, $dt->bdi_result);
							$no++;
							$count++;
						}
						foreach(range('B','AD') as $columnID) {
						    $sheet->getColumnDimension($columnID)->setAutoSize(true);
						}
						$sheet->getStyle('B3:AD'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$styleArray = [
						    'borders' => [
						  		'allBorders' => [
						            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN //fine border
							        ]
						   	 ]
						];
							  
						$sheet->getStyle('B2:I'.--$count)->applyFromArray($styleArray);
						$count++;
						$no = 1;
						$filename = "Data Psychometric Test(".$this->input->post('what_test').")".date('Y-m-d h:i:s A');
					}else{
						$header = 'Report Data '.$this->input->post('what_test').' ('.$this->input->post('client_class').') for '.date("F", mktime(0, 0, 0, $this->input->post('what_month'), 10)).' in '.date('Y');
						$sheet->setCellValue('B'.$count, $header);
						$sheet->mergeCells('B'.$count.':I'.$count);
						$sheet->getStyle('B'.$count.':I'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF87CEEB');
						$sheet->getStyle('B'.$count.':I'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$items = ['No','Appointment Date','Student ID','Student Name','Faculty','No Phone','Score','Result'];
						$count++;
						$cells = ['B'.$count,'C'.$count,'D'.$count,'E'.$count,'F'.$count,'G'.$count,'H'.$count,'I'.$count];
						$sheet->getStyle('B3:I'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFD3D3D3');
						foreach(array_combine($items, $cells) as $item => $cell){
							$sheet->setCellValue($cell, $item);
						}
						$count++;
						foreach($this->converter_model->data_psycho($this->input->post('client_class'), $this->input->post('what_test'), $this->input->post('what_month'), date('Y'), $this->input->post('what_faculty'))  as $dt){
							$sheet->setCellValue('B'.$count, $no);
							$sheet->setCellValue('C'.$count, $dt->mbti_date);
							$sheet->setCellValue('D'.$count, $dt->student_no);
							$sheet->setCellValue('E'.$count, $dt->student_name);
							$sheet->setCellValue('F'.$count, $dt->student_faculty);
							$sheet->setCellValue('G'.$count, $dt->student_phone);
							$sheet->setCellValue('H'.$count, $dt->mbti_score);
							$sheet->setCellValue('I'.$count, $dt->mbti_result);
							$no++;
							$count++;
						}
						foreach(range('B','I') as $columnID) {
						    $sheet->getColumnDimension($columnID)->setAutoSize(true);
						}
						$sheet->getStyle('B3:I'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$styleArray = [
						    'borders' => [
						  		'allBorders' => [
						            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN //fine border
							        ]
						   	 ]
						];
							  
						$sheet->getStyle('B2:I'.--$count)->applyFromArray($styleArray);
						$count++;
						$no = 1;
						$filename = "Data Psychometric Test(".$this->input->post('what_test').")".date('Y-m-d h:i:s A');
					}
				}else{
					if($this->input->post('what_test')=='GAD'){
						$header = 'Report Data '.$this->input->post('what_test').' ('.$this->input->post('client_class').') for '.date("F", mktime(0, 0, 0, $this->input->post('what_month'), 10)).' in '.date('Y');
						$sheet->setCellValue('B'.$count, $header);
						$sheet->mergeCells('B'.$count.':P'.$count);
						$sheet->getStyle('B'.$count.':P'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF87CEEB');
						$sheet->getStyle('B'.$count.':P'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$items = ['No','Appointment Date','Staff ID','Staff Name','Faculty','No Phone','Q1','Q2','Q3','Q4','Q5','Q6','Q7','Score','Result'];
						$count++;
						$cells = ['B'.$count,'C'.$count,'D'.$count,'E'.$count,'F'.$count,'G'.$count,'H'.$count,'I'.$count,'J'.$count,'K'.$count,'L'.$count,'M'.$count, 'N'.$count, 'O'.$count,'P'.$count];
						$sheet->getStyle('B3:P'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFD3D3D3');
						foreach(array_combine($items, $cells) as $item => $cell){
							$sheet->setCellValue($cell, $item);
						}
						$count++;
						foreach($this->converter_model->data_psycho($this->input->post('client_class'), $this->input->post('what_test'), $this->input->post('what_month'), date('Y'), $this->input->post('what_department'))  as $dt){
							$sheet->setCellValue('B'.$count, $no);
							$sheet->setCellValue('C'.$count, $dt->gad_date);
							$sheet->setCellValue('D'.$count, $dt->staff_no);
							$sheet->setCellValue('E'.$count, $dt->staff_name);
							$sheet->setCellValue('F'.$count, $dt->staff_department);
							$sheet->setCellValue('G'.$count, $dt->staff_phone);
							$sheet->setCellValue('H'.$count, $dt->gad_q1);
							$sheet->setCellValue('I'.$count, $dt->gad_q2);
							$sheet->setCellValue('J'.$count, $dt->gad_q3);
							$sheet->setCellValue('K'.$count, $dt->gad_q4);
							$sheet->setCellValue('L'.$count, $dt->gad_q5);
							$sheet->setCellValue('M'.$count, $dt->gad_q6);
							$sheet->setCellValue('N'.$count, $dt->gad_q7);
							$sheet->setCellValue('O'.$count, $dt->gad_score);
							$sheet->setCellValue('p'.$count, $dt->gad_result);
							$no++;
							$count++;
						}
						foreach(range('B','P') as $columnID) {
						    $sheet->getColumnDimension($columnID)->setAutoSize(true);
						}
						$sheet->getStyle('B3:P'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$styleArray = [
						    'borders' => [
						  		'allBorders' => [
						            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN //fine border
							        ]
						   	 ]
						];
							  
						$sheet->getStyle('B2:P'.--$count)->applyFromArray($styleArray);
						$count++;
						$no = 1;
						$filename = "Data Psychometric Test(".$this->input->post('what_test').")".date('Y-m-d h:i:s A');
					}elseif($this->input->post('what_test')=='PHQ'){
						$header = 'Report Data '.$this->input->post('what_test').' ('.$this->input->post('client_class').') for '.date("F", mktime(0, 0, 0, $this->input->post('what_month'), 10)).' in '.date('Y');
						$sheet->setCellValue('B'.$count, $header);
						$sheet->mergeCells('B'.$count.':R'.$count);
						$sheet->getStyle('B'.$count.':R'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF87CEEB');
						$sheet->getStyle('B'.$count.':R'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$items = ['No','Appointment Date','Staff ID','Staff Name','Faculty','No Phone','Q1','Q2','Q3','Q4','Q5','Q6','Q7','Q8','Q9','Score','Result'];
						$count++;
						$cells = ['B'.$count,'C'.$count,'D'.$count,'E'.$count,'F'.$count,'G'.$count,'H'.$count,'I'.$count,'J'.$count,'K'.$count,'L'.$count,'M'.$count, 'N'.$count, 'O'.$count,'P'.$count,'Q'.$count,'R'.$count];
						$sheet->getStyle('B3:R'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFD3D3D3');
						foreach(array_combine($items, $cells) as $item => $cell){
							$sheet->setCellValue($cell, $item);
						}
						$count++;
						foreach($this->converter_model->data_psycho($this->input->post('client_class'), $this->input->post('what_test'), $this->input->post('what_month'), date('Y'), $this->input->post('what_department'))  as $dt){
							$sheet->setCellValue('B'.$count, $no);
							$sheet->setCellValue('C'.$count, $dt->phq_date);
							$sheet->setCellValue('D'.$count, $dt->staff_no);
							$sheet->setCellValue('E'.$count, $dt->staff_name);
							$sheet->setCellValue('F'.$count, $dt->staff_department);
							$sheet->setCellValue('G'.$count, $dt->staff_phone);
							$sheet->setCellValue('H'.$count, $dt->phq_q1);
							$sheet->setCellValue('I'.$count, $dt->phq_q2);
							$sheet->setCellValue('J'.$count, $dt->phq_q3);
							$sheet->setCellValue('K'.$count, $dt->phq_q4);
							$sheet->setCellValue('L'.$count, $dt->phq_q5);
							$sheet->setCellValue('M'.$count, $dt->phq_q6);
							$sheet->setCellValue('N'.$count, $dt->phq_q7);
							$sheet->setCellValue('O'.$count, $dt->phq_q8);
							$sheet->setCellValue('p'.$count, $dt->phq_q9);
							$sheet->setCellValue('Q'.$count, $dt->phq_score);
							$sheet->setCellValue('R'.$count, $dt->phq_result);
							$no++;
							$count++;
						}
						foreach(range('B','R') as $columnID) {
						    $sheet->getColumnDimension($columnID)->setAutoSize(true);
						}
						$sheet->getStyle('B3:R'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$styleArray = [
						    'borders' => [
						  		'allBorders' => [
						            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN //fine border
							        ]
						   	 ]
						];
							  
						$sheet->getStyle('B2:R'.--$count)->applyFromArray($styleArray);
						$count++;
						$no = 1;
						$filename = "Data Psychometric Test(".$this->input->post('what_test').")".date('Y-m-d h:i:s A');
					}elseif($this->input->post('what_test')=='Whooley'){
						$header = 'Report Data '.$this->input->post('what_test').' ('.$this->input->post('client_class').') for '.date("F", mktime(0, 0, 0, $this->input->post('what_month'), 10)).' in '.date('Y');
						$sheet->setCellValue('B'.$count, $header);
						$sheet->mergeCells('B'.$count.':K'.$count);
						$sheet->getStyle('B'.$count.':K'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF87CEEB');
						$sheet->getStyle('B'.$count.':K'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$items = ['No','Appointment Date','Staff ID','Staff Name','Faculty','No Phone','Q1','Q2','Score','Result'];
						$count++;
						$cells = ['B'.$count,'C'.$count,'D'.$count,'E'.$count,'F'.$count,'G'.$count,'H'.$count,'I'.$count,'J'.$count,'K'.$count];
						$sheet->getStyle('B3:K'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFD3D3D3');
						foreach(array_combine($items, $cells) as $item => $cell){
							$sheet->setCellValue($cell, $item);
						}
						$count++;
						foreach($this->converter_model->data_psycho($this->input->post('client_class'), $this->input->post('what_test'), $this->input->post('what_month'), date('Y'), $this->input->post('what_department'))  as $dt){
							$sheet->setCellValue('B'.$count, $no);
							$sheet->setCellValue('C'.$count, $dt->whooley_date);
							$sheet->setCellValue('D'.$count, $dt->staff_no);
							$sheet->setCellValue('E'.$count, $dt->staff_name);
							$sheet->setCellValue('F'.$count, $dt->staff_department);
							$sheet->setCellValue('G'.$count, $dt->staff_phone);
							$sheet->setCellValue('H'.$count, $dt->whooley_q1);
							$sheet->setCellValue('I'.$count, $dt->whooley_q2);
							$sheet->setCellValue('J'.$count, $dt->whooley_score);
							$sheet->setCellValue('K'.$count, $dt->whooley_result);
							$no++;
							$count++;
						}
						foreach(range('B','K') as $columnID) {
						    $sheet->getColumnDimension($columnID)->setAutoSize(true);
						}
						$sheet->getStyle('B3:K'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$styleArray = [
						    'borders' => [
						  		'allBorders' => [
						            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN //fine border
							        ]
						   	 ]
						];
							  
						$sheet->getStyle('B2:K'.--$count)->applyFromArray($styleArray);
						$count++;
						$no = 1;
						$filename = "Data Psychometric Test(".$this->input->post('what_test').")".date('Y-m-d h:i:s A');
					}elseif($this->input->post('what_test')=='DASS'){
						$header = 'Report Data '.$this->input->post('what_test').' ('.$this->input->post('client_class').') for '.date("F", mktime(0, 0, 0, $this->input->post('what_month'), 10)).' in '.date('Y');
						$sheet->setCellValue('B'.$count, $header);
						$sheet->mergeCells('B'.$count.':AH'.$count);
						$sheet->getStyle('B'.$count.':AH'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF87CEEB');
						$sheet->getStyle('B'.$count.':AH'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$items = ['No','Appointment Date','Staff ID','Staff Name','Faculty','No Phone','Q1','Q2','Q3','Q4','Q5','Q6','Q7','Q8','Q9','Q10','Q11','Q12','Q13','Q14','Q15','Q16','Q17','Q18','Q19','Q20','Q21','stress_score','dass_stress','anxiety_score','dass_anxiety','depression_score','dass_depression'];
						$count++;
						$cells = ['B'.$count,'C'.$count,'D'.$count,'E'.$count,'F'.$count,'G'.$count,'H'.$count,'I'.$count,'J'.$count,'K'.$count,'L'.$count,'M'.$count, 'N'.$count, 'O'.$count,'P'.$count,'Q'.$count,'R'.$count,'S'.$count,'T'.$count,'U'.$count,'V'.$count,'W'.$count,'X'.$count,'Y'.$count,'Z'.$count,'AA'.$count,'AB'.$count,'AC'.$count,'AD'.$count,'AE'.$count,'AF'.$count,'AG'.$count,'AH'.$count];
						$sheet->getStyle('B3:AH'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFD3D3D3');
						foreach(array_combine($items, $cells) as $item => $cell){
							$sheet->setCellValue($cell, $item);
						}
						$count++;
						foreach($this->converter_model->data_psycho($this->input->post('client_class'), $this->input->post('what_test'), $this->input->post('what_month'), date('Y'), $this->input->post('what_department'))  as $dt){
							$sheet->setCellValue('B'.$count, $no);
							$sheet->setCellValue('C'.$count, $dt->dass_date);
							$sheet->setCellValue('D'.$count, $dt->staff_no);
							$sheet->setCellValue('E'.$count, $dt->staff_name);
							$sheet->setCellValue('F'.$count, $dt->staff_department);
							$sheet->setCellValue('G'.$count, $dt->staff_phone);
							$sheet->setCellValue('H'.$count, $dt->dass_q1);
							$sheet->setCellValue('I'.$count, $dt->dass_q2);
							$sheet->setCellValue('J'.$count, $dt->dass_q3);
							$sheet->setCellValue('K'.$count, $dt->dass_q4);
							$sheet->setCellValue('L'.$count, $dt->dass_q5);
							$sheet->setCellValue('M'.$count, $dt->dass_q6);
							$sheet->setCellValue('N'.$count, $dt->dass_q7);
							$sheet->setCellValue('O'.$count, $dt->dass_q8);
							$sheet->setCellValue('P'.$count, $dt->dass_q9);
							$sheet->setCellValue('Q'.$count, $dt->dass_q10);
							$sheet->setCellValue('R'.$count, $dt->dass_q11);
							$sheet->setCellValue('S'.$count, $dt->dass_q12);
							$sheet->setCellValue('T'.$count, $dt->dass_q13);
							$sheet->setCellValue('U'.$count, $dt->dass_q14);
							$sheet->setCellValue('V'.$count, $dt->dass_q15);
							$sheet->setCellValue('W'.$count, $dt->dass_q16);
							$sheet->setCellValue('X'.$count, $dt->dass_q17);
							$sheet->setCellValue('Y'.$count, $dt->dass_q18);
							$sheet->setCellValue('Z'.$count, $dt->dass_q19);
							$sheet->setCellValue('AA'.$count, $dt->dass_q20);
							$sheet->setCellValue('AB'.$count, $dt->dass_q21);
							$sheet->setCellValue('AC'.$count, $dt->stress_score);
							$sheet->setCellValue('AD'.$count, $dt->dass_stress);
							$sheet->setCellValue('AE'.$count, $dt->anxiety_score);
							$sheet->setCellValue('AF'.$count, $dt->dass_anxiety);
							$sheet->setCellValue('AG'.$count, $dt->depression_score);
							$sheet->setCellValue('AH'.$count, $dt->dass_depression);
							$no++;
							$count++;
						}
						foreach(range('B','AH') as $columnID) {
						    $sheet->getColumnDimension($columnID)->setAutoSize(true);
						}
						$sheet->getStyle('B3:AH'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$styleArray = [
						    'borders' => [
						  		'allBorders' => [
						            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN //fine border
							        ]
						   	 ]
						];
							  
						$sheet->getStyle('B2:AH'.--$count)->applyFromArray($styleArray);
						$count++;
						$no = 1;
						$filename = "Data Psychometric Test(".$this->input->post('what_test').")".date('Y-m-d h:i:s A');
					}elseif($this->input->post('what_test')=='BAI'){
						$header = 'Report Data '.$this->input->post('what_test').' ('.$this->input->post('client_class').') for '.date("F", mktime(0, 0, 0, $this->input->post('what_month'), 10)).' in '.date('Y');
						$sheet->setCellValue('B'.$count, $header);
						$sheet->mergeCells('B'.$count.':AD'.$count);
						$sheet->getStyle('B'.$count.':AD'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF87CEEB');
						$sheet->getStyle('B'.$count.':AD'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$items = ['No','Appointment Date','Student ID','Student Name','Faculty','No Phone','Score','Q1','Q2','Q3','Q4','Q5','Q6','Q7','Q8','Q9','Q10','Q11','Q12','Q13','Q14','Q15','Q16','Q17','Q18','Q19','Q20','Q21','Result'];
						$count++;
						$cells = ['B'.$count,'C'.$count,'D'.$count,'E'.$count,'F'.$count,'G'.$count,'H'.$count,'I'.$count,'J'.$count,'K'.$count,'L'.$count,'M'.$count, 'N'.$count, 'O'.$count,'P'.$count,'Q'.$count,'R'.$count,'S'.$count,'T'.$count,'U'.$count,'V'.$count,'W'.$count,'X'.$count,'Y'.$count,'Z'.$count,'AA'.$count,'AB'.$count,'AC'.$count,'AD'.$count];
						$sheet->getStyle('B3:AD'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFD3D3D3');
						foreach(array_combine($items, $cells) as $item => $cell){
							$sheet->setCellValue($cell, $item);
						}
						$count++;
						foreach($this->converter_model->data_psycho($this->input->post('client_class'), $this->input->post('what_test'), $this->input->post('what_month'), date('Y'), $this->input->post('what_department'))  as $dt){
							$sheet->setCellValue('B'.$count, $no);
							$sheet->setCellValue('C'.$count, $dt->bai_date);
							$sheet->setCellValue('D'.$count, $dt->staff_no);
							$sheet->setCellValue('E'.$count, $dt->staff_name);
							$sheet->setCellValue('F'.$count, $dt->staff_department);
							$sheet->setCellValue('G'.$count, $dt->staff_phone);
							$sheet->setCellValue('H'.$count, $dt->bai_score);
							$sheet->setCellValue('I'.$count, $dt->bai_q1);
							$sheet->setCellValue('J'.$count, $dt->bai_q2);
							$sheet->setCellValue('K'.$count, $dt->bai_q3);
							$sheet->setCellValue('L'.$count, $dt->bai_q4);
							$sheet->setCellValue('M'.$count, $dt->bai_q5);
							$sheet->setCellValue('N'.$count, $dt->bai_q6);
							$sheet->setCellValue('O'.$count, $dt->bai_q7);
							$sheet->setCellValue('P'.$count, $dt->bai_q8);
							$sheet->setCellValue('Q'.$count, $dt->bai_q9);
							$sheet->setCellValue('R'.$count, $dt->bai_q10);
							$sheet->setCellValue('S'.$count, $dt->bai_q11);
							$sheet->setCellValue('T'.$count, $dt->bai_q12);
							$sheet->setCellValue('U'.$count, $dt->bai_q13);
							$sheet->setCellValue('V'.$count, $dt->bai_q14);
							$sheet->setCellValue('W'.$count, $dt->bai_q15);
							$sheet->setCellValue('X'.$count, $dt->bai_q16);
							$sheet->setCellValue('Y'.$count, $dt->bai_q17);
							$sheet->setCellValue('Z'.$count, $dt->bai_q18);
							$sheet->setCellValue('AA'.$count, $dt->bai_q19);
							$sheet->setCellValue('AB'.$count, $dt->bai_q20);
							$sheet->setCellValue('AC'.$count, $dt->bai_q21);
							$sheet->setCellValue('AD'.$count, $dt->bai_result);
							$no++;
							$count++;
						}
						foreach(range('B','AD') as $columnID) {
						    $sheet->getColumnDimension($columnID)->setAutoSize(true);
						}
						$sheet->getStyle('B3:AD'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$styleArray = [
						    'borders' => [
						  		'allBorders' => [
						            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN //fine border
							        ]
						   	 ]
						];
							  
						$sheet->getStyle('B2:AD'.--$count)->applyFromArray($styleArray);
						$count++;
						$no = 1;
						$filename = "Data Psychometric Test(".$this->input->post('what_test').")".date('Y-m-d h:i:s A');
					}elseif($this->input->post('what_test')=='BDI'){
						$header = 'Report Data '.$this->input->post('what_test').' ('.$this->input->post('client_class').') for '.date("F", mktime(0, 0, 0, $this->input->post('what_month'), 10)).' in '.date('Y');
						$sheet->setCellValue('B'.$count, $header);
						$sheet->mergeCells('B'.$count.':AD'.$count);
						$sheet->getStyle('B'.$count.':AD'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF87CEEB');
						$sheet->getStyle('B'.$count.':AD'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$items = ['No','Appointment Date','Student ID','Student Name','Faculty','No Phone','Score','Q1','Q2','Q3','Q4','Q5','Q6','Q7','Q8','Q9','Q10','Q11','Q12','Q13','Q14','Q15','Q16','Q17','Q18','Q19','Q20','Q21','Result'];
						$count++;
						$cells = ['B'.$count,'C'.$count,'D'.$count,'E'.$count,'F'.$count,'G'.$count,'H'.$count,'I'.$count,'J'.$count,'K'.$count,'L'.$count,'M'.$count, 'N'.$count, 'O'.$count,'P'.$count,'Q'.$count,'R'.$count,'S'.$count,'T'.$count,'U'.$count,'V'.$count,'W'.$count,'X'.$count,'Y'.$count,'Z'.$count,'AA'.$count,'AB'.$count,'AC'.$count,'AD'.$count];
						$sheet->getStyle('B3:AD'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFD3D3D3');
						foreach(array_combine($items, $cells) as $item => $cell){
							$sheet->setCellValue($cell, $item);
						}
						$count++;
						foreach($this->converter_model->data_psycho($this->input->post('client_class'), $this->input->post('what_test'), $this->input->post('what_month'), date('Y'), $this->input->post('what_department'))  as $dt){
							$sheet->setCellValue('B'.$count, $no);
							$sheet->setCellValue('C'.$count, $dt->bdi_date);
							$sheet->setCellValue('D'.$count, $dt->staff_no);
							$sheet->setCellValue('E'.$count, $dt->staff_name);
							$sheet->setCellValue('F'.$count, $dt->staff_department);
							$sheet->setCellValue('G'.$count, $dt->staff_phone);
							$sheet->setCellValue('H'.$count, $dt->bdi_score);
							$sheet->setCellValue('I'.$count, $dt->bdi_q1);
							$sheet->setCellValue('J'.$count, $dt->bdi_q2);
							$sheet->setCellValue('K'.$count, $dt->bdi_q3);
							$sheet->setCellValue('L'.$count, $dt->bdi_q4);
							$sheet->setCellValue('M'.$count, $dt->bdi_q5);
							$sheet->setCellValue('N'.$count, $dt->bdi_q6);
							$sheet->setCellValue('O'.$count, $dt->bdi_q7);
							$sheet->setCellValue('P'.$count, $dt->bdi_q8);
							$sheet->setCellValue('Q'.$count, $dt->bdi_q9);
							$sheet->setCellValue('R'.$count, $dt->bdi_q10);
							$sheet->setCellValue('S'.$count, $dt->bdi_q11);
							$sheet->setCellValue('T'.$count, $dt->bdi_q12);
							$sheet->setCellValue('U'.$count, $dt->bdi_q13);
							$sheet->setCellValue('V'.$count, $dt->bdi_q14);
							$sheet->setCellValue('W'.$count, $dt->bdi_q15);
							$sheet->setCellValue('X'.$count, $dt->bdi_q16);
							$sheet->setCellValue('Y'.$count, $dt->bdi_q17);
							$sheet->setCellValue('Z'.$count, $dt->bdi_q18);
							$sheet->setCellValue('AA'.$count, $dt->bdi_q19);
							$sheet->setCellValue('AB'.$count, $dt->bdi_q20);
							$sheet->setCellValue('AC'.$count, $dt->bdi_q21);
							$sheet->setCellValue('AD'.$count, $dt->bdi_result);
							$no++;
							$count++;
						}
						foreach(range('B','AD') as $columnID) {
						    $sheet->getColumnDimension($columnID)->setAutoSize(true);
						}
						$sheet->getStyle('B3:AD'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$styleArray = [
						    'borders' => [
						  		'allBorders' => [
						            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN //fine border
							        ]
						   	 ]
						];
							  
						$sheet->getStyle('B2:AD'.--$count)->applyFromArray($styleArray);
						$count++;
						$no = 1;
						$filename = "Data Psychometric Test(".$this->input->post('what_test').")".date('Y-m-d h:i:s A');
					}else{
						$header = 'Report Data '.$this->input->post('what_test').' ('.$this->input->post('client_class').') for '.date("F", mktime(0, 0, 0, $this->input->post('what_month'), 10)).' in '.date('Y');
						$sheet->setCellValue('B'.$count, $header);
						$sheet->mergeCells('B'.$count.':I'.$count);
						$sheet->getStyle('B'.$count.':I'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF87CEEB');
						$sheet->getStyle('B'.$count.':I'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$items = ['No','Appointment Date','Staff ID','Staff Name','Faculty','No Phone','Score','Result'];
						$count++;
						$cells = ['B'.$count,'C'.$count,'D'.$count,'E'.$count,'F'.$count,'G'.$count,'H'.$count,'I'.$count];
						$sheet->getStyle('B3:I'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFD3D3D3');
						foreach(array_combine($items, $cells) as $item => $cell){
							$sheet->setCellValue($cell, $item);
						}
						$count++;
						foreach($this->converter_model->data_psycho($this->input->post('client_class'), $this->input->post('what_test'), $this->input->post('what_month'), date('Y'), $this->input->post('what_department'))  as $dt){
							$sheet->setCellValue('B'.$count, $no);
							$sheet->setCellValue('C'.$count, $dt->mbti_date);
							$sheet->setCellValue('D'.$count, $dt->staff_no);
							$sheet->setCellValue('E'.$count, $dt->staff_name);
							$sheet->setCellValue('F'.$count, $dt->staff_department);
							$sheet->setCellValue('G'.$count, $dt->staff_phone);
							$sheet->setCellValue('H'.$count, $dt->mbti_score);
							$sheet->setCellValue('I'.$count, $dt->mbti_result);
							$no++;
							$count++;
						}
						foreach(range('B','I') as $columnID) {
						    $sheet->getColumnDimension($columnID)->setAutoSize(true);
						}
						$sheet->getStyle('B3:I'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$styleArray = [
						    'borders' => [
						  		'allBorders' => [
						            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN //fine border
							        ]
						   	 ]
						];
							  
						$sheet->getStyle('B2:I'.--$count)->applyFromArray($styleArray);
						$count++;
						$no = 1;
						$filename = "Data Psychometric Test(".$this->input->post('what_test').")".date('Y-m-d h:i:s A');
					}
				}
				$writer = new Xlsx($spreadsheet);		 
				header('Content-Type: application/vnd.ms-excel');
				header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
				header('Cache-Control: max-age=0');
					
				$writer->save('php://output');
			}
		}

		public function data_psycho1(){
			if($this->input->post('data_gen')=='gen_pdf'){
				$dompdf = new Dompdf\Dompdf();
	    		$dompdf->set_option('isRemoteEnabled', TRUE);
	 
				$html = $this->load->view('PsyTest/Report/dm_custom',[],true);
				$dompdf->loadHtml($html);
				$dompdf->setPaper('A4', 'landscape');
				$dompdf->render();
				$pdf = $dompdf->output();
				$dompdf->stream("test.pdf",array('Attachment' => false));
				exit(0);
			}else{
				$spreadsheet = new Spreadsheet();
				$sheet = $spreadsheet->getActiveSheet();
				$no = 1;
				$count = 2;
				if($this->input->post('client_class') == 'student'){
					if($this->input->post('what_test')=='GAD'){
						$header = 'Report Data '.$this->input->post('what_test').' ('.$this->input->post('client_class').') from '.$this->input->post('what_start').' to '.$this->input->post('what_end');
						$sheet->setCellValue('B'.$count, $header);
						$sheet->mergeCells('B'.$count.':P'.$count);
						$sheet->getStyle('B'.$count.':P'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF87CEEB');
						$sheet->getStyle('B'.$count.':P'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$items = ['No','Appointment Date','Student ID','Student Name','Faculty','No Phone','Q1','Q2','Q3','Q4','Q5','Q6','Q7','Score','Result'];
						$count++;
						$cells = ['B'.$count,'C'.$count,'D'.$count,'E'.$count,'F'.$count,'G'.$count,'H'.$count,'I'.$count,'J'.$count,'K'.$count,'L'.$count,'M'.$count, 'N'.$count, 'O'.$count,'P'.$count];
						$sheet->getStyle('B3:P'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFD3D3D3');
						foreach(array_combine($items, $cells) as $item => $cell){
							$sheet->setCellValue($cell, $item);
						}
						$count++;
						foreach($this->converter_model->data_psycho1($this->input->post('client_class'),$this->input->post('what_test'),$this->input->post('what_start'), $this->input->post('what_end') ,$this->input->post('what_faculty'))  as $dt){
							$sheet->setCellValue('B'.$count, $no);
							$sheet->setCellValue('C'.$count, $dt->gad_date);
							$sheet->setCellValue('D'.$count, $dt->student_no);
							$sheet->setCellValue('E'.$count, $dt->student_name);
							$sheet->setCellValue('F'.$count, $dt->student_faculty);
							$sheet->setCellValue('G'.$count, $dt->student_phone);
							$sheet->setCellValue('H'.$count, $dt->gad_q1);
							$sheet->setCellValue('I'.$count, $dt->gad_q2);
							$sheet->setCellValue('J'.$count, $dt->gad_q3);
							$sheet->setCellValue('K'.$count, $dt->gad_q4);
							$sheet->setCellValue('L'.$count, $dt->gad_q5);
							$sheet->setCellValue('M'.$count, $dt->gad_q6);
							$sheet->setCellValue('N'.$count, $dt->gad_q7);
							$sheet->setCellValue('O'.$count, $dt->gad_score);
							$sheet->setCellValue('p'.$count, $dt->gad_result);
							$no++;
							$count++;
						}
						foreach(range('B','P') as $columnID) {
						    $sheet->getColumnDimension($columnID)->setAutoSize(true);
						}
						$sheet->getStyle('B3:P'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$styleArray = [
						    'borders' => [
						  		'allBorders' => [
						            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN //fine border
							        ]
						   	 ]
						];
							  
						$sheet->getStyle('B2:P'.--$count)->applyFromArray($styleArray);
						$count++;
						$no = 1;
						$filename = "Data Psychometric Test(".$this->input->post('what_test').")".date('Y-m-d h:i:s A');
					}elseif($this->input->post('what_test')=='PHQ'){
						$header = 'Report Data '.$this->input->post('what_test').' ('.$this->input->post('client_class').') from '.$this->input->post('what_start').' to '.$this->input->post('what_end');
						$sheet->setCellValue('B'.$count, $header);
						$sheet->mergeCells('B'.$count.':R'.$count);
						$sheet->getStyle('B'.$count.':R'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF87CEEB');
						$sheet->getStyle('B'.$count.':R'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$items = ['No','Appointment Date','Student ID','Student Name','Faculty','No Phone','Q1','Q2','Q3','Q4','Q5','Q6','Q7','Q8','Q9','Score','Result'];
						$count++;
						$cells = ['B'.$count,'C'.$count,'D'.$count,'E'.$count,'F'.$count,'G'.$count,'H'.$count,'I'.$count,'J'.$count,'K'.$count,'L'.$count,'M'.$count, 'N'.$count, 'O'.$count,'P'.$count,'Q'.$count,'R'.$count];
						$sheet->getStyle('B3:R'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFD3D3D3');
						foreach(array_combine($items, $cells) as $item => $cell){
							$sheet->setCellValue($cell, $item);
						}
						$count++;
						foreach($this->converter_model->data_psycho1($this->input->post('client_class'),$this->input->post('what_test'), $this->input->post('what_start'), $this->input->post('what_end') ,$this->input->post('what_faculty'))  as $dt){
							$sheet->setCellValue('B'.$count, $no);
							$sheet->setCellValue('C'.$count, $dt->phq_date);
							$sheet->setCellValue('D'.$count, $dt->student_no);
							$sheet->setCellValue('E'.$count, $dt->student_name);
							$sheet->setCellValue('F'.$count, $dt->student_faculty);
							$sheet->setCellValue('G'.$count, $dt->student_phone);
							$sheet->setCellValue('H'.$count, $dt->phq_q1);
							$sheet->setCellValue('I'.$count, $dt->phq_q2);
							$sheet->setCellValue('J'.$count, $dt->phq_q3);
							$sheet->setCellValue('K'.$count, $dt->phq_q4);
							$sheet->setCellValue('L'.$count, $dt->phq_q5);
							$sheet->setCellValue('M'.$count, $dt->phq_q6);
							$sheet->setCellValue('N'.$count, $dt->phq_q7);
							$sheet->setCellValue('O'.$count, $dt->phq_q8);
							$sheet->setCellValue('p'.$count, $dt->phq_q9);
							$sheet->setCellValue('Q'.$count, $dt->phq_score);
							$sheet->setCellValue('R'.$count, $dt->phq_result);
							$no++;
							$count++;
						}
						foreach(range('B','R') as $columnID) {
						    $sheet->getColumnDimension($columnID)->setAutoSize(true);
						}
						$sheet->getStyle('B3:R'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$styleArray = [
						    'borders' => [
						  		'allBorders' => [
						            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN //fine border
							        ]
						   	 ]
						];
							  
						$sheet->getStyle('B2:R'.--$count)->applyFromArray($styleArray);
						$count++;
						$no = 1;
						$filename = "Data Psychometric Test(".$this->input->post('what_test').")".date('Y-m-d h:i:s A');
					}elseif($this->input->post('what_test')=='Whooley'){
						$header = 'Report Data '.$this->input->post('what_test').' ('.$this->input->post('client_class').') from '.$this->input->post('what_start').' to '.$this->input->post('what_end');
						$sheet->setCellValue('B'.$count, $header);
						$sheet->mergeCells('B'.$count.':K'.$count);
						$sheet->getStyle('B'.$count.':K'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF87CEEB');
						$sheet->getStyle('B'.$count.':K'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$items = ['No','Appointment Date','Student ID','Student Name','Faculty','No Phone','Q1','Q2','Score','Result'];
						$count++;
						$cells = ['B'.$count,'C'.$count,'D'.$count,'E'.$count,'F'.$count,'G'.$count,'H'.$count,'I'.$count,'J'.$count,'K'.$count];
						$sheet->getStyle('B3:K'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFD3D3D3');
						foreach(array_combine($items, $cells) as $item => $cell){
							$sheet->setCellValue($cell, $item);
						}
						$count++;
						foreach($this->converter_model->data_psycho1($this->input->post('client_class'),$this->input->post('what_test'), $this->input->post('what_start'), $this->input->post('what_end') ,$this->input->post('what_faculty'))  as $dt){
							$sheet->setCellValue('B'.$count, $no);
							$sheet->setCellValue('C'.$count, $dt->whooley_date);
							$sheet->setCellValue('D'.$count, $dt->student_no);
							$sheet->setCellValue('E'.$count, $dt->student_name);
							$sheet->setCellValue('F'.$count, $dt->student_faculty);
							$sheet->setCellValue('G'.$count, $dt->student_phone);
							$sheet->setCellValue('H'.$count, $dt->whooley_q1);
							$sheet->setCellValue('I'.$count, $dt->whooley_q2);
							$sheet->setCellValue('J'.$count, $dt->whooley_score);
							$sheet->setCellValue('K'.$count, $dt->whooley_result);
							$no++;
							$count++;
						}
						foreach(range('B','K') as $columnID) {
						    $sheet->getColumnDimension($columnID)->setAutoSize(true);
						}
						$sheet->getStyle('B3:K'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$styleArray = [
						    'borders' => [
						  		'allBorders' => [
						            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN //fine border
							        ]
						   	 ]
						];
							  
						$sheet->getStyle('B2:K'.--$count)->applyFromArray($styleArray);
						$count++;
						$no = 1;
						$filename = "Data Psychometric Test(".$this->input->post('what_test').")".date('Y-m-d h:i:s A');
					}elseif($this->input->post('what_test')=='DASS'){
						$header = 'Report Data '.$this->input->post('what_test').' ('.$this->input->post('client_class').') from '.$this->input->post('what_start').' to '.$this->input->post('what_end');
						$sheet->setCellValue('B'.$count, $header);
						$sheet->mergeCells('B'.$count.':AH'.$count);
						$sheet->getStyle('B'.$count.':AH'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF87CEEB');
						$sheet->getStyle('B'.$count.':AH'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$items = ['No','Appointment Date','Student ID','Student Name','Faculty','No Phone','Q1','Q2','Q3','Q4','Q5','Q6','Q7','Q8','Q9','Q10','Q11','Q12','Q13','Q14','Q15','Q16','Q17','Q18','Q19','Q20','Q21','stress_score','dass_stress','anxiety_score','dass_anxiety','depression_score','dass_depression'];
						$count++;
						$cells = ['B'.$count,'C'.$count,'D'.$count,'E'.$count,'F'.$count,'G'.$count,'H'.$count,'I'.$count,'J'.$count,'K'.$count,'L'.$count,'M'.$count, 'N'.$count, 'O'.$count,'P'.$count,'Q'.$count,'R'.$count,'S'.$count,'T'.$count,'U'.$count,'V'.$count,'W'.$count,'X'.$count,'Y'.$count,'Z'.$count,'AA'.$count,'AB'.$count,'AC'.$count,'AD'.$count,'AE'.$count,'AF'.$count,'AG'.$count,'AH'.$count];
						$sheet->getStyle('B3:AH'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFD3D3D3');
						foreach(array_combine($items, $cells) as $item => $cell){
							$sheet->setCellValue($cell, $item);
						}
						$count++;
						foreach($this->converter_model->data_psycho1($this->input->post('client_class'),$this->input->post('what_test'), $this->input->post('what_start'), $this->input->post('what_end') ,$this->input->post('what_faculty'))  as $dt){
							$sheet->setCellValue('B'.$count, $no);
							$sheet->setCellValue('C'.$count, $dt->dass_date);
							$sheet->setCellValue('D'.$count, $dt->student_no);
							$sheet->setCellValue('E'.$count, $dt->student_name);
							$sheet->setCellValue('F'.$count, $dt->student_faculty);
							$sheet->setCellValue('G'.$count, $dt->student_phone);
							$sheet->setCellValue('H'.$count, $dt->dass_q1);
							$sheet->setCellValue('I'.$count, $dt->dass_q2);
							$sheet->setCellValue('J'.$count, $dt->dass_q3);
							$sheet->setCellValue('K'.$count, $dt->dass_q4);
							$sheet->setCellValue('L'.$count, $dt->dass_q5);
							$sheet->setCellValue('M'.$count, $dt->dass_q6);
							$sheet->setCellValue('N'.$count, $dt->dass_q7);
							$sheet->setCellValue('O'.$count, $dt->dass_q8);
							$sheet->setCellValue('P'.$count, $dt->dass_q9);
							$sheet->setCellValue('Q'.$count, $dt->dass_q10);
							$sheet->setCellValue('R'.$count, $dt->dass_q11);
							$sheet->setCellValue('S'.$count, $dt->dass_q12);
							$sheet->setCellValue('T'.$count, $dt->dass_q13);
							$sheet->setCellValue('U'.$count, $dt->dass_q14);
							$sheet->setCellValue('V'.$count, $dt->dass_q15);
							$sheet->setCellValue('W'.$count, $dt->dass_q16);
							$sheet->setCellValue('X'.$count, $dt->dass_q17);
							$sheet->setCellValue('Y'.$count, $dt->dass_q18);
							$sheet->setCellValue('Z'.$count, $dt->dass_q19);
							$sheet->setCellValue('AA'.$count, $dt->dass_q20);
							$sheet->setCellValue('AB'.$count, $dt->dass_q21);
							$sheet->setCellValue('AC'.$count, $dt->stress_score);
							$sheet->setCellValue('AD'.$count, $dt->dass_stress);
							$sheet->setCellValue('AE'.$count, $dt->anxiety_score);
							$sheet->setCellValue('AF'.$count, $dt->dass_anxiety);
							$sheet->setCellValue('AG'.$count, $dt->depression_score);
							$sheet->setCellValue('AH'.$count, $dt->dass_depression);
							$no++;
							$count++;
						}
						foreach(range('B','AH') as $columnID) {
						    $sheet->getColumnDimension($columnID)->setAutoSize(true);
						}
						$sheet->getStyle('B3:AH'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$styleArray = [
						    'borders' => [
						  		'allBorders' => [
						            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN //fine border
							        ]
						   	 ]
						];
							  
						$sheet->getStyle('B2:AH'.--$count)->applyFromArray($styleArray);
						$count++;
						$no = 1;
						$filename = "Data Psychometric Test(".$this->input->post('what_test').")".date('Y-m-d h:i:s A');
					}elseif($this->input->post('what_test')=='BAI'){
						$header = 'Report Data '.$this->input->post('what_test').' ('.$this->input->post('client_class').') from '.$this->input->post('what_start').' to '.$this->input->post('what_end');
						$sheet->setCellValue('B'.$count, $header);
						$sheet->mergeCells('B'.$count.':AD'.$count);
						$sheet->getStyle('B'.$count.':AD'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF87CEEB');
						$sheet->getStyle('B'.$count.':AD'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$items = ['No','Appointment Date','Student ID','Student Name','Faculty','No Phone','Score','Q1','Q2','Q3','Q4','Q5','Q6','Q7','Q8','Q9','Q10','Q11','Q12','Q13','Q14','Q15','Q16','Q17','Q18','Q19','Q20','Q21','Result'];
						$count++;
						$cells = ['B'.$count,'C'.$count,'D'.$count,'E'.$count,'F'.$count,'G'.$count,'H'.$count,'I'.$count,'J'.$count,'K'.$count,'L'.$count,'M'.$count, 'N'.$count, 'O'.$count,'P'.$count,'Q'.$count,'R'.$count,'S'.$count,'T'.$count,'U'.$count,'V'.$count,'W'.$count,'X'.$count,'Y'.$count,'Z'.$count,'AA'.$count,'AB'.$count,'AC'.$count,'AD'.$count];
						$sheet->getStyle('B3:AD'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFD3D3D3');
						foreach(array_combine($items, $cells) as $item => $cell){
							$sheet->setCellValue($cell, $item);
						}
						$count++;
						foreach($this->converter_model->data_psycho1($this->input->post('client_class'),$this->input->post('what_test'), $this->input->post('what_start'), $this->input->post('what_end') ,$this->input->post('what_faculty'))  as $dt){
							$sheet->setCellValue('B'.$count, $no);
							$sheet->setCellValue('C'.$count, $dt->bai_date);
							$sheet->setCellValue('D'.$count, $dt->student_no);
							$sheet->setCellValue('E'.$count, $dt->student_name);
							$sheet->setCellValue('F'.$count, $dt->student_faculty);
							$sheet->setCellValue('G'.$count, $dt->student_phone);
							$sheet->setCellValue('H'.$count, $dt->bai_score);
							$sheet->setCellValue('I'.$count, $dt->bai_q1);
							$sheet->setCellValue('J'.$count, $dt->bai_q2);
							$sheet->setCellValue('K'.$count, $dt->bai_q3);
							$sheet->setCellValue('L'.$count, $dt->bai_q4);
							$sheet->setCellValue('M'.$count, $dt->bai_q5);
							$sheet->setCellValue('N'.$count, $dt->bai_q6);
							$sheet->setCellValue('O'.$count, $dt->bai_q7);
							$sheet->setCellValue('P'.$count, $dt->bai_q8);
							$sheet->setCellValue('Q'.$count, $dt->bai_q9);
							$sheet->setCellValue('R'.$count, $dt->bai_q10);
							$sheet->setCellValue('S'.$count, $dt->bai_q11);
							$sheet->setCellValue('T'.$count, $dt->bai_q12);
							$sheet->setCellValue('U'.$count, $dt->bai_q13);
							$sheet->setCellValue('V'.$count, $dt->bai_q14);
							$sheet->setCellValue('W'.$count, $dt->bai_q15);
							$sheet->setCellValue('X'.$count, $dt->bai_q16);
							$sheet->setCellValue('Y'.$count, $dt->bai_q17);
							$sheet->setCellValue('Z'.$count, $dt->bai_q18);
							$sheet->setCellValue('AA'.$count, $dt->bai_q19);
							$sheet->setCellValue('AB'.$count, $dt->bai_q20);
							$sheet->setCellValue('AC'.$count, $dt->bai_q21);
							$sheet->setCellValue('AD'.$count, $dt->bai_result);
							$no++;
							$count++;
						}
						foreach(range('B','AD') as $columnID) {
						    $sheet->getColumnDimension($columnID)->setAutoSize(true);
						}
						$sheet->getStyle('B3:AD'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$styleArray = [
						    'borders' => [
						  		'allBorders' => [
						            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN //fine border
							        ]
						   	 ]
						];
							  
						$sheet->getStyle('B2:AD'.--$count)->applyFromArray($styleArray);
						$count++;
						$no = 1;
						$filename = "Data Psychometric Test(".$this->input->post('what_test').")".date('Y-m-d h:i:s A');
					}elseif($this->input->post('what_test')=='BDI'){
						$header = 'Report Data '.$this->input->post('what_test').' ('.$this->input->post('client_class').') from '.$this->input->post('what_start').' to '.$this->input->post('what_end');
						$sheet->setCellValue('B'.$count, $header);
						$sheet->mergeCells('B'.$count.':AD'.$count);
						$sheet->getStyle('B'.$count.':AD'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF87CEEB');
						$sheet->getStyle('B'.$count.':AD'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$items = ['No','Appointment Date','Student ID','Student Name','Faculty','No Phone','Score','Q1','Q2','Q3','Q4','Q5','Q6','Q7','Q8','Q9','Q10','Q11','Q12','Q13','Q14','Q15','Q16','Q17','Q18','Q19','Q20','Q21','Result'];
						$count++;
						$cells = ['B'.$count,'C'.$count,'D'.$count,'E'.$count,'F'.$count,'G'.$count,'H'.$count,'I'.$count,'J'.$count,'K'.$count,'L'.$count,'M'.$count, 'N'.$count, 'O'.$count,'P'.$count,'Q'.$count,'R'.$count,'S'.$count,'T'.$count,'U'.$count,'V'.$count,'W'.$count,'X'.$count,'Y'.$count,'Z'.$count,'AA'.$count,'AB'.$count,'AC'.$count,'AD'.$count];
						$sheet->getStyle('B3:AD'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFD3D3D3');
						foreach(array_combine($items, $cells) as $item => $cell){
							$sheet->setCellValue($cell, $item);
						}
						$count++;
						foreach($this->converter_model->data_psycho1($this->input->post('client_class'),$this->input->post('what_test'), $this->input->post('what_start'), $this->input->post('what_end') ,$this->input->post('what_faculty'))  as $dt){
							$sheet->setCellValue('B'.$count, $no);
							$sheet->setCellValue('C'.$count, $dt->bdi_date);
							$sheet->setCellValue('D'.$count, $dt->student_no);
							$sheet->setCellValue('E'.$count, $dt->student_name);
							$sheet->setCellValue('F'.$count, $dt->student_faculty);
							$sheet->setCellValue('G'.$count, $dt->student_phone);
							$sheet->setCellValue('H'.$count, $dt->bdi_score);
							$sheet->setCellValue('I'.$count, $dt->bdi_q1);
							$sheet->setCellValue('J'.$count, $dt->bdi_q2);
							$sheet->setCellValue('K'.$count, $dt->bdi_q3);
							$sheet->setCellValue('L'.$count, $dt->bdi_q4);
							$sheet->setCellValue('M'.$count, $dt->bdi_q5);
							$sheet->setCellValue('N'.$count, $dt->bdi_q6);
							$sheet->setCellValue('O'.$count, $dt->bdi_q7);
							$sheet->setCellValue('P'.$count, $dt->bdi_q8);
							$sheet->setCellValue('Q'.$count, $dt->bdi_q9);
							$sheet->setCellValue('R'.$count, $dt->bdi_q10);
							$sheet->setCellValue('S'.$count, $dt->bdi_q11);
							$sheet->setCellValue('T'.$count, $dt->bdi_q12);
							$sheet->setCellValue('U'.$count, $dt->bdi_q13);
							$sheet->setCellValue('V'.$count, $dt->bdi_q14);
							$sheet->setCellValue('W'.$count, $dt->bdi_q15);
							$sheet->setCellValue('X'.$count, $dt->bdi_q16);
							$sheet->setCellValue('Y'.$count, $dt->bdi_q17);
							$sheet->setCellValue('Z'.$count, $dt->bdi_q18);
							$sheet->setCellValue('AA'.$count, $dt->bdi_q19);
							$sheet->setCellValue('AB'.$count, $dt->bdi_q20);
							$sheet->setCellValue('AC'.$count, $dt->bdi_q21);
							$sheet->setCellValue('AD'.$count, $dt->bdi_result);
							$no++;
							$count++;
						}
						foreach(range('B','AD') as $columnID) {
						    $sheet->getColumnDimension($columnID)->setAutoSize(true);
						}
						$sheet->getStyle('B3:AD'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$styleArray = [
						    'borders' => [
						  		'allBorders' => [
						            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN //fine border
							        ]
						   	 ]
						];
							  
						$sheet->getStyle('B2:AD'.--$count)->applyFromArray($styleArray);
						$count++;
						$no = 1;
						$filename = "Data Psychometric Test(".$this->input->post('what_test').")".date('Y-m-d h:i:s A');
					}else{
						$header = 'Report Data '.$this->input->post('what_test').' ('.$this->input->post('client_class').') from '.$this->input->post('what_start').' to '.$this->input->post('what_end');
						$sheet->setCellValue('B'.$count, $header);
						$sheet->mergeCells('B'.$count.':I'.$count);
						$sheet->getStyle('B'.$count.':I'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF87CEEB');
						$sheet->getStyle('B'.$count.':I'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$items = ['No','Appointment Date','Student ID','Student Name','Faculty','No Phone','Score','Result'];
						$count++;
						$cells = ['B'.$count,'C'.$count,'D'.$count,'E'.$count,'F'.$count,'G'.$count,'H'.$count,'I'.$count];
						$sheet->getStyle('B3:I'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFD3D3D3');
						foreach(array_combine($items, $cells) as $item => $cell){
							$sheet->setCellValue($cell, $item);
						}
						$count++;
						foreach($this->converter_model->data_psycho1($this->input->post('client_class'),$this->input->post('what_test'), $this->input->post('what_start'), $this->input->post('what_end') ,$this->input->post('what_faculty'))  as $dt){
							$sheet->setCellValue('B'.$count, $no);
							$sheet->setCellValue('C'.$count, $dt->mbti_date);
							$sheet->setCellValue('D'.$count, $dt->student_no);
							$sheet->setCellValue('E'.$count, $dt->student_name);
							$sheet->setCellValue('F'.$count, $dt->student_faculty);
							$sheet->setCellValue('G'.$count, $dt->student_phone);
							$sheet->setCellValue('H'.$count, $dt->mbti_score);
							$sheet->setCellValue('I'.$count, $dt->mbti_result);
							$no++;
							$count++;
						}
						foreach(range('B','I') as $columnID) {
						    $sheet->getColumnDimension($columnID)->setAutoSize(true);
						}
						$sheet->getStyle('B3:I'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$styleArray = [
						    'borders' => [
						  		'allBorders' => [
						            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN //fine border
							        ]
						   	 ]
						];
							  
						$sheet->getStyle('B2:I'.--$count)->applyFromArray($styleArray);
						$count++;
						$no = 1;
						$filename = "Data Psychometric Test(".$this->input->post('what_test').")".date('Y-m-d h:i:s A');
					}
				}else{
					if($this->input->post('what_test')=='GAD'){
						$header = 'Report Data '.$this->input->post('what_test').' ('.$this->input->post('client_class').') for '.date("F", mktime(0, 0, 0, $this->input->post('what_month'), 10)).' in '.date('Y');
						$sheet->setCellValue('B'.$count, $header);
						$sheet->mergeCells('B'.$count.':P'.$count);
						$sheet->getStyle('B'.$count.':P'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF87CEEB');
						$sheet->getStyle('B'.$count.':P'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$items = ['No','Appointment Date','Staff ID','Staff Name','Faculty','No Phone','Q1','Q2','Q3','Q4','Q5','Q6','Q7','Score','Result'];
						$count++;
						$cells = ['B'.$count,'C'.$count,'D'.$count,'E'.$count,'F'.$count,'G'.$count,'H'.$count,'I'.$count,'J'.$count,'K'.$count,'L'.$count,'M'.$count, 'N'.$count, 'O'.$count,'P'.$count];
						$sheet->getStyle('B3:P'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFD3D3D3');
						foreach(array_combine($items, $cells) as $item => $cell){
							$sheet->setCellValue($cell, $item);
						}
						$count++;
						foreach($this->converter_model->data_psycho($this->input->post('client_class'), $this->input->post('what_test'),$this->input->post('what_start'), $this->input->post('what_end') ,$this->input->post('what_faculty'))  as $dt){
							$sheet->setCellValue('B'.$count, $no);
							$sheet->setCellValue('C'.$count, $dt->gad_date);
							$sheet->setCellValue('D'.$count, $dt->staff_no);
							$sheet->setCellValue('E'.$count, $dt->staff_name);
							$sheet->setCellValue('F'.$count, $dt->staff_department);
							$sheet->setCellValue('G'.$count, $dt->staff_phone);
							$sheet->setCellValue('H'.$count, $dt->gad_q1);
							$sheet->setCellValue('I'.$count, $dt->gad_q2);
							$sheet->setCellValue('J'.$count, $dt->gad_q3);
							$sheet->setCellValue('K'.$count, $dt->gad_q4);
							$sheet->setCellValue('L'.$count, $dt->gad_q5);
							$sheet->setCellValue('M'.$count, $dt->gad_q6);
							$sheet->setCellValue('N'.$count, $dt->gad_q7);
							$sheet->setCellValue('O'.$count, $dt->gad_score);
							$sheet->setCellValue('p'.$count, $dt->gad_result);
							$no++;
							$count++;
						}
						foreach(range('B','P') as $columnID) {
						    $sheet->getColumnDimension($columnID)->setAutoSize(true);
						}
						$sheet->getStyle('B3:P'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$styleArray = [
						    'borders' => [
						  		'allBorders' => [
						            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN //fine border
							        ]
						   	 ]
						];
							  
						$sheet->getStyle('B2:P'.--$count)->applyFromArray($styleArray);
						$count++;
						$no = 1;
						$filename = "Data Psychometric Test(".$this->input->post('what_test').")".date('Y-m-d h:i:s A');
					}elseif($this->input->post('what_test')=='PHQ'){
						$header = 'Report Data '.$this->input->post('what_test').' ('.$this->input->post('client_class').') for '.date("F", mktime(0, 0, 0, $this->input->post('what_month'), 10)).' in '.date('Y');
						$sheet->setCellValue('B'.$count, $header);
						$sheet->mergeCells('B'.$count.':R'.$count);
						$sheet->getStyle('B'.$count.':R'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF87CEEB');
						$sheet->getStyle('B'.$count.':R'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$items = ['No','Appointment Date','Staff ID','Staff Name','Faculty','No Phone','Q1','Q2','Q3','Q4','Q5','Q6','Q7','Q8','Q9','Score','Result'];
						$count++;
						$cells = ['B'.$count,'C'.$count,'D'.$count,'E'.$count,'F'.$count,'G'.$count,'H'.$count,'I'.$count,'J'.$count,'K'.$count,'L'.$count,'M'.$count, 'N'.$count, 'O'.$count,'P'.$count,'Q'.$count,'R'.$count];
						$sheet->getStyle('B3:R'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFD3D3D3');
						foreach(array_combine($items, $cells) as $item => $cell){
							$sheet->setCellValue($cell, $item);
						}
						$count++;
						foreach($this->converter_model->data_psycho($this->input->post('client_class'), $this->input->post('what_test'),$this->input->post('what_start'), $this->input->post('what_end') ,$this->input->post('what_faculty'))  as $dt){
							$sheet->setCellValue('B'.$count, $no);
							$sheet->setCellValue('C'.$count, $dt->phq_date);
							$sheet->setCellValue('D'.$count, $dt->staff_no);
							$sheet->setCellValue('E'.$count, $dt->staff_name);
							$sheet->setCellValue('F'.$count, $dt->staff_department);
							$sheet->setCellValue('G'.$count, $dt->staff_phone);
							$sheet->setCellValue('H'.$count, $dt->phq_q1);
							$sheet->setCellValue('I'.$count, $dt->phq_q2);
							$sheet->setCellValue('J'.$count, $dt->phq_q3);
							$sheet->setCellValue('K'.$count, $dt->phq_q4);
							$sheet->setCellValue('L'.$count, $dt->phq_q5);
							$sheet->setCellValue('M'.$count, $dt->phq_q6);
							$sheet->setCellValue('N'.$count, $dt->phq_q7);
							$sheet->setCellValue('O'.$count, $dt->phq_q8);
							$sheet->setCellValue('p'.$count, $dt->phq_q9);
							$sheet->setCellValue('Q'.$count, $dt->phq_score);
							$sheet->setCellValue('R'.$count, $dt->phq_result);
							$no++;
							$count++;
						}
						foreach(range('B','R') as $columnID) {
						    $sheet->getColumnDimension($columnID)->setAutoSize(true);
						}
						$sheet->getStyle('B3:R'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$styleArray = [
						    'borders' => [
						  		'allBorders' => [
						            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN //fine border
							        ]
						   	 ]
						];
							  
						$sheet->getStyle('B2:R'.--$count)->applyFromArray($styleArray);
						$count++;
						$no = 1;
						$filename = "Data Psychometric Test(".$this->input->post('what_test').")".date('Y-m-d h:i:s A');
					}elseif($this->input->post('what_test')=='Whooley'){
						$header = 'Report Data '.$this->input->post('what_test').' ('.$this->input->post('client_class').') for '.date("F", mktime(0, 0, 0, $this->input->post('what_month'), 10)).' in '.date('Y');
						$sheet->setCellValue('B'.$count, $header);
						$sheet->mergeCells('B'.$count.':K'.$count);
						$sheet->getStyle('B'.$count.':K'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF87CEEB');
						$sheet->getStyle('B'.$count.':K'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$items = ['No','Appointment Date','Staff ID','Staff Name','Faculty','No Phone','Q1','Q2','Score','Result'];
						$count++;
						$cells = ['B'.$count,'C'.$count,'D'.$count,'E'.$count,'F'.$count,'G'.$count,'H'.$count,'I'.$count,'J'.$count,'K'.$count];
						$sheet->getStyle('B3:K'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFD3D3D3');
						foreach(array_combine($items, $cells) as $item => $cell){
							$sheet->setCellValue($cell, $item);
						}
						$count++;
						foreach($this->converter_model->data_psycho($this->input->post('client_class'), $this->input->post('what_test'),$this->input->post('what_start'), $this->input->post('what_end') ,$this->input->post('what_faculty'))  as $dt){
							$sheet->setCellValue('B'.$count, $no);
							$sheet->setCellValue('C'.$count, $dt->whooley_date);
							$sheet->setCellValue('D'.$count, $dt->staff_no);
							$sheet->setCellValue('E'.$count, $dt->staff_name);
							$sheet->setCellValue('F'.$count, $dt->staff_department);
							$sheet->setCellValue('G'.$count, $dt->staff_phone);
							$sheet->setCellValue('H'.$count, $dt->whooley_q1);
							$sheet->setCellValue('I'.$count, $dt->whooley_q2);
							$sheet->setCellValue('J'.$count, $dt->whooley_score);
							$sheet->setCellValue('K'.$count, $dt->whooley_result);
							$no++;
							$count++;
						}
						foreach(range('B','K') as $columnID) {
						    $sheet->getColumnDimension($columnID)->setAutoSize(true);
						}
						$sheet->getStyle('B3:K'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$styleArray = [
						    'borders' => [
						  		'allBorders' => [
						            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN //fine border
							        ]
						   	 ]
						];
							  
						$sheet->getStyle('B2:K'.--$count)->applyFromArray($styleArray);
						$count++;
						$no = 1;
						$filename = "Data Psychometric Test(".$this->input->post('what_test').")".date('Y-m-d h:i:s A');
					}elseif($this->input->post('what_test')=='DASS'){
						$header = 'Report Data '.$this->input->post('what_test').' ('.$this->input->post('client_class').') for '.date("F", mktime(0, 0, 0, $this->input->post('what_month'), 10)).' in '.date('Y');
						$sheet->setCellValue('B'.$count, $header);
						$sheet->mergeCells('B'.$count.':AH'.$count);
						$sheet->getStyle('B'.$count.':AH'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF87CEEB');
						$sheet->getStyle('B'.$count.':AH'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$items = ['No','Appointment Date','Staff ID','Staff Name','Faculty','No Phone','Q1','Q2','Q3','Q4','Q5','Q6','Q7','Q8','Q9','Q10','Q11','Q12','Q13','Q14','Q15','Q16','Q17','Q18','Q19','Q20','Q21','stress_score','dass_stress','anxiety_score','dass_anxiety','depression_score','dass_depression'];
						$count++;
						$cells = ['B'.$count,'C'.$count,'D'.$count,'E'.$count,'F'.$count,'G'.$count,'H'.$count,'I'.$count,'J'.$count,'K'.$count,'L'.$count,'M'.$count, 'N'.$count, 'O'.$count,'P'.$count,'Q'.$count,'R'.$count,'S'.$count,'T'.$count,'U'.$count,'V'.$count,'W'.$count,'X'.$count,'Y'.$count,'Z'.$count,'AA'.$count,'AB'.$count,'AC'.$count,'AD'.$count,'AE'.$count,'AF'.$count,'AG'.$count,'AH'.$count];
						$sheet->getStyle('B3:AH'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFD3D3D3');
						foreach(array_combine($items, $cells) as $item => $cell){
							$sheet->setCellValue($cell, $item);
						}
						$count++;
						foreach($this->converter_model->data_psycho($this->input->post('client_class'), $this->input->post('what_test'),$this->input->post('what_start'), $this->input->post('what_end') ,$this->input->post('what_faculty'))  as $dt){
							$sheet->setCellValue('B'.$count, $no);
							$sheet->setCellValue('C'.$count, $dt->dass_date);
							$sheet->setCellValue('D'.$count, $dt->staff_no);
							$sheet->setCellValue('E'.$count, $dt->staff_name);
							$sheet->setCellValue('F'.$count, $dt->staff_department);
							$sheet->setCellValue('G'.$count, $dt->staff_phone);
							$sheet->setCellValue('H'.$count, $dt->dass_q1);
							$sheet->setCellValue('I'.$count, $dt->dass_q2);
							$sheet->setCellValue('J'.$count, $dt->dass_q3);
							$sheet->setCellValue('K'.$count, $dt->dass_q4);
							$sheet->setCellValue('L'.$count, $dt->dass_q5);
							$sheet->setCellValue('M'.$count, $dt->dass_q6);
							$sheet->setCellValue('N'.$count, $dt->dass_q7);
							$sheet->setCellValue('O'.$count, $dt->dass_q8);
							$sheet->setCellValue('P'.$count, $dt->dass_q9);
							$sheet->setCellValue('Q'.$count, $dt->dass_q10);
							$sheet->setCellValue('R'.$count, $dt->dass_q11);
							$sheet->setCellValue('S'.$count, $dt->dass_q12);
							$sheet->setCellValue('T'.$count, $dt->dass_q13);
							$sheet->setCellValue('U'.$count, $dt->dass_q14);
							$sheet->setCellValue('V'.$count, $dt->dass_q15);
							$sheet->setCellValue('W'.$count, $dt->dass_q16);
							$sheet->setCellValue('X'.$count, $dt->dass_q17);
							$sheet->setCellValue('Y'.$count, $dt->dass_q18);
							$sheet->setCellValue('Z'.$count, $dt->dass_q19);
							$sheet->setCellValue('AA'.$count, $dt->dass_q20);
							$sheet->setCellValue('AB'.$count, $dt->dass_q21);
							$sheet->setCellValue('AC'.$count, $dt->stress_score);
							$sheet->setCellValue('AD'.$count, $dt->dass_stress);
							$sheet->setCellValue('AE'.$count, $dt->anxiety_score);
							$sheet->setCellValue('AF'.$count, $dt->dass_anxiety);
							$sheet->setCellValue('AG'.$count, $dt->depression_score);
							$sheet->setCellValue('AH'.$count, $dt->dass_depression);
							$no++;
							$count++;
						}
						foreach(range('B','AH') as $columnID) {
						    $sheet->getColumnDimension($columnID)->setAutoSize(true);
						}
						$sheet->getStyle('B3:AH'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$styleArray = [
						    'borders' => [
						  		'allBorders' => [
						            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN //fine border
							        ]
						   	 ]
						];
							  
						$sheet->getStyle('B2:AH'.--$count)->applyFromArray($styleArray);
						$count++;
						$no = 1;
						$filename = "Data Psychometric Test(".$this->input->post('what_test').")".date('Y-m-d h:i:s A');
					}elseif($this->input->post('what_test')=='BAI'){
						$header = 'Report Data '.$this->input->post('what_test').' ('.$this->input->post('client_class').') for '.date("F", mktime(0, 0, 0, $this->input->post('what_month'), 10)).' in '.date('Y');
						$sheet->setCellValue('B'.$count, $header);
						$sheet->mergeCells('B'.$count.':AD'.$count);
						$sheet->getStyle('B'.$count.':AD'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF87CEEB');
						$sheet->getStyle('B'.$count.':AD'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$items = ['No','Appointment Date','Student ID','Student Name','Faculty','No Phone','Score','Q1','Q2','Q3','Q4','Q5','Q6','Q7','Q8','Q9','Q10','Q11','Q12','Q13','Q14','Q15','Q16','Q17','Q18','Q19','Q20','Q21','Result'];
						$count++;
						$cells = ['B'.$count,'C'.$count,'D'.$count,'E'.$count,'F'.$count,'G'.$count,'H'.$count,'I'.$count,'J'.$count,'K'.$count,'L'.$count,'M'.$count, 'N'.$count, 'O'.$count,'P'.$count,'Q'.$count,'R'.$count,'S'.$count,'T'.$count,'U'.$count,'V'.$count,'W'.$count,'X'.$count,'Y'.$count,'Z'.$count,'AA'.$count,'AB'.$count,'AC'.$count,'AD'.$count];
						$sheet->getStyle('B3:AD'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFD3D3D3');
						foreach(array_combine($items, $cells) as $item => $cell){
							$sheet->setCellValue($cell, $item);
						}
						$count++;
						foreach($this->converter_model->data_psycho($this->input->post('client_class'), $this->input->post('what_test'),$this->input->post('what_start'), $this->input->post('what_end') ,$this->input->post('what_faculty'))  as $dt){
							$sheet->setCellValue('B'.$count, $no);
							$sheet->setCellValue('C'.$count, $dt->bai_date);
							$sheet->setCellValue('D'.$count, $dt->student_no);
							$sheet->setCellValue('E'.$count, $dt->student_name);
							$sheet->setCellValue('F'.$count, $dt->student_faculty);
							$sheet->setCellValue('G'.$count, $dt->student_phone);
							$sheet->setCellValue('H'.$count, $dt->bai_score);
							$sheet->setCellValue('I'.$count, $dt->bai_q1);
							$sheet->setCellValue('J'.$count, $dt->bai_q2);
							$sheet->setCellValue('K'.$count, $dt->bai_q3);
							$sheet->setCellValue('L'.$count, $dt->bai_q4);
							$sheet->setCellValue('M'.$count, $dt->bai_q5);
							$sheet->setCellValue('N'.$count, $dt->bai_q6);
							$sheet->setCellValue('O'.$count, $dt->bai_q7);
							$sheet->setCellValue('P'.$count, $dt->bai_q8);
							$sheet->setCellValue('Q'.$count, $dt->bai_q9);
							$sheet->setCellValue('R'.$count, $dt->bai_q10);
							$sheet->setCellValue('S'.$count, $dt->bai_q11);
							$sheet->setCellValue('T'.$count, $dt->bai_q12);
							$sheet->setCellValue('U'.$count, $dt->bai_q13);
							$sheet->setCellValue('V'.$count, $dt->bai_q14);
							$sheet->setCellValue('W'.$count, $dt->bai_q15);
							$sheet->setCellValue('X'.$count, $dt->bai_q16);
							$sheet->setCellValue('Y'.$count, $dt->bai_q17);
							$sheet->setCellValue('Z'.$count, $dt->bai_q18);
							$sheet->setCellValue('AA'.$count, $dt->bai_q19);
							$sheet->setCellValue('AB'.$count, $dt->bai_q20);
							$sheet->setCellValue('AC'.$count, $dt->bai_q21);
							$sheet->setCellValue('AD'.$count, $dt->bai_result);
							$no++;
							$count++;
						}
						foreach(range('B','AD') as $columnID) {
						    $sheet->getColumnDimension($columnID)->setAutoSize(true);
						}
						$sheet->getStyle('B3:AD'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$styleArray = [
						    'borders' => [
						  		'allBorders' => [
						            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN //fine border
							        ]
						   	 ]
						];
							  
						$sheet->getStyle('B2:AD'.--$count)->applyFromArray($styleArray);
						$count++;
						$no = 1;
						$filename = "Data Psychometric Test(".$this->input->post('what_test').")".date('Y-m-d h:i:s A');
					}elseif($this->input->post('what_test')=='BDI'){
						$header = 'Report Data '.$this->input->post('what_test').' ('.$this->input->post('client_class').') for '.date("F", mktime(0, 0, 0, $this->input->post('what_month'), 10)).' in '.date('Y');
						$sheet->setCellValue('B'.$count, $header);
						$sheet->mergeCells('B'.$count.':AD'.$count);
						$sheet->getStyle('B'.$count.':AD'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF87CEEB');
						$sheet->getStyle('B'.$count.':AD'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$items = ['No','Appointment Date','Student ID','Student Name','Faculty','No Phone','Score','Q1','Q2','Q3','Q4','Q5','Q6','Q7','Q8','Q9','Q10','Q11','Q12','Q13','Q14','Q15','Q16','Q17','Q18','Q19','Q20','Q21','Result'];
						$count++;
						$cells = ['B'.$count,'C'.$count,'D'.$count,'E'.$count,'F'.$count,'G'.$count,'H'.$count,'I'.$count,'J'.$count,'K'.$count,'L'.$count,'M'.$count, 'N'.$count, 'O'.$count,'P'.$count,'Q'.$count,'R'.$count,'S'.$count,'T'.$count,'U'.$count,'V'.$count,'W'.$count,'X'.$count,'Y'.$count,'Z'.$count,'AA'.$count,'AB'.$count,'AC'.$count,'AD'.$count];
						$sheet->getStyle('B3:AD'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFD3D3D3');
						foreach(array_combine($items, $cells) as $item => $cell){
							$sheet->setCellValue($cell, $item);
						}
						$count++;
						foreach($this->converter_model->data_psycho($this->input->post('client_class'), $this->input->post('what_test'),$this->input->post('what_start'), $this->input->post('what_end') ,$this->input->post('what_faculty'))  as $dt){
							$sheet->setCellValue('B'.$count, $no);
							$sheet->setCellValue('C'.$count, $dt->bdi_date);
							$sheet->setCellValue('D'.$count, $dt->student_no);
							$sheet->setCellValue('E'.$count, $dt->student_name);
							$sheet->setCellValue('F'.$count, $dt->student_faculty);
							$sheet->setCellValue('G'.$count, $dt->student_phone);
							$sheet->setCellValue('H'.$count, $dt->bdi_score);
							$sheet->setCellValue('I'.$count, $dt->bdi_q1);
							$sheet->setCellValue('J'.$count, $dt->bdi_q2);
							$sheet->setCellValue('K'.$count, $dt->bdi_q3);
							$sheet->setCellValue('L'.$count, $dt->bdi_q4);
							$sheet->setCellValue('M'.$count, $dt->bdi_q5);
							$sheet->setCellValue('N'.$count, $dt->bdi_q6);
							$sheet->setCellValue('O'.$count, $dt->bdi_q7);
							$sheet->setCellValue('P'.$count, $dt->bdi_q8);
							$sheet->setCellValue('Q'.$count, $dt->bdi_q9);
							$sheet->setCellValue('R'.$count, $dt->bdi_q10);
							$sheet->setCellValue('S'.$count, $dt->bdi_q11);
							$sheet->setCellValue('T'.$count, $dt->bdi_q12);
							$sheet->setCellValue('U'.$count, $dt->bdi_q13);
							$sheet->setCellValue('V'.$count, $dt->bdi_q14);
							$sheet->setCellValue('W'.$count, $dt->bdi_q15);
							$sheet->setCellValue('X'.$count, $dt->bdi_q16);
							$sheet->setCellValue('Y'.$count, $dt->bdi_q17);
							$sheet->setCellValue('Z'.$count, $dt->bdi_q18);
							$sheet->setCellValue('AA'.$count, $dt->bdi_q19);
							$sheet->setCellValue('AB'.$count, $dt->bdi_q20);
							$sheet->setCellValue('AC'.$count, $dt->bdi_q21);
							$sheet->setCellValue('AD'.$count, $dt->bdi_result);
							$no++;
							$count++;
						}
						foreach(range('B','AD') as $columnID) {
						    $sheet->getColumnDimension($columnID)->setAutoSize(true);
						}
						$sheet->getStyle('B3:AD'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$styleArray = [
						    'borders' => [
						  		'allBorders' => [
						            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN //fine border
							        ]
						   	 ]
						];
							  
						$sheet->getStyle('B2:AD'.--$count)->applyFromArray($styleArray);
						$count++;
						$no = 1;
						$filename = "Data Psychometric Test(".$this->input->post('what_test').")".date('Y-m-d h:i:s A');
					}else{
						$header = 'Report Data '.$this->input->post('what_test').' ('.$this->input->post('client_class').') for '.date("F", mktime(0, 0, 0, $this->input->post('what_month'), 10)).' in '.date('Y');
						$sheet->setCellValue('B'.$count, $header);
						$sheet->mergeCells('B'.$count.':I'.$count);
						$sheet->getStyle('B'.$count.':I'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF87CEEB');
						$sheet->getStyle('B'.$count.':I'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$items = ['No','Appointment Date','Staff ID','Staff Name','Faculty','No Phone','Score','Result'];
						$count++;
						$cells = ['B'.$count,'C'.$count,'D'.$count,'E'.$count,'F'.$count,'G'.$count,'H'.$count,'I'.$count];
						$sheet->getStyle('B3:I'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFD3D3D3');
						foreach(array_combine($items, $cells) as $item => $cell){
							$sheet->setCellValue($cell, $item);
						}
						$count++;
						foreach($this->converter_model->data_psycho($this->input->post('client_class'), $this->input->post('what_test'),$this->input->post('what_start'), $this->input->post('what_end') ,$this->input->post('what_faculty'))  as $dt){
							$sheet->setCellValue('B'.$count, $no);
							$sheet->setCellValue('C'.$count, $dt->mbti_date);
							$sheet->setCellValue('D'.$count, $dt->staff_no);
							$sheet->setCellValue('E'.$count, $dt->staff_name);
							$sheet->setCellValue('F'.$count, $dt->staff_department);
							$sheet->setCellValue('G'.$count, $dt->staff_phone);
							$sheet->setCellValue('H'.$count, $dt->mbti_score);
							$sheet->setCellValue('I'.$count, $dt->mbti_result);
							$no++;
							$count++;
						}
						foreach(range('B','I') as $columnID) {
						    $sheet->getColumnDimension($columnID)->setAutoSize(true);
						}
						$sheet->getStyle('B3:I'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
						$styleArray = [
						    'borders' => [
						  		'allBorders' => [
						            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN //fine border
							        ]
						   	 ]
						];
							  
						$sheet->getStyle('B2:I'.--$count)->applyFromArray($styleArray);
						$count++;
						$no = 1;
						$filename = "Data Psychometric Test(".$this->input->post('what_test').")".date('Y-m-d h:i:s A');
					}
				}
				$writer = new Xlsx($spreadsheet);		 
				header('Content-Type: application/vnd.ms-excel');
				header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
				header('Cache-Control: max-age=0');
					
				$writer->save('php://output');
			}
		}

		public function hk(){
			$dompdf = new Dompdf\Dompdf();
    		$dompdf->set_option('isRemoteEnabled', TRUE);
 			$data['gg'] = $this->input->post('gg');
			$html = $this->load->view('PsyTest/Report/test/test_gad_student',$data,true);
			$dompdf->loadHtml($html);
			$dompdf->setPaper('A4', 'landscape');
			$dompdf->render();
			$pdf = $dompdf->output();
			$dompdf->stream("Data GAD (student)".date('Y-m-d h:i:s A').".pdf",array('Attachment' => false));
			exit(0);
		}
		public function xk(){
			$dompdf = new Dompdf\Dompdf();
    		$dompdf->set_option('isRemoteEnabled', TRUE);
 			$data['gg'] = $this->input->post('gg');
			$html = $this->load->view('PsyTest/Report/test/test_gad_staff',$data,true);
			$dompdf->loadHtml($html);
			$dompdf->setPaper('A4', 'landscape');
			$dompdf->render();
			$pdf = $dompdf->output();
			$dompdf->stream("Data GAD (staff)".date('Y-m-d h:i:s A').".pdf",array('Attachment' => false));
			exit(0);
		}

		public function ina(){
			$dompdf = new Dompdf\Dompdf();
    		$dompdf->set_option('isRemoteEnabled', TRUE);
 			$data['gg'] = $this->input->post('gg');
			$html = $this->load->view('PsyTest/Report/test/test_phq_student',$data,true);
			$dompdf->loadHtml($html);
			$dompdf->setPaper('A4', 'landscape');
			$dompdf->render();
			$pdf = $dompdf->output();
			$dompdf->stream("Data PHQ (student)".date('Y-m-d h:i:s A').".pdf",array('Attachment' => false));
			exit(0);
		}
		public function ina1(){
			$dompdf = new Dompdf\Dompdf();
    		$dompdf->set_option('isRemoteEnabled', TRUE);
 			$data['gg'] = $this->input->post('gg');
			$html = $this->load->view('PsyTest/Report/test/test_phq_staff',$data,true);
			$dompdf->loadHtml($html);
			$dompdf->setPaper('A4', 'landscape');
			$dompdf->render();
			$pdf = $dompdf->output();
			$dompdf->stream("Data PHQ (staff)".date('Y-m-d h:i:s A').".pdf",array('Attachment' => false));
			exit(0);
		}

		public function gura(){
			$dompdf = new Dompdf\Dompdf();
    		$dompdf->set_option('isRemoteEnabled', TRUE);
 			$data['gg'] = $this->input->post('gg');
			$html = $this->load->view('PsyTest/Report/test/test_whooley_student',$data,true);
			$dompdf->loadHtml($html);
			$dompdf->setPaper('A4', 'landscape');
			$dompdf->render();
			$pdf = $dompdf->output();
			$dompdf->stream("Data Whooley(student)".date('Y-m-d h:i:s A').".pdf",array('Attachment' => false));
			exit(0);
		}
		public function gura1(){
			$dompdf = new Dompdf\Dompdf();
    		$dompdf->set_option('isRemoteEnabled', TRUE);
 			$data['gg'] = $this->input->post('gg');
			$html = $this->load->view('PsyTest/Report/test/test_whooley_staff',$data,true);
			$dompdf->loadHtml($html);
			$dompdf->setPaper('A4', 'landscape');
			$dompdf->render();
			$pdf = $dompdf->output();
			$dompdf->stream("Data Whooley(staff)".date('Y-m-d h:i:s A').".pdf",array('Attachment' => false));
			exit(0);
		}
		public function towa(){
			$dompdf = new Dompdf\Dompdf();
    		$dompdf->set_option('isRemoteEnabled', TRUE);
 			$data['gg'] = $this->input->post('gg');
			$html = $this->load->view('PsyTest/Report/test/test_dass_student',$data,true);
			$dompdf->loadHtml($html);
			$dompdf->setPaper('A4', 'landscape');
			$dompdf->render();
			$pdf = $dompdf->output();
			$dompdf->stream("Data DASS(student)".date('Y-m-d h:i:s A').".pdf",array('Attachment' => false));
			exit(0);
		}
		public function towa1(){
			$dompdf = new Dompdf\Dompdf();
    		$dompdf->set_option('isRemoteEnabled', TRUE);
 			$data['gg'] = $this->input->post('gg');
			$html = $this->load->view('PsyTest/Report/test/test_dass_staff',$data,true);
			$dompdf->loadHtml($html);
			$dompdf->setPaper('A4', 'landscape');
			$dompdf->render();
			$pdf = $dompdf->output();
			$dompdf->stream("Data DASS(staff)".date('Y-m-d h:i:s A').".pdf",array('Attachment' => false));
			exit(0);
		}

		public function luna(){
			$dompdf = new Dompdf\Dompdf();
    		$dompdf->set_option('isRemoteEnabled', TRUE);
 			$data['gg'] = $this->input->post('gg');
			$html = $this->load->view('PsyTest/Report/test/test_bai_student',$data,true);
			$dompdf->loadHtml($html);
			$dompdf->setPaper('A4', 'landscape');
			$dompdf->render();
			$pdf = $dompdf->output();
			$dompdf->stream("Data BAI(student)".date('Y-m-d h:i:s A').".pdf",array('Attachment' => false));
			exit(0);
		}
		public function luna1(){
			$dompdf = new Dompdf\Dompdf();
    		$dompdf->set_option('isRemoteEnabled', TRUE);
 			$data['gg'] = $this->input->post('gg');
			$html = $this->load->view('PsyTest/Report/test/test_bai_staff',$data,true);
			$dompdf->loadHtml($html);
			$dompdf->setPaper('A4', 'landscape');
			$dompdf->render();
			$pdf = $dompdf->output();
			$dompdf->stream("Data BAI(staff)".date('Y-m-d h:i:s A').".pdf",array('Attachment' => false));
			exit(0);
		}

		public function subaru(){
			$dompdf = new Dompdf\Dompdf();
    		$dompdf->set_option('isRemoteEnabled', TRUE);
 			$data['gg'] = $this->input->post('gg');
			$html = $this->load->view('PsyTest/Report/test/test_bdi_student',$data,true);
			$dompdf->loadHtml($html);
			$dompdf->setPaper('A4', 'landscape');
			$dompdf->render();
			$pdf = $dompdf->output();
			$dompdf->stream("Data BDI(student)".date('Y-m-d h:i:s A').".pdf",array('Attachment' => false));
			exit(0);
		}
		public function subaru1(){
			$dompdf = new Dompdf\Dompdf();
    		$dompdf->set_option('isRemoteEnabled', TRUE);
 			$data['gg'] = $this->input->post('gg');
			$html = $this->load->view('PsyTest/Report/test/test_bdi_staff',$data,true);
			$dompdf->loadHtml($html);
			$dompdf->setPaper('A4', 'landscape');
			$dompdf->render();
			$pdf = $dompdf->output();
			$dompdf->stream("Data BDI(staff)".date('Y-m-d h:i:s A').".pdf",array('Attachment' => false));
			exit(0);
		}

		public function ame(){
			$dompdf = new Dompdf\Dompdf();
    		$dompdf->set_option('isRemoteEnabled', TRUE);
 			$data['gg'] = $this->input->post('gg');
			$html = $this->load->view('PsyTest/Report/test/test_mbti_student',$data,true);
			$dompdf->loadHtml($html);
			$dompdf->setPaper('A4', 'landscape');
			$dompdf->render();
			$pdf = $dompdf->output();
			$dompdf->stream("Data MBTI(student)".date('Y-m-d h:i:s A').".pdf",array('Attachment' => false));
			exit(0);
		}
		public function ame1(){
			$dompdf = new Dompdf\Dompdf();
    		$dompdf->set_option('isRemoteEnabled', TRUE);
 			$data['gg'] = $this->input->post('gg');
			$html = $this->load->view('PsyTest/Report/test/test_mbti_staff',$data,true);
			$dompdf->loadHtml($html);
			$dompdf->setPaper('A4', 'landscape');
			$dompdf->render();
			$pdf = $dompdf->output();
			$dompdf->stream("Data MBTI(staff)".date('Y-m-d h:i:s A').".pdf",array('Attachment' => false));
			exit(0);
		}


		/* d1 */

		public function d1_clinical($id1,$id2){
			$dompdf = new Dompdf\Dompdf();
    		$dompdf->set_option('isRemoteEnabled', TRUE);
 			$data['gg'] = $this->converter_model->get_clinical($id1,$id2);
 			$data['pro']=$this->counselor_model->dispro1($id1);
 			$data['cc'] =$this->converter_model->find_counselor();
			$html = $this->load->view('PsyTest/Report/test_clinical',$data,true);
			$dompdf->loadHtml($html);
			$dompdf->setPaper('A4', 'landscape');
			$dompdf->render();
			$pdf = $dompdf->output();
			$dompdf->stream("Data Clinical".date('Y-m-d h:i:s A').".pdf",array('Attachment' => false));
			exit(0);
		}

		public function d2_clinical($id1,$id2){
			$dompdf = new Dompdf\Dompdf();
    		$dompdf->set_option('isRemoteEnabled', TRUE);
 			$data['gg'] = $this->converter_model->get_clinical1($id1,$id2);
 			$data['pro']=$this->counselor_model->dispro2($id1);
 			$data['cc'] =$this->converter_model->find_counselor();
			$html = $this->load->view('PsyTest/Report/test_clinical1',$data,true);
			$dompdf->loadHtml($html);
			$dompdf->setPaper('A4', 'landscape');
			$dompdf->render();
			$pdf = $dompdf->output();
			$dompdf->stream("Data Clinical".date('Y-m-d h:i:s A').".pdf",array('Attachment' => false));
			exit(0);
		}

		public function d1_gad($id1,$id2){
			$dompdf = new Dompdf\Dompdf();
    		$dompdf->set_option('isRemoteEnabled', TRUE);
 			$data['gg'] = $this->converter_model->d1_gad($id1,$id2);
 			$data['pro']=$this->counselor_model->dispro1($id1);
 			$data['cc'] =$this->converter_model->find_counselor();
			$html = $this->load->view('PsyTest/Report/reportgad',$data,true);
			$dompdf->loadHtml($html);
			$dompdf->setPaper('A4', 'landscape');
			$dompdf->render();
			$pdf = $dompdf->output();
			$dompdf->stream("Data GAD".date('Y-m-d h:i:s A').".pdf",array('Attachment' => false));
			exit(0);
		}

		public function d2_gad($id1,$id2){
			$dompdf = new Dompdf\Dompdf();
    		$dompdf->set_option('isRemoteEnabled', TRUE);
 			$data['gg'] = $this->converter_model->d1_gad($id1,$id2);
 			$data['pro']=$this->counselor_model->dispro2($id1);
 			$data['cc'] =$this->converter_model->find_counselor();
			$html = $this->load->view('PsyTest/Report/reportgad1',$data,true);
			$dompdf->loadHtml($html);
			$dompdf->setPaper('A4', 'landscape');
			$dompdf->render();
			$pdf = $dompdf->output();
			$dompdf->stream("Data GAD".date('Y-m-d h:i:s A').".pdf",array('Attachment' => false));
			exit(0);
		}

		public function d1_phq($id1,$id2){
			$dompdf = new Dompdf\Dompdf();
    		$dompdf->set_option('isRemoteEnabled', TRUE);
 			$data['gg'] = $this->converter_model->d1_phq($id1,$id2);
 			$data['pro']=$this->counselor_model->dispro1($id1);
 			$data['cc'] =$this->converter_model->find_counselor();
			$html = $this->load->view('PsyTest/Report/reportphq',$data,true);
			$dompdf->loadHtml($html);
			$dompdf->setPaper('A4', 'landscape');
			$dompdf->render();
			$pdf = $dompdf->output();
			$dompdf->stream("Data PHQ".date('Y-m-d h:i:s A').".pdf",array('Attachment' => false));
			exit(0);
		}

		public function d2_phq($id1,$id2){
			$dompdf = new Dompdf\Dompdf();
    		$dompdf->set_option('isRemoteEnabled', TRUE);
 			$data['gg'] = $this->converter_model->d1_phq($id1,$id2);
 			$data['pro']=$this->counselor_model->dispro2($id1);
 			$data['cc'] =$this->converter_model->find_counselor();
			$html = $this->load->view('PsyTest/Report/reportphq1',$data,true);
			$dompdf->loadHtml($html);
			$dompdf->setPaper('A4', 'landscape');
			$dompdf->render();
			$pdf = $dompdf->output();
			$dompdf->stream("Data PHQ".date('Y-m-d h:i:s A').".pdf",array('Attachment' => false));
			exit(0);
		}

		public function d1_whooley($id1,$id2){
			$dompdf = new Dompdf\Dompdf();
    		$dompdf->set_option('isRemoteEnabled', TRUE);
 			$data['gg'] = $this->converter_model->d1_whooley($id1,$id2);
 			$data['pro']=$this->counselor_model->dispro1($id1);
 			$data['cc'] =$this->converter_model->find_counselor();
			$html = $this->load->view('PsyTest/Report/reportwhooley',$data,true);
			$dompdf->loadHtml($html);
			$dompdf->setPaper('A4', 'landscape');
			$dompdf->render();
			$pdf = $dompdf->output();
			$dompdf->stream("Data Whooley".date('Y-m-d h:i:s A').".pdf",array('Attachment' => false));
			exit(0);
		}

		public function d2_whooley($id1,$id2){
			$dompdf = new Dompdf\Dompdf();
    		$dompdf->set_option('isRemoteEnabled', TRUE);
 			$data['gg'] = $this->converter_model->d1_whooley($id1,$id2);
 			$data['pro']=$this->counselor_model->dispro2($id1);
 			$data['cc'] =$this->converter_model->find_counselor();
			$html = $this->load->view('PsyTest/Report/reportwhooley1',$data,true);
			$dompdf->loadHtml($html);
			$dompdf->setPaper('A4', 'landscape');
			$dompdf->render();
			$pdf = $dompdf->output();
			$dompdf->stream("Data Whooley".date('Y-m-d h:i:s A').".pdf",array('Attachment' => false));
			exit(0);
		}

		public function d1_dass($id1,$id2){
			$dompdf = new Dompdf\Dompdf();
    		$dompdf->set_option('isRemoteEnabled', TRUE);
 			$data['gg'] = $this->converter_model->d1_dass($id1,$id2);
 			$data['pro']=$this->counselor_model->dispro1($id1);
 			$data['cc'] =$this->converter_model->find_counselor();
			$html = $this->load->view('PsyTest/Report/reportdass',$data,true);
			$dompdf->loadHtml($html);
			$dompdf->setPaper('A4', 'landscape');
			$dompdf->render();
			$pdf = $dompdf->output();
			$dompdf->stream("Data DASS".date('Y-m-d h:i:s A').".pdf",array('Attachment' => false));
			exit(0);
		}

		public function d2_dass($id1,$id2){
			$dompdf = new Dompdf\Dompdf();
    		$dompdf->set_option('isRemoteEnabled', TRUE);
 			$data['gg'] = $this->converter_model->d1_dass($id1,$id2);
 			$data['pro']=$this->counselor_model->dispro2($id1);
 			$data['cc'] =$this->converter_model->find_counselor();
			$html = $this->load->view('PsyTest/Report/reportdass1',$data,true);
			$dompdf->loadHtml($html);
			$dompdf->setPaper('A4', 'landscape');
			$dompdf->render();
			$pdf = $dompdf->output();
			$dompdf->stream("Data DASS".date('Y-m-d h:i:s A').".pdf",array('Attachment' => false));
			exit(0);
		}
		public function d1_bai($id1,$id2){
			$dompdf = new Dompdf\Dompdf();
    		$dompdf->set_option('isRemoteEnabled', TRUE);
 			$data['gg'] = $this->converter_model->d1_bai($id1,$id2);
 			$data['pro']=$this->counselor_model->dispro1($id1);
 			$data['cc'] =$this->converter_model->find_counselor();
			$html = $this->load->view('PsyTest/Report/reportbai',$data,true);
			$dompdf->loadHtml($html);
			$dompdf->setPaper('A4', 'landscape');
			$dompdf->render();
			$pdf = $dompdf->output();
			$dompdf->stream("Data BAI".date('Y-m-d h:i:s A').".pdf",array('Attachment' => false));
			exit(0);
		}

		public function d2_bai($id1,$id2){
			$dompdf = new Dompdf\Dompdf();
    		$dompdf->set_option('isRemoteEnabled', TRUE);
 			$data['gg'] = $this->converter_model->d1_bai($id1,$id2);
 			$data['pro']=$this->counselor_model->dispro2($id1);
 			$data['cc'] =$this->converter_model->find_counselor();
			$html = $this->load->view('PsyTest/Report/reportbai1',$data,true);
			$dompdf->loadHtml($html);
			$dompdf->setPaper('A4', 'landscape');
			$dompdf->render();
			$pdf = $dompdf->output();
			$dompdf->stream("Data BAI".date('Y-m-d h:i:s A').".pdf",array('Attachment' => false));
			exit(0);
		}
		public function d1_bdi($id1,$id2){
			$dompdf = new Dompdf\Dompdf();
    		$dompdf->set_option('isRemoteEnabled', TRUE);
 			$data['gg'] = $this->converter_model->d1_bdi($id1,$id2);
 			$data['pro']=$this->counselor_model->dispro1($id1);
 			$data['cc'] =$this->converter_model->find_counselor();
			$html = $this->load->view('PsyTest/Report/reportbdi',$data,true);
			$dompdf->loadHtml($html);
			$dompdf->setPaper('A4', 'landscape');
			$dompdf->render();
			$pdf = $dompdf->output();
			$dompdf->stream("Data BDI".date('Y-m-d h:i:s A').".pdf",array('Attachment' => false));
			exit(0);
		}

		public function d2_bdi($id1,$id2){
			$dompdf = new Dompdf\Dompdf();
    		$dompdf->set_option('isRemoteEnabled', TRUE);
 			$data['gg'] = $this->converter_model->d1_bdi($id1,$id2);
 			$data['pro']=$this->counselor_model->dispro2($id1);
 			$data['cc'] =$this->converter_model->find_counselor();
			$html = $this->load->view('PsyTest/Report/reportbdi1',$data,true);
			$dompdf->loadHtml($html);
			$dompdf->setPaper('A4', 'landscape');
			$dompdf->render();
			$pdf = $dompdf->output();
			$dompdf->stream("Data BDI".date('Y-m-d h:i:s A').".pdf",array('Attachment' => false));
			exit(0);
		}
		public function d1_mbti($id1,$id2){
			$dompdf = new Dompdf\Dompdf();
    		$dompdf->set_option('isRemoteEnabled', TRUE);
 			$data['gg'] = $this->converter_model->d1_mbti($id1,$id2);
 			$data['pro']=$this->counselor_model->dispro1($id1);
 			$data['cc'] =$this->converter_model->find_counselor();
			$html = $this->load->view('PsyTest/Report/reportmbti',$data,true);
			$dompdf->loadHtml($html);
			$dompdf->setPaper('A4', 'landscape');
			$dompdf->render();
			$pdf = $dompdf->output();
			$dompdf->stream("Data MBTI".date('Y-m-d h:i:s A').".pdf",array('Attachment' => false));
			exit(0);
		}

		public function d2_mbti($id1,$id2){
			$dompdf = new Dompdf\Dompdf();
    		$dompdf->set_option('isRemoteEnabled', TRUE);
 			$data['gg'] = $this->converter_model->d1_mbti($id1,$id2);
 			$data['pro']=$this->counselor_model->dispro2($id1);
 			$data['cc'] =$this->converter_model->find_counselor();
			$html = $this->load->view('PsyTest/Report/reportmbti1',$data,true);
			$dompdf->loadHtml($html);
			$dompdf->setPaper('A4', 'landscape');
			$dompdf->render();
			$pdf = $dompdf->output();
			$dompdf->stream("Data MBTI".date('Y-m-d h:i:s A').".pdf",array('Attachment' => false));
			exit(0);
		}

		public function orio_report(){
			$spreadsheet = new Spreadsheet();
			$sheet = $spreadsheet->getActiveSheet();
			$no = 1;
			$count = 2;
			if($this->input->post('ceres')=='GAD'){
				$header = 'Report Data GAD (Orientation)'.date('Y');
				$sheet->setCellValue('B'.$count, $header);
				$sheet->mergeCells('B'.$count.':P'.$count);
				$sheet->getStyle('B'.$count.':P'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF87CEEB');
				$sheet->getStyle('B'.$count.':P'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
				$items = ['No','Appointment Date','Student ID','Student Name','Faculty','No Phone','Q1','Q2','Q3','Q4','Q5','Q6','Q7','Score','Result'];
				$count++;
				$cells = ['B'.$count,'C'.$count,'D'.$count,'E'.$count,'F'.$count,'G'.$count,'H'.$count,'I'.$count,'J'.$count,'K'.$count,'L'.$count,'M'.$count, 'N'.$count, 'O'.$count,'P'.$count];
				$sheet->getStyle('B3:P'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFD3D3D3');
				foreach(array_combine($items, $cells) as $item => $cell){
						$sheet->setCellValue($cell, $item);
			 		}
				$count++;
				foreach($this->converter_model->orio_data($this->input->post('ceres'))  as $dt){
					$sheet->setCellValue('B'.$count, $no);
					$sheet->setCellValue('C'.$count, $dt->gad_date);
					$sheet->setCellValue('D'.$count, $dt->student_no);
					$sheet->setCellValue('E'.$count, $dt->student_name);
					$sheet->setCellValue('F'.$count, $dt->student_faculty);
					$sheet->setCellValue('G'.$count, $dt->student_phone);
					$sheet->setCellValue('H'.$count, $dt->gad_q1);
					$sheet->setCellValue('I'.$count, $dt->gad_q2);
					$sheet->setCellValue('J'.$count, $dt->gad_q3);
					$sheet->setCellValue('K'.$count, $dt->gad_q4);
					$sheet->setCellValue('L'.$count, $dt->gad_q5);
					$sheet->setCellValue('M'.$count, $dt->gad_q6);
					$sheet->setCellValue('N'.$count, $dt->gad_q7);
					$sheet->setCellValue('O'.$count, $dt->gad_score);
					$sheet->setCellValue('p'.$count, $dt->gad_result);
					$no++;
					$count++;
				}
				foreach(range('B','P') as $columnID) {
				    $sheet->getColumnDimension($columnID)->setAutoSize(true);
				}
				$sheet->getStyle('B3:P'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
				$styleArray = [
				    'borders' => [
				  		'allBorders' => [
				            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN //fine border
					        ]
				   	 ]
				];
							  
				$sheet->getStyle('B2:P'.--$count)->applyFromArray($styleArray);
				$count++;
				$no = 1;
				$filename = 'Report Data GAD (Orientation)'.date('Y');
			}elseif($this->input->post('ceres')=='PHQ'){
				$header = 'Report Data PHQ (Orientation)'.date('Y');
				$sheet->setCellValue('B'.$count, $header);
				$sheet->mergeCells('B'.$count.':R'.$count);
				$sheet->getStyle('B'.$count.':R'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF87CEEB');
				$sheet->getStyle('B'.$count.':R'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
				$items = ['No','Appointment Date','Student ID','Student Name','Faculty','No Phone','Q1','Q2','Q3','Q4','Q5','Q6','Q7','Q8','Q9','Score','Result'];
				$count++;
				$cells = ['B'.$count,'C'.$count,'D'.$count,'E'.$count,'F'.$count,'G'.$count,'H'.$count,'I'.$count,'J'.$count,'K'.$count,'L'.$count,'M'.$count, 'N'.$count, 'O'.$count,'P'.$count,'Q'.$count,'R'.$count];
				$sheet->getStyle('B3:R'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFD3D3D3');
				foreach(array_combine($items, $cells) as $item => $cell){
					$sheet->setCellValue($cell, $item);
				}
				$count++;
				foreach($this->converter_model->orio_data($this->input->post('ceres')) as $dt){
					$sheet->setCellValue('B'.$count, $no);
					$sheet->setCellValue('C'.$count, $dt->phq_date);
					$sheet->setCellValue('D'.$count, $dt->student_no);
					$sheet->setCellValue('E'.$count, $dt->student_name);
					$sheet->setCellValue('F'.$count, $dt->student_faculty);
					$sheet->setCellValue('G'.$count, $dt->student_phone);
					$sheet->setCellValue('H'.$count, $dt->phq_q1);
					$sheet->setCellValue('I'.$count, $dt->phq_q2);
					$sheet->setCellValue('J'.$count, $dt->phq_q3);
					$sheet->setCellValue('K'.$count, $dt->phq_q4);
					$sheet->setCellValue('L'.$count, $dt->phq_q5);
					$sheet->setCellValue('M'.$count, $dt->phq_q6);
					$sheet->setCellValue('N'.$count, $dt->phq_q7);
					$sheet->setCellValue('O'.$count, $dt->phq_q8);
					$sheet->setCellValue('p'.$count, $dt->phq_q9);
					$sheet->setCellValue('Q'.$count, $dt->phq_score);
					$sheet->setCellValue('R'.$count, $dt->phq_result);
					$no++;
					$count++;
				}
				foreach(range('B','R') as $columnID) {
				    $sheet->getColumnDimension($columnID)->setAutoSize(true);
				}
				$sheet->getStyle('B3:R'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
				$styleArray = [
				    'borders' => [
				  		'allBorders' => [
				            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN //fine border
					        ]
				   	 ]
				];
						  
				$sheet->getStyle('B2:R'.--$count)->applyFromArray($styleArray);
				$count++;
				$no = 1;
				$filename = 'Report Data PHQ (Orientation)'.date('Y');
			}elseif($this->input->post('ceres')=='Whooley'){
				$header = 'Report Data Whooley (Orientation)'.date('Y');
				$sheet->setCellValue('B'.$count, $header);
				$sheet->mergeCells('B'.$count.':K'.$count);
				$sheet->getStyle('B'.$count.':K'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF87CEEB');
				$sheet->getStyle('B'.$count.':K'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
				$items = ['No','Appointment Date','Student ID','Student Name','Faculty','No Phone','Q1','Q2','Score','Result'];
				$count++;
				$cells = ['B'.$count,'C'.$count,'D'.$count,'E'.$count,'F'.$count,'G'.$count,'H'.$count,'I'.$count,'J'.$count,'K'.$count];
				$sheet->getStyle('B3:K'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFD3D3D3');
				foreach(array_combine($items, $cells) as $item => $cell){
					$sheet->setCellValue($cell, $item);
				}
				$count++;
				foreach($this->converter_model->orio_data($this->input->post('ceres')) as $dt){
					$sheet->setCellValue('B'.$count, $no);
					$sheet->setCellValue('C'.$count, $dt->whooley_date);
					$sheet->setCellValue('D'.$count, $dt->student_no);
					$sheet->setCellValue('E'.$count, $dt->student_name);
					$sheet->setCellValue('F'.$count, $dt->student_faculty);
					$sheet->setCellValue('G'.$count, $dt->student_phone);
					$sheet->setCellValue('H'.$count, $dt->whooley_q1);
					$sheet->setCellValue('I'.$count, $dt->whooley_q2);
					$sheet->setCellValue('J'.$count, $dt->whooley_score);
					$sheet->setCellValue('K'.$count, $dt->whooley_result);
					$no++;
					$count++;
				}
				foreach(range('B','K') as $columnID) {
				    $sheet->getColumnDimension($columnID)->setAutoSize(true);
				}
				$sheet->getStyle('B3:K'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
				$styleArray = [
				    'borders' => [
				  		'allBorders' => [
				            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN //fine border
					        ]
				   	 ]
				];
					  
				$sheet->getStyle('B2:K'.--$count)->applyFromArray($styleArray);
				$count++;
				$no = 1;
				$filename = 'Report Data Whooley (Orientation)'.date('Y');
			}else{
				$header = 'Report Data DASS (Orientation)'.date('Y');
				$sheet->setCellValue('B'.$count, $header);
				$sheet->mergeCells('B'.$count.':AH'.$count);
				$sheet->getStyle('B'.$count.':AH'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF87CEEB');
				$sheet->getStyle('B'.$count.':AH'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
				$items = ['No','Appointment Date','Student ID','Student Name','Faculty','No Phone','Q1','Q2','Q3','Q4','Q5','Q6','Q7','Q8','Q9','Q10','Q11','Q12','Q13','Q14','Q15','Q16','Q17','Q18','Q19','Q20','Q21','stress_score','dass_stress','anxiety_score','dass_anxiety','depression_score','dass_depression'];
				$count++;
				$cells = ['B'.$count,'C'.$count,'D'.$count,'E'.$count,'F'.$count,'G'.$count,'H'.$count,'I'.$count,'J'.$count,'K'.$count,'L'.$count,'M'.$count, 'N'.$count, 'O'.$count,'P'.$count,'Q'.$count,'R'.$count,'S'.$count,'T'.$count,'U'.$count,'V'.$count,'W'.$count,'X'.$count,'Y'.$count,'Z'.$count,'AA'.$count,'AB'.$count,'AC'.$count,'AD'.$count,'AE'.$count,'AF'.$count,'AG'.$count,'AH'.$count];
				$sheet->getStyle('B3:AH'.$count)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFD3D3D3');
				foreach(array_combine($items, $cells) as $item => $cell){
					$sheet->setCellValue($cell, $item);
				}
				$count++;
				foreach($this->converter_model->orio_data($this->input->post('ceres')) as $dt){
					$sheet->setCellValue('B'.$count, $no);
					$sheet->setCellValue('C'.$count, $dt->dass_date);
					$sheet->setCellValue('D'.$count, $dt->student_no);
					$sheet->setCellValue('E'.$count, $dt->student_name);
					$sheet->setCellValue('F'.$count, $dt->student_faculty);
					$sheet->setCellValue('G'.$count, $dt->student_phone);
					$sheet->setCellValue('H'.$count, $dt->dass_q1);
					$sheet->setCellValue('I'.$count, $dt->dass_q2);
					$sheet->setCellValue('J'.$count, $dt->dass_q3);
					$sheet->setCellValue('K'.$count, $dt->dass_q4);
					$sheet->setCellValue('L'.$count, $dt->dass_q5);
					$sheet->setCellValue('M'.$count, $dt->dass_q6);
					$sheet->setCellValue('N'.$count, $dt->dass_q7);
					$sheet->setCellValue('O'.$count, $dt->dass_q8);
					$sheet->setCellValue('P'.$count, $dt->dass_q9);
					$sheet->setCellValue('Q'.$count, $dt->dass_q10);
					$sheet->setCellValue('R'.$count, $dt->dass_q11);
					$sheet->setCellValue('S'.$count, $dt->dass_q12);
					$sheet->setCellValue('T'.$count, $dt->dass_q13);
					$sheet->setCellValue('U'.$count, $dt->dass_q14);
					$sheet->setCellValue('V'.$count, $dt->dass_q15);
					$sheet->setCellValue('W'.$count, $dt->dass_q16);
					$sheet->setCellValue('X'.$count, $dt->dass_q17);
					$sheet->setCellValue('Y'.$count, $dt->dass_q18);
					$sheet->setCellValue('Z'.$count, $dt->dass_q19);
					$sheet->setCellValue('AA'.$count, $dt->dass_q20);
					$sheet->setCellValue('AB'.$count, $dt->dass_q21);
					$sheet->setCellValue('AC'.$count, $dt->stress_score);
					$sheet->setCellValue('AD'.$count, $dt->dass_stress);
					$sheet->setCellValue('AE'.$count, $dt->anxiety_score);
					$sheet->setCellValue('AF'.$count, $dt->dass_anxiety);
					$sheet->setCellValue('AG'.$count, $dt->depression_score);
					$sheet->setCellValue('AH'.$count, $dt->dass_depression);
					$no++;
					$count++;
				}
				foreach(range('B','AH') as $columnID) {
				    $sheet->getColumnDimension($columnID)->setAutoSize(true);
				}
				$sheet->getStyle('B3:AH'.$count)->getAlignment()->setHorizontal('center')->setWrapText(true);
				$styleArray = [
				    'borders' => [
				  		'allBorders' => [
				            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN //fine border
					        ]
				   	 ]
				];
							  
				$sheet->getStyle('B2:AH'.--$count)->applyFromArray($styleArray);
				$count++;
				$no = 1;
				$filename = 'Report Data DASS (Orientation)'.date('Y');
			}
			$writer = new Xlsx($spreadsheet);		 
			header('Content-Type: application/vnd.ms-excel');
			header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
			header('Cache-Control: max-age=0');
		
			$writer->save('php://output');
		}

	}

?>