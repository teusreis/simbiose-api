<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 * @OA\Property(property="id_projeto", type="integer"),
 * @OA\Property(property="pronac", type="string"),
 * @OA\Property(property="ano_projeto", type="string"),
 * @OA\Property(property="nome", type="string"),
 * @OA\Property(property="segmento", type="string"),
 * @OA\Property(property="area", type="string"),
 * @OA\Property(property="uf", type="string"),
 * @OA\Property(property="municipio", type="string"),
 * @OA\Property(property="data_inicio", type="string"),
 * @OA\Property(property="situacao", type="string"),
 * @OA\Property(property="mecanismo", type="string"),
 * @OA\Property(property="valor_captado", type="string"),
 * @OA\Property(property="valor_aprovado", type="string"),
 * @OA\Property(property="acessibilidade", type="string"),
 * @OA\Property(property="objetivo", type="string"),
 * @OA\Property(property="justificativa", type="string"),
 * @OA\Property(property="etapa", type="string"),
 * @OA\Property(property="ficha_tecnica", type="string"),
 * @OA\Property(property="impacto_ambiental", type="string"),
 * @OA\Property(property="especificacao_tecnica", type="string"),
 * )
 *
 * Class Rouanet
 *
 * @package App\Models
 */
class Rouanet extends Model
{
    use HasFactory;

    protected $table = 'tb_projeto_rouanet_teste';
}
