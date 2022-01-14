<?php

	namespace App\Entity;


    class Reportcate{
        // id
        private ?int $id = null;
        // 種類名
        private ?string $rcName = '' ;
        // 備考
        private ?string $rcNote = '' ;
        // リスト表示の有無
        private ?int $rcListFig = null;
        // 表示の順序
        private ?int $rcOrder = null;

        public function setId(?int $id):void {
            $this->id = $id;
        }

        public function setRcName(?string $rcName):void {
            $this->rcName = $rcName;
        }

        public function setRcNote(?string $rcNote):void{
            $this->rcNote = $rcNote;
        }

        public function setRcListFig(?int $rcList):void{
            $this->rcListFig = $rcList;
        }

        public function setRcOrder(?int $rcOrder):void{
            $this->rcOrder = $rcOrder;
        }

        // getter method

        public function getId():?int {
            return $this->id;
        }

        public function getRcName():?string {
            return $this->rcName;
        }

        public function getRcNote():?string{
            return $this->rcNote;
        }

        public function getRcListFig():?int{
            return $this->rcListFig;
        }

        public function getRcOrder():?int{
            return $this->rcOrder;
        }
    }