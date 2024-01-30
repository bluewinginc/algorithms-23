<?php

namespace Bluewing\Algorithms23;

abstract class BonAlgorithmStruct
{
    public ?string $info = null;
    public int $minMeetings = 0;
    public int $maxMeetings = 0;
    public int $flattenMeeting = 0;
    public int $targetFlattenMeeting = 0;
    public float $interceptMean = 0.0;
    public float $linearMean = 0.0;
    public float $quadraticMean = 0.0;
    public float $cubicMean = 0.0;
    public float $intake = 0.0;
    public float $linearByIntake = 0.0;
    public float $quadraticByIntake = 0.0;
    public float $cubicByIntake = 0.0;
    public float $reliableChangeIndex = 0.0;
    public float $standardDeviation = 0.0;
    public float $clinicalCutoff = 0.0;

    /**
     * @return array
     */
    protected function structToArray(): array
    {
        return [
            'info'=> $this->info,
            'minMeetings' => $this->minMeetings,
            'maxMeetings' => $this->maxMeetings,
            'flattenMeeting' => $this->flattenMeeting,
            'targetFlattenMeeting' => $this->targetFlattenMeeting,
            'interceptMean' => $this->interceptMean,
            'linearMean' => $this->linearMean,
            'quadraticMean' => $this->quadraticMean,
            'cubicMean' => $this->cubicMean,
            'intake' => $this->intake,
            'linearByIntake' => $this->linearByIntake,
            'quadraticByIntake' => $this->quadraticByIntake,
            'cubicByIntake' => $this->cubicByIntake,
            'reliableChangeIndex' => $this->reliableChangeIndex,
            'standardDeviation' => $this->standardDeviation,
            'clinicalCutoff' => $this->clinicalCutoff,
        ];
    }
}
