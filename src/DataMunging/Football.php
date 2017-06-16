<?php declare(strict_types=1);

namespace Kata\DataMunging;

class Football
{

	private $data;

	public function __construct($data)
	{
		$this->data = $this->processData($data);
	}

	private function processData(string $data)
	{
		$data = $this->explodeLines($data);

		$data = $this->removeLines(2, $data);
		$data = $this->removeEmptyLines($data);

		return $this->extractData($data);
	}

	private function explodeLines(string $data): array
	{
		return explode("\n", $data);
	}

	private function removeLines(int $numberLines, array $data): array
	{
		return array_slice($data, $numberLines);
	}

	private function removeEmptyLines(array $data): array
	{
		return array_filter($data, function ($line) {
			return !empty($line);
		});
	}

	private function extractData(array $data): array
	{
		return array_map(function ($line) {
			$data = array_values(array_filter(explode(' ', $line), function ($data) {
				return !empty($data);
			}));

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
