<?php

namespace Mit\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Mit\Models\User;

class UserController extends AbstractController
{
	public function getAll(Request $request, Response $response)
	{
		$user = new User($this->db);

		$user_all = $user->getAll();

		$data['user'] = $user_all;


		return $this->view->render('user/all_user', $data);
	}

	public function add(Request $request, Response $response)
	{
		$user = new User($this->db);

		$user->create($data);
	}
}
