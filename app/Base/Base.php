<?php

namespace App\Base;

use App\Base\Repository\BaseRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Response;

class Base extends Controller
{   
    public $baseRepository;
    public $baseRequest;

    public function __construct(BaseRepository $baseRepository)
    {
        $this->baseRepository = $baseRepository;
    }
    /**
     * getById
     *
     * @param  mixed $id
     * @return array
     */
    public function getById(int $id, string $table) {
        $datas = $this->baseRepository->getById($id, $table);
        if(!empty($datas)) {
            return $this->sendResponSuccess("", $datas);
        }else {
            return $this->sendResponErrors("Get data errors", ['id' => $id]);
        }
    }
    
    /**
     * insert
     *
     * @param  mixed $datas
     * @param  mixed $table
     * @return void
     */
    public function store(array $datas, string $table) {
        $id = $this->baseRepository->store($datas, $table);
        if(!empty($id)) {
            return $this->sendResponSuccess("Create success", $id, FALSE);
        } else {
           return $this->sendResponErrors("Create new data errors", $datas);
        }
    }
    
    /**
     * update
     *
     * @param  mixed $datas
     * @param  mixed $table
     * @param  mixed $id
     * @param  mixed $field
     * @return void
     */
    public function update(array $datas, string $table, mixed $id, string $field) {
        $id = $this->baseRepository->update($datas, $table, $id, $field);
        if(!empty($id)){
            return $this->sendResponSuccess("Update success", $id, FALSE);
        }else {
            return $this->sendResponErrors("Update data errors", $id);
        }
    }
    
    /**
     * display
     *
     * @param  mixed $table
     * @param  mixed $pageNumber
     * @return void
     */
    public function display(string $table) {
        $datas =  $this->baseRepository->display($table);
        
        if($datas){
            return $this->sendResponSuccess("", $datas);
        }else {
            return $this->sendResponErrors("Display data errors", []);
        }
    }

    /**
     * delete
     *
     * @param  mixed $table
     * @param  mixed $field
     * @param  mixed $operator
     * @param  mixed $value
     * @return void
     */
    public function delete(string $table, string $field, string $operator = '=', $value) {
        $result = $this->baseRepository->delete($table, $field, $operator, $value);
        if(!empty($result)){
            return $this->sendResponSuccess("Delete success", $value, FALSE);
        }else {
            return $this->sendResponErrors("Delete data errors", [$field => $value]);
        }
    }
    
    /**
     * sendResponSuccess
     *
     * @param  mixed $message
     * @param  mixed $result
     * @return void
     */
    private function sendResponSuccess(string $message, $result, $isPaginate = TRUE) {
        
        $response = [
            'status'  => JsonResponse::HTTP_OK,
            'statusCode'    => JsonResponse::HTTP_OK,
            'message' => $message,
        ];
        if($isPaginate) {
            $response['data'] = $this->paginate($result);
        }else {
            $response['data']['record'][]['id'] = $result;
        }

        return response()->json($response, JsonResponse::HTTP_OK);
    }

    /**
     * sendResponSuccess
     *
     * @param  mixed $message
     * @param  mixed $result
     * @return void
     */
    private function sendResponErrors(string $message, array $data) {
        $response = new Response;
        
        $response = [
            'status'  => JsonResponse::HTTP_OK,
            'statusCode'    => JsonResponse::HTTP_OK,
            'message' => $message,
            'data' => [
                'record' => $data
            ],
        ];

        return response()->json($response, JsonResponse::HTTP_OK);
    }
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function paginate($items, $page = null, $options = [])
    {
        $perPage = config('common.item_per_page') ?? 1;
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $lengthAwarePaginator =  new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
        return [
            'record' => $lengthAwarePaginator->items(),
            'limit' => $perPage,
            'total' => $lengthAwarePaginator->total(),
            'page' => $lengthAwarePaginator->currentPage(),
        ];
    }
}