<?php

namespace App\Exports;

use App\Models\Transaction;
use App\Models\UserScheme;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithCustomChunkSize;
use Illuminate\Support\Collection;
use Illuminate\Contracts\Queue\ShouldQueue;

class ExportTransaction implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping, ShouldQueue, WithCustomChunkSize
{
    use Exportable;
    private $year;
    /**
     * @return \Illuminate\Support\Collection
     */


    public function chunkSize(): int
    {
        return 5000;
    }

    public function recieveData($schemeIds)
    {
        $this->schemeIds = $schemeIds;
    }
    public function collection()
    {
        $transactions = Transaction::whereIn('scheme_id', $this->schemeIds)->where('is_accepted', 1)
            ->with(['user_scheme:id,unique_id,scheme_user_name', 'scheme:id,name,branch_id', 'scheme.branch:id,name'])
            ->get();

        return $transactions;
    }
    public function map($transaction): array
    {
        return [
            $transaction->paid_date ?? "--",
            $transaction->transaction_id ?? "--",
            $transaction->user_scheme->unique_id ?? "--",
            $transaction->user_scheme->scheme_user_name ?? "--",
            $transaction->scheme->name ?? "--",
            $transaction->scheme->branch->name ?? "--",
            $transaction->amount ?? "--",
        ];
    }

    public function headings(): array
    {
        return [
            'Date',
            'Transaction ID',
            'Unique ID',
            'Customer Name',
            'Scheme',
            'Branch',
            'Amount',
        ];
    }
}
