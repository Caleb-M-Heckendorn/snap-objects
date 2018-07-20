<?php
/**
 * Created by PhpStorm.
 * User: Caleb M. Heckendorn
 * Date: 7/19/2018
 * Time: 8:22 AM
 */
/**
 * @author Caleb Heckendorn
 * @version 1.0
 */

class Chickens {

	/**
	 * @var $polish
	 */

	private $polish;

	/**
	 * @var Uuid $cochin
	 */

	private $cochin;
	/**\
	 * accessor method for polish
	 *
	 * @return Uuid value of polish
	 */
	public function getPolish(): Uuid {
		return ($this->polish);
	}

	/**
	 * mutator method for polish
	 *
	 * @param Uuid/string $newPolish new value of polish
	 * @throws \RangeException if $newPolish is mysqli_sql_exception
	 * @throws \TypeError if $newPolish is not a uuid.e
	 **/

	public function setPolish($newPolish) : void{
		try {
			$uuid = self::validateUuid($newPolish);
		} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception){
			$exceptionType = get_class($exception);
			throw (new $exceptionType($exception->getMessage(), 0, $exception));
		}

		//convert and store the polish
		$this->polish = $uuid;
	}

		/**
		 * accessor method for cochin
		 *
		 * @return Uuid value of cochin
		 */
		public function getCochin(): Uuid{
			return($this->cochin);
		}

		/**
		 * mutator method for cochin
		 *
		 * @param Uuid|int $newCochin new value of cochin
		 * @throws \RangeException if $newCochin is n
		 * @throws \TypeError if $newCochin is not a uuid.e
		 */
		public function setCochin($newCochin) : void {
			try {
				$uuid = self::validateUuid($newCochin);
			} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception){
					$exceptionType = get_class($exception);
					throw (new $exceptionType($exception->getMessage(), 0, $exception));
				}

			//convert and store cochin
			$this->cochin = $uuid;
	}
}



