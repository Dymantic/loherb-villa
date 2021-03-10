<?php


namespace App\Accommodation;


class Room
{

    public function __construct(private array $attributes)
    {
    }

    public function name($locale = 'en'): string
    {
        return $this->attributes['name'][$locale] ?? '';
    }

    public function slug(): string
    {
        return $this->attributes['slug'] ?? '';
    }

    public function building(): string
    {
        return $this->getAttribute('building');
    }

    public function buildingName($locale = 'en'): string
    {
        $key = $this->building();

        return Buildings::withSlug($key)->name($locale);
    }

    public function buildingIcon(): string
    {
        $key = $this->building();

        return sprintf("svgs.buildings.%s", $key);
    }

    public function typeCode(): int
    {
        return $this->attributes['type'] ?? 0;
    }

    public function typeName($locale = 'en'): string
    {
        return RoomType::nameFor($this->getAttribute('type', 99), $locale);
    }

    public function typeSlug(): string
    {
        return RoomType::slugFor($this->getAttribute('type', 99));
    }

    public function startingPrice($locale = 'en'): string
    {
        $lowest = $this->prices()['weekdays'];

        return trans("rooms.starting-price", ['price' => $lowest], $locale);
    }

    public function prices(): array
    {
        return Pricing::pricingForType($this->typeCode());
    }

    public function services(): array
    {
        return collect($this->getAttribute('services', []))
            ->map(
                fn($code) => Services::LIST[$code] ?? null
            )
            ->reject(fn($i) => $i === null)
            ->values()->all();
    }

    public function presentForLang(string $locale): array
    {
        return [
            'name'           => $this->attributes['name'][$locale] ?? '',
            'slug'           => $this->slug(),
            'type'           => $this->typeName($locale),
            'type_slug'      => $this->typeSlug(),
            'building'       => $this->buildingName($locale),
            'building_icon'  => $this->buildingIcon(),
            'heading'        => $this->getTranslation('heading', $locale),
            'intro'          => $this->getTranslation('intro', $locale),
            'description'    => $this->getTranslation('description', $locale),
            'view'           => $this->getTranslation('view', $locale),
            'size'           => $this->getAttribute('square_feet'),
            'sleeps'         => $this->getAttribute('sleeps'),
            'occupancy'      => [
                'min'      => 1,
                'max'      => 4,
                'beds'     => 1,
                'bed_type' => 'King size'
            ],
            'starting_price' => $this->startingPrice($locale),
            'prices'         => $this->prices(),
            'services'       => $this->services(),
            'images'         => $this->getAttribute('images', []),
            'banner_image'   => $this->getAttribute('banner_image', ''),
        ];
    }


    private function getAttribute($key, $default = '')
    {
        return $this->attributes[$key] ?? $default;
    }

    private function getTranslation($key, $locale, $default = '')
    {
        return $this->attributes[$key][$locale] ?? $default;
    }
}
