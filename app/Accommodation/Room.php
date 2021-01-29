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
        return trans("rooms.buildings.{$key}", [], $locale);
    }

    public function typeCode(): int
    {
        return $this->attributes['type'] ?? 0;
    }

    public function typeName($locale = 'en'): string
    {
        return RoomType::nameFor($this->getAttribute('type', 99), $locale);
    }

    public function startingPrice($locale = 'en'): string
    {
        $lowest = $this->getAttribute('prices', ["weekdays" => 0])['weekdays'];

        return trans("rooms.starting-price", ['price' => $lowest], $locale);
    }

    public function presentForLang(string $locale): array
    {
        return [
            'name' => $this->attributes['name'][$locale] ?? '',
            'slug' => $this->slug(),
            'type' => $this->typeName($locale),
            'building' => $this->buildingName($locale),
            'heading' => $this->getTranslation('heading', $locale),
            'intro' => $this->getTranslation('intro', $locale),
            'description' => $this->getTranslation('description', $locale),
            'view' => $this->getTranslation('view', $locale),
            'size' => $this->getAttribute('square_feet'),
            'sleeps' => $this->getAttribute('sleeps'),
            'starting_price' => $this->startingPrice($locale),
            'prices' => $this->getAttribute('prices', []),
            'services' => [],
            'images' => $this->getAttribute('images', []),
            'banner_image' => [],
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
