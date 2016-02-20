<?php
/**
 * Created by PhpStorm.
 * User: oezguer
 * Date: 15.02.16
 * Time: 15:00
 */

namespace Mi\SalesforceApiBundle\Model;


class SforceOpportunity
{
    private $title = '';
    private $id = '';
    private $product = '';
    private $phase = '';
    private $turnover2016 = '';
    private $opportunityOwner = '';
    private $closingDate = '';
    private $measure2015 = '';
    private $measure2016 = '';

    private $description = '';
    private $storypoints = '';
    private $projecttitle = '';
    private $reporter = '';
    private $duedate = '';
    private $company = '';
    private $issuetype = '';

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getStorypoints()
    {
        return $this->storypoints;
    }

    /**
     * @return mixed
     */
    public function getProjecttitle()
    {
        return $this->projecttitle;
    }

    /**
     * @return mixed
     */
    public function getReporter()
    {
        return $this->reporter;
    }

    /**
     * @return mixed
     */
    public function getDuedate()
    {
        return $this->duedate;
    }

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @return mixed
     */
    public function getIssuetype()
    {
        return $this->issuetype;
    }


    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     * @return SforceOpportunity
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return SforceOpportunity
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param mixed $product
     * @return SforceOpportunity
     */
    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhase()
    {
        return $this->phase;
    }

    /**
     * @param mixed $phase
     * @return SforceOpportunity
     */
    public function setPhase($phase)
    {
        $this->phase = $phase;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTurnover2016()
    {
        return $this->turnover2016;
    }

    /**
     * @param mixed $turnover2016
     * @return SforceOpportunity
     */
    public function setTurnover2016($turnover2016)
    {
        $this->turnover2016 = $turnover2016;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOpportunityOwner()
    {
        return $this->opportunityOwner;
    }

    /**
     * @param mixed $opportunityOwner
     * @return SforceOpportunity
     */
    public function setOpportunityOwner($opportunityOwner)
    {
        $this->opportunityOwner = $opportunityOwner;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getClosingDate()
    {
        return $this->closingDate;
    }

    /**
     * @param mixed $closingDate
     * @return SforceOpportunity
     */
    public function setClosingDate($closingDate)
    {
        $this->closingDate = $closingDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMeasure2015()
    {
        return $this->measure2015;
    }

    /**
     * @param mixed $measure2015
     * @return SforceOpportunity
     */
    public function setMeasure2015($measure2015)
    {
        $this->measure2015 = $measure2015;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMeasure2016()
    {
        return $this->measure2016;
    }

    /**
     * @param mixed $measure2016
     * @return SforceOpportunity
     */
    public function setMeasure2016($measure2016)
    {
        $this->measure2016 = $measure2016;
        return $this;
    }

    public function toArray()
    {
        return [
            'name' => $this->getTitle(),
            'offerId' => $this->getId(),
            'product' => $this->getProduct(),
            'phase' => $this->getPhase(),
            'turnover2016' => $this->getTurnover2016(),
            'opportunityOwner' => $this->getOpportunityOwner(),
            'closingDate' => $this->getClosingDate(),
            'measure2015' => $this->getMeasure2015(),
            'measure2016' => $this->getMeasure2016()
        ];
    }
}