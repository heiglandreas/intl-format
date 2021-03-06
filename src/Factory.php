<?php

namespace Budgegeria\IntlFormat;

use Budgegeria\IntlFormat\Formatter\MessageFormatter;
use Budgegeria\IntlFormat\Formatter\TimeZoneFormatter;

class Factory
{
    /**
     * @param string $locale
     * @return IntlFormat
     */
    public function createIntlFormat($locale)
    {
        $formatter = [
            MessageFormatter::createDateValueFormatter($locale),
            MessageFormatter::createNumberValueFormatter($locale),
            new TimeZoneFormatter($locale),
        ];

        return new IntlFormat($formatter);
    }
}