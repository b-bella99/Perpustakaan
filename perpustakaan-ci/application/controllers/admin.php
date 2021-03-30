<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	var $API="";

	public function __construct()
	{
		parent::__construct();
		$this->API="http://localhost:8000/api";
        $this->load->model('login_model');
        $this->load->library('curl');
	}

	public function index()
	{
		$data['title'] = 'Admin Perpustakaan | Login';
		$this->load->view('admin/include/head', $data);
		$this->load->view('admin/index');
		$this->load->view('admin/include/script');
	}

	//login logout
	public function proses_login(){
        $username=htmlspecialchars($this->input->post('username'));
        $password=htmlspecialchars($this->input->post('password'));

        $ceklogin=$this->login_model->login($username,$password);

        if($ceklogin){
            foreach($ceklogin as $row){
                //kita set userdata pada session dengan nama user dan isi username kita isikan username yang ada pada $row
                $this->session->set_userdata('username',$row->username); 
                $this->session->set_userdata('password',$row->password);
                //var_dump($row);
                if ($this->session->userdata('username')==$row->username) {
                    # code...
                    redirect('admin/dashboard');// ke controller 
                    
                }
            }
        }
        else{
            $data['pesan']="username dan password Anda salah";
            $data['title'] = 'Admin Perpustakaan | Login';
            $this->load->view('admin/include/head', $data);
            $this->load->view('admin/index');
            $this->load->view('admin/include/script');
            //redirect('login/index','refresh');
            
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        
        redirect('admin/index','refresh');
    }
	// end login logout

	public function dashboard()
	{
		$data['title'] = 'Admin Perpustakaan | Dashboard';
		$this->load->view('admin/include/head', $data);
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/include/script');
		$this->load->view('admin/include/footer');
	}

	//member
	public function member()
	{
		
        $respon =  $this->curl->simple_get($this->API . '/anggota');
        $anggota = json_decode($respon, true);
        $data['anggota'] = $anggota['values'];
        $data['title'] = 'Admin Perpustakaan | Halaman Member';
        //if ($this->input->post('keyword')) {
            # code...
            //$data['anggota']=$this->AnggotaModel->cariMember();
        //}
		$this->load->view('admin/include/head', $data);
        $this->load->view('admin/include/header');
        $this->load->view('admin/include/sidebar');
        $this->load->view('admin/member');
        $this->load->view('admin/include/script');
        $this->load->view('admin/include/footer');
	}

	public function tambahMembers()
	{
        /*$respon = $this->curl->simple_get($this->API . '/anggota');
        $anggota = json_decode($respon, true);
        $data['anggota'] = $anggota['values'];*/
		$data['title'] = 'Admin Perpustakaan | Tambah Member';
        $this->form_validation->set_rules('nomor', 'nomor', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'tgl_lahir', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'required');
        $this->form_validation->set_rules('nomor_telp', 'nomor_telp', 'required');

        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('admin/include/head', $data);
			$this->load->view('admin/include/header');
			$this->load->view('admin/include/sidebar');
			$this->load->view('admin/tambahmember');
			$this->load->view('admin/include/script');
			$this->load->view('admin/include/footer');
        }else {
            #code
            //$this->Admin_model->tambahMember();
            if (isset($_POST['submit'])) {
            	$data = array(
            		'nomor' => $this->input->post('nomor'),
            	 	'nama' => $this->input->post('nama'),
            	    'alamat' => $this->input->post('alamat'),
            	 	'tgl_lahir' => $this->input->post('tgl_lahir'),
            	 	'tempat_lahir' => $this->input->post('tempat_lahir'),
            	 	'nomor_telp' => $this->input->post('nomor_telp'));
            	$insert = $this->curl->simple_post($this->API.'/anggota',$data, array(CURLOPT_BUFFERSIZE => 10));
            	if ($insert) {
            		$this->session->set_flashdata('hasil', 'Tambah data anggota baru berhasil!');
            	}else{
            		$this->session->set_flashdata('hasil', 'Tambah data anggota bar gagal!');
            	}
            	redirect('admin/member');
            }else{
            	$this->load->view('admin/include/head', $data);
				$this->load->view('admin/include/header');
				$this->load->view('admin/include/sidebar');
				$this->load->view('admin/tambahmember');
				$this->load->view('admin/include/script');
				$this->load->view('admin/include/footer');
            }
        }
	}

	public function editmember($nomor)
	{
		//$params = array('nomor' => $this->uri->segment(3));
        //$respon = json_decode($this->curl->simple_get($this->API.'/anggota/',$nomor));
      	//$list['anggota'] = $respon->values;
       	//$respon = $this->curl->simple_get($this->API . '/anggota/' . $nomor);
        //$anggota = json_decode($respon, true);
        //$data['anggota'] = $respon->values;

		$respon = $this->curl->simple_get($this->API . '/anggota/' . $nomor);
        $anggota = json_decode($respon, true);
        $data['anggota'] = $anggota['values'];

        $data['title'] = 'Admin Perpustakaan | Halaman Member';
       // $data['member']=$this->Admin_model->getMemberByID($nomor);
        
        $this->load->view('admin/include/head', $data);
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/editmember',$data);
		$this->load->view('admin/include/script');
		$this->load->view('admin/include/footer');
	}

	public function updatemember()
	{
		if (isset($_POST['submit'])) {
			$nomor = $this->input->post('nomor');
            $data = array(
            	'nomor' => $this->input->post('nomor'),
            	'nama' => $this->input->post('nama'),
            	'alamat' => $this->input->post('alamat'),
            	'tgl_lahir' => $this->input->post('tgl_lahir'),
            	'tempat_lahir' => $this->input->post('tempat_lahir'),
            	'nomor_telp' => $this->input->post('nomor_telp'));
            $update = $this->curl->simple_put($this->API.'/anggota/update/'. $nomor, $data, array(CURLOPT_BUFFERSIZE => 10));
        	if ($update) {
            	$this->session->set_flashdata('hasil', 'Ubah data anggota baru berhasil!');
            }else{
            	$this->session->set_flashdata('hasil', 'Ubah data anggota baru gagal!');
            }
            redirect('admin/member');
        }else{
            $params = array('nomor' => $this->uri->segment(3));
            $respon = json_decode($this->curl->simple_get($this->API.'/anggota/',$params));
            $list['anggota'] = $respon->values;
            $data['title'] = 'Admin Perpustakaan | Halaman Member';
            $this->load->view('admin/include/head', $data);
			$this->load->view('admin/include/header');
			$this->load->view('admin/include/sidebar');
			$this->load->view('admin/editmember',$list);
			$this->load->view('admin/include/script');
			$this->load->view('admin/include/footer');
        }
	}

	public function hapusmember($nomor){
      if (empty($nomor)) {
      	redirect('admin/member');
      }else{
      	$delete = $this->curl->simple_delete($this->API.'/anggota/hapus/'. $nomor, array(CURLOPT_BUFFERSIZE => 10));
      	if ($delete) {
      		$this->session->set_flashdata('hasil', 'Hapus data anggota berhasil!');
      	}else{
      		$this->session->set_flashdata('hasil', 'Hapus data anggota gagal!');
      	}
      	redirect('admin/member','refresh');
      }
    }

	//end member

	//peminjaman
	public function peminjaman()
    {
        $respon =  $this->curl->simple_get($this->API . '/peminjaman');
        $peminjaman = json_decode($respon, true);
        $data['peminjaman'] = $peminjaman['values'];
        $data['title'] = 'Admin Perpustakaan | Halaman Peminjaman';
		
		$this->load->view('admin/include/head', $data);
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/peminjaman');
		$this->load->view('admin/include/script');
		$this->load->view('admin/include/footer');
    }

    //detailpeminjaman
    public function detailpeminjaman($kode)
    {
    	$respon = $this->curl->simple_get($this->API . '/peminjaman/' . $kode);
        $peminjaman = json_decode($respon, true);
        $data['peminjaman'] = $peminjaman['values'];
    	$data['title'] = 'Admin Perpustakaan | Detail Peminjaman';

		$this->load->view('admin/include/head', $data);
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/detailpeminjaman', $data);
		$this->load->view('admin/include/script');
		$this->load->view('admin/include/footer');
    }

    public function tbl_detailpeminjaman()
    {
        $data['title']='Admin Perpustakaan | Deatil Transaksi';
       // $data['detailpeminjaman']=$this->Admin_model->getDetailpeminjamanByID($kode_pinjam);
        
        $this->load->view('admin/include/head', $data);
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/detaildetailpeminjaman');
		$this->load->view('admin/include/script');
		$this->load->view('admin/include/footer');
    }

	//end of peminjaman

	// buku

    public function buku()
	{
        $respon =  $this->curl->simple_get($this->API . '/buku');
        $buku = json_decode($respon, true);
        $data['buku'] = $buku['values'];
        $data['title'] = 'Admin Perpustakaan | Halaman Buku';
		$this->load->view('admin/include/head', $data);
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/buku', $data);
		$this->load->view('admin/include/script');
		$this->load->view('admin/include/footer');
	}

    public function tambahbuku()
	{
		$this->form_validation->set_rules('kode', 'kode', 'required');
		$this->form_validation->set_rules('judul', 'judul', 'required');
		$this->form_validation->set_rules('jumlah_hal', 'jumlah_hal', 'required');
		$this->form_validation->set_rules('pengarang', 'pengarang', 'required');
		$this->form_validation->set_rules('penerbit', 'penerbit', 'required');
		$this->form_validation->set_rules('tahun_terbit', 'tahun_terbit', 'required');
		$data['title'] = 'Admin Perpustakaan | Tambah Buku ';

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/include/head', $data);
			$this->load->view('admin/include/header');
			$this->load->view('admin/include/sidebar');
			$this->load->view('admin/tambahbuku');
			$this->load->view('admin/include/script');
			$this->load->view('admin/include/footer');
        } else {
            if (isset($_POST['submit'])) {
            	$data['kode'] = $this->input->post('kode',TRUE);
	            $data['judul'] = $this->input->post('judul',TRUE);
	            $data['jumlah_hal'] = $this->input->post('jumlah_hal',true);
	            $data['pengarang'] = $this->input->post('pengarang',true);
	            $data['penerbit'] = $this->input->post('penerbit',true);
            	$data['tahun_terbit'] = $this->input->post('tahun_terbit',true);

            	$insert = $this->curl->simple_post($this->API.'/buku',$data, array(CURLOPT_BUFFERSIZE => 10));
            	if ($insert) {
            		$this->session->set_flashdata('hasil', 'Tambah data buku baru berhasil!');
            	}else{
            		$this->session->set_flashdata('hasil', 'Tambah data buku baru gagal!');
            	}
            	redirect('admin/buku');
            }else{
            	$this->load->view('admin/include/head', $data);
				$this->load->view('admin/include/header');
				$this->load->view('admin/include/sidebar');
				$this->load->view('admin/tambahbuku');
				$this->load->view('admin/include/script');
				$this->load->view('admin/include/footer');
            }
        }
    }

	public function detailbuku($kode)
    {
    	$respon = $this->curl->simple_get($this->API . '/buku/' . $kode);
        $buku = json_decode($respon, true);
        $data['buku'] = $buku['values'];
        $data['title']='Admin Perpustakaan | Deatil Buku';
       // $data['buku']=$this->Admin_model->getBukuByID($kode);
        
        $this->load->view('admin/include/head', $data);
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/detailbuku', $data);
		$this->load->view('admin/include/script');
		$this->load->view('admin/include/footer');
    }

    public function editbuku($kode)
	{
		$respon = $this->curl->simple_get($this->API . '/buku/' . $kode);
        $buku = json_decode($respon, true);
        $data['buku'] = $buku['values'];

        $data['title'] = 'Admin Perpustakaan | Halaman Buku';
       // $data['member']=$this->Admin_model->getMemberByID($nomor);
        
        $this->load->view('admin/include/head', $data);
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/editbuku',$data);
		$this->load->view('admin/include/script');
		$this->load->view('admin/include/footer');
	}

	public function updatebuku()
	{
        if (isset($_POST['submit'])) {
			$kode = $this->input->post('kode');
            $data['kode'] = $this->input->post('kode',TRUE);
	        $data['judul'] = $this->input->post('judul',TRUE);
	        $data['jumlah_hal'] = $this->input->post('jumlah_hal',true);
	        $data['pengarang'] = $this->input->post('pengarang',true);
	        $data['penerbit'] = $this->input->post('penerbit',true);
            $data['tahun_terbit'] = $this->input->post('tahun_terbit',true);

            $update = $this->curl->simple_put($this->API.'/buku/update/'. $kode, $data, array(CURLOPT_BUFFERSIZE => 10));
        	if ($update) {
            	$this->session->set_flashdata('hasil', 'Ubah data buku baru berhasil!');
            }else{
            	$this->session->set_flashdata('hasil', 'Ubah data buku baru gagal!');
            }
            redirect('admin/buku');
        }else{
            $params = array('kode' => $this->uri->segment(3));
            $respon = json_decode($this->curl->simple_get($this->API.'/buku/',$params));
            $list['buku'] = $respon->values;
            $data['title'] = 'Admin Perpustakaan | Halaman Buku';
            $this->load->view('admin/include/head', $data);
			$this->load->view('admin/include/header');
			$this->load->view('admin/include/sidebar');
			$this->load->view('admin/editbuku',$list);
			$this->load->view('admin/include/script');
			$this->load->view('admin/include/footer');
        }
	}

	public function hapusbuku($kode){
      if (empty($kode)) {
      	redirect('admin/buku');
      }else{
      	$delete = $this->curl->simple_delete($this->API.'/buku/hapus/'. $kode, array(CURLOPT_BUFFERSIZE => 10));
      	if ($delete) {
      		$this->session->set_flashdata('hasil', 'Hapus data buku berhasil!');
      	}else{
      		$this->session->set_flashdata('hasil', 'Hapus data buku gagal!');
      	}
      	redirect('admin/buku','refresh');
      }
    }
	//end of buku

	//detail peminjaman
    
	//end of detail peminjaman

	//petugas
    public function petugas()
    {
        $respon =  $this->curl->simple_get($this->API . '/petugas');
        $petugas = json_decode($respon, true);
        $data['petugas'] = $petugas['values'];
        $data['title'] = 'Admin Perpustakaan | Halaman Petugas';

        $this->load->view('admin/include/head', $data);
        $this->load->view('admin/include/header');
        $this->load->view('admin/include/sidebar');
        $this->load->view('admin/petugas', $data);
        $this->load->view('admin/include/script');
        $this->load->view('admin/include/footer');
    }

    public function tambahpetugas()
    {
        $this->form_validation->set_rules('id', 'id', 'required');
        $this->form_validation->set_rules('nomor_ktp', 'nomor_ktp', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('nomor_telp', 'nomor_telp', 'required');
        $data['title'] = 'Admin Perpustakaan | Tambah Petugas ';

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/include/head', $data);
            $this->load->view('admin/include/header');
            $this->load->view('admin/include/sidebar');
            $this->load->view('admin/tambahpetugas');
            $this->load->view('admin/include/script');
            $this->load->view('admin/include/footer');
        } else {
        	if (isset($_POST['submit'])) {
        		$data['id'] = $this->input->post('id',TRUE);
	            $data['nomor_ktp'] = $this->input->post('nomor_ktp',TRUE);
	            $data['nama'] = $this->input->post('nama',true);
	            $data['alamat'] = $this->input->post('alamat',true);
	            $data['nomor_telp'] = $this->input->post('nomor_telp',true);
	            $insert = $this->curl->simple_post($this->API.'/petugas',$data, array(CURLOPT_BUFFERSIZE => 10));
	            if ($insert) {
            		$this->session->set_flashdata('hasil', 'Tambah data petugas baru berhasil!');
            	}else{
            		$this->session->set_flashdata('hasil', 'Tambah data petugas baru gagal!');
            	}
            	redirect('admin/petugas');
        	}else{
        		$this->load->view('admin/include/head', $data);
				$this->load->view('admin/include/header');
				$this->load->view('admin/include/sidebar');
				$this->load->view('admin/tambahpetugas');
				$this->load->view('admin/include/script');
				$this->load->view('admin/include/footer');
        	}
        }
    }

    public function detailpetugas($id)
    {
    	$respon = $this->curl->simple_get($this->API . '/petugas/' . $id);
        $petugas = json_decode($respon, true);
        $data['petugas'] = $petugas['values'];
        $data['title']='Admin Perpustakaan | Detil Petugas';
        
        $this->load->view('admin/include/head', $data);
        $this->load->view('admin/include/header');
        $this->load->view('admin/include/sidebar');
        $this->load->view('admin/detailpetugas');
        $this->load->view('admin/include/script');
        $this->load->view('admin/include/footer');
    }

    public function editpetugas($id)
    {
    	$respon = $this->curl->simple_get($this->API . '/petugas/' . $id);
        $petugas = json_decode($respon, true);
        $data['petugas'] = $petugas['values'];
        $data['title']='Admin Perpustakaan | Edit Petugas';

        $this->load->view('admin/include/head', $data);
        $this->load->view('admin/include/header');
        $this->load->view('admin/include/sidebar');
        $this->load->view('admin/editpetugas',$data);
        $this->load->view('admin/include/script');
        $this->load->view('admin/include/footer');
    }

    public function updatepetugas()
	{
		if (isset($_POST['submit'])) {
			$id = $this->input->post('id');
            $data['id'] = $this->input->post('id',TRUE);
	            $data['nomor_ktp'] = $this->input->post('nomor_ktp',TRUE);
	            $data['nama'] = $this->input->post('nama',true);
	            $data['alamat'] = $this->input->post('alamat',true);
	            $data['nomor_telp'] = $this->input->post('nomor_telp',true);
            $update = $this->curl->simple_put($this->API.'/petugas/update/'. $id, $data, array(CURLOPT_BUFFERSIZE => 10));
        	if ($update) {
            	$this->session->set_flashdata('hasil', 'Ubah data petugas baru berhasil!');
            }else{
            	$this->session->set_flashdata('hasil', 'Ubah data petugas baru gagal!');
            }
            redirect('admin/petugas');
        }else{
            $params = array('id' => $this->uri->segment(3));
            $respon = json_decode($this->curl->simple_get($this->API.'/petugas/',$params));
            $list['petugas'] = $respon->values;
            $data['title']='Admin Perpustakaan | Edit Petugas';

	        $this->load->view('admin/include/head', $data);
	        $this->load->view('admin/include/header');
	        $this->load->view('admin/include/sidebar');
	        $this->load->view('admin/editpetugas',$data);
	        $this->load->view('admin/include/script');
	        $this->load->view('admin/include/footer');
        }
	}

	public function hapuspetugas($id){
      if (empty($id)) {
      	redirect('admin/petugas');
      }else{
      	$delete = $this->curl->simple_delete($this->API.'/petugas/hapus/'. $id, array(CURLOPT_BUFFERSIZE => 10));
      	if ($delete) {
      		$this->session->set_flashdata('hasil', 'Hapus data petugas berhasil!');
      	}else{
      		$this->session->set_flashdata('hasil', 'Hapus data petugas gagal!');
      	}
      	redirect('admin/member','refresh');
      }
    }
	//end of petugas
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */
?>