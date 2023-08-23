<?php

namespace Bluewing\Algorithms23;

use Bluewing\Algorithms23\LongTerm\LongTermAdolescent;
use Bluewing\Algorithms23\LongTerm\LongTermAdult;
use Bluewing\Algorithms23\LongTerm\LongTermChild;
use Bluewing\Algorithms23\ShortTerm\ShortTermAdolescent;
use Bluewing\Algorithms23\ShortTerm\ShortTermAdult;
use Bluewing\Algorithms23\ShortTerm\ShortTermChild;

class BonAlgorithmManager
{
    protected const ADOLESCENT = 1;
    protected const ADULT = 2;
    protected const CHILD = 3;

    protected const SHORT_TERM_MAX = 12;

    public function __construct() {}

    public function __invoke(int $raterAgeGroup, int $countOfScores): BonAlgorithm
    {
        if ($countOfScores <= $this::SHORT_TERM_MAX) {
            if ($raterAgeGroup === $this::ADOLESCENT) return new ShortTermAdolescent;
            if ($raterAgeGroup === $this::ADULT) return new ShortTermAdult;
            if ($raterAgeGroup === $this::CHILD) return new ShortTermChild;

            return new ShortTermAdult;
        }

        if ($raterAgeGroup === $this::ADOLESCENT) return new LongTermAdolescent;
        if ($raterAgeGroup === $this::ADULT) return new LongTermAdult;
        if ($raterAgeGroup === $this::CHILD) return new LongTermChild;

        return new LongTermAdult;
    }
}