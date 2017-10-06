<?php declare(strict_types=1);

namespace Test\Kata\RansomNote;

use Kata\RansomNote\Magazine;
use PHPUnit\Framework\TestCase;

class MagazineTest extends TestCase
{

    /** @test */
    public function it_returns_true_if_the_sentence_can_be_written()
    {
        $magazine = new Magazine('give me one grand today night');

        $this->assertTrue($magazine->canWrite('give one grand today'));
    }

    /** @test */
    public function it_returns_false_if_the_sentence_cannot_be_written()
    {
        $magazine = new Magazine('two times three is not four');

        $this->assertFalse($magazine->canWrite('two times two is four'));
    }

    /** @test */
    public function it_is_case_sensitive()
    {
        $magazine = new Magazine('Word');

        $this->assertTrue($magazine->canWrite('Word'));
        $this->assertFalse($magazine->canWrite('word'));
    }
}
