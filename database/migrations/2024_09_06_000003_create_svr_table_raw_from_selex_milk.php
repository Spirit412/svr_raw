<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Svr\Core\Traits\PostgresGrammar;

return new class extends Migration
{
    use PostgresGrammar;

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $this->enumExists();

        if (!Schema::hasTable('raw.raw_from_selex_milk'))
        {
            Schema::create('raw.raw_from_selex_milk', function (Blueprint $table) {
                $table->comment('сырые данные из Селекс для молочных коров');
                $table->increments('raw_from_selex_milk_id')->comment('Инкремент');
                $table->bigInteger('NANIMAL')->nullable(true)->default(null)->comment('животное - уникальный идентификатор');
                $table->string('NANIMAL_TIME', 128)->nullable(true)->default(null)->comment('животное - уникальный идентификатор (наверное...)');
                $table->string('NINV', 15)->nullable(true)->default(null)->comment('животное - инвентарный номер');
                $table->string('KLICHKA', 50)->nullable(true)->default(null)->comment('животное - кличка');
                $table->string('POL', 30)->nullable(true)->default(null)->comment('животное - пол');
                $table->smallInteger('NPOL')->nullable(true)->default(null)->comment('животное - код пола');
                $table->string('NGOSREGISTER', 50)->nullable(true)->default(null)->comment('животное - идентификационный номер РСХН');
                $table->string('NINV1', 15)->nullable(true)->default(null)->comment('животное - номер в оборудовании');
                $table->string('NINV3', 20)->nullable(true)->default(null)->comment('животное - электронная метка');
                $table->string('ANIMAL_VID', 50)->nullable(true)->default(null)->comment('животное - вид животного');
                $table->smallInteger('ANIMAL_VID_COD')->nullable(true)->default(null)->comment('животное - код вида животного (КРС - 26 / Овцы - 17)');
                $table->string('MAST', 30)->nullable(true)->default(null)->comment('животное - масть');
                $table->smallInteger('NMAST')->nullable(true)->default(null)->comment('животное - код масти');
                $table->string('POR', 30)->nullable(true)->default(null)->comment('животное - порода');
                $table->smallInteger('NPOR')->nullable(true)->default(null)->comment('животное - код породы');
                $table->date('DATE_ROGD')->nullable(true)->default(null)->comment('животное - дата рождения в формате YYYY-mm-dd');
                $table->date('DATE_POSTUPLN')->nullable(true)->default(null)->comment('животное - дата поступления в формате YYYY-mm-dd');
                $table->integer('NHOZ_ROGD')->nullable(true)->default(null)->comment('животное - хозяйство рождения (базовый индекс хозяйства)');
                $table->integer('NHOZ')->nullable(true)->default(null)->comment('животное - базовый индекс хозяйства (текущее хозяйство)');
                $table->integer('NOBL')->nullable(true)->default(null)->comment('животное - внутренний код области хозяйства (текущее хозяйство)');
                $table->integer('NRN')->nullable(true)->default(null)->comment('животное - внутренний код района хозяйства (текущее хозяйство)');
                $table->string('NIDENT', 20)->nullable(true)->default(null)->comment('животное - импортный идентификатор');
                $table->string('ROGD_HOZ', 50)->nullable(true)->default(null)->comment('животное - хозяйство рождения (название)');
                $table->date('DATE_V')->nullable(true)->default(null)->comment('животное - дата выбытия в формате YYYY-mm-dd');
                $table->string('PV', 60)->nullable(true)->default(null)->comment('животное - причина выбытия');
                $table->string('RASHOD', 30)->nullable(true)->default(null)->comment('животное - расход');
                $table->integer('GM_V')->nullable(true)->default(null)->comment('животное - живая масса при выбытии (кг)');
                $table->string('ISP', 20)->nullable(true)->default(null)->comment('животное - использование (племенная ценность)');
                $table->date('DATE_CHIP')->nullable(true)->default(null)->comment('животное - дата электронного мечения в формате YYYY-mm-dd');
                $table->date('DATE_NINV')->nullable(true)->default(null)->comment('животное - дата мечения (инв. №) в формате YYYY-mm-dd');
                $table->date('DATE_NGOSREGISTER')->nullable(true)->default(null)->comment('животное - дата мечения (№ РСХН) в формате YYYY-mm-dd');
                $table->string('NINV_OTCA', 15)->nullable(true)->default(null)->comment('отец - инвентарный номер');
                $table->string('NGOSREGISTER_OTCA', 50)->nullable(true)->default(null)->comment('отец - идентификационный номер РСХН');
                $table->string('POR_OTCA', 30)->nullable(true)->default(null)->comment('отец - порода');
                $table->smallInteger('NPOR_OTCA')->nullable(true)->default(null)->comment('отец - код породы');
                $table->date('DATE_ROGD_OTCA')->nullable(true)->default(null)->comment('отец - дата рождения в формате YYYY-mm-dd');
                $table->string('NINV_MATERI', 15)->nullable(true)->default(null)->comment('мать - инвентарный номер');
                $table->string('NGOSREGISTER_MATERI', 50)->nullable(true)->default(null)->comment('мать - идентификационный номер РСХН');
                $table->string('POR_MATERI', 30)->nullable(true)->default(null)->comment('мать - порода');
                $table->smallInteger('NPOR_MATERI')->nullable(true)->default(null)->comment('мать - код породы');
                $table->date('DATE_ROGD_MATERI')->nullable(true)->default(null)->comment('мать - дата рождения в формате YYYY-mm-dd');
                $table->addColumn('system.import_status', 'IMPORT_STATUS')->nullable(false)->default('new')->comment('ENUM - состояние обработки записи (new - новая / in_progress - в процессе / error - ошибка / completed - обработана)');
                $table->smallInteger('TASK')->nullable(true)->default(null)->comment('код задачи берется из таблицы TASKS.NTASK (1 – молоко / 6- мясо / 4 - овцы');
                $table->string('GUID_SVR', 64)->nullable(true)->default(null)->comment('гуид животного, который генерирует СВР в момент создания этой записи');
                $table->jsonb('ANIMALS_JSON')->nullable(true)->default(null)->comment('сырые данные из Селекс');
                $table->timestamp('created_at')->nullable(false)->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Дата создания записи');
                $table->timestamp('update_at')->nullable(false)->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Дата удаления записи');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('raw.raw_from_selex_milk');
    }
};

