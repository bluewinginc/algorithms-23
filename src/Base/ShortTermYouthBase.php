<?php

namespace Bluewing\Algorithms23\Base;

use Bluewing\Algorithms23\BonAlgorithm;
use Bluewing\Algorithms23\BonAlgorithmStruct;

abstract class ShortTermYouthBase extends BonAlgorithmStruct implements BonAlgorithm
{
    public ?string $info = 'ST-23';
    public int $minMeetings = 1;
    public int $maxMeetings = 12;
    public int $flattenMeeting = 9;
    public int $targetFlattenMeeting = 5;
    public float $interceptMean = 20.311051;
    public float $linearMean = 3.876662;
    public float $quadraticMean = -0.617576;
    public float $cubicMean = 0.032964;
    public float $intake = 0.961832;
    public float $linearByIntake = -0.302422;
    public float $quadraticByIntake = 0.053757;
    public float $cubicByIntake = -0.003009;
    public float $reliableChangeIndex = 6.00;
    public float $standardDeviation = 7.25;
    public float $clinicalCutoff = 28.0;

    public function toArray(): array
    {
        return $this->structToArray();
    }
}
