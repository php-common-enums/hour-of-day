<?php

namespace PhpCommonEnums\HourOfDay\Enumeration;

enum HourOfDayEnum: string
{
    case Hour00 = '00';
    case Hour01 = '01';
    case Hour02 = '02';
    case Hour03 = '03';
    case Hour04 = '04';
    case Hour05 = '05';
    case Hour06 = '06';
    case Hour07 = '07';
    case Hour08 = '08';
    case Hour09 = '09';
    case Hour10 = '10';
    case Hour11 = '11';
    case Hour12 = '12';
    case Hour13 = '13';
    case Hour14 = '14';
    case Hour15 = '15';
    case Hour16 = '16';
    case Hour17 = '17';
    case Hour18 = '18';
    case Hour19 = '19';
    case Hour20 = '20';
    case Hour21 = '21';
    case Hour22 = '22';
    case Hour23 = '23';
    public function getLabel(): string
    {
        return match ($this) {
            self::Hour00 => '00:00 am - 01:00 am',
            self::Hour01 => '01:00 am - 02:00 am',
            self::Hour02 => '02:00 am - 03:00 am',
            self::Hour03 => '03:00 am - 04:00 am',
            self::Hour04 => '04:00 am - 05:00 am',
            self::Hour05 => '05:00 am - 06:00 am',
            self::Hour06 => '06:00 am - 07:00 am',
            self::Hour07 => '07:00 am - 08:00 am',
            self::Hour08 => '08:00 am - 09:00 am',
            self::Hour09 => '09:00 am - 10:00 am',
            self::Hour10 => '10:00 am - 11:00 am',
            self::Hour11 => '11:00 am - 12:00 pm',
            self::Hour12 => '12:00 pm - 01:00 pm',
            self::Hour13 => '01:00 pm - 02:00 pm',
            self::Hour14 => '02:00 pm - 03:00 pm',
            self::Hour15 => '03:00 pm - 04:00 pm',
            self::Hour16 => '04:00 pm - 05:00 pm',
            self::Hour17 => '05:00 pm - 06:00 pm',
            self::Hour18 => '06:00 pm - 07:00 pm',
            self::Hour19 => '07:00 pm - 08:00 pm',
            self::Hour20 => '08:00 pm - 09:00 pm',
            self::Hour21 => '09:00 pm - 10:00 pm',
            self::Hour22 => '10:00 pm - 11:00 pm',
            self::Hour23 => '11:00 pm - 00:00 am',
        };
    }

    public function getLabel24(): string
    {
        return match ($this) {
            self::Hour00 => '00:00 - 01:00',
            self::Hour01 => '01:00 - 02:00',
            self::Hour02 => '02:00 - 03:00',
            self::Hour03 => '03:00 - 04:00',
            self::Hour04 => '04:00 - 05:00',
            self::Hour05 => '05:00 - 06:00',
            self::Hour06 => '06:00 - 07:00',
            self::Hour07 => '07:00 - 08:00',
            self::Hour08 => '08:00 - 09:00',
            self::Hour09 => '09:00 - 10:00',
            self::Hour10 => '10:00 - 11:00',
            self::Hour11 => '11:00 - 12:00',
            self::Hour12 => '12:00 - 13:00',
            self::Hour13 => '13:00 - 14:00',
            self::Hour14 => '14:00 - 15:00',
            self::Hour15 => '15:00 - 16:00',
            self::Hour16 => '16:00 - 17:00',
            self::Hour17 => '17:00 - 18:00',
            self::Hour18 => '18:00 - 19:00',
            self::Hour19 => '19:00 - 20:00',
            self::Hour20 => '20:00 - 21:00',
            self::Hour21 => '21:00 - 22:00',
            self::Hour22 => '22:00 - 23:00',
            self::Hour23 => '23:00 - 00:00',
        };
    }
}
