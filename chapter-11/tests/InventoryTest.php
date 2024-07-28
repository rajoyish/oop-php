<?php

use App\Inventory;
use App\ProductRepository;
use PHPUnit\Framework\TestCase;

class InventoryTest extends TestCase
{
    public function testAddProducts(): void
    {
        $mockProductsRepo = $this->createMock(ProductRepository::class);

        $inventory = new Inventory($mockProductsRepo);

        $mockProductsRepo->expects($this->once())
            ->method('fetchProducts')
            ->willReturn([
                ['id' => 1, 'name' => 'Radio Acme Knobs'],
                ['id' => 2, 'name' => 'iPhone 16'],
            ]);

        $inventory->addProducts();

        $this->assertCount(2, $inventory->getProducts());
    }
}
