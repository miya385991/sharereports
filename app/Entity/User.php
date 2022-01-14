<?php

	namespace App\Entity;
	
	//ユーザエンティティクラス
	class User{
		//主キーのid
		private ?int $id = null;
		private ?string $usMail = ''; 
		private ?string $usName = '';
		private ?string $usPassword = '';
		private ?int $usAuth = null;

		// setter

		public function setId(?int $id):void{
			$this->id = $id;
		}
		public function setUsMail(?string $usMail):void{
			$this->usMail = $usMail;
		}
		public function setUsName(?string $usName):void{
			$this->usName = $usName;
		}
		public function setUsPassword(?string $usPassword):void{
			$this->usPassword = $usPassword;
		}
		public function setUsAuth(?int $usAuth):void{
			$this->usAuth = $usAuth;
		}


		// getter

		public function getId(): ?int {
			return $this->id;
		}

		public function getUsMail(): ?string {
			return $this->usMail;
		}

		public function getUsName(): ?string {
			return $this->usName;
		}

		public function getUsPassword(): ?string {
			return $this->usPassword;
		}

		public function getUsAuth(): ?int{
			return $this->usAuth;
		}



	}