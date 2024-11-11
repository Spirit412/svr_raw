<?php

namespace Svr\Raw\Tests\Unit;

use Tests\TestCase;
use Svr\Raw\Models\FromSelexMilk;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Framework\Attributes\Test;

class ModelFromSelexMilkTest extends TestCase
{

    /**
     * Тест на наличие ожидаемых полей в таблице raw.raw_from_selex_milk.
     *
     * @return void
     */
    #[Test]
    public function testFromSelexMilkTableHasExpectedColumns()
    {
        echo "testFromSelexMilkTableHasExpectedColumns - Тест структуры таблицы в БД относительно модели.\n Таблица в БД должна соответствовать модели";

        $dmodel= new FromSelexMilk();

        $columns = Schema::getColumns($dmodel->getTable());
        // Если нет таблицы ошибка
        $this->assertTrue(
            Schema::hasTable($dmodel->getTable()),
            'Нет таблицы ' . $dmodel->getTable()
        );

        // Получаем из модели FromSelexMilk список полей, и проверяем их наличие в таблице базы данных
        // Ошибка вида:
        //  FAILED  Svr\Raw\Tests\Unit\ModelFromSelexMilkTest > from selex milk table has expected columns
        //  Нет колонки raw_from_selex_milk_id  Comment: Инкремент в таблице raw.raw_from_selex_milk

        foreach ($columns as $column) {

            $this->assertTrue(
                Schema::hasColumn($dmodel->getTable(), $column["name"]),
                'Нет колонки ' . $column["name"] . "  Comment: ". $column["comment"] . ' в таблице ' . $dmodel->getTable()
            );
        }
    }

}
