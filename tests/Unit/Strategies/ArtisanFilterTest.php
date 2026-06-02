<?php

namespace Tests\Unit\Strategies;

use App\Strategies\Artisan\ProfessionFilter;
use App\Strategies\Artisan\VilleFilter;
use Illuminate\Database\Eloquent\Builder;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use PHPUnit\Framework\TestCase;

class ArtisanFilterTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    public function test_ville_filter_applies_a_like_where_on_ville(): void
    {
        $query = Mockery::mock(Builder::class);
        $query->shouldReceive('where')
            ->once()
            ->with('ville', 'like', '%Montreal%');

        (new VilleFilter())->apply($query, 'Montreal');
    }

    public function test_profession_filter_matches_related_profession_name(): void
    {
        $query = Mockery::mock(Builder::class);
        $query->shouldReceive('whereHas')
            ->once()
            ->with('professionRelation', Mockery::on(fn ($arg) => $arg instanceof \Closure));

        (new ProfessionFilter())->apply($query, 'electricien');
    }

    public function test_profession_filter_matches_by_id_when_value_is_numeric(): void
    {
        $query = Mockery::mock(Builder::class);
        $query->shouldReceive('where')
            ->once()
            ->with('profession', 5);

        (new ProfessionFilter())->apply($query, '5');
    }
}
