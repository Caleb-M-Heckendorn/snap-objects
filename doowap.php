<?php

class BlameMatt {
	private $reason;
	private $times;

	public function __construct(string $newReason, int $newTimes){
		try{
			$this->setReasons($newReason);
			$this->setTimes($newTimes);
		} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
		$exceptionType = get_class($exception);
		throw (new $exceptionType($exception->getMessage(), 0, $exception));
		}
	}
	public function getReason(): string{
		return($this->reason);
	}

	public function setReasons(string $newReason){
		$newReason = trim($newReason);
		$newReason = filter_var($newReason, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

		if(empty($newReason) === true) {
			throw new \InvalidArgumentException("content is empty or insecure");
		}

		$this->reason = $newReason;
	}

	public function getTimes(): int {
		return($this->times);
	}

	public function setTimes(int $newTimes){
		if($newTimes < 0 ){
			throw new \RangeException("Matt is always to blame");
		}

		$this->times = $newTimes;
	}
}


//technically this should be called in a separate file which links back to this file

$blameMatt = new BlameMatt("madeDylan spill hois tea", 433838);
$blameMatt->setTimes(15000000000);
var_dump($blameMatt->getTimes());
