<?php

namespace App\Exports;

use Illuminate\Support\Facades\Auth;
use App\Model\DataDiri;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Exports\DataKeluargaExport;

class DataKeluargaExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $rt = Auth::user()->rt;
        return DataDiri::join('pendidikans', 'pendidikans.id', '=', 'data_diris.pendidikan_id')
            ->join('status_kartu_keluargas', 'status_kartu_keluargas.id', '=', 'data_diris.kk_id')
            ->join('status_pernikahans', 'status_pernikahans.id', '=', 'data_diris.pernikahan_id')
            ->join('agamas', 'agamas.id', '=', 'data_diris.agama_id')
            ->join('pekerjaans', 'pekerjaans.id', '=', 'data_diris.pekerjaan_id')
            ->where('data_diris.rt', $rt)
            ->where('data_diris.kk_id', 1)
            ->select(
                'data_diris.no_rumah',
                'data_diris.no_kk',
                'data_diris.nik',
                'data_diris.nama_lengkap',
                'data_diris.tempat_lahir',
                'data_diris.tanggal_lahir',
                'data_diris.jenis_kelamin',
                'status_pernikahans.pernikahan',
                'agamas.nama_agama',
                'pendidikans.jenjang',
                'pekerjaans.nama_pekerjaan',
                'status_kartu_keluargas.hub_kk',
                'data_diris.status_ktp',
                'data_diris.status_rumah'
            )
            ->orderBy('data_diris.no_rumah', 'ASC')->get();
    }
}
