<?php

use Svr\Core\Enums\ImportStatusEnum;

return [
    [
        //животное - уникальный идентификатор
        'NANIMAL' => '1',
        //животное - уникальный идентификатор (наверное...)
        'NANIMAL_TIME' => 'xx6hPWlHiEE0Hc1i2IOqyEcrcVHr6vVJv6ULEyoJS5yBzSz1xRST0y1ESj8MBJZNKmanooM5pkrTeQvPbxSRd6Byn5tTdZfJhc7QmkZXMSFfBY5VVPbReJ6ag9YTzNer',
        //животное - инвентарный номер
        'NINV' => 'yCYMXcc13lmA4oI',
        //животное - кличка
        'KLICHKA' => 'kWL0pP3w1kH0ryWq5Qe2SxQZtkQii8Z92gvcMSm9CcNixXcQ31',
        //животное - пол
        'POL' => 'VSFjXykkCbBuNBvTyyXo8CsOzA1Mzx',
        //животное - код пола
        'NPOL' => '1',
        //животное - идентификационный номер РСХН
        'NGOSREGISTER' => '1i9CX7AiLqk7ydMP2wslt2l7F5ltbinOj11dDnFrLx7b9RH0Jd',
        //животное - номер в оборудовании
        'NINV1' => 'znRzEa366O7su0B',
        //животное - электронная метка
        'NINV3' => 'ZKyzXmewpJznCBP7S1X6',
        //животное - вид животного
        'ANIMAL_VID' => '1i9CX7AiLqk7ydMP2wslt2l7F5ltbinOj11dDnFrLx7b9RH0Jd',
        //животное - код вида животного (КРС - 26 / Овцы - 17)
        'ANIMAL_VID_COD' => 32767,
        //животное - масть
        'MAST' => 'yhSpCmNTqNk0OcSF0zSfATE8E7FJYW',
        //животное - код масти
        'NMAST' => 1,
        //животное - порода
        'POR' => 'yhSpCmNTqNk0OcSF0zSfATE8E7FJYW',
        //животное - код породы
        'NPOR' => 1,
        //животное - дата рождения в формате YYYY-mm-dd
        'DATE_ROGD' => '2015-01-01',
        //животное - дата поступления в формате YYYY-mm-dd
        'DATE_POSTUPLN' => '2015-01-01',
        //животное - хозяйство рождения (базовый индекс хозяйства)
        'NHOZ_ROGD' => 99999,
        //животное - базовый индекс хозяйства (текущее хозяйство)
        'NHOZ' => 99999,
        //животное - внутренний код области хозяйства (текущее хозяйство)
        'NOBL' => 99999,
        //животное - внутренний код района хозяйства (текущее хозяйство)
        'NRN' => 99999,
        //животное - импортный идентификатор
        'NIDENT' => 'ZKyzXmewpJznCBP7S1X6',
        //животное - хозяйство рождения (название)
        'ROGD_HOZ' => '1i9CX7AiLqk7ydMP2wslt2l7F5ltbinOj11dDnFrLx7b9RH0Jd',
        //животное - дата выбытия в формате YYYY-mm-dd
        'DATE_V' => '2015-01-01',
        //животное - причина выбытия
        'PV' => 'cUVxy0CT0yxWwy9MJs0MrQaMJbUqld0wnBUgaowCtVa57HQLZ2yNILKXREvx',
        //животное - расход
        'RASHOD' => 'yhSpCmNTqNk0OcSF0zSfATE8E7FJYW',
        //животное - живая масса при выбытии (кг)
        'GM_V' => 99999,
        //животное - использование (племенная ценность)
        'ISP' => 'ZKyzXmewpJznCBP7S1X6',
        //животное - дата электронного мечения в формате YYYY-mm-dd
        'DATE_CHIP' => '2015-01-01',
        //животное - дата мечения (инв. №) в формате YYYY-mm-dd
        'DATE_NINV' => '2015-01-01',
        //животное - дата мечения (№ РСХН) в формате YYYY-mm-dd
        'DATE_NGOSREGISTER' => '2015-01-01',
        //отец - инвентарный номер
        'NINV_OTCA' => 'znRzEa366O7su0B',
        //отец - идентификационный номер РСХН
        'NGOSREGISTER_OTCA' => '1i9CX7AiLqk7ydMP2wslt2l7F5ltbinOj11dDnFrLx7b9RH0Jd',
        //отец - порода
        'POR_OTCA' => 'yhSpCmNTqNk0OcSF0zSfATE8E7FJYW',
        //отец - код породы
        'NPOR_OTCA' => 32767,
        //отец - дата рождения в формате YYYY-mm-dd
        'DATE_ROGD_OTCA' => '2015-01-01',
        //мать - инвентарный номер
        'NINV_MATERI' => 'znRzEa366O7su0B',
        //мать - идентификационный номер РСХН
        'NGOSREGISTER_MATERI' => '1i9CX7AiLqk7ydMP2wslt2l7F5ltbinOj11dDnFrLx7b9RH0Jd',
        //мать - порода
        'POR_MATERI' => 'yhSpCmNTqNk0OcSF0zSfATE8E7FJYW',
        //мать - код породы
        'NPOR_MATERI' => 32767,
        //мать - дата рождения в формате YYYY-mm-dd
        'DATE_ROGD_MATERI' => '2015-01-01',
        //ENUM - состояние обработки записи (new - новая / in_progress - в процессе / error - ошибка / completed - обработана)
        'IMPORT_STATUS' => ImportStatusEnum::COMPLETED->value,
        //код задачи берется из таблицы TASKS.NTASK (1 – молоко / 6- мясо / 4 - овцы')
        'TASK' => 1,
        //гуид животного, который генерирует СВР в момент создания этой записи
        'GUID_SVR' => 'dxP7aqEMkjrG0oiId4ce53QdOIg5V3Bk97gi9sojwNd1QThGwQCjDVVMb5ZzlZ3Z',
        //сырые данные из Селекс в формате JSON.
        'ANIMALS_JSON' => null,
    ]
];
