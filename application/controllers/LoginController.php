<?php

class LoginController extends Controller
{
	// Method dalam menampilkan login
	public function index()
	{
		$this->view('login');
	}

	// Method untuk mengecheck username dan password yang dikirim dari halaman login
	public function check()
	{
		$this->model('user');

		$username = $this->validate($_POST['username']);
		$password = md5($this->validate($_POST['password']));

		$data = $this->user->select()->where([
			['username','=',"'$username'"],
			['password','=',"'$password'"]
		])->limit(1)->get();

		$jml = $this->user->count();
					echo json_encode($data);

		if($jml>0){
			$_SESSION['username'] = $data[0]['username'];
			$_SESSION['password'] = $data[0]['password'];

			$this->redirect('dashboard');
		} else {
			$view = $this->view('login');
			$view->bind('msg', 'Username atau password salah!');
		}
	}

	// Method untuk logout
	public function logout()
	{
		session_destroy();
		$this->redirect('login');
	}
}

?>