<?php

namespace Svr\ImportRaw\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Модель: сырые данные из Селекс для мясных коров
 *
 * @package App\Models\Raw
 */
class FromSelexBeef extends Model
{
    use HasFactory;


    /**
     * Точное название таблицы с учетом схемы
     * @var string
     */
    protected $table                                    = 'raw.raw_from_selex_beef';


    /**
     * Первичный ключ таблицы (автоинкремент)
     * @var string
     */
    protected $primaryKey                               = 'raw_from_selex_beef_id';


    /**
     * Поле даты создания строки
     * @var string
     */
    const CREATED_AT                                    = 'created_at';


    /**
     * Поле даты обновления строки
     * @var string
     */
    const UPDATED_AT                                    = 'update_at';


    /**
     * Значения полей по умолчанию
     * @var array
     */
    protected $attributes = [];


    /**
     * Поля, которые можно менять сразу массивом
     * @var array
     */
    protected $fillable = [
        'raw_from_selex_beef_id',                                // Инкремент
        'NANIMAL',                                               // Животное - уникальный идентификатор
        'NANIMAL_TIME',                                          // Животное - уникальный идентификатор (наверное...)
        'NINV',                                                  // Животное - инвентарный номер
        'KLICHKA',                                               // Животное - кличка
        'POL',                                                   // Животное - пол
        'NPOL',                                                  // Животное - код пола
        'NGOSREGISTER',                                          // Животное - идентификационный номер РСХН
        'NINV1',                                                 // Животное - номер в оборудовании
        'NINV3',                                                 // Животное - электронная метка
        'ANIMAL_VID',                                            // Животное - вид животного
        'ANIMAL_VID_COD',                                        // Животное - код вида животного (КРС - 26 / Овцы - 17
        'MAST',                                                  // Животное - масть
        'NMAST',                                                 // Животное - код масти
        'POR',                                                   // Животное - порода
        'NPOR',                                                  // Животное - код породы
        'DATE_ROGD',                                             // Животное - дата рождения в формате YYYY.mm.dd
        'DATE_POSTUPLN',                                         // Животное - дата поступления в формате YYYY.mm.dd
        'NHOZ_ROGD',                                             // Животное - хозяйство рождения (базовый индекс хозяйства)
        'NHOZ',                                                  // Животное - базовый индекс хозяйства (текущее хозяйство)
        'NOBL',                                                  // Животное - внутренний код области хозяйства (текущее хозяйство)
        'NRN',                                                   // Животное - внутренний код района хозяйства (текущее хозяйство)
        'NIDENT',                                                // Животное - импортный идентификатор
        'ROGD_HOZ',                                              // Животное - хозяйство рождения (название)
        'DATE_V',                                                // Животное - дата выбытия
        'PV',                                                    // Животное - причина выбытия
        'RASHOD',                                                // Животное - расход
        'GM_V',                                                  // Животное - живая масса при выбытии (кг)
        'ISP',                                                   // Животное - использование (племенная ценность)
        'DATE_CHIP',                                             // Животное - дата электронного мечения
        'DATE_NINV',                                             // Животное - дата мечения (инв. №)
        'DATE_NGOSREGISTER',                                     // Животное - дата мечения (№ РСХН)
        'NINV_OTCA',                                             // Оотец - инвентарный номер
        'NGOSREGISTER_OTCA',                                     // Оотец - идентификационный номер РСХН
        'POR_OTCA',                                              // Оотец - порода
        'NPOR_OTCA',                                             // Отец - код породы
        'DATE_ROGD_OTCA',                                        // Отец - дата рождения
        'NINV_MATERI',                                           // Мать - инвентарный номер
        'NGOSREGISTER_MATERI',                                   // Мать - идентификационный номер РСХН
        'POR_MATERI',                                            // Мать - порода
        'NPOR_MATERI',                                           // Мать - код породы
        'DATE_ROGD_MATERI',                                      // Мать - дата рождения
        'system.import_status',                                  // ENUM - состояние обработки записи (new - новая / in_progress - в процессе / error - ошибка / completed - обработана)
        'TASK',                                                  // Код задачи берется из таблицы TASKS.NTASK (1 – молоко / 6- мясо / 4 - овцы
        'GUID_SVR',                                              // Гуид животного, который генерирует СВР в момент создания этой записи
        'ANIMALS_JSON',                                          // Сырые данные из Селекс
        'created_at',                                            // Дата создания записи
        'update_at',                                             // Дата удаления записи
    ];


    /**
     * Поля, которые нельзя менять сразу массивом
     * @var array
     */
    protected $guarded = [
        'raw_from_selex_beef_id'
    ];


    /**
     * Массив системных скрытых полей
     * @var array
     */
    protected $hidden								= [];

}
