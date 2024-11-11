<?php

namespace Svr\Raw\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Svr\Core\Enums\ImportStatusEnum;
use Svr\Raw\Models\FromSelexMilk;


class FromSelexMilkFactory extends Factory
{


    /**
     * Название модели, соответствующей фабрике.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = FromSelexMilk::class;

    /**
     * Define the model"s default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        "NANIMAL"             => $this->faker->randomNumber(9, true) . $this->faker->randomNumber(4, true),                   // "животное - уникальный идентификатор"
        "NANIMAL_TIME"        => $this->faker->randomNumber(9, true) . $this->faker->randomNumber(4, true),                   // "животное - уникальный идентификатор (наверное...)"
        "NINV"                => $this->faker->randomNumber(5, true),                                                                           // "животное - инвентарный номер"
        "KLICHKA"             => $this->faker->word(),                                                                                                            // "животное - кличка"
        "POL"                 => "Корова",                                                                                                                        // "животное - пол"
        "NPOL"                => 4,                                                                                                                               // "животное - код пола"
        "NGOSREGISTER"        => "RU".$this->faker->randomNumber(4, true)."a".$this->faker->randomNumber(4),                          // "животное - идентификационный номер РСХН"
        "NINV1"               => $this->faker->randomNumber(6, true),                                                                           // "животное - номер в оборудовании"
        "NINV3"               => $this->faker->randomNumber(9, true) . $this->faker->randomNumber(6, true),                   // "животное - электронная метка"
        "ANIMAL_VID"          => "Мясной скот",                                                                                                                   // "животное - вид животного"
        "ANIMAL_VID_COD"      => 26,                                                                                                                              // "животное - код вида животного (КРС - 26 / Овцы - 17"
        "MAST"                => $this->faker->randomElement(["Красная", "Белая", "Пёстрая", "Красно-пестрая", "Черная"]),                                 // "животное - масть"
        "NMAST"               => $this->faker->randomNumber(1),                                                                                         // "животное - код масти"
        "POR"                 => $this->faker->randomElement(["Герефордская", "Абердин ангусская"]),                                                       // "животное - порода"
        "NPOR"                => $this->faker->randomNumber(2),                                                                                         // "животное - код породы"
        "DATE_ROGD"           => $this->faker->date(),                                                                                                            // "животное - дата рождения в формате YYYY-mm-dd"
        "DATE_POSTUPLN"       => $this->faker->date(),                                                                                                            // "животное - дата поступления в формате YYYY-mm-dd"
        "NHOZ_ROGD"           => $this->faker->randomNumber(6),                                                                                         // "животное - хозяйство рождения (базовый индекс хозяйства)"
        "NHOZ"                => $this->faker->randomNumber(6),                                                                                         // "животное - базовый индекс хозяйства (текущее хозяйство)"
        "NOBL"                => $this->faker->randomNumber(2),                                                                                         // "животное - внутренний код области хозяйства (текущее хозяйство)"
        "NRN"                 => $this->faker->randomNumber(4),                                                                                         // "животное - внутренний код района хозяйства (текущее хозяйство)"
        "NIDENT"              => "RU".$this->faker->randomNumber(4)."a".$this->faker->randomNumber(4),                                        // "животное - импортный идентификатор"
        "ROGD_HOZ"            => "Россия",                                                                                                                        // "животное - хозяйство рождения (название)"
        "DATE_V"              => $this->faker->date(),                                                                                                            // "животное - дата выбытия в формате YYYY-mm-dd"
        "PV"                  => null,                                                                                                                            // "животное - причина выбытия"
        "RASHOD"              => null,                                                                                                                            // "животное - расход"
        "GM_V"                => $this->faker->randomNumber(3),                                                                                         // "животное - живая масса при выбытии (кг)"
        "ISP"                 => "Пользовательное",                                                                                                               // "животное - использование (племенная ценность)"
        "DATE_CHIP"           => $this->faker->date(),                                                                                                            // "животное - дата электронного мечения в формате YYYY-mm-dd"
        "DATE_NINV"           => $this->faker->date(),                                                                                                            // "животное - дата мечения (инв. №) в формате YYYY-mm-dd"
        "DATE_NGOSREGISTER"   => $this->faker->date(),                                                                                                            // "животное - дата мечения (№ РСХН) в формате YYYY-mm-dd"
        "NINV_OTCA"           => $this->faker->word(),                                                                                                            // "отец - инвентарный номер"
        "NGOSREGISTER_OTCA"   => $this->faker->word(),                                                                                                            // "отец - идентификационный номер РСХН"
        "POR_OTCA"            => $this->faker->randomElement(["Герефордская", "Абердин ангусская"]),                                                       // "отец - порода"
        "NPOR_OTCA"           => $this->faker->randomNumber(2),                                                                                         // "отец - код породы"
        "DATE_ROGD_OTCA"      => $this->faker->date(),                                                                                                            // "отец - дата рождения в формате YYYY-mm-dd"
        "NINV_MATERI"         => $this->faker->randomNumber(6),                                                                                         // "мать - инвентарный номер"
        "NGOSREGISTER_MATERI" => $this->faker->word(),                                                                                                            // "мать - идентификационный номер РСХН"
        "POR_MATERI"          => $this->faker->randomElement(["Герефордская", "Абердин ангусская"]),                                                       // "мать - порода"
        "NPOR_MATERI"         => $this->faker->randomNumber(2),                                                                                         // "мать - код породы"
        "DATE_ROGD_MATERI"    => $this->faker->date(),                                                                                                            // "мать - дата рождения в формате YYYY-mm-dd"
        "IMPORT_STATUS"       => $this->faker->randomElement(ImportStatusEnum::get_value_list()),                                                          // "ENUM - состояние обработки записи (new - новая / in_progress - в процессе / error - ошибка / completed - обработана)"
        "TASK"                => 1,                                                                                                                               // "код задачи берется из таблицы TASKS.NTASK (1 – молоко / 6- мясо / 4 - овцы"
        "GUID_SVR"            => $this->faker->uuid(),                                                                                                            // "гуид животного, который генерирует СВР в момент создания этой записи"
        "ANIMALS_JSON" => json_encode([
            "NIDENT" => "RU".$this->faker->randomNumber(4)."a".$this->faker->randomNumber(4),
            "NINV" => $this->faker->randomNumber(6),
            "NGOSREGISTER" => $this->faker->word(),
            "POR" => $this->faker->randomElement(["Герефордская", "Абердин ангусская"]),
            "NPOR" => $this->faker->randomNumber(2),
            $this->faker->word() => [
                $this->faker->word().'1' => $this->faker->randomNumber(6),
                $this->faker->word().'1' => $this->faker->randomNumber(6),
                $this->faker->word().'1' => $this->faker->randomNumber(6),
                $this->faker->word().'1' => $this->faker->randomNumber(6),
            ],
        ]),// "сырые данные из Селекс"
        ];
    }
}
