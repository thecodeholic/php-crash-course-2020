<?php

namespace SendGrid\Test;

class LicenceYearTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $rootDir = __DIR__ . '/../..';

        $license = explode("\n", file_get_contents("$rootDir/LICENSE.txt"));
        $copyright = trim($license[2]);

        $year = date('Y');

        $expected = "Copyright (c) 2012-{$year} SendGrid, Inc.";

        $this->assertEquals($expected, $copyright);
    }
}
