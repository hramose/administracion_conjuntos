<?php

namespace Administracion_conjunto;

use Illuminate\Database\Eloquent\Model;

class FacturasModel extends Model
{
    protected $table ="recaudo";

    protected $fillable=["numero_recaudo", "id_vivienda", "f_pago", "valor_recaudo", "numero_comprobante", "intereses","fecha_recaudo"]; 
}
