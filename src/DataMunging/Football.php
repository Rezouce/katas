<?php declare(strict_types=1);

namespace Kata\DataMunging;

class Football
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
                'team' => $data[1],
                'difference' => abs($data[8] - $data[6]),
            ];
        }, $data);
    }

    public function getTeamWithSmallestForAndAgainstDifference()
    {
        return array_reduce($this->data, function ($currentBestTeam, $testedTeam) {
            return $currentBestTeam['difference'] > $testedTeam['difference']
                ? $testedTeam
                : $currentBestTeam;
        }, ['difference' => 999]);
    }
}
