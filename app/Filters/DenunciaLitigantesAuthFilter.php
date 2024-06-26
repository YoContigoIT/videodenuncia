<?php

namespace App\Filters;
use App\Models\SesionesDenunciantesModel;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class DenunciaLitigantesAuthFilter implements FilterInterface
{
	public function before(RequestInterface $request, $arguments = null)
	{
		
		$sessionModel = new SesionesDenunciantesModel();
		$control_session = $sessionModel->asObject()->where('ID_DENUNCIANTE', session('DENUNCIANTEID'))->where('ACTIVO', 1)->first();
		if ($control_session) {
			if ($control_session->ID != session('uuid')) {
				session()->destroy;
				session_unset();
				return redirect()->to(base_url('/denuncia_litigantes'));
			}
		
		}
		else {
			session()->destroy;
			session_unset();
			return redirect()->to(base_url('/denuncia_litigantes'));
		}
		if (!session('logged_in')) {
			return redirect()->to(base_url('/denuncia_litigantes'));
		} else if (session('type') == 'admin') {
			session()->destroy;
			session_unset();
			return redirect()->to(base_url('/denuncia_litigantes'));
		}
	}

	//--------------------------------------------------------------------

	public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
	{
		// Do something here
	}
}
