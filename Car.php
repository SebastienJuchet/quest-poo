<?php

class Car
{
	private int $nbWheels = 4;

	private int $currentSpeed = 0;

	private string $color;

	private int $nbSeats;

	private string $energy;

	private int $energyLevel;

	public function __construct(string $color, int $nbSeats, string $energy)
	{
		$this->$color = $color;
		$this->$nbSeats = $nbSeats;
		$this->$energy = $energy;
	}

	public function forward(): string
	{
		$this->currentSpeed = 50;

		return 'C\'est partie!!!';
	}

	public function break(): string
	{
		$sentence = '';

		while ($this->currentSpeed > 0) {
			$this->currentSpeed --;

			$sentence .= $this->currentSpeed . ' km/h ';
		}
		$sentence .= 'I\'m stopped !!! ouffff';

		return $sentence;
	}

	public function start():string
	{
		return 'Vrooouuuum';
	}

	/**
	 * @return int
	 */
	public function getNbSeats(): int
	{
		return $this->nbSeats;
	}

	/**
	 * @return string
	 */
	public function getEnergy(): string
	{
		return $this->energy;
	}

	/**
	 * @return int
	 */
	public function getEnergyLevel(): int
	{
		return $this->energyLevel;
	}

	/**
	 * @return int
	 */
	public function getNbWheels(): int
	{
		return $this->nbWheels;
	}

	/**
	 * @param string $color
	 */
	public function setColor(string $color): void
	{
		$this->color = $color;
	}

	/**
	 * @return int
	 */
	public function getCurrentSpeed(): int
	{
		return $this->currentSpeed;
	}
}