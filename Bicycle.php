<?php

class Bicycle
{
	private string $color;

	private int $currentSpeed;

	public int $nbSeats = 1;

	public int $nbWheels = 2;

	/**
	 * @return int
	 */
	public function getCurrentSpeed(): int
	{
		return $this->currentSpeed;
	}

	/**
	 * @param int $currentSpeed
	 */
	public function setCurrentSpeed(int $currentSpeed): void
	{
		$this->currentSpeed = $currentSpeed;
	}

	/**
	 * @return string
	 */
	public function getColor(): string
	{
		return $this->color;
	}

	/**
	 * @param string $color
	 */
	public function setColor(string $color): void
	{
		$this->color = $color;
	}


	public function forward():string
	{
		$this->currentSpeed = 15;

		return 'GO !!!';
	}

	public function brake():string
	{
		$sentence = '';
		while ($this->currentSpeed > 0) {
			$this->currentSpeed --;
			$sentence .= 'Brake !!!';
		}
		$sentence .= 'I\'m stopped !!!';

		return $sentence;
	}

}