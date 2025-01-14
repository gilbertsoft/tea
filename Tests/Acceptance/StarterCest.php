<?php

declare(strict_types=1);

namespace TTN\Tea\Tests\Acceptance;

/**
 * Test case.
 */
class StarterCest
{
    public function _before(\AcceptanceTester $I): void
    {
        $I->amOnPage('/');
    }

    public function seeAuthorName(\AcceptanceTester $I): void
    {
        $I->see('Oliver Klee');
    }

    public function canNavigateToPastWorkshops(\AcceptanceTester $I): void
    {
        $I->click('Workshops');
        $I->click('Rückblick');
        $I->see('2017 (17)');
    }
}
