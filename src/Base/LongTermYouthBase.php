<?php

namespace Bluewing\Algorithms23\Base;

use Bluewing\Algorithms23\BonAlgorithm;
use Bluewing\Algorithms23\BonAlgorithmStruct;

abstract class LongTermYouthBase extends BonAlgorithmStruct implements BonAlgorithm
{
    public ?string $info = 'LT-23';
    public int $minMeetings = 1;
    public int $maxMeetings = 25;
    public int $flattenMeeting = 23;
    public float $interceptMean = 21.217437;
    public float $linearMean = 1.540001;
    public float $quadraticMean = -0.109128;
    public float $cubicMean = 0.002615;
    public float $intake = 0.894288;
    public float $linearByIntake = -0.103598;
    public float $quadraticByIntake = 0.007662;
    public float $cubicByIntake = -0.00019;
    public float $reliableChangeIndex = 6.00;
    public float $standardDeviation = 7.25;
    public float $clinicalCutoff = 28.0;

    public function toArray(): array
    {
        return $this->structToArray();
    }
}