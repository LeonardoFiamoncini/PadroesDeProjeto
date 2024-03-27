<?php

require_once './DisplayElement.php';
require_once './Observer.php';
require_once './WeatherData.php';

class CurrentConditionsDisplay implements DisplayElement, Observer {
    
    /**
     * float $temperature
     */
    protected $temperature;
    
    /**
     * float $humidity
     */
    protected $humidity;

    /**
     * float $pressure
     */
    protected $pressure;

    /**
     * WeatherData $subject
     */
    protected $subject;


    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
        $this->subject->registerObserver($this);
    }

    public function update($subject)
    {
        $this->temperature = $subject->getTemperature();
        $this->humidity = $subject->getHumidity();
        $this->pressure = $subject->getPressure();

        $this->display();
    }

    public function display()
    {
        printf("\n Temperature: %d \n Pressure: %d \n Humidity: %d \n",
            $this->temperature,
            $this->pressure,
            $this->humidity
        );
    }
}