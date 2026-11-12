<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }} - Contact</title>

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="bg-slate-100 text-slate-800 antialiased">
        <main class="min-h-screen px-4 py-16 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-5xl">
                <div class="overflow-hidden rounded-3xl bg-white shadow-xl ring-1 ring-slate-200">
                    <div class="grid md:grid-cols-2">
                        <div class="p-8 sm:p-10 lg:p-12">
                            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-emerald-600">Contact</p>
                            <h1 class="mt-4 text-4xl font-bold tracking-tight text-slate-900 sm:text-5xl">
                                Neem contact met ons op
                            </h1>
                            <p class="mt-4 max-w-xl text-lg text-slate-600">
                                Heb je een vraag over een product, bestelling of samenwerking? Wij staan klaar om je te helpen.
                            </p>

                            <div class="mt-10 space-y-6">
                                <div class="flex items-start gap-4">
                                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-100 text-emerald-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8.25V18a2.25 2.25 0 0 0 2.25 2.25h13.5A2.25 2.25 0 0 0 21 18V8.25L12 13.5 3 8.25Z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8.25 12 13.5l9-5.25"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium uppercase tracking-wide text-slate-500">E-mail</p>
                                        <a href="mailto:info@solestore.nl" class="mt-1 block text-lg font-semibold text-slate-900 hover:text-emerald-700">
                                            info@solestore.nl
                                        </a>
                                    </div>
                                </div>

                                <div class="flex items-start gap-4">
                                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-100 text-emerald-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0-1.24 1.01-2.25 2.25-2.25h2.25l1.35 4.05-1.18 1.18a15.75 15.75 0 0 0 8.18 8.18l1.18-1.18L17.5 15.3V17.5c0 1.24-1.01 2.25-2.25 2.25h-1.5c-6.63 0-12-5.37-12-12v-1.5Z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium uppercase tracking-wide text-slate-500">Telefoon</p>
                                        <a href="tel:+310200123456" class="mt-1 block text-lg font-semibold text-slate-900 hover:text-emerald-700">
                                            +31 (0)20 012 34 56
                                        </a>
                                    </div>
                                </div>

                                <div class="flex items-start gap-4">
                                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-100 text-emerald-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21s6-4.35 9-9.2C22.5 9.5 19.86 4.5 15.75 4.5A4.75 4.75 0 0 0 12 6.4 4.75 4.75 0 0 0 8.25 4.5C4.14 4.5 1.5 9.5 3 11.8 6 16.65 12 21 12 21Z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium uppercase tracking-wide text-slate-500">Adres</p>
                                        <p class="mt-1 text-lg font-semibold text-slate-900">
                                            Molenstraat 14<br>
                                            1011 AA Amsterdam<br>
                                            Nederland
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-slate-900 p-8 text-slate-100 sm:p-10 lg:p-12">
                            <h2 class="text-2xl font-bold text-white">Zo bereiken wij je</h2>
                            <p class="mt-4 text-slate-300">
                                We reageren meestal binnen 1 werkdag op vragen over bestellingen, producten en algemene ondersteuning.
                            </p>

                            <div class="mt-8 space-y-4 rounded-2xl border border-slate-700 bg-slate-800/70 p-5">
                                <div>
                                    <p class="text-sm uppercase tracking-wide text-slate-400">Openingstijden</p>
                                    <p class="mt-2 text-lg font-semibold text-white">Ma t/m Vr: 09:00 - 18:00</p>
                                </div>
                                <div>
                                    <p class="text-sm uppercase tracking-wide text-slate-400">Social</p>
                                    <p class="mt-2 text-lg font-semibold text-white">Instagram • Facebook • LinkedIn</p>
                                </div>
                            </div>

                            <div class="mt-8 rounded-2xl bg-emerald-500/10 p-5 ring-1 ring-emerald-400/30">
                                <p class="text-sm uppercase tracking-wide text-emerald-200">Service</p>
                                <p class="mt-2 text-lg font-semibold text-white">Voor vragen over bestellingen: service@solestore.nl</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
