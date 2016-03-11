<?php
namespace Mi\SalesforceApiBundle\Helper;

use Mi\SalesforceApiBundle\Model\SforceCustomer;

class OwnerObjectBuilder
{
    public function getOwnerObject($sfArray)
    {
        $salesforceObject = new SforceCustomer();
        if (isset($sfArray->id)) {
            $salesforceObject->setCreditorId();
        }
    }
}