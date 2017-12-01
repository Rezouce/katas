<?php declare(strict_types=1);

namespace Kata\MoleculeToAtoms;

class MoleculeToAtoms
{

    private $molecule;

    private $position;

    private $currentAtoms = [];

    public function parse($molecule)
    {
        return array_count_values($this->getAtoms($molecule));
    }

    private function getAtoms($molecule)
    {
        $this->molecule = $molecule;

        $atoms = [];

        for ($this->position = 0, $end = strlen($this->molecule); $this->position < $end; ++$this->position) {
            if ($this->isSubMolecule()) {
                $newAtoms = (new MoleculeToAtoms())->getAtoms($this->getSubMolecule());
            } elseif ($this->isNumber()) {
                $newAtoms = $this->multiplyCurrentAtoms();
            } else {
                $newAtoms = [$this->getAtom()];
            }

            $this->currentAtoms = $newAtoms;

            $atoms = array_merge($atoms, $newAtoms);
        }

        return $atoms;
    }

    private function isNumber()
    {
        return false !== filter_var($this->molecule[$this->position] ?? '', FILTER_VALIDATE_INT);
    }

    private function multiplyCurrentAtoms()
    {
        $number = $this->getNumber();

        if ($number == 1) {
            return $this->currentAtoms;
        }

        $atoms = [];

        foreach ($this->currentAtoms as $atom) {
            $atoms = array_merge($atoms, array_fill(0, $number - 1, $atom));
        }

        return $atoms;
    }

    private function getNumber()
    {
        $number = '';

        do {
            $number .= $this->molecule[$this->position];

            ++$this->position;
        } while ($this->isNumber());

        --$this->position;

        return (int)$number;
    }

    private function getAtom()
    {
        $atom = '';

        do {
            $atom .= $this->molecule[$this->position];

            ++$this->position;
        } while (ctype_lower($this->molecule[$this->position] ?? ''));

        --$this->position;

        return $atom;
    }

    private function isSubMolecule()
    {
        return in_array($this->molecule[$this->position] ?? '', ['[', '(', '{']);
    }

    private function getSubMolecule()
    {
        $closingTag = ['[' => ']', '(' => ')', '{' => '}'][$this->molecule[$this->position]];

        ++$this->position;

        $subMolecule = '';

        do {
            $subMolecule .= $this->molecule[$this->position];

            ++$this->position;
        } while (($this->molecule[$this->position] ?? '') != $closingTag);

        return $subMolecule;
    }
}
