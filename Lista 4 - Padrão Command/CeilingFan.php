<?php

class CeilingFan
{
    /**
     * @var string
     */
    protected $name = '';

    const HIGH = 3;
    const MEDIUM = 2;
    const LOW = 1;
    const OFF = 0;

    /**
     * @var string[]
     */
    protected $speedArr = ['Off', 'Low', 'Medium', 'High'];

    /**
     * @var int
     */
    protected $speed;

    /**
     * CeilingFan constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        if (isset($name))
            $this->name = $name;
        $this->speed = self::OFF;
    }

    public function high()
    {
        $this->speed = self::HIGH;
        echo $this->name . " CeilingFan is On speed is set to " .
            $this->speedArr[$this->getSpeed()]
            . PHP_EOL;
    }

    public function medium()
    {
        $this->speed = self::MEDIUM;
        echo $this->name . " CeilingFan is On speed is set to " .
            $this->speedArr[$this->getSpeed()] . PHP_EOL;
    }

    public function low()
    {
        $this->speed = self::LOW;
        echo $this->name . " CeilingFan is On speed is set to " .
            $this->speedArr[$this->getSpeed()] . PHP_EOL;
    }

    public function off()
    {
        echo $this->name . ' CeilingFan is OFF. ' . PHP_EOL;
        $this->speed = self::OFF;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param $toSpeed
     */
    public function setSpeed($toSpeed)
    {
        switch ($toSpeed) {
            case self::HIGH:
                $this->high();
                break;
            case self::MEDIUM:
                $this->medium();
                break;
            case self::LOW:
                $this->low();
                break;
            case self::OFF:
                $this->off();
                break;
        }
    }

    public function on()
    {
        $this->low();
    }
}