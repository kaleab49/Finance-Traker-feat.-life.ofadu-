<?php

namespace Tests\Unit\Models\Categories;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function class_has_expenses_constant()
    {
        $this->assertEquals(Category::EXPENSES, "EXPENSES");
    }

    /** @test */
    public function class_has_income_constant()
    {
        $this->assertEquals(Category::INCOME, "INCOME");
    }

    /** @test */
    public function class_has_investment_constant()
    {
        $this->assertEquals(Category::INVESTMENT, "INVESTMENT");
    }

    /** @test */
    public function class_has_savings_constant()
    {
        $this->assertEquals(Category::SAVINGS, "SAVINGS");
    }

    /** @test */
    public function it_has_name()
    {
        $sut = Category::factory()->create(['name' => 'categoryTest']);

        $this->assertEquals("categoryTest", $sut->name);
    }

    /** @test */
    public function it_has_type()
    {
        $sut = Category::factory()->create(['type' => Category::EXPENSES]);

        $this->assertEquals(Category::EXPENSES, $sut->type);
    }

    /** @test */
    public function it_has_color()
    {
        $sut = Category::factory()->create(['color' => 'gray']);

        $this->assertEquals('gray', $sut->color);
    }

    /** @test */
    public function category_can_have_brands()
    {
        $sut = Category::factory()
            ->has(Brand::factory()->count(3))
            ->create();

        $this->assertCount(3, $sut->brands);
    }

    /** @test */
    public function is_does_search_about_amount_brand_or_note()
    {
        Category::factory()->create(['name' => 'debt']);
        Category::factory()->create(['name' => 'deee']);

        $this->assertCount(0, Category::search('goo')->get());
        $this->assertCount(1, Category::search('debt')->get());
        $this->assertCount(2, Category::search('de')->get());
    }
}
