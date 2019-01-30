<?php
require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

final class IsIsPHPGoodGood extends TestCase {
  public function testIfPHPStillBad(): void {
    $this->assertFalse(IsPHP\Good::check());
  }
}
