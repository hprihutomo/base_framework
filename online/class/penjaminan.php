<?php 
	/**
	* 
	*/
	class Penjaminan
	{
		private $db;
		
		function __construct($connect)
		{
			$this->db = $connect;
		}


		public function InputNasabah($noIdentitas,$jnsIdentitas,$namaNasabah,$jnsKelamin,$tglLahir,$alamat,$idPermohonan,$idProduk,$idreass,$noAkad,$tglAkad,$kodePlafond,$plafond,$masa,$coverage,$tarifmax,$Npenjaminan,$ijp_p,$ijpJiwa_p,$ijpReass_p,$ijp,$ijpJiwa,$ijpReass,$pend_ijp,$jth_tempo,$jns_kredit,$tnga_kerja,$idSektor,$penghasilan,$penggunaan)
		{
			try {
				$query = "INSERT INTO MSPENJAMINAN (NOIDENTITAS,JNSIDENTITAS,NAMA_NASABAH,JNSKELAMIN,TGL_LAHIR,ALAMAT,IDPERMOHONAN,IDPRODUK,IDREASS,NOMOR_PK,TGL_PK,KODEPLAFOND,PLAFONDKREDIT,MASA,COVERAGE,TARIFMAX,NILAIPENJAMINAN,IJPPERSEN,IJPJIWAPERSEN,IJPREASPERSEN,IJP,IJPJIWA,IJPREASS,PENDAPATANIJP,JATUHTEMPO,JENISKREDIT,TENAGAKERJA,IDSEKTOR,PENGHASILAN,PENGGUNAAN)
					VALUES (:noIdentitas,:jnsIdentitas,:namaNasabah,:jnsKelamin,:tglLahir,:alamat,:idPermohonan,:idProduk,:idreass,:noAkad,:tglAkad,:kodePlafond,:plafond,:masa,:coverage,:tarifmax,:Npenjaminan,:ijp_p,:ijpJiwa_p,:ijpReass_p,:ijp,:ijpJiwa,:ijpReass,:pend_ijp,:jth_tempo,:jns_kredit,:tnga_kerja,:idSektor,:penghasilan,:penggunaan)";
					$stmt = $this->db->prepare($query);
					$stmt->bindParam(':noIdentitas',$noIdentitas);
					$stmt->bindParam(':jnsIdentitas',$jnsIdentitas);
					$stmt->bindParam(':namaNasabah',$namaNasabah);
					$stmt->bindParam(':jnsKelamin',$jnsKelamin);
					$stmt->bindParam(':tglLahir',$tglLahir);
					$stmt->bindParam(':alamat',$alamat);
					$stmt->bindParam(':idPermohonan',$idPermohonan);
					$stmt->bindParam(':idProduk',$idProduk);
					$stmt->bindParam(':idreass',$idreass);
					$stmt->bindParam(':noAkad',$noAkad);
					$stmt->bindParam(':tglAkad',$tglAkad);
					$stmt->bindParam(':kodePlafond',$kodePlafond);
					$stmt->bindParam(':plafond',$plafond);
					$stmt->bindParam(':masa',$masa);
					$stmt->bindParam(':coverage',$coverage);
					$stmt->bindParam(':tarifmax',$tarifmax);
					$stmt->bindParam(':Npenjaminan',$Npenjaminan);
					$stmt->bindParam(':ijp_p',$ijp_p);
					$stmt->bindParam(':ijpJiwa_p',$ijpJiwa_p);
					$stmt->bindParam(':ijpReass_p',$ijpReass_p);
					$stmt->bindParam(':ijp',$ijp);
					$stmt->bindParam(':ijpJiwa',$ijpJiwa);
					$stmt->bindParam(':ijpReass',$ijpReass);
					$stmt->bindParam(':pend_ijp',$pend_ijp);
					$stmt->bindParam(':jth_tempo',$jth_tempo);
					$stmt->bindParam(':jns_kredit',$jns_kredit);
					$stmt->bindParam(':idSektor',$idSektor);
					$stmt->bindParam(':penghasilan',$penghasilan);
					$stmt->bindParam(':penggunaan',$penggunaan);
					//$stmt->bindParam(':status',$status);
					$stmt->bindParam(':tnga_kerja',$tnga_kerja);
					$stmt->execute();
					return true;
			} catch (PDOException $e) {
				echo $e->getMessage();
				return false;
			}
		}

		public function UpdateNasabah($id,$idNasabah,$idPermohonan,$idProduk,$idreass,$noAkad,$tglAkad,$kodePlafond,$plafond,$masa,$coverage,$tarifmax,$Npenjaminan,$ijp_p,$ijpJiwa_p,$ijpReass_p,$ijp,$ijpJiwa,$ijpReass,$pend_ijp,$jth_tempo,$jns_kredit,$tnga_kerja,$idSektor,$penghasilan,$penggunaan,$status)
		{
			try {
				$query = "UPDATE MSPENJAMINAN SET IDNASABAH =:idNasabah, IDPERMOHONAN =:idPermohonan, IDPRODUK = :idProduk, IDREASS =:idreass, NOMORAKAD =:noAkad, TGLAKAD =:tglAkad, KODEPLAFOND = :kodePlafond, PLAFONDKREDIT =:plafond, MASA =:masa, COVERAGE =:coverage, TARIFMAX =:tarifmax, NILAIPENJAMINAN =:Npenjaminan, IJPPERSEN =:ijp_p , IJPJIWAPERSEN =:ijpJiwa_p, IJPREASSPERSEN =:ijpReass_p, IJP =:ijp , IJPJIWA =:ijpJiwa, IJPREASS =:ijpReass, PENDAPATANIJP =:pend_ijp, JATUHTEMPO =:jth_tempo, JENISKREDIT =:jns_kredit, TENAGAKERJA =:tnga_kerja, IDSEKTOR =:idSektor, PENGHASILAN =:penghasilan, PENGGUNAAN =:penggunaan, STATUS =:status
					                     WHERE IDPENJAMINAN = :id";
					$stmt = $this->db->prepare($query);
					$stmt->bindParam(':idNasabah',$idNasabah);
					$stmt->bindParam(':idPermohonan',$idPermohonan);
					$stmt->bindParam(':idProduk',$idProduk);
					$stmt->bindParam(':idreass',$idreass);
					$stmt->bindParam(':noAkad',$noAkad);
					$stmt->bindParam(':tglAkad',$tglAkad);
					$stmt->bindParam(':kodePlafond',$kodePlafond);
					$stmt->bindParam(':plafond',$plafond);
					$stmt->bindParam(':masa',$masa);
					$stmt->bindParam(':coverage',$coverage);
					$stmt->bindParam(':tarifmax',$tarifmax);
					$stmt->bindParam(':Npenjaminan',$Npenjaminan);
					$stmt->bindParam(':ijp_p',$ijp_p);
					$stmt->bindParam(':ijpJiwa_p',$ijpJiwa_p);
					$stmt->bindParam(':ijpReass_p',$ijpReass_p);
					$stmt->bindParam(':ijp',$ijp);
					$stmt->bindParam(':ijpJiwa',$ijpJiwa);
					$stmt->bindParam(':ijpReass',$ijpReass);
					$stmt->bindParam(':pend_ijp',$pend_ijp);
					$stmt->bindParam(':jth_tempo',$jth_tempo);
					$stmt->bindParam(':jns_kredit',$jns_kredit);
					$stmt->bindParam(':idSektor',$idSektor);
					$stmt->bindParam(':penghasilan',$penghasilan);
					$stmt->bindParam(':penggunaan',$penggunaan);
					$stmt->bindParam(':status',$status);
					$stmt->bindParam(':tnga_kerja',$tnga_kerja);
					$stmt->bindParam(':id',$id);
					$stmt->execute();
					return true;
			} catch (PDOException $e) {
				echo $e->getMessage();
				return false;
			}
		}
	}


		// public function listPenjaminan($id)
		// {	
		// 	try {
		// 		$query = "SELECT * FROM DATA_PENJAMINAN WHERE IDPRODUK = :id";
		// 		$stmt = $this->db->prepare($query);
		// 		$stmt->bindParam(':id',$id);
		// 		$stmt->execute();
		// 		return $stmt->fetchAll();
		// 	} catch (PDOException $e) {
		// 		echo $e->getMessage();
		// 		return false;
		// 	}
		// }

		// public function getPenjaminan($id)
		// {
		// 	try {
		// 		$query = "SELECT * FROM MSPENJAMINAN WHERE IDPENJAMINAN =  :id";
		// 		$stmt = $this->db->prepare($query);
		// 		$stmt->bindParam(':id',$id);
		// 		$stmt->execute();
		// 		return $stmt->fetch();
		// 	} catch (PDOException $e) {
		// 		echo $e->getMessage;
		// 		return false;
		// 	}
		// }

		// public function DelPenjaminan($id)
		// {
		// 	try {
		// 		$query = "DELETE FROM MSPENJAMINAN WHERE IDPENJAMINAN =  :id";
		// 		$stmt = $this->db->prepare($query);
		// 		$stmt->bindParam(':id',$id);
		// 		$stmt->execute();
		// 		return true;
		// 	} catch (PDOException $e) {
		// 		echo $e->getMessage;
		// 		return false;
		// 	}
		// }
 ?>