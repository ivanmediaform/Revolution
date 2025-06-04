<?php
namespace Revolution;

class CondoManager
{
    private array $units = [];

    public function addUnit(string $name): void
    {
        $this->units[] = $name;
    }

    public function listUnits(): array
    {
        return $this->units;
    }
}
