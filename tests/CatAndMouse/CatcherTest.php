<?php

namespace Test\Kata\CatAndMouse;

use Kata\CatAndMouse\Catcher;
use PHPUnit\Framework\TestCase;

class CatcherTest extends TestCase
{

    /** @test */
    public function the_cat_can_catch_a_mouse_close_enough_in_front_of_it()
    {
        $map = '..C......' . "\n"
             . '.........' . "\n"
             . '....m....' . "\n";

        $catcher = new Catcher;

        $this->assertTrue($catcher->forNumberMove(5)->canCatchInMap($map));
    }

    /** @test */
    public function the_cat_can_catch_a_mouse_close_enough_behind_it()
    {
        $map = '..m......' . "\n"
             . '.........' . "\n"
             . '....C....' . "\n";

        $catcher = new Catcher;

        $this->assertTrue($catcher->forNumberMove(5)->canCatchInMap($map));
    }

    /** @test */
    public function the_cat_cant_catch_a_mouse_too_far()
    {
        $map = '..C......' . "\n"
             . '.........' . "\n"
             . '......m..' . "\n";

        $catcher = new Catcher;

        $this->assertFalse($catcher->forNumberMove(5)->canCatchInMap($map));
    }
}
