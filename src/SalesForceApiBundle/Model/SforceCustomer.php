<?php
/**
 * Created by PhpStorm.
 * User: oezguer
 * Date: 11.03.16
 * Time: 15:15
 */

namespace Mi\SalesforceApiBundle\Model;


class SforceCustomer
{
    private $creditorId = 0;
    private $name = '';
    private $videoManagerContents = [];
    private $upgradePrice = 0.0;
    private $upgradeUnit = 0;

    /**
     * @return int
     */
    public function getCreditorId()
    {
        return $this->creditorId;
    }

    /**
     * @param int $creditorId
     */
    public function setCreditorId($creditorId)
    {
        $this->creditorId = $creditorId;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return array
     */
    public function getVideoManagerContents()
    {
        return $this->videoManagerContents;
    }

    /**
     * @param array $videoManagerContents
     */
    public function setVideoManagerContents($videoManagerContents)
    {
        $this->videoManagerContents = $videoManagerContents;
    }

    /**
     * @return float
     */
    public function getUpgradePrice()
    {
        return $this->upgradePrice;
    }

    /**
     * @param float $upgradePrice
     */
    public function setUpgradePrice($upgradePrice)
    {
        $this->upgradePrice = $upgradePrice;
    }

    /**
     * @return int
     */
    public function getUpgradeUnit()
    {
        return $this->upgradeUnit;
    }

    /**
     * @param int $upgradeUnit
     */
    public function setUpgradeUnit($upgradeUnit)
    {
        $this->upgradeUnit = $upgradeUnit;
    }
}