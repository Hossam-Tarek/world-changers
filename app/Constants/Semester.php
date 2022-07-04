<?php

namespace App\Constants;

final class Semester extends Constant
{
    const FIRST_TERM = 1;
    const SECOND_TERM = 2;

    public static function getList(): array
    {
        return [
            self::FIRST_TERM => trans('constants.first_term'),
            self::SECOND_TERM => trans('constants.second_term'),
        ];
    }
}
