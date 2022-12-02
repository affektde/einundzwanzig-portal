<?php

namespace App\Support;

use Carbon\CarbonImmutable;

class Carbon extends CarbonImmutable
{
    public function asDate(): string
    {
        $dt = $this->timezone(config('app.timezone'))->locale('de');
        return str($dt->day)->padLeft(2, '0').'. '.$dt->monthName.' '.$dt->year;
    }

    public function asTime(): string
    {
        return $this->timezone(config('app.timezone'))->locale('de')
                    ->format('H:i');
    }

    public function asDateTime(): string
    {
        $dt = $this->timezone(config('app.timezone'))->locale('de');
        return sprintf("%s.%s.%s %s (%s)",
            str($dt->day)->padLeft(2, '0'),
            str($dt->month)->padLeft(2, '0'),
            $dt->year,
            $dt->format('H:i'),
            $dt->timezone
        );
    }
}
