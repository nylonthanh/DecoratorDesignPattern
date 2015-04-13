<?php namespace AutoService;

/**
 * Class StateInspection
 * @package AutoService
 */
class StateInspection implements AutoServiceInterface
{
    protected $autoService;
    protected $totalCost = 25;

    /**
     * @param AutoServiceInterface $currentData
     */
    public function __construct(AutoServiceInterface $currentData)
    {
        $this->autoService = $currentData;

    }

    /**
     * @return int
     */
    public function getCost()
    {
        return $this->totalCost + $this->autoService->getCost();

    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->autoService->getDescription() . " State Inspection";

    }

}
