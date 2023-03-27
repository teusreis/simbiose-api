<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Rouanet;
use Illuminate\Http\Request;

class RouanetController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/rouanet",
     *     summary="Retorna os dados ca tablea 'tb_projeto_rouanet_teste' com paginação",
     *     operationId="getRouanet",
     *     tags={"rouanet"},
     *     @OA\Parameter(
     *        description="Carregar todos os registros do banco de uma só vez",
     *        in="path",
     *        name="loadAll",
     *        required=false,
     *        example="true",
     *        @OA\Schema(
     *           type="boolean"
     *        )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="success",
     *         @OA\JsonContent(
     *              @OA\Property(property="current_page", type="integer", readOnly="true"),
     *              @OA\Property(property="data", type="array", readOnly="true", collectionFormat="multi", @OA\Items(ref="App\Models\Rouanet")),
     *              @OA\Property(property="first_page_url", type="string", readOnly="true"),
     *              @OA\Property(property="from", type="integer", readOnly="true"),
     *              @OA\Property(property="last_page", type="integer", readOnly="true"),
     *              @OA\Property(property="last_page_url", type="string", readOnly="true"),
     *              @OA\Property(property="next_page_url", type="string", readOnly="true"),
     *              @OA\Property(property="path", type="string", readOnly="true", description="User role"),
     *              @OA\Property(property="per_page", type="integer", readOnly="true"),
     *              @OA\Property(property="prev_page_url", type="string", readOnly="true"),
     *              @OA\Property(property="to", type="integer", readOnly="true"),
     *              @OA\Property(property="total", type="integer", readOnly="true")
     *         ),
     *         )
     *     ),
     * )
     */
    public function index(Request $request)
    {
        $loadAll = $request->query('loadAll');

        $rouanets = isset($loadAll) && $loadAll == "true"
            ? Rouanet::get()
            : Rouanet::paginate(10);

        return response()->json($rouanets);
    }
}
