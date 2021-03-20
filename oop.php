<?php
  
 
	/**
	 * creating a class
     * a class can have private or public variables and functions
	 */
	class Book
	{
		private $title;
		private $author;

		function __construct($title,$author){
			$this -> title = $title;
			$this -> author = $author;
			echo __CLASS__." created.<br>";	
		}
		
		public function setTitle($title)
		{
			$this -> title = $title;
		}

		public function getTitle()
		{
			return $this -> title.'<br>';
		}
		public function setAuthor($author)
		{
			$this -> author = $author;
		}

		public function getAuthor()
		{
			return $this -> author.'<br>';
		}
	
	}

	//$Book1 = new Book("Revenge","Brian Makaveli");
	//echo $Book1 -> getTitle();
	//echo $Book1 -> getAuthor();

	/**
	 * another class from Book
	 */
	class Publisher extends Book
	{ 
		private $name;
		private static $year_published = 2015;
		
		function __construct($title,$author,$name)
		{
			parent::__construct($title,$author,$name);
			$this -> name = $name;
			echo "A new ".__CLASS__." is another class.<br>";
		}
		public function setName($name)
		{
			$this -> name = $name;
		}

		public function getName()
		{
			return $this -> name.'<br>';
		}
		public function getYear(){
			return self::$year_published;
		}

	}
 $publisher1 = new Publisher("Revenge","Brian Makaveli","Longorn Publishers");
 echo $publisher1->getName();
 echo Publisher::getYear();
?>