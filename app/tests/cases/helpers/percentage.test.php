<?php
/* Percentage Test cases generated on: 2011-07-12 13:10:09 : 1310490609*/
App::import('Helper', 'Percentage');

class PercentageHelperTestCase extends CakeTestCase {
	function startTest() {
		$this->Percentage =& new PercentageHelper();
	}

	function endTest() {
		unset($this->Percentage);
		ClassRegistry::flush();
	}
        function testCalculatesPercentage(){
            $percentage = 100.00;
            $result = $this->Percentage->imageForPercentage($percentage);
            $expected = 10;
            $this->assertEqual($expected,$result);
        }
        function testNumberEndingInZero(){
            $percentage = 50.00;
            $result = $this->Percentage->imageForPercentage($percentage);
            $expected = 5;
            $this->assertEqual($expected,$result);
        }
        function testNumberNonEndingInZero(){
            $percentage = 56.00;
            $result = $this->Percentage->imageForPercentage($percentage);
            $expected = 6;
            $this->assertEqual($expected,$result);
        }
        function testNumberZero(){
            $percentage = 0.00;
            $result = $this->Percentage->imageForPercentage($percentage);
            $expected = 0;
            $this->assertEqual($expected,$result);
        }

}
