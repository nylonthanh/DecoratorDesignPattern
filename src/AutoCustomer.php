<?php namespace AutoService;

/**
 * Class AutoCustomer
 * @package AutoService
 */
class AutoCustomer implements AutoServiceInterface
{
    public function getCost() {}

    public function getDescription()
    {
        return 'Auto repair customer: ';
    }

}