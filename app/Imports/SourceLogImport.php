<?php
   
namespace App\Imports;
   
use App\SourceLog;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
    
class SourceLogImport implements ToModel, WithHeadingRow
{
    protected $id;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function __construct($id)
    {
        $this->id = $id; 
    }
    public function model(array $row)
    {
        return new SourceLog([
            'area'     => $row['area'],
            'price'    => $row['price'], 
            'date'     => $row['date'],
            'source'   => $row['source'],
            'source_id'=> $this->id,
        ]);
    }
}

