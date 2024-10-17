<?php


use OpenAdminCore\Admin\Auth\Database\Administrator;
use Svr\Raw\Tests\TestCase;

class MenuTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->be(Administrator::first(), 'admin');
    }

    public function testMenuRawIndex()
    {
        $this->visit('admin/raw/import_selex_milk')
            ->see('Селекс - молоко');
    }

}
