<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralModel extends Model
{

    public static function getRes($table, $column, $where = '')
    {
        return DB::select("SELECT $column FROM $table $where");
    }

    public static function getRow($table, $column, $where = '')
    {
        $s = DB::select("SELECT $column FROM $table $where");
        if (empty($s)) {
            return '';
        } else {
            return $s[0];
        }
    }

    public static function setInsert($table, $data)
    {
        return DB::table($table)->insert($data);
    }

    public static function setUpdate($table, $data, $where)
    {
        $colom_name_where = $where[0];
        $colom_id_where = $where[1];
        return DB::table($table)->where($colom_name_where, $colom_id_where)->update($data);
    }

    public static function setDelete($table, $where)
    {
        $colom_name_where = $where[0];
        $colom_id_where = $where[1];
        return DB::table($table)->where($colom_name_where, $colom_id_where)->delete();
    }

    public static function getProdukList($params)
    {
        $tipe = strtolower($params['tipe']);
        $order_by = $params['orderby'];
        $order_ty = $params['ordertyp'];
        $search = $params['search'];
        $and_all = '';

        if (!empty($params['operator'])) {
            $and_all .= " AND id_operator = '" . $params['operator'] . "'";
        }

        if (!empty($search)) {
            $and_all .= " AND nama_produk = LIKE '%" . $search . "%'";
        }

        if (!empty($search)) {
            $and_all .= " AND tipe = LIKE '%" . $tipe . "%'";
        }

        $s = DB::select('SELECT id_produk,nama_produk,SKU,tipe,harga_jual,deskripsi,operator FROM m_produk WHERE produk_aktif="1" AND tipe="' . $tipe . '"' . $and_all . " ORDER BY " . $order_by . " " . $order_ty);
        return $s;
    }

    public static function getId()
    {
        return DB::getPdo()->lastInsertId();
    }
}
