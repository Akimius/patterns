<?php

declare(strict_types=1);

namespace Decorator;

class OilChangeDecorator implements CarServiceInterface
{
    protected int $cost = 29;

    protected CarServiceInterface $carService;

    /**
     * Constructor.
     * @param CarServiceInterface $casService
     */
    public function __construct(CarServiceInterface $casService)
    {
        $this->carService = $casService;
    }

    public function getCost(): int
    {
        return $this->cost + $this->carService->getCost();
    }

    public function getDescription(): string
    {
        return $this->carService->getDescription() . 'and oil change ';
    }
}