<?php
	/**
	* Ini milik permohonan class
	*/
	class Permohonan
	{
		private $db;

		function __construct($connect)
		{
			$this->db = $connect;
		}

		public function Listpermohonan($produk)
		{
			try{
				$query = "SELECT * FROM MSPERMOHONAN WHERE IDPRODUK = :PRODUK ORDER BY TGLPERMOHONAN DESC";
				$stmt = $this->db->prepare($query);
				$stmt->bindParam(':PRODUK',$produk);
				$stmt->execute();
				return $stmt->fetchAll();
			}
			catch(PDOException $e) {
				echo $e->getMessage();
				return false;
			}
		}

		public function getPermohonan($id)
		{
			try {
				$query = "SELECT * FROM MSPERMOHONAN WHERE idPermohonan  = :id";
				$stmt = $this->db->prepare($query);
				$stmt->bindParam(':id',$id);
				$stmt->execute();
				return $stmt->fetch();
			} catch (PDOException $e) {
				echo $e->getMessage();
				return false;
			}
		}

		public function CreatePermohonan($nomorpermohonan,$tglpermohonan,$nomoragenda,$tglterima,$disposisipertama,$tglpertama,$disposisikedua,$tglkedua,$status,$idbank,$idproduk,$iduser)
		{
			try {
				$query = "INSERT INTO msPermohonan (NOMORPERMOHONAN,TGLPERMOHONAN,NOMORAGENDA,TGLDITERIMA,DISPOSISIPERTAMA,TGLPERTAMA,DISPOSISIKEDUA,TGLKEDUA,STATUSPERMOHONAN,IDBANK,IDPRODUK,IDUSER) VALUES
												(:nomorpermohonan,:tglpermohonan,:nomoragenda,:tglterima,:disposisipertama,:tglpertama,:disposisikedua,:tglkedua,:status,:idbank,:idproduk,:iduser)";
				$smt = $this->db->prepare($query);
				$smt->bindParam(':nomorpermohonan',$nomorpermohonan);
				$smt->bindParam(':tglpermohonan',$tglpermohonan);
				$smt->bindParam(':nomoragenda',$nomoragenda);
				$smt->bindParam(':tglterima',$tglterima);
				$smt->bindParam(':disposisipertama',$disposisipertama);
				$smt->bindParam(':tglpertama',$tglpertama);
				$smt->bindParam(':disposisikedua',$disposisikedua);
				$smt->bindParam(':tglkedua',$tglkedua);
				$smt->bindParam(':status',$status);
				$smt->bindParam(':idbank',$idbank);
				$smt->bindParam(':idproduk',$idproduk);
				$smt->bindParam(':iduser',$iduser);
				$smt->execute();
				return true;
			} catch (PDOException $e) {
				echo $e->getMessage();
				return false;
			}
		}

		public function online_tambah($nomorpermohonan,$tglpermohonan,$status,$idbank,$idproduk,$iduser,$jiwa)
		{
			try {
				$query = "INSERT INTO msPermohonan (NOMORPERMOHONAN,TGLPERMOHONAN,STATUSPERMOHONAN,IDBANK,IDPRODUK,IDUSER,JIWA) VALUES
												(:nomorpermohonan,:tglpermohonan,:status,:idbank,:idproduk,:iduser,:jiwa)";
				$smt = $this->db->prepare($query);
				$smt->bindParam(':nomorpermohonan',$nomorpermohonan);
				$smt->bindParam(':tglpermohonan',$tglpermohonan);
				$smt->bindParam(':status',$status);
				$smt->bindParam(':idbank',$idbank);
				$smt->bindParam(':idproduk',$idproduk);
				$smt->bindParam(':iduser',$iduser);
				$smt->bindParam(':jiwa',$jiwa);
				$smt->execute();
				return true;
			} catch (PDOException $e) {
				echo $e->getMessage();
				return false;
			}
		}

		public function UpdatePermohonan($idpermohonan,$nomorpermohonan,$tglpermohonan,$nomoragenda,$tglterima,$disposisipertama,$tglpertama,$disposisikedua,$tglkedua,$status,$idbank,$idproduk,$iduser)
		{
			try {
				$query = "UPDATE msPermohonan SET NOMORPERMOHONAN=:nomorpermohonan,
												  TGLPERMOHONAN = :tglpermohonan,
												  NOMORAGENDA = :nomoragenda,
												  TGLDITERIMA = :tglterima,
												  DISPOSISIPERTAMA = :disposisipertama,
												  TGLPERTAMA = :tglpertama,
												  DISPOSISIKEDUA = :disposisikedua,
												  TGLKEDUA = :tglkedua,
												  STATUSPERMOHONAN = :status,
												  IDBANK = :idbank,
												  IDPRODUK = :idproduk,
												  IDUSER = :iduser
											WHERE IDPERMOHONAN = :idpermohonan";

				$smt = $this->db->prepare($query);
				$smt->bindParam(':nomorpermohonan',$nomorpermohonan);
				$smt->bindParam(':tglpermohonan',$tglpermohonan);
				$smt->bindParam(':nomoragenda',$nomoragenda);
				$smt->bindParam(':tglterima',$tglterima);
				$smt->bindParam(':disposisipertama',$disposisipertama);
				$smt->bindParam(':tglpertama',$tglpertama);
				$smt->bindParam(':disposisikedua',$disposisikedua);
				$smt->bindParam(':tglkedua',$tglkedua);
				$smt->bindParam(':status',$status);
				$smt->bindParam(':idbank',$idbank);
				$smt->bindParam(':idproduk',$idproduk);
				$smt->bindParam(':iduser',$iduser);
				$smt->bindParam(':idpermohonan',$idpermohonan);
				$smt->execute();
				return true;
			} catch (PDOException $e) {
				echo $e->getMessage();
				return false;
			}
		}

		public function DelPermohonan($idPermohonan)
		{
			try{
			$query = "DELETE FROM MSPERMOHONAN WHERE idPermohonan = :id";
			$smt = $this->db->prepare($query);
			$smt->bindParam('id',$idPermohonan);
			$smt->execute();
			return true;
			}catch (PDOException $e){
				echo $e->getMessage();
				return false;
			}
		}
		
		public function SearchPermohonan($nomor)
		{
			try {
				$query = "SELECT * FROM MSPERMOHONAN WHERE NOMORPERMOHONAN LIKE :NOMOR";
				$stmt = $this->db->prepare($query);
				$stmt->bindParam(':NOMOR',$nomor);
				$stmt->execute();
				return $stmt->fetch();
			} catch (PDOException $e) {
				echo $e->getMessage();
				return false;
			}
		}
	}
