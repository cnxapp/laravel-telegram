<?php

namespace Vbespalov\LaravelTelegram\LaravelData\Casts;

use Carbon\Carbon;
use Carbon\CarbonInterface;
use Spatie\LaravelData\Casts\Cast;
use Spatie\LaravelData\Casts\Uncastable;
use Spatie\LaravelData\Contracts\BaseData;
use Spatie\LaravelData\Support\Creation\CreationContext;
use Spatie\LaravelData\Support\DataProperty;

class CarbonInterfaceCast implements Cast
{
    public function __construct(
        protected \DateTimeZone|null|string $timezone = null,
        protected \DateTimeZone|null|string $toTimezone = null,
    ) {}

    /**
     * @param  array<string, mixed>  $properties
     * @param  CreationContext<BaseData<mixed, mixed, array-key>>  $context
     */
    public function cast(DataProperty $property, mixed $value, array $properties, CreationContext $context): CarbonInterface|Uncastable
    {
        $type = $property->type->findAcceptedTypeForBaseType(\DateTimeInterface::class);
        if ($type === null) {
            return Uncastable::create();
        }

        $datetime = Carbon::parse($value, $this->timezone);

        if (! empty($this->toTimezone)) {
            $datetime->setTimezone($this->toTimezone);
        }

        return $datetime;
    }
}
