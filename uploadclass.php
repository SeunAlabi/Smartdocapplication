<?php 
class uploadclass{
	private $fileid;
	private $filename;
	
	/* Constructor*/
	public function __construct($fileid, $filename){
		$this->fileid = $fileid;
		$this->filename = $filename;
	}
	/* accepts/gets FileId*/
	public function getFileid(){
		return $this->fileid;
	}
	/* accepts/gets Filename*/
	public function getFilename(){
		return $this->filename;
	}
	
	
}
?>