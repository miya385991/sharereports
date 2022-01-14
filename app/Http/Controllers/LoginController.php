<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use App\Http\Controllers\Controller;
	use App\Models\User;

	//ログイン・ログアウトに関するコントローラークラス
	class LoginController extends Controller {
		//ログイン画面表示処理
		public function goLogin() {
			return view("login");
		}

		//ログイン処理
		public function login(Request $request) {
			$isRedirect = false;
			$templatePath = "login";
			$assign = [];

			$loginId = $request->input("loginId");
			$loginPw = $request->input("loginPw");

			$validationMsgs = [];
			if(empty($validationMsgs)) {
				$user = User::where('us_mail', $loginId)->first();
				if($user == null) {
					$validationMsgs[] = "存在しないIDです。正しいIDを入力してください。";
				}
				else {
					$userPw = $user->us_password;
					if(password_verify($loginPw, $userPw)) {
						$id = $user->id;
						$mail = $user->us_mail;
						$name = $user->us_name;
						$session = $request->session();
						$session->put("loginFlg", true);
						$session->put("id", $id);
						$session->put("name", $name);
						$session->put("mail", $mail);
						$session->put("auth", 1);
						$isRedirect = true;
					}
					else {
						$validationMsgs[] = "パスワードが違います。正しいパスワードを入力してください。";
					}
				}
			}

			if($isRedirect) {
				$response = redirect("/reports/showList");
			}
			else {
				if(!empty($validationMsgs)) {
					$assign["validationMsgs"] = $validationMsgs;
					$assign["loginId"] = $loginId;
				}
				$response = view("login", $assign);
			}
			return $response;
		}

		//ログアウト処理
		public function logout(Request $request) {
			$session = $request->session();
			$session->flush();
			$session->regenerate();
			return redirect("/");
		}

	}