<?php
class AssertIsFalseTestFixture extends EnhanceTestFixture
{
    /** @var EnhanceAssertions $target */
    private $target;
    
    public function setUp()
    {
        $this->target = Enhance::getCodeCoverageWrapper('EnhanceAssertions', array(EnhanceLanguage::English));
    }

    public function assertIsFalseWithFalseExpectPass()
    {
        $this->target->isFalse(false);
    }
    
    public function assertIsFalseWithTrueExpectFail()
    {
        $VerifyFailed = false;
        try {
            $this->target->isFalse(true);
        } catch (Exception $e) {
            $VerifyFailed = true;
        }
        Assert::isTrue($VerifyFailed);
    }
    
    public function assertIsFalseWith0ExpectFail()
    {
        $verifyFailed = false;
        try {
            $this->target->isFalse(0);
        } catch (Exception $e) {
            $verifyFailed = true;
        }
        Assert::isTrue($verifyFailed);
    }
}
?>