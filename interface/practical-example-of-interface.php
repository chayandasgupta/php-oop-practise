<?php
  class DistrictCollection implements IteratorAggregate, Countable  // IteratorAggregate used for array loop facility.
  {
    private $districts;
    
    public function __construct()
    {
      $this->districts = [];
    }

    public function addDistrict($district)
    {
      array_push($this->districts, $district);
    } 

    public function getDistricts()
    {
      return $this->districts;
    }

    public function getIterator(): Traversable
    {
      return new ArrayIterator($this->districts);
    }

    public function count(): int
    {
      // return $this
    }
    
  }

  $district = new DistrictCollection();
  $district->addDistrict('Chittagong');
  $district->addDistrict('Dhaka');
  $district->addDistrict('Rajsahi');
  $district->addDistrict('Comilla');
  $district->addDistrict('Josoure');
  $district->addDistrict('Rangpur');

  
  $districtValues = $district->getDistricts();
  foreach($districtValues as $value) {
    echo $value."<br>";
  }

  echo count($districtValues);
?>