<div class="container mx-auto mt-10 mb-10">
    <div class="bg-white p-10 rounded-lg shadow-md">
        <h2 class="text-4xl font-semibold text-left mb-6">
            Tiket Masuk <span class="text-green-500 font-losta">{{ $destination->name }}</span>
        </h2>

        <!-- Date Picker -->
        <div class="mb-4">
            <label for="date-picker" class="block font-semibold">Pilih Tanggal:</label>
            <input type="date" id="date-picker" class="border border-gray-300 rounded-lg p-2 mt-1">
        </div>

        <!-- Ticket Items -->
        <div class="space-y-5 mt-5">
            @foreach ($destination->ticket as $index => $ticket)
                <div class="bg-white p-4 rounded-lg shadow-[2px_0px_10px_0px_#00000025] flex flex-col justify-between">
                    <div class="flex-grow">
                        <h3 class="font-semibold text-xl md:text-3xl">
                            {{ $ticket->name_ticket }} ({{ $ticket->type }})
                        </h3>
                        <p class="text-gray-600 flex items-center my-5">
                            <x-heroicon-s-clock class="w-5 h-5 mr-2" />
                            {{-- Contoh format tanggal dan waktu buka/tutup --}}
                            {{ date('d F Y') }},
                            {{ $ticket->open ? date('H:i', strtotime($ticket->open)) : '00:00' }} -
                            {{ $ticket->close ?? '24:00' }} WIB
                        </p>

                        <!-- Syarat dan Ketentuan -->
                        <h4 class="font-medium">Syarat dan Ketentuan</h4>
                        <ul class="text-sm text-gray-500">
                            @php
                                // Pecah rules ke list, misal rules dipisah dengan newline
                                $rules = explode("\n", $ticket->rules);
                            @endphp
                            @foreach ($rules as $key => $rule)
                                @if ($key < 2)
                                    <li>{{ trim($rule) }}</li>
                                @endif
                            @endforeach
                            <div id="more-terms-{{ $index }}" class="hidden">
                                @foreach ($rules as $key => $rule)
                                    @if ($key >= 2)
                                        <li>{{ trim($rule) }}</li>
                                    @endif
                                @endforeach
                            </div>
                        </ul>
                        <a href="javascript:void(0)" id="load-more-btn-{{ $index }}"
                            class="text-blue-600 hover:underline" onclick="toggleTerms('{{ $index }}')">
                            Load More...
                        </a>
                    </div>

                    <div class="text-green-600 font-semibold text-3xl mt-4 text-right">
                        Rp. {{ number_format($ticket->price, 0, ',', '.') }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<script>
    function toggleTerms(ticketNumber) {
        var moreText = document.getElementById("more-terms-" + ticketNumber);
        var btnText = document.getElementById("load-more-btn-" + ticketNumber);

        if (moreText.classList.contains("hidden")) {
            moreText.classList.remove("hidden");
            btnText.innerHTML = "Show Less...";
        } else {
            moreText.classList.add("hidden");
            btnText.innerHTML = "Load More...";
        }
    }
</script>
