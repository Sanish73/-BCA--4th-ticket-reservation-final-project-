<?php 
require_once('../database/Database.php');
require_once('../interface/iBus.php');




class Bus extends Database implements iBus{


	public function getAllAccomodation()
	{
		$sql = "SELECT *
				FROM accomodation;";
		return $this->getRows($sql);
	}//end getAllBook



	public function deleteAccomodation($tracker)
	{
		$sql = "DELETE FROM accomodation WHERE acc_id = ?;";
		// return true;
		return $this->deleteRow($sql, [$tracker]);
	}//end deleteBook


    public function getBusBy($acc_id)//limit 1
	{
		$sql = "SELECT * FROM accomodation WHERE acc_id = ? ";
		return $this->getRow($sql, [$acc_id]);
	}//end getPassengerList

    
	public function getPassengers($tracker)
	{
		$sql = "SELECT *
				FROM accomodation
				WHERE acc_id = ?;
		";
		return $this->getRows($sql, [$tracker]);
	}///end getPassengers
//////////////////////////////////////////////////////////////////////////////////////////////

	








	public function selectBook($book_id)
	{
		$sql = "SELECT *
				FROM booked b
				INNER JOIN accomodation a 
				ON b.acc_id = a.acc_id 
				INNER JOIN origin o 
				ON b.origin_id = o.origin_id
				INNER JOIN destination d 
				ON b.dest_id = d.dest_id 
				WHERE b.book_id = ?;
		";
		return $this->getRow($sql, [$book_id]);
	}//end selectBook




	public function deleteBookByID($bid)
	{
		$sql = "DELETE 
				FROM booked 
				WHERE book_id = ?
		";
		return $this->deleteRow($sql, [$bid]);
	}//end deleteBookByID

}//end class

$bus = new Bus();