<?php

declare(strict_types=1);

namespace App\Services;

use MathPHP\Probability\Distribution\Continuous\Normal;

class GenerateValues
{
    private int $mean;
    private int $stdDeviation;
    private int $samplesAmount;

    public function setMean(int $mean): static
    {
        $this->mean = $mean;
        return $this;
    }

    public function setStdDeviation(int $stdDeviation): static
    {
        $this->stdDeviation = $stdDeviation;
        return $this;
    }

    public function setSamplesAmount(int $samplesAmount): static
    {
        $this->samplesAmount = $samplesAmount;
        return $this;
    }

    /**
     * @return array<float>
     */
    public function generateSamples(): array
    {
        $normal = new Normal($this->mean, $this->stdDeviation);

        $values = [];
        for ($i = 0; $i < $this->samplesAmount; $i++) {
            $values[] = $normal->rand();
        }

        return $values;
    }
}
