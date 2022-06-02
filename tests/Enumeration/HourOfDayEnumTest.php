<?php

namespace PhpCommonEnums\HourOfDay\Tests\Enumeration;

use PhpCommonEnums\HourOfDay\Enumeration\HourOfDayEnum;
use PHPUnit\Framework\TestCase;

class HourOfDayEnumTest extends TestCase
{
    public function testExpectedLabels(): void
    {
        self::assertEquals(
            '00:00 am - 01:00 am',
            HourOfDayEnum::Hour00->getLabel()
        );
        self::assertEquals(
            '01:00 am - 02:00 am',
            HourOfDayEnum::Hour01->getLabel()
        );
        self::assertEquals(
            '02:00 am - 03:00 am',
            HourOfDayEnum::Hour02->getLabel()
        );
        self::assertEquals(
            '03:00 am - 04:00 am',
            HourOfDayEnum::Hour03->getLabel()
        );
        self::assertEquals(
            '04:00 am - 05:00 am',
            HourOfDayEnum::Hour04->getLabel()
        );
        self::assertEquals(
            '05:00 am - 06:00 am',
            HourOfDayEnum::Hour05->getLabel()
        );
        self::assertEquals(
            '06:00 am - 07:00 am',
            HourOfDayEnum::Hour06->getLabel()
        );
        self::assertEquals(
            '07:00 am - 08:00 am',
            HourOfDayEnum::Hour07->getLabel()
        );
        self::assertEquals(
            '08:00 am - 09:00 am',
            HourOfDayEnum::Hour08->getLabel()
        );
        self::assertEquals(
            '09:00 am - 10:00 am',
            HourOfDayEnum::Hour09->getLabel()
        );
        self::assertEquals(
            '10:00 am - 11:00 am',
            HourOfDayEnum::Hour10->getLabel()
        );
        self::assertEquals(
            '11:00 am - 12:00 pm',
            HourOfDayEnum::Hour11->getLabel()
        );
        self::assertEquals(
            '12:00 pm - 01:00 pm',
            HourOfDayEnum::Hour12->getLabel()
        );
        self::assertEquals(
            '01:00 pm - 02:00 pm',
            HourOfDayEnum::Hour13->getLabel()
        );
        self::assertEquals(
            '02:00 pm - 03:00 pm',
            HourOfDayEnum::Hour14->getLabel()
        );
        self::assertEquals(
            '03:00 pm - 04:00 pm',
            HourOfDayEnum::Hour15->getLabel()
        );
        self::assertEquals(
            '04:00 pm - 05:00 pm',
            HourOfDayEnum::Hour16->getLabel()
        );
        self::assertEquals(
            '05:00 pm - 06:00 pm',
            HourOfDayEnum::Hour17->getLabel()
        );
        self::assertEquals(
            '06:00 pm - 07:00 pm',
            HourOfDayEnum::Hour18->getLabel()
        );
        self::assertEquals(
            '07:00 pm - 08:00 pm',
            HourOfDayEnum::Hour19->getLabel()
        );
        self::assertEquals(
            '08:00 pm - 09:00 pm',
            HourOfDayEnum::Hour20->getLabel()
        );
        self::assertEquals(
            '09:00 pm - 10:00 pm',
            HourOfDayEnum::Hour21->getLabel()
        );
        self::assertEquals(
            '10:00 pm - 11:00 pm',
            HourOfDayEnum::Hour22->getLabel()
        );
        self::assertEquals(
            '11:00 pm - 00:00 am',
            HourOfDayEnum::Hour23->getLabel()
        );
    }

