<?php

	namespace App\Entity;


    class Reports{
        // レポートID
		private ?int $id = null;
        // 作業日
        private ?string $rpDate = '';
        // 作業開始時間
        private ?string $rpTimeFrom = '';
        // 作業終了時間
        private ?string $rpTimeTo = '';
        // 作業内容
        private ?string $rpContent = '';
        // 登録日時
        private ?string $rpCreatedAt = '';
        // 作業種類ID
        private ?int $reportcateId = null;
        // 報告者ID
        private ?int $userId = null;


        // setter method
		public function setId(?int $id): void {
			$this->id = $id;
		}
        public function setRpDate(?string $rpDate): void {
            $this->rpDate = $rpDate;
        }
        public function setRpTimeFrom(?string $rpTimeFrom): void {
            $this->rpTimeFrom = $rpTimeFrom;
        }
        public function setRpTimeTo(?string $rpTimeTo): void {
            $this->rpTimeTo = $rpTimeTo;
        }
        public function setRpContent(?string $rpContent): void {
            $this->rpContent = $rpContent;
        }
        public function setRpCreatedAt(?string $rpCreatedAt): void {
            $this->rpCreatedAt = $rpCreatedAt;
        }
        public function setReportcateId(?string $reportcateId): void {
            $this->reportcateId = $reportcateId;
        }
        public function setUserId(?string $userId):void{
            $this->userId = $userId;
        }

        // getter method

		public function getId(): ?int{
			return $this->id;
		}
        public function getRpDate(): ?string{
            return $this->rpDate ;
        }
        public function getRpTimeFrom(): ?string{
            return $this->rpTimeFrom;
        }
        public function getRpTimeTo(): ?string{
            return $this->rpTimeTo ;
        }
        public function getRpContent(): ?string{
            return $this->rpContent;
        }
        public function getRpCreatedAt(): ?string{
            return $this->rpCreatedAt ;
        }
        public function getReportcateId(): ?int{
            return $this->reportcateId ;
        }
        public function getUserId():?int{
            return $this->userId ;
        }
    }