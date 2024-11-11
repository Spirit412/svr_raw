<?php

namespace Svr\Raw\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Svr\Core\Enums\ImportStatusEnum;
use Svr\Raw\Models\FromSelexSheep;

class FromSelexSheepFactory extends Factory
{
    /**
     * Название модели, соответствующей фабрике.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = FromSelexSheep::class;

    /**
     * Define the model"s default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "NANIMAL"             => $this->faker->randomNumber(9, true) . $this->faker->randomNumber(4, true),          // "животное - уникальный идентификатор"
            "NANIMAL_TIME"        => $this->faker->randomNumber(9, true) . $this->faker->randomNumber(4, true),          // "животное - уникальный идентификатор (наверное...)"
            'NINVLEFT'            => null,                                                                                                                   // Животное - инвентарный номер, левое ухо
            'NINVRIGHT'           => null,                                                                                                                   // Животное - инвентарный номер, правое ухо
            "NGOSREGISTER"        => "RU" . $this->faker->randomNumber(4, true) . "a" . $this->faker->randomNumber(4),           // "животное - идентификационный номер РСХН"
            "NINV3"               => $this->faker->randomNumber(9, true) . $this->faker->randomNumber(6, true),          // "животное - электронная метка"
            'TATY'                => null,                                                                                                                   // Животное - тату
            "ANIMAL_VID"          => "Мясной скот",                                                                                                          // "животное - вид животного"
            "ANIMAL_VID_COD"      => 17,                                                                                                                     // "животное - код вида животного (КРС - 26 / Овцы - 17"
            "KLICHKA"             => $this->faker->word(),                                                                                                   // "животное - кличка"
            "POL"                 => $this->faker->randomElement(SheepPolENUM::class),                                                                // "животное - пол"
            "NPOL"                => 4,                                                                                                                      // "животное - код пола"
            "POR"                 => $this->faker->randomElement(SheepPorENUM::class),                                                                // "животное - порода"
            "NPOR"                => $this->faker->randomNumber(2),                                                                                // "животное - код породы"
            'OSN_OKRAS'           => null,                                                                                                                   // Животное - окрас
            "DATE_ROGD"           => $this->faker->date(),                                                                                                   // "животное - дата рождения в формате YYYY-mm-dd"
            "DATE_POSTUPLN"       => $this->faker->date(),                                                                                                   // "животное - дата поступления в формате YYYY-mm-dd"
            "NHOZ_ROGD"           => $this->faker->randomNumber(6),                                                                                // "животное - хозяйство рождения (базовый индекс хозяйства)"
            "NHOZ"                => $this->faker->randomNumber(6),                                                                                // "животное - базовый индекс хозяйства (текущее хозяйство)"
            "NOBL"                => $this->faker->randomNumber(2),                                                                                // "животное - внутренний код области хозяйства (текущее хозяйство)"
            "NRN"                 => $this->faker->randomNumber(4),                                                                                // "животное - внутренний код района хозяйства (текущее хозяйство)"
            "NIDENT"              => "RU" . $this->faker->randomNumber(4) . "a" . $this->faker->randomNumber(4),                         // "животное - импортный идентификатор"
            'NSODERGANIE'         => null,                                                                                                                   // Животное - тип содержания (система содержания)
            'SODERGANIE_IM'       => null,                                                                                                                   // Животное - название типа содержания (система содержания)
            "DATE_V"              => $this->faker->date(),                                                                                                   // "животное - дата выбытия в формате YYYY-mm-dd"
            "PV"                  => null,                                                                                                                   // "животное - причина выбытия"
            "RASHOD"              => null,                                                                                                                   // "животное - расход"
            "GM_V"                => $this->faker->randomNumber(3),                                                                                // "животное - живая масса при выбытии (кг)"
            "ISP"                 => "Пользовательное",                                                                                                      // "животное - использование (племенная ценность)"
            "DATE_CHIP"           => $this->faker->date(),                                                                                                   // "животное - дата электронного мечения в формате YYYY-mm-dd"
            'DATE_NINVRIGHT'      => null,                                                                                                                   // Животное - дата мечения (инв. №, правое ухо)
            'DATE_NINVLEFT'       => null,                                                                                                                   // Животное - дата мечения (инв. №, левое ухо)
            "DATE_NGOSREGISTER"   => $this->faker->date(),                                                                                                   // "животное - дата мечения (№ РСХН) в формате YYYY-mm-dd"
            'NINVRIGHT_OTCA'      => null,                                                                                                                   // отец - инвентарный номер, правое ухо
            'NINVLEFT_OTCA'       => null,                                                                                                                   // отец - инвентарный номер, левое ухо
            "NGOSREGISTER_OTCA"   => $this->faker->word(),                                                                                                   // "отец - идентификационный номер РСХН"
            'NINVRIGHT_MATERI'    => null,                                                                                                                   // мать - инвентарный номер, правое ухо
            'NINVLEFT_MATERI'     => null,                                                                                                                   // мать - инвентарный номер, левое ухо
            "NGOSREGISTER_MATERI" => $this->faker->word(),                                                                                                   // "мать - идентификационный номер РСХН"
            "IMPORT_STATUS"       => $this->faker->randomElement(ImportStatusEnum::class),                                                            // "ENUM - состояние обработки записи (new - новая / in_progress - в процессе / error - ошибка / completed - обработана)"
            "TASK"                => 4,                                                                                                                      // "код задачи берется из таблицы TASKS.NTASK (1 – молоко / 6- мясо / 4 - овцы"
            "GUID_SVR"            => $this->faker->uuid(),                                                                                                   // "гуид животного, который генерирует СВР в момент создания этой записи"

            "ANIMALS_JSON" => json_encode([
                "NIDENT" => "RU" . $this->faker->randomNumber(4) . "a" . $this->faker->randomNumber(4),
                "NINV" => $this->faker->randomNumber(6),
                "NGOSREGISTER" => $this->faker->word(),
                "POR" => $this->faker->randomElement(SheepPorENUM::class),
                "NPOR" => $this->faker->randomNumber(2),
                $this->faker->word() => [
                    $this->faker->word() . '1' => $this->faker->randomNumber(6),
                    $this->faker->word() . '1' => $this->faker->randomNumber(6),
                    $this->faker->word() . '1' => $this->faker->randomNumber(6),
                    $this->faker->word() . '1' => $this->faker->randomNumber(6),
                ],
            ]),// "сырые данные из Селекс"
        ];
    }


}


enum SheepPorENUM: string
{
    case Цигайская = 'Цигайская';
    case Рамбулье = 'Рамбулье';
    case Прекос = 'Прекос';
    case Шевиот = 'Шевиот';
    case Романовская = 'Романовская';
    case Дорпер = 'Дорпер';
    case Меринос = 'Меринос';
    case Гиссарские = 'Гиссарские';
    case Эдильбаевская = 'Эдильбаевская';
    case Куйбышевская = 'Куйбышевская';
    case Катумская = 'Катумская';
    case Каракульская = 'Каракульская';
    case Тексель = 'Тексель';
    case Карачаевская = 'Карачаевская';
}

enum SheepMastENUM: string
{
    case Рыжая = 'Рыжая';
    case Серая = 'Серая';
    case Белая = 'Белая';
    case Черная = 'Черная';
}

enum SheepPolENUM: string
{
    case Овца = 'Овца';
    case Баран = 'Баран';
}