    public function testExpectedLabels24(): void
    {
        self::assertEquals(
            '00:00 - 01:00',
            HourOfDayEnum::Hour00->getLabel24()
        );
        self::assertEquals(
            '01:00 - 02:00',
            HourOfDayEnum::Hour01->getLabel24()
        );
        self::assertEquals(
            '02:00 - 03:00',
            HourOfDayEnum::Hour02->getLabel24()
        );
        self::assertEquals(
            '03:00 - 04:00',
            HourOfDayEnum::Hour03->getLabel24()
        );
        self::assertEquals(
            '04:00 - 05:00',
            HourOfDayEnum::Hour04->getLabel24()
        );
        self::assertEquals(
            '05:00 - 06:00',
            HourOfDayEnum::Hour05->getLabel24()
        );
        self::assertEquals(
            '06:00 - 07:00',
            HourOfDayEnum::Hour06->getLabel24()
        );
        self::assertEquals(
            '07:00 - 08:00',
            HourOfDayEnum::Hour07->getLabel24()
        );
        self::assertEquals(
            '08:00 - 09:00',
            HourOfDayEnum::Hour08->getLabel24()
        );
        self::assertEquals(
            '09:00 - 10:00',
            HourOfDayEnum::Hour09->getLabel24()
        );
        self::assertEquals(
            '10:00 - 11:00',
            HourOfDayEnum::Hour10->getLabel24()
        );
        self::assertEquals(
            '11:00 - 12:00',
            HourOfDayEnum::Hour11->getLabel24()
        );
        self::assertEquals(
            '12:00 - 13:00',
            HourOfDayEnum::Hour12->getLabel24()
        );
        self::assertEquals(
            '13:00 - 14:00',
            HourOfDayEnum::Hour13->getLabel24()
        );
        self::assertEquals(
            '14:00 - 15:00',
            HourOfDayEnum::Hour14->getLabel24()
        );
        self::assertEquals(
            '15:00 - 16:00',
            HourOfDayEnum::Hour15->getLabel24()
        );
        self::assertEquals(
            '16:00 - 17:00',
            HourOfDayEnum::Hour16->getLabel24()
        );
        self::assertEquals(
            '17:00 - 18:00',
            HourOfDayEnum::Hour17->getLabel24()
        );
        self::assertEquals(
            '18:00 - 19:00',
            HourOfDayEnum::Hour18->getLabel24()
        );
        self::assertEquals(
            '19:00 - 20:00',
            HourOfDayEnum::Hour19->getLabel24()
        );
        self::assertEquals(
            '20:00 - 21:00',
            HourOfDayEnum::Hour20->getLabel24()
        );
        self::assertEquals(
            '21:00 - 22:00',
            HourOfDayEnum::Hour21->getLabel24()
        );
        self::assertEquals(
            '22:00 - 23:00',
            HourOfDayEnum::Hour22->getLabel24()
        );
        self::assertEquals(
            '23:00 - 00:00',
            HourOfDayEnum::Hour23->getLabel24()
        );
    }

    public function testExpectedValues(): void
    {
        self::assertEquals(
            '00',
            HourOfDayEnum::Hour00->value
        );
        self::assertEquals(
            '01',
            HourOfDayEnum::Hour01->value
        );
        self::assertEquals(
            '02',
            HourOfDayEnum::Hour02->value
        );
        self::assertEquals(
            '03',
            HourOfDayEnum::Hour03->value
        );
        self::assertEquals(
            '04',
            HourOfDayEnum::Hour04->value
        );
        self::assertEquals(
            '05',
            HourOfDayEnum::Hour05->value
        );
        self::assertEquals(
            '06',
            HourOfDayEnum::Hour06->value
        );
        self::assertEquals(
            '07',
            HourOfDayEnum::Hour07->value
        );
        self::assertEquals(
            '08',
            HourOfDayEnum::Hour08->value
        );
        self::assertEquals(
            '09',
            HourOfDayEnum::Hour09->value
        );
        self::assertEquals(
            '10',
            HourOfDayEnum::Hour10->value
        );
        self::assertEquals(
            '11',
            HourOfDayEnum::Hour11->value
        );
        self::assertEquals(
            '12',
            HourOfDayEnum::Hour12->value
        );
        self::assertEquals(
            '13',
            HourOfDayEnum::Hour13->value
        );
        self::assertEquals(
            '14',
            HourOfDayEnum::Hour14->value
        );
        self::assertEquals(
            '15',
            HourOfDayEnum::Hour15->value
        );
        self::assertEquals(
            '16',
            HourOfDayEnum::Hour16->value
        );
        self::assertEquals(
            '17',
            HourOfDayEnum::Hour17->value
        );
        self::assertEquals(
            '18',
            HourOfDayEnum::Hour18->value
        );
        self::assertEquals(
            '19',
            HourOfDayEnum::Hour19->value
        );
        self::assertEquals(
            '20',
            HourOfDayEnum::Hour20->value
        );
        self::assertEquals(
            '21',
            HourOfDayEnum::Hour21->value
        );
        self::assertEquals(
            '22',
            HourOfDayEnum::Hour22->value
        );
        self::assertEquals(
            '23',
            HourOfDayEnum::Hour23->value
        );
    }
}
