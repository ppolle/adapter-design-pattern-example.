<?php

class car_description {
    private $color;
    private $year;
    function __construct($year_in, $color_in) {
        $this->color = $color_in;
        $this->year  = $year_in;
    }
    function getColor() {
        return $this->color;
    }
    function getYear() {
        return $this->year;
    }
}

class carAdapter {
    private $car_adapt;
    function __construct(car_description $car_in) {
        $this->car_adapt = $car_in;
    }
    function getColorAndYear() {
        return $this->car_adapt->getColor().' and  manufactured in:'.$this->car_adapt->getYear();
    }
}

  // client

  writeln('BEGIN TESTING ADAPTER PATTERN');
  writeln('');

  $car = new car_description("red", "2012");
  $carAdapter = new carAdapter($car_adapt);
  writeln('This car is color :'.$carAdapter->getColorAndYear());
  writeln('');

  writeln('END TESTING ADAPTER PATTERN');

  function writeln($line_in) {
    echo $line_in."<br/>";
  }

?>