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

class ExportUser implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping, ShouldQueue, WithCustomChunkSize
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

    public function recieveData($user_id, $type)
    {
        $this->user_id = $user_id;
        $this->type = $type;
    }
    public function collection()
    {
        if ($this->type == "ALL") {
            $userSchemes = UserScheme::where('user_id', $this->user_id)->get();
            return $userSchemes;
        } elseif ($this->type == "ACTIVE") {
            $userSchemes = UserScheme::where('user_id', $this->user_id)->where('is_active', 1)->where('is_closed', 0)->get();
            return $userSchemes;
        } elseif ($this->type == "CLOSED") {
            $userSchemes = UserScheme::where('user_id', $this->user_id)->where('is_closed', 1)->get();
            return $userSchemes;
        }
    }
    public function map($userScheme): array
    {
        $unique_id = $userScheme->unique_id ?? "--";
        $customer = $userScheme->user->name ?? "--";
        $address = $userScheme->user->address ?? "--";
        $scheme = $userScheme->scheme->name ?? "--";
        $branch = $userScheme->scheme->branch->name ?? "--";
        $transaction_amount = Transaction::where('user_id', $userScheme->user_id)->where('is_accepted', 1)->where('scheme_id', $userScheme->scheme_id)->sum('amount');
        // dd($transaction_amount);
        if (!$userScheme->is_active) {
            $closed = "IN-ACTIVE";
        } elseif ($userScheme->is_closed) {
            $closed = "CLOSED";
        } else {
            $closed = "ACTIVE";
        }
        return [
            $userScheme->created_at->format('d/m/Y h:i A'),
            $unique_id,
            $customer,
            $address,
            $scheme,
            $branch,
            $transaction_amount??"--",
            $userScheme->scheme_total,
            $closed,

        ];
    }

    public function headings(): array
    {
        return [
            'Join Date',
            'Unique Id',
            'Customer',
            'Address',
            'Scheme',
            'Branch',
            'Collected Amount',
            'Total Amount',
            'Collection',
        ];
    }
}
