<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Model\Data_arsip_inactive;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ArsipInaktifImport implements ToModel, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        //
    }

    public function model(array $row)
    {					
        return new Data_arsip_inactive([
            'nomor_akta' => $row['nomor_akta'],  
            'nama_bayi' => $row['nama_bayi'], 
            'alamat' => $row['alamat'], 
            'tempat_lahir' => $row['tempat_lahir'], 
            'tanggal_lahir' => $row['tanggal_lahir'],  
            'kelurahan' => $row['kelurahan'], 
            'kecamatan' => $row['kecamatan'],  
            'nama_ayah' => $row['nama_ayah'], 
            'nama_ibu' => $row['nama_ibu'],  
            'rt' => $row['rt'], 
            'rw' => $row['rw'],   
            'komentar' => $row['komentar'],   
            'tanggal_terbit' => $row['tanggal_terbit'],   
        ]);
    }
}