<?php

use App\ProductRepository;
use PHPUnit\Framework\TestCase;

class ProductRepositoryTest extends TestCase
{
    public function testProductsAreReturned(): void
    {
        $productRepoMock = $this->createMock(ProductRepository::class);

        $mockProductsArray = [
            ['id' => 1, 'name' => 'Radio Acme Knobs'],
            ['id' => 2, 'name' => 'iPhone 16'],
        ];

        $productRepoMock->method('fetchProducts')
            ->willReturn($mockProductsArray);

        $this->assertCount(2, $productRepoMock->fetchProducts());
    }
}
