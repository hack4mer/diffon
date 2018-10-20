<?php
namespace Hack4mer\Diffon;
/**
 * Diffon
 * A PHP library to find the differences between two given directories
 *
 */
class Diffon{

	/**
	 * The directory to compare
	 * @var string
	 */
	protected $source;


	/**
	 * The directory with which $source is to be compared
	 * @var string
	 */
	protected $destination;

	/**
	 * Set the path for directory to compare
	 * @param string $path Path of the directory
	 * @return Diffon the instance upon which the method was called
	 */
	public function setSource($path){
		$this->source = $path;
		return $this;
	}

	/**
	 * Set the path for directory with which source directory is to compared
	 * @param string $path Path of the directory
	 * @return Diffon the instance upon which the method was called
	 */
	public function setDestination($path){
		$this->destination = $path;
		return $this;
	}

	/**
	 * Shows the directories being compared
	 * @return array An array containing path for the source and destination directories
	 */
	public function showDirs(){
		return [
			"source" => 		$this->source,
			"destination" => 	$this->destination
		];
	}
}
?>