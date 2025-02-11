<?php

declare(strict_types=1);

namespace App\Services;

use App\Enums\Bushing;
use App\Enums\Difference;
use App\Enums\SusBlock;
use RuntimeException;

class RearToeAngleService
{
    private const string ERROR_MESSAGE = 'ERROR! Unable to proceed, %s';

    private SusBlock $susBlockRF;

    private SusBlock $susBlockRR;

    private Bushing $bushingRF;

    private Bushing $bushingRR;

    private string $susBlockLengthRF;

    private string $susBlockLengthRR;

    private string $lengthDifference;

    private string $toeAngle;

    public function __construct(string $susBlockRF, string $bushingRF, string $susBlockRR, string $bushingRR)
    {
        $this->susBlockRF = SusBlock::create($susBlockRF);
        $this->susBlockRR = SusBlock::create($susBlockRR);
        $this->bushingRF = Bushing::create($bushingRF);
        $this->bushingRR = Bushing::create($bushingRR);

        $this->toeAngle = $this->computeToeAngle();
    }

    private function computeToeAngle(): string
    {
        $this->susBlockLengthRF = $this->susBlockRF->getLength($this->bushingRF->name);
        $this->susBlockLengthRR = $this->susBlockRR->getLength($this->bushingRR->name);
        $this->lengthDifference = number_format((float)$this->susBlockLengthRR - (float)$this->susBlockLengthRF, 1);

        $key = 'DIFFERENCE_' . str_replace('.', '_', $this->lengthDifference);

        if (in_array($key, Difference::names(), true) === false) {
            throw new RuntimeException(sprintf(self::ERROR_MESSAGE, 'Unknown angle difference.'));
        }

        return Difference::createFromName($key)->value;
    }

    public function getSusBlockRF(): string
    {
        return $this->susBlockRF->value;
    }

    public function getSusBlockRR(): string
    {
        return $this->susBlockRR->value;
    }

    public function getBushingRF(): string
    {
        return $this->bushingRF->getLabel();
    }

    public function getBushingRR(): string
    {
        return $this->bushingRR->getLabel();
    }

    public function getSusBlockLengthRF(): string
    {
        return $this->susBlockLengthRF;
    }

    public function getSusBlockLengthRR(): string
    {
        return $this->susBlockLengthRR;
    }

    public function getLengthDifference(): string
    {
        return $this->lengthDifference;
    }

    public function getToeAngle(): string
    {
        return $this->toeAngle;
    }

    public function toArray(): array
    {
        return [
            'RF_Suspension_Block' => [
                'Block_#' => $this->getSusBlockRF(),
                'Bushing' => $this->getBushingRF(),
                'Length' => $this->getSusBlockLengthRF(),
            ],
            'RR_Suspension_Block' => [
                'Block_#' => $this->getSusBlockRR(),
                'Bushing' => $this->getBushingRR(),
                'Length' => $this->getSusBlockLengthRR(),
            ],
            'Difference' => $this->getLengthDifference(),
            'Toe_Angle' => $this->getToeAngle(),
        ];
    }

    public function displayRearToeAngleData(): void
    {
        echo PHP_EOL;
        echo 'Reve D RDX' . PHP_EOL;
        echo '----------------------------' . PHP_EOL;
        echo ' Rear Toe Angle Calculator' . PHP_EOL;
//        echo '----------------------------' . PHP_EOL;
//        echo ' RF Suspension Block' . PHP_EOL;
//        echo ' - Block #: ' . $this->getSusBlockRF() . PHP_EOL;
//        echo ' - Bushing: ' . $this->getBushingRF() . PHP_EOL;
//        echo ' - Length : ' . number_format($this->getSusBlockLengthRF(), 1) . PHP_EOL;
//        echo '----------------------------' . PHP_EOL;
//        echo ' RR Suspension Block' . PHP_EOL;
//        echo ' - Block #: ' . $this->getSusBlockRR() . PHP_EOL;
//        echo ' - Bushing: ' . $this->getBushingRR() . PHP_EOL;
//        echo ' - Length : ' . number_format($this->getSusBlockLengthRR(), 1) . PHP_EOL;
//        echo '----------------------------' . PHP_EOL;
//        echo ' Difference: ' . number_format($this->getLengthDifference(), 1) . PHP_EOL;
//        echo ' Toe Angle: ' . number_format($this->getToeAngle(), 1) . '°' . PHP_EOL;
//        echo '----------------------------' . PHP_EOL;

//        $this->generateDisplayData($this->toArray());
        $this->generateCliDisplayData($this->toArray());
    }


//    private function generateDisplayData(array $data, ?string $padding = null): void
//    {
//        foreach ($data as $label => $value) {
//            $label = str_replace('_', ' ', $label);
//
//            if (is_array($value) === true || $padding === null) {
//                echo '----------------------------' . PHP_EOL;
//            }
//
//            if (is_array($value)) {
//                echo sprintf('%s%s: ', $padding, $label) . PHP_EOL;
//                $this->generateDisplayData($value, ' - ');
//            } else {
//                $padding = $padding ?? ' ';
//                echo sprintf('%s%s: %s', $padding, $label, $value) . PHP_EOL;
//            }
//        }
//    }

    private function generateCliDisplayData(array $data, ?string $padding = null): void
    {
        foreach ($data as $label => $value) {
            $label = str_replace('_', ' ', $label);

            if (is_array($value) === true || $padding === null) {
                echo '----------------------------' . PHP_EOL;
            }

            $display = $padding ?? ' ' . $label;

            if (is_array($value) === false) {
                $padding = $padding ?? ' ';
                $display = $padding . $label . ': ' . $value;
            }

            echo $display . PHP_EOL;

            if (is_array($value) === true) {
                $this->generateCliDisplayData($value, ' - ');
            }
        }
    }
}
