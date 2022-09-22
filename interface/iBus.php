<?php 
interface iBus{
	public function getAllAccomodation();//distinct with book_tracker
	public function deleteAccomodation($tracker);
	public function getBusBy($tracker);//limit 1
	public function getPassengers($tracker);
	public function selectBook($book_id);
	public function deleteBookByID($bid);
}