<?php

namespace Bluewing\Algorithms23\Base;

use Bluewing\Algorithms23\BonAlgorithm;
use Bluewing\Algorithms23\BonAlgorithmStruct;

abstract class ShortTermAdultBase extends BonAlgorithmStruct implements BonAlgorithm
{
    public ?string $info = 'ST-23';
    public int $minMeetings = 1;
    public int $maxMeetings = 12;
    public int $flattenMeeting = 10;
    public float $interceptMean = 20.192794;
    public float $linearMean = 3.391172;
    public float $quadraticMean = -0.51855;
    public float $cubicMean = 0.027243;
    public float $intake = 0.968895;
    public float $linearByIntake = -0.281445;
    public float $quadraticByIntake = 0.049636;
    public float $cubicByIntake = -0.002821;
    public float $reliableChangeIndex = 6.00;
    public float $standardDeviation = 7.75;
    public float $clinicalCutoff = 25.0;

    public function toArray(): array
    {
        return $this->structToArray();
    }
}