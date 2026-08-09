<?php

namespace Cnx\LaravelTelegram\LaravelData\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;
use Spatie\LaravelData\Support\DataProperty;
use Spatie\LaravelData\Support\Transformation\TransformationContext;
use Spatie\LaravelData\Transformers\Transformer;

class ResourceTransformer implements Transformer
{
    /** @var class-string<JsonResource> */
    protected string $resource;

    /** @param class-string<JsonResource> $resource */
    public function __construct(string $resource)
    {
        $this->resource = $resource;
    }

    public function transform(DataProperty $property, mixed $value, TransformationContext $context): mixed
    {
        return (new $this->resource($value))->toArray(request());
    }
}
