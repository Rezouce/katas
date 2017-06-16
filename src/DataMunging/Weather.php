<?php declare(strict_types=1);

namespace Kata\DataMunging;

class Weather
{

    private $data;

    public function __construct($data)
    {
        $data = (new DataProcessor())->process($data);

        $this->data = $this->mapData($data);
    }

    private function mapData(array $data): array
    {
        return array_map(function ($data) {
            return [
                'day' => $data[0],
                'difference' => abs($data[2] - $data[1]),
            ];
        }, $data);
    }

    public function getDayWithSmallestTemperatureDifference()
    {
        return array_reduce($this->data, function ($bestDifference, $testedDifference) {
            return $bestDifference['difference'] > $testedDifference['difference']
                ? $testedDifference
                : $bestDifference;
        }, ['difference' => 999]);
    }
}
