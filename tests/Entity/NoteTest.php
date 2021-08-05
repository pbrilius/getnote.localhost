<?php

namespace Pbrilius\GetnoteLocalhost\Tests\Entity;

use PHPUnit\Framework\TestCase;
use Pbrilius\GetnoteLocalhost\Entity\Note;

class NoteTest extends TestCase
{
  public function testAccountability(): void
  {
    $note = new Note();
    $this->assertIsObject($note);
  }

  public function testObjectivity(): void
  {
    $note = new Note();
    $this->assertInstanceOf(Note::class, $note);
  }
}
