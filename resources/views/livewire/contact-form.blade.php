<div class="max-w-2xl mx-auto">
    <h2 class="text-center"> Formular programări</h2>
    <p class="px-3 mt-5 text-indigo-700 text-xl font-normal opacity-75 text-center xl:px-16">Întreaga echipă de
        profesioniști a centrului de implantologie DC dental te așteaptă!</p>

    <form method="POST" class="mt-12" wire:submit.prevent="contactFormSubmit"
        action="{{ route('raspuns-programare') }}">

        @csrf
        <div class="px-3 w-full">
            <label class="block text-indigo-700 text-base font-semibold" for="name">
                Nume <span class="text-red-500">*</span>
            </label>
            @error('name')
            <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
            @enderror
            <input wire:model="name" type="text" placeholder="Numele dumneavoastra" name="name" id="name"
                class="block w-full shadow-md rounded-lg outline-none px-4 py-3 mt-2 bg-gray-100 border border-transparent focus:border-indigo-500 transition-colors ease-in">

        </div>
        <div class="px-3 w-full mt-5">
            <label class="block text-indigo-700 text-base font-semibold" for="email">
                Adresa email <span class="text-red-500">*</span>
            </label>
            @error('email')
            <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
            @enderror
            <input wire:model="email" type="email" id="email" placeholder="email@domain.com" name="email"
                class="block w-full border shadow-md rounded-lg outline-none px-4 py-3 mt-2 bg-gray-100 border border-transparent focus:border-indigo-500 transition-colors ease-in">

        </div>
        <div class="mt-5 w-full md:flex">
            <div class="px-3 w-full md:w-1/2">
                <label class="block text-indigo-700 text-base font-semibold" for="telefon">
                    Telefon <span class="text-red-500">*</span>
                </label>
                @error('telefon')
                <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                @enderror
                <input wire:model="telefon" type="tel" id="telefon" placeholder="nr. telefon contact" name="telefon"
                    class="block w-full border shadow-md rounded-lg outline-none px-4 py-3 mt-2 bg-gray-100 border border-transparent focus:border-indigo-500 transition-colors ease-in">

            </div>
            <div class="mt-5 md:mt-0 px-3 w-full md:w-1/2">
                <label class="block text-indigo-700 text-base font-semibold" for="appointment_date">
                    Alegeti o data
                </label>
                @error('appointment_date')
                <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
                @enderror
                <input wire:model="appointment_date" type="text" onfocus="(this.type='date')"
                    onblur="(this.type='text')" placeholder="mm/dd/yyyy" id="appointment_date" name="appointment_date"
                    class="block w-full border shadow-md rounded-lg outline-none px-4 py-3 mt-2 bg-gray-100 border border-transparent focus:border-indigo-500 transition-colors ease-in">


            </div>

        </div>
        <div class="px-3 mt-5 w-full">
            <label class="block text-indigo-700 text-base font-semibold" for="message">
                Informatii suplimentare <span class="text-red-500">*</span>
            </label>
            @error('message')
            <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
            @enderror
            <textarea wire:model="message" id="message" rows="5" name="message"
                class="block w-full border shadow rounded-lg outline-none appearance-none mt-2 px-4 py-3 bg-gray-100 border border-transparent focus:border-indigo-500 transition-colors ease-in"
                placeholder="Informatii suplimentare programare: specializare, doctor, data dorita pentru programare"></textarea>

        </div>
        <div class="px-3 mt-5 w-full">
            <p class="block text-indigo-700 text-base font-semibold mb-2">Alege locatia: <span
                    class="text-red-500">*</span></p>
            @error('locatie')
            <span class="mt-1 text-sm text-red-500">{{ $message }}</span>
            @enderror
            <div class="-mx-3 flex items-center" x-data="{botosani:false, iasi:false, open:true}">
                <div class="px-3 w-full md:w-1/2">
                    <div>
                        <label for="locatie"
                            class="relative opacity-50 block w-full border rounded-lg outline-none px-4 py-3 text-white text-center bg-indigo-700"
                            :class="{'opacity-50': !iasi }" x-on:click="iasi = open, botosani = ! open">
                            Iasi

                            <input wire:model="locatie" type="radio" name="locatie"
                                class="block opacity-0 w-full h-full absolute inset-0 border shadow rounded-lg outline-none px-4 py-3  cursor-pointer z-10"
                                value="iasi">

                        </label>
                    </div>
                </div>
                <div class="px-3 w-full md:w-1/2">
                    <div>
                        <label
                            class="relative opacity-50 block w-full border rounded-lg outline-none px-4 py-3 text-white text-center bg-indigo-700"
                            for="locatie" :class="{'opacity-50' : !botosani}"
                            x-on:click="botosani = open, iasi = !open"> Botosani

                            <input wire:model="locatie" type="radio" name="locatie"
                                class="block opacity-0 w-full h-full absolute inset-0 border shadow rounded-lg outline-none px-4 py-3 cursor-pointer z-10"
                                value="botosani">

                        </label>
                    </div>
                </div>
            </div>

        </div>
        <div class="px-3 mt-10 w-full flex justify-end">
            <input type="submit" value="trimite"
                class="block w-full md:w-auto md:inline-flex text-sm font-bold px-6 md:px-8 py-3 leading-snug border border-indigo-700 rounded-lg uppercase md:tracking-wider shadow bg-indigo-700 text-white hover:bg-white hover:text-indigo-700 transform-colors duration-200 ease-in cursor-pointer outline-none">
        </div>
    </form>

</div>
