<?php

namespace Bluewing\Algorithms23\Base;

use Bluewing\Algorithms23\BonAlgorithm;
use Bluewing\Algorithms23\BonAlgorithmStruct;

abstract class LongTermAdultBase extends BonAlgorithmStruct implements BonAlgorithm
{
    public ?string $info = 'LT-23';
    public int $minMeetings = 1;
    public int $maxMeetings = 25;
    public int $flattenMeeting = 22;
    public float $interceptMean = 20.729503;
    public float $linearMean = 1.241249;
    public float $quadraticMean = -0.080747;
    public float $cubicMean = 0.001847;
    public float $intake = 0.883757;
    public float $linearByIntake = -0.082032;
    public float $quadraticByIntake = 0.005535;
    public float $cubicByIntake = -0.000126;
    public float $reliableChangeIndex = 6.00;
    public float $standardDeviation = 7.75;
    public float $clinicalCutoff = 25.0;

    public function toArray(): array
    {
        return $this->structToArray();
    }
}