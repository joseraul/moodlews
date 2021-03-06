<?php
/**
 * 
 * @package	MoodleWS
 * @copyright	(c) P.Pollet 2007 under GPL
 */
class getAllQuizzesReturn {
	/** 
	* @var quizRecord[]
	*/
	public $quizzes;

	/**
	* default constructor for class getAllQuizzesReturn
	* @return getAllQuizzesReturn
	*/	 public function getAllQuizzesReturn() {
		 $this->quizzes=array();
	}
	/* get accessors */

	/**
	* @return quizRecord[]
	*/
	public function getQuizzes(){
		 return $this->quizzes;
	}

	/*set accessors */

	/**
	* @param quizRecord[] $quizzes
	* @return void
	*/
	public function setQuizzes($quizzes){
		$this->quizzes=$quizzes;
	}

}

?>
