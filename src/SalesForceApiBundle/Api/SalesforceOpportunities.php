<?php

namespace Mi\SalesforceApiBundle\Api;

use Mi\SalesforceApiBundle\Model;

class SalesforceOpportunities
{
    /**
     * @var SFClient
     */
    private $salesforceConnection;

    public function __construct($connectionHelper)
    {
        $this->salesforceConnection = $connectionHelper;
    }

    public function getOpportunities($opportunitieId)
    {
        if (preg_match("/^[0-9]{1,10}$/", $opportunitieId)) {
            $query = "SELECT Name, Angebots_Nr__c, Produkt_dropdown__c, StageName, Umsatz2016__c, Ma_nahme_2015__c, Ma_nahme_2016__c
                  FROM Opportunity WHERE Angebots_Nr__c = '$opportunitieId'";

            return $this->getSalesforceObject($query);
        } else {
            throw new \InvalidArgumentException('Ticket-ID validation fail');
        }
    }

    public function getSalesforceObject($query)
    {
        $salesforceResponse = $this->salesforceConnection->salesforceConnection($query);
        if (empty($salesforceResponse)) {
            throw new \Exception('Salesforce ID not exict');
        }

        $salesforceObject = new Model\SforceOpportunity();
        if (isset($salesforceResponse->records[0]->Name)) {
            $salesforceObject->setTitle($salesforceResponse->records[0]->Name);
        }

        if (isset($salesforceResponse->records[0]->Angebots_Nr__c)) {
            $salesforceObject->setId($salesforceResponse->records[0]->Angebots_Nr__c);
        }

        if (isset($salesforceResponse->records[0]->Produkt_dropdown__c)) {
            $salesforceObject->setProduct($salesforceResponse->records[0]->Produkt_dropdown__c);
        }

        if (isset($salesforceResponse->records[0]->StageName)) {
            $salesforceObject->setPhase($salesforceResponse->records[0]->StageName);
        }

        if (isset($salesforceResponse->records[0]->Umsatz2016__c)) {
            $salesforceObject->setTurnover2016($salesforceResponse->records[0]->Umsatz2016__c);
        }

        if (isset($salesforceResponse->records[0]->Owner)) {
            $salesforceObject->setOpportunityOwner($salesforceResponse->records[0]->Owner);
        }

        if (isset($salesforceResponse->records[0]->Ma_nahme_2015__c)) {
            $salesforceObject->setMeasure2016($salesforceResponse->records[0]->Ma_nahme_2015__c);
        }

        if (isset($salesforceResponse->records[0]->Ma_nahme_2016__c)) {
            $salesforceObject->setMeasure2016($salesforceResponse->records[0]->Ma_nahme_2016__c);
        }

        return $salesforceObject;
    }
}