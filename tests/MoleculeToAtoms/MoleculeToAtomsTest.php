<?php declare(strict_types=1);

namespace Test\Kata\MoleculeToAtoms;

use Kata\MoleculeToAtoms\MoleculeToAtoms;
use PHPUnit\Framework\TestCase;

class MoleculeToAtomsTest extends TestCase
{

    /** @test */
    public function itCanParseAH2OMolecule()
    {
        $parser = new MoleculeToAtoms();

        $this->assertEquals(['H' => 2, 'O' => 1], $parser->parse('H2O'));
    }

    /** @test */
    public function itCanParseB2H6Molecule()
    {
        $parser = new MoleculeToAtoms();

        $this->assertEquals(['B' => 2, 'H' => 6], $parser->parse('B2H6'));
    }

    /** @test */
    public function itCanParseC6H12O6Molecule()
    {
        $parser = new MoleculeToAtoms();

        $this->assertEquals(['C' => 6, 'H' => 12, 'O' => 6], $parser->parse('C6H12O6'));
    }

    /** @test */
    public function itCanParseAH15O26H10Molecule()
    {
        $parser = new MoleculeToAtoms();

        $this->assertEquals(['H' => 25, 'O' => 26], $parser->parse('H15O26H10'));
    }

    /** @test */
    public function itCanParseAMo6CMolecule()
    {
        $parser = new MoleculeToAtoms();

        $this->assertEquals(['Mo' => 6, 'C' => 1], $parser->parse('Mo6C'));
    }

    /** @test */
    public function itCanParseANewDiscoveredMolecule()
    {
        $parser = new MoleculeToAtoms();

        $this->assertEquals(['Mg' => 3, 'O' => 3], $parser->parse('Mg(Mg2O3)'));
    }

    /** @test */
    public function itCanParseAMagnesiumHydroxideMolecule()
    {
        $parser = new MoleculeToAtoms();

        $this->assertEquals(['Mg' => 1, 'O' => 2, 'H' => 2], $parser->parse('Mg(OH)2'));
    }

    /** @test */
    public function itCanParseThisStrangeMolecule()
    {
        $parser = new MoleculeToAtoms();

        $this->assertEquals(['C' => 8, 'H' => 8, 'Fe' => 1, 'O' => 2], $parser->parse('(C5H5)Fe(CO)2CH3'));
    }

    /** @test */
    public function itCanParseThisOtherStrangeMolecule()
    {
        $parser = new MoleculeToAtoms();

        $this->assertEquals(['C' => 72, 'H' => 60, 'P' => 4, 'Pd' => 1], $parser->parse('Pd[P(C6H5)3]4'));
    }

    /** @test */
    public function itCanParseThisOtherOtherStrangeMolecule()
    {
        $parser = new MoleculeToAtoms();

        $this->assertEquals(['K' => 4, 'S' => 4, 'O' => 14, 'N' => 2], $parser->parse('K4[ON(SO3)2]2'));
    }

    /** @test */
    public function itCanParseThisReallyComplexMolecule()
    {
        $parser = new MoleculeToAtoms();

        $this->assertEquals(
            ['As' => 2, 'Cu' => 5, 'Be' => 16, 'C' => 44, 'B' => 8, 'Co' => 24, 'O' => 48],
            $parser->parse('As2{Be4C5[BCo3(CO2)3]2}4Cu5')
        );
    }

    /** @test */
    public function itCanParseThisOtherReallyComplexMolecule()
    {
        $parser = new MoleculeToAtoms();

        $this->assertEquals(
            ['Co' => 4, 'H' => 42, 'N' => 12, 'O' => 18, 'S' => 3],
            $parser->parse('{[Co(NH3)4(OH)2]3Co}(SO4)3')
        );
    }
}
