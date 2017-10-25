<?php declare(strict_types=1);

final class ErrorTest extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function complains_about_no_assertions()
    {
        $anInterface = $this->prophesize(AnInterface::class);

        $revealedInterface = $anInterface->reveal();
        $revealedInterface->anAction();

        $anInterface->anAction()->shouldHaveBeenCalled();
    }
}

interface AnInterface
{
    public function anAction(): void;
}
