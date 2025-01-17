<?php
// Example XML output
include('../EnhanceTestFramework.php');

class ExampleClass
{
    public function addTwoNumbers($a, $b)
    {
        return $a + $b;
    }
}

class ExampleClassTests extends EnhanceTestFixture
{
    /** @var ExampleClass $target */
    private $target;
    
    public function setUp()
    {
        $this->target = Enhance::getCodeCoverageWrapper('ExampleClass');
    }
    
    public function addTwoNumbersWith3and2Expect5()
    {
        $result = $this->target->addTwoNumbers(3, 2);

        Assert::areIdentical(5, $result);
    }
    
    public function addTwoNumbersWith4and2Expect6()
    {
        $result = $this->target->addTwoNumbers(4, 2);

        Assert::areIdentical(6, $result);
    }
}

Enhance::runTests(EnhanceOutputTemplateType::Xml);
?>

