<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function index()
	{
		$this->load->view('PsyTest/Admin/admin');
	}
	public function dashboard()
	{
		$data['title'] = 'DASHBOARD';
		$data['num1'] = $this->admin_model->num_student();
		$data['num2'] = $this->admin_model->num_staff();
		$data['num3'] = $this->admin_model->num_interviewer();
		$data['num4'] = $this->admin_model->num_orientation();
		$this->load->view('PsyTest/Admin/dashboard', $data);
	}
	public function gad7()
	{
		$data['title'] = 'GAD-7 TEST';
		$data['otr'] = $this->admin_model->get_otr();
		$this->load->view('PsyTest/Admin/gad7', $data);
	}
	public function phq9()
	{
		$data['title'] = 'PHQ9 TEST';
		$data['otr'] = $this->admin_model->get_otr();
		$this->load->view('PsyTest/Admin/phq9', $data);
	}
	public function whooley()
	{
		$data['title'] = 'WHOOLEY TEST';
		$data['otr'] = $this->admin_model->get_otr();
		$this->load->view('PsyTest/Admin/whooley', $data);
	}
	public function dass()
	{
		$data['title'] = 'DASS TEST';
		$data['otr'] = $this->admin_model->get_otr();
		$this->load->view('PsyTest/Admin/dass', $data);
	}
	public function bdi()
	{
		$data['title'] = 'BDI TEST';
		$data['otr'] = $this->admin_model->get_otr();
		$this->load->view('PsyTest/Admin/bdi', $data);
	}
	public function bai()
	{
		$data['title'] = 'BAI TEST';
		$data['otr'] = $this->admin_model->get_otr();
		$this->load->view('PsyTest/Admin/bai', $data);
	}
	public function mbti()
	{
		$data['title'] = 'MBTI PERSONALITY TEST';
		$data['otr'] = $this->admin_model->get_otr();
		$this->load->view('PsyTest/Admin/mbti', $data);
	}
	public function otr()
	{
		$data['title'] = 'Overall Answered Assessment';
		$data['otr'] = $this->admin_model->get_otr();
		$this->load->view('PsyTest/Admin/otr', $data);
	}
	public function dm()
	{
		$data['title'] = 'Data Management';
		$data['faculty'] = array(
			'Fakulti Bahasa dan Komunikasi',
			'Fakulti Muzik dan Seni Persembahan',
			'Fakulti Pengurusan dan Ekonomi',
			'Fakulti Sains Kemanusiaan',
			'Fakulti Sains dan Matematik',
			'Fakulti Sains Sukan dan Kejurulatihan',
			'Fakulti Seni, Komputeran dan Industri Kreatif',
			'Fakulti Pembangunan Manusia',
			'Fakulti Teknikal Vokasional'			
		);
		$data['department'] = [
			"Akademi Pendidikan/ Sekolah Makmal",
			"Bahagian Audit Dalam",
			"Bahagian Governan",
			"Bahagian Hal Ehwal Akademik",
			"Bahagian Hal Ehwal Pelajar",
			"Bahagian Keselamatan",
			"Bahagian Komunikasi Korporat",
			"Bahagian Pembangunan Sumber Manusia",
			"Bahagian Pengangkutan",
			"Bahagian Pengurusan Kualiti",
			"Bahagian Pengurusan Risiko dan Keselamatan &amp; Kesihatan Pekerjaan",
			"Bahagian Pengurusan Sumber Manusia",
			"Bahagian Perancangan Korporat",
			"Bahagian Perundangan",
			"Canselori",
			"Fakulti Bahasa dan Komunikasi",
			"Fakulti Muzik dan Seni Persembahan",
			"Fakulti Pembangunan Manusia",
			"Fakulti Pengurusan dan Ekonomi",
			"Fakulti Sains Kemanusiaan",
			"Fakulti Sains Sukan dan Kejurulatihan",
			"Fakulti Sains dan Matematik",
			"Fakulti Seni, Komputeran dan Industri Kreatif",
			"Fakulti Teknikal dan Vokasional",
			"Institut Pengajian Siswazah",
			"Institut Peradaban Melayu",
			"Jabatan Bendahari",
			"Jabatan Canselori",
			"Jabatan Pengurusan Pembangunan &amp; Harta Benda",
			"Kolej Aminuddin Baki",
			"Kolej Awang Had Salleh",
			"Kolej Kediaman Harun Aminurrashid",
			"Kolej Ungku Omar",
			"Kolej Za'ba",
			"Muzium Pendidikan Nasional",
			"Pejabat Karang Mengarang",
			"Pejabat Penasihat Undang-undang",
			"Pejabat Pendaftar",
			"Pejabat Penyandang Kursi Tun Ghaffar Baba",
			"Pejabat Penyandang Kursi Za'ba",
			"Pejabat Timbalan Naib Canselor (Akademik &amp; Antarabangsa)",
			"Pejabat Timbalan Naib Canselor (Hal Ehwal Pelajar &amp; Alumni)",
			"Pejabat Timbalan Naib Canselor (Penyelidikan &amp; Inovasi)",
			"Perpustakaan Tuanku Bainun",
			"Pusat Alumni",
			"Pusat Antarabangsa dan Mobiliti",
			"Pusat Bahasa dan Pengajian Umum",
			"Pusat Islam",
			"Pusat Kaunseling",
			"Pusat Kebudayaan",
			"Pusat Kesihatan",
			"Pusat Keusahawanan dan Kebolehpasaran Graduan",
			"Pusat Ko-Kurikulum",
			"Pusat Latihan Mengajar dan Industri",
			"Pusat Pembangunan Akademik",
			"Pusat Pengurusan Penyelidikan dan Inovasi",
			"Pusat Penyelidikan Perkembangan Kanak-kanak Negara",
			"Pusat Sukan",
			"Pusat Teknologi Maklumat &amp; Komunikasi",
			"Pusat Transformasi Komuniti Universiti",
			"Pusat Ulul Albab",
			"UPSI Holdings",
			"Unit Integriti",
			"Unit Kediaman Luar Kampus",
			"Unit Neuro Linguistic Programming (NLP)",
			"Unit Teknologi Pengajaran",
			"Waqaf, Endowmen, Zakat, Sedekah dan Khairat"
		];
		$this->load->view('PsyTest/Admin/dm', $data);
	}

	public function vc(){
		$data['title'] = 'View Counselor';
		$data['counselor'] = $this->admin_model->get_counselor();
		$this->load->view('PsyTest/Admin/vc', $data);
	}

	public function sudo(){
		$data['title'] = 'Sudo';
		$data['counselor'] = $this->admin_model->get_counselor();
		$data['temp'] = $this->admin_model->get_temp();
		$data['temp2'] = $this->admin_model->get_temp2();
		$data['xk'] = $this->admin_model->search_data();
		$this->load->view('PsyTest/Admin/sudo', $data);
	}

	public function exchange($id){
		$this->admin_model->exchange_temp($id);
		redirect('admin/sudo');
	}
	public function exchange2($id){
		$this->admin_model->exchange_temp2($id);
		redirect('admin/sudo');
	}

	public function revert($id){
		$this->admin_model->exchange_revert($id);
		redirect('admin/sudo');
	}

	public function revert2($id){
		$this->admin_model->exchange_revert2($id);
		redirect('admin/sudo');
	}

	public function interviewer(){
		$data['title'] = 'Interview Candidate';
		$data['pekora'] = $this->admin_model->interviewer_data();
		$data['ayame'] = $this->admin_model->interview_result();
		$this->load->view('PsyTest/Admin/interviewer',$data);
	}

	public function give_task($id){
		$data = array('mbti_user'=> $id ,'mbti_session' =>date("Y-m-d") ,'mbti_status' => 'INCOMPLETE','mbti_info'=> 'INTERVIEW');
		$this->counselor_model->insert_mbti($data);
		$this->session->set_userdata('omega','alpha');
		redirect('admin/interviewer');
	}

	public function orientation(){
		$data['title'] = 'Orientation';
		$data['orio1'] = $this->admin_model->orio1() ;
		$data['orio2'] = $this->admin_model->orio2() ;
		$data['orio3'] = $this->admin_model->orio3() ;
		$data['orio4'] = $this->admin_model->orio4() ;
		$this->load->view('PsyTest/Admin/orientation',$data);
	}

	public function orio_test(){
		foreach ($this->admin_model->orio_fetch() as $id) {
			if($this->admin_model->orio_gad($id->student_id) == 0){
				$data = array('gad_user'=>$id->student_id ,'gad_session' =>date('Y-m-d'),'gad_status' => 'INCOMPLETE','gad_info' => 'ORIENTATION');
				$this->counselor_model->insert_gad($data);
			}

			if($this->admin_model->orio_phq($id->student_id) == 0){
				$data = array('phq_user'=>$id->student_id ,'phq_session' =>date('Y-m-d'),'phq_status' => 'INCOMPLETE','phq_info' => 'ORIENTATION');
				$this->counselor_model->insert_phq($data);
			}

			if($this->admin_model->orio_whooley($id->student_id) == 0){
				$data = array('whooley_user'=>$id->student_id ,'whooley_session' =>date('Y-m-d'),'whooley_status' => 'INCOMPLETE','whooley_info' => 'ORIENTATION');
				$this->counselor_model->insert_whooley($data);
			}

			if($this->admin_model->orio_dass($id->student_id) == 0){
				$data = array('dass_user'=>$id->student_id ,'dass_session' =>date('Y-m-d'),'dass_status' => 'INCOMPLETE','dass_info' => 'ORIENTATION');
				$this->counselor_model->insert_dass($data);

			}

		}
		redirect('admin/orientation');
	}


}
