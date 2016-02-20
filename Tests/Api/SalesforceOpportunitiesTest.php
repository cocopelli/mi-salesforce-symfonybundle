<?php

class SalesforceOpportunitiesTest extends \PHPUnit_Framework_TestCase
{
    public $salesforceConnection;
    public $opportunityTest;

    public function setup()
    {
        $this->salesforceConnection = \Mockery::mock('Mi\SalesforceApiBundle\Api\SFClient');
        $this->opportunityTest = new \Mi\SalesforceApiBundle\Api\SalesforceOpportunities($this->salesforceConnection);
    }

    /**
     * @test
     */
    public function getOpportunitiesTester()
    {
        $this->salesforceConnection->shouldReceive('salesforceConnection')->once()->andReturn(['name' => 'Deutsche Post DHL']);
        $this->opportunityTest->getOpportunities('1234');
    }

    /**
     * @test
     */
    public function getSalesforceObjectTester()
    {
        $this->salesforceConnection->shouldReceive('salesforceConnection')->once()->andReturn(['name' => 'Deutsche Post DHL']);
        $this->opportunityTest->getSalesforceObject('1234');
    }

}