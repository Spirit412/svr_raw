<?php

namespace Svr\Raw\Controllers\Api;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

use Svr\Raw\Models\FromSelexBeef;
use Illuminate\Http\Request;
use Svr\Raw\Resources\GetAnimalsCollection;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ApiFromSelexBeefController extends Controller
{
    /**
     * Создание новой записи.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request): JsonResponse
    {

        $model = new FromSelexBeef();
        $record = $model->createRaw($request);

        return response()->json($record, 201);
    }

    /**
     * Обновление существующей записи.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
 */
    public function update(Request $request, $id): JsonResponse
    {
        $record = FromSelexBeef::findOrFail($id);
        $record->updateRaw($request);

        return response()->json($record);
    }

    /**
     * Получение списка записей с пагинацией.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
 */
    public function index(Request $request): JsonResponse
    {
        $perPage = $request->query('per_page', 15); // Количество записей на странице по умолчанию
        $records = FromSelexBeef::paginate($perPage);

        return response()->json($records);
    }


    /**
     * Получение списка записей по GUID_SVR.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Resources\Json\ResourceCollection
     */
    public function get_animals(Request $request): ResourceCollection
    {
        $records = FromSelexBeef::whereIn('GUID_SVR', $request->json()->all()['list_animals_guid_svr'])->get();
        return new GetAnimalsCollection($records);
    }
}
