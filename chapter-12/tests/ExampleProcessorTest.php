<?php

use App\OldStuff\CsvFileWriter;
use App\OldStuff\ExampleProcessor;
use PHPUnit\Framework\TestCase;

class ExampleProcessorTest extends TestCase
{
    /** @test */
    public function the_example_processor_works(): void
    {
        $mockFileWriter = $this->createMock(CsvFileWriter::class);

        $mockFileWriter->method('writeToFile')->willReturn(true);

        $processor = new ExampleProcessor($mockFileWriter);

        $result = $processor->process(['foo' => 'bar']);

        $this->assertTrue($result);
    }
}
