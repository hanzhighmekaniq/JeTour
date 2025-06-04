<x-layout>
    <div class="w-full p-4 sm:p-6 bg-gray-50 min-h-screen">
        <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 sm:mb-6">Data Transaksi</h1>

        <!-- Pencarian dan tombol -->
        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4 pb-4">
            <div>
                <a href="#">
                    <button
                        class="w-full sm:w-auto bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded transition">
                        + Tambah Wisata
                    </button>
                </a>
            </div>
            <div class="w-full sm:w-auto">
                <form method="GET" action="{{ route('transaction.index') }}"
                    class="flex flex-col sm:flex-row gap-2 items-stretch sm:items-center">
                    <input type="text" name="search" placeholder="Cari transaksi..."
                        class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-500 w-full sm:w-auto">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md transition w-full sm:w-auto">
                        Filter
                    </button>
                </form>
            </div>
        </div>

        <!-- Tabel Transaksi -->
        <div class="overflow-x-auto bg-white rounded-lg shadow w-full">
            <table class="min-w-[900px] w-full text-left text-sm">
                <thead class="bg-blue-100 text-gray-700">
                    <tr>
                        <th class="py-3 px-4 sm:px-6">#</th>
                        <th class="py-3 px-4 sm:px-6">Order ID</th>
                        <th class="py-3 px-4 sm:px-6">Nama</th>
                        <th class="py-3 px-4 sm:px-6">Detail Tiket</th>
                        <th class="py-3 px-4 sm:px-6">Total</th>
                        <th class="py-3 px-4 sm:px-6">Metode</th>
                        <th class="py-3 px-4 sm:px-6">Status</th>
                        <th class="py-3 px-4 sm:px-6 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse($transactions as $index => $transaction)
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4 sm:px-6">{{ $transactions->firstItem() + $index }}</td>
                            <td class="py-3 px-4 sm:px-6">{{ $transaction->order_id ?? '-' }}</td>
                            <td class="py-3 px-4 sm:px-6">{{ $transaction->name }}</td>
                            <td class="py-3 px-4 sm:px-6">
                                @forelse($transaction->detailTransactions as $detail)
                                    <div class="mb-2">
                                        <strong>{{ $detail->ticket->name_ticket ?? '-' }}</strong><br>
                                        Qty: {{ $detail->quantity }}<br>
                                        Subtotal: Rp{{ number_format($detail->subtotal, 0, ',', '.') }}
                                    </div>
                                @empty
                                    <span class="text-gray-500 italic">Tidak ada detail</span>
                                @endforelse
                            </td>
                            <td class="py-3 px-4 sm:px-6">
                                Rp{{ number_format($transaction->total_price, 0, ',', '.') }}
                            </td>
                            <td class="py-3 px-4 sm:px-6">{{ $transaction->payment_type ?? '-' }}</td>
                            <td class="py-3 px-4 sm:px-6">
                                @php
                                    $status = strtoupper($transaction->status ?? $transaction->transaction_status);
                                    $statusColor = match ($status) {
                                        'SUCCESS' => 'green',
                                        'PENDING' => 'yellow',
                                        'FAILED', 'CANCELLED' => 'red',
                                        'EXPIRED' => 'gray',
                                        default => 'gray',
                                    };
                                @endphp
                                <span
                                    class="inline-block px-2 py-1 text-xs text-white bg-{{ $statusColor }}-500 rounded">
                                    {{ $status }}
                                </span>
                            </td>
                            <td class="py-3 px-4 sm:px-6 text-center">
                                <a href="#">
                                    {{-- {{ route('transactions.status', $transaction->order_id) }} --}}
                                    <button
                                        class="bg-blue-500 hover:bg-blue-600 text-white text-xs px-3 py-1 rounded transition">
                                        Cek Status
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="py-6 text-center text-gray-500">Tidak ada data transaksi</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="py-4 px-4 text-center text-sm text-gray-500">
                Menampilkan {{ $transactions->count() }} dari {{ $transactions->total() }} data
            </div>
        </div>
    </div>
</x-layout>
