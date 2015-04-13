<?php namespace AutoService;

/**
 * Class SmogTest
 * @package AutoService
 */
class SmogTest implements AutoServiceInterface
{
    protected $autoService;
    protected $totalCost = 100;

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
        return $this->autoService->getDescription() . " Smog Test";

    }

}