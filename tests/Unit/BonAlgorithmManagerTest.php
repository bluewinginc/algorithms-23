<?php
namespace Bluewing\Algorithms23\Tests\Unit;

use Bluewing\Algorithms23\BonAlgorithmManager;
use PHPUnit\Framework\TestCase;

class BonAlgorithmManagerTest extends TestCase
{
    const ADOLESCENT = 1;
    const ADULT = 2;
    const CHILD = 3;

    /** @test */
    public function it_returns_adolescent_long_term_algorithm()
    {
        $mgr = new BonAlgorithmManager;

        $algorithm = $mgr($this::ADOLESCENT, 13);

        $this->assertEquals('Adolescent LT-23', $algorithm->info);
        $this->assertEquals(28.0, $algorithm->clinicalCutoff);
        $this->assertEquals(21.217437, $algorithm->interceptMean);
    }

    /** @test */
    public function it_returns_adult_long_term_algorithm()
    {
        $mgr = new BonAlgorithmManager;

        $algorithm = $mgr($this::ADULT, 13);

        $this->assertEquals('Adult LT-23', $algorithm->info);
        $this->assertEquals(25.0, $algorithm->clinicalCutoff);
        $this->assertEquals(20.729503, $algorithm->interceptMean);
    }

    /** @test */
    public function it_returns_child_long_term_algorithm()
    {
        $mgr = new BonAlgorithmManager();

        $algorithm = $mgr($this::CHILD, 160);

        $this->assertEquals('Child LT-23', $algorithm->info);
        $this->assertEquals(28.0, $algorithm->clinicalCutoff);
        $this->assertEquals(21.217437, $algorithm->interceptMean);
    }

    /** @test */
    public function it_returns_adolescent_short_term_algorithm()
    {
        $mgr = new BonAlgorithmManager;

        $algorithm = $mgr($this::ADOLESCENT, 12);

        $this->assertEquals('Adolescent ST-23', $algorithm->info);
        $this->assertEquals(28.0, $algorithm->clinicalCutoff);
        $this->assertEquals(20.311051, $algorithm->interceptMean);
    }

    /** @test */
    public function it_returns_adult_short_term_algorithm()
    {
        $mgr = new BonAlgorithmManager;

        $algorithm = $mgr($this::ADULT, 0);

        $this->assertEquals('Adult ST-23', $algorithm->info);
        $this->assertEquals(25.0, $algorithm->clinicalCutoff);
        $this->assertEquals(20.192794, $algorithm->interceptMean);
    }

    /** @test */
    public function it_returns_child_short_term_algorithm()
    {
        $mgr = new BonAlgorithmManager;

        $algorithm = $mgr($this::CHILD, 10);

        $this->assertEquals('Child ST-23', $algorithm->info);
        $this->assertEquals(28.0, $algorithm->clinicalCutoff);
        $this->assertEquals(20.311051, $algorithm->interceptMean);
    }
}