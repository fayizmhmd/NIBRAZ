<?php

namespace App\Exports;

use App\Models\UserScheme;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithCustomChunkSize;
use Illuminate\Support\Collection;
use Illuminate\Contracts\Queue\ShouldQueue;

class ExportSubScriptionReport implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping, ShouldQueue, WithCustomChunkSize
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
        $userSchemes = UserScheme::whereIn('scheme_id', $this->schemeIds)->whereHas('transactions', function ($query) {
            $query->where('is_accepted', 1);
        })->withSum('transactions', 'amount')
            ->get();
        return $userSchemes;
    }

    public function map($userScheme): array
    {
        $branch = $userScheme->scheme->branch->name ?? "--";
        return [
            $userScheme->created_at->format('d/m/Y'),
            $userScheme->unique_id ?? "--",
            $userScheme->scheme_user_name ?? "--",
            $userScheme->phone ?? "--",
            $userScheme->scheme->name ?? "--",
            $userScheme->transactions_sum_amount,
            $userScheme->scheme_total,
            $userScheme->scheme_total - $userScheme->transactions_sum_amount,
        ];
    }

    public function headings(): array
    {
        return [
            'Join Date',
            'Unique Id',
            'Customer Name',
            'Customer Phone',
            'Scheme',
            'Paid Amount',
            'Total Amount',
            'Balance Amount',
        ];
    }
}
