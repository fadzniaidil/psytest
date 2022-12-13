<?php
	defined('BASEPATH') OR exit('No direct script allowed');

	class Result extends CI_Controller
	{
		
		public function gadresult(){
			$q1 = $_POST["qgad1"];
			$q2 = $_POST["qgad2"];
			$q3 = $_POST["qgad3"];
			$q4 = $_POST["qgad4"];
			$q5 = $_POST["qgad5"];
			$q6 = $_POST["qgad6"];
			$q7 = $_POST["qgad7"];

			$gadlist = [$q1, $q2, $q3, $q4, $q5, $q6, $q7];

			function gadcal($gadlist)
			{
				$value = 0;
				foreach ($gadlist as $data) {
					$value = $data + $value;
				}
				return $value;
			}

			function gadpart($value)
			{
				if (0 <= $value and $value < 6) {
					return "None";
				} elseif (6 <= $value and $value < 11) {
					return "Mild";
				} elseif (11 <= $value and $value < 16) {
					return "moderate";
				} else {
					return "Severe";
				}
			}

			$tvalue = gadcal($gadlist);
			$tahap = gadpart($tvalue);

			$data['value'] = $tvalue;
			$data['tahap'] = $tahap;

			$this->load->view('PsyTest/Result/gadresult',$data);

		}
	}
?>