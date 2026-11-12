<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }} - Over ons</title>

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="bg-slate-100 text-slate-800 antialiased">
        <main class="min-h-screen px-4 py-16 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-6xl">
                <div class="overflow-hidden rounded-3xl bg-white shadow-xl ring-1 ring-slate-200">
                    <div class="grid lg:grid-cols-[1.2fr_0.8fr]">
                        <div class="p-8 sm:p-10 lg:p-12">
                            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-emerald-600">Over ons</p>
                            <h1 class="mt-4 text-4xl font-bold tracking-tight text-slate-900 sm:text-5xl">
                                Wij brengen duurzame energie naar het dagelijks leven
                            </h1>
                            <p class="mt-6 text-lg leading-8 text-slate-600">
                                Bij Solestore geloven we dat slimme energieoplossingen niet alleen beter zijn voor je wallet, maar ook voor de planeet. We helpen mensen en bedrijven om efficiënter, slimmer en duurzamer met energie om te gaan.
                            </p>

                            <div class="mt-10 grid gap-6 sm:grid-cols-3">
                                <div class="rounded-2xl bg-emerald-50 p-5 ring-1 ring-emerald-100">
                                    <p class="text-3xl font-bold text-emerald-700">10+</p>
                                    <p class="mt-2 text-sm text-slate-600">Jaar ervaring</p>
                                </div>
                                <div class="rounded-2xl bg-sky-50 p-5 ring-1 ring-sky-100">
                                    <p class="text-3xl font-bold text-sky-700">2.500+</p>
                                    <p class="mt-2 text-sm text-slate-600">Tevreden klanten</p>
                                </div>
                                <div class="rounded-2xl bg-amber-50 p-5 ring-1 ring-amber-100">
                                    <p class="text-3xl font-bold text-amber-700">98%</p>
                                    <p class="mt-2 text-sm text-slate-600">Klantenbeoordeling</p>
                                </div>
                            </div>

                            <div class="mt-10 space-y-6">
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">Onze missie</h2>
                                    <p class="mt-3 text-slate-600">
                                        We willen duurzame technologie toegankelijker maken voor iedereen. Van slimme zonnepanelen tot energiezuinige systemen: we helpen klanten bij slimme keuzes die écht iets opleveren.
                                    </p>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold text-slate-900">Onze visie</h2>
                                    <p class="mt-3 text-slate-600">
                                        Een toekomst waarin energie niet alleen betaalbaar, maar ook bewust en efficiënt wordt gebruikt. We streven naar een wereld waarin duurzame oplossingen standaard worden, niet uitzondering.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <aside class="bg-slate-900 p-8 text-slate-100 sm:p-10 lg:p-12">
                            <h2 class="text-2xl font-bold text-white">Waarom kiezen voor Solestore?</h2>
                            <ul class="mt-6 space-y-5">
                                <li class="flex gap-4">
                                    <span class="mt-1 inline-flex h-6 w-6 items-center justify-center rounded-full bg-emerald-500/20 text-emerald-300">✓</span>
                                    <div>
                                        <p class="font-semibold text-white">Persoonlijke begeleiding</p>
                                        <p class="mt-1 text-sm text-slate-300">We luisteren naar jouw situatie en adviseren op maat.</p>
                                    </div>
                                </li>
                                <li class="flex gap-4">
                                    <span class="mt-1 inline-flex h-6 w-6 items-center justify-center rounded-full bg-emerald-500/20 text-emerald-300">✓</span>
                                    <div>
                                        <p class="font-semibold text-white">Innovatieve oplossingen</p>
                                        <p class="mt-1 text-sm text-slate-300">We werken alleen met duurzame en betrouwbare producten.</p>
                                    </div>
                                </li>
                                <li class="flex gap-4">
                                    <span class="mt-1 inline-flex h-6 w-6 items-center justify-center rounded-full bg-emerald-500/20 text-emerald-300">✓</span>
                                    <div>
                                        <p class="font-semibold text-white">Transparante service</p>
                                        <p class="mt-1 text-sm text-slate-300">Duidelijke communicatie, heldere afspraken en betrouwbare service.</p>
                                    </div>
                                </li>
                            </ul>

                            <div class="mt-10 rounded-2xl bg-emerald-500/10 p-5 ring-1 ring-emerald-400/30">
                                <p class="text-sm uppercase tracking-wide text-emerald-200">Ons doel</p>
                                <p class="mt-2 text-lg font-semibold text-white">Een schonere, slimmer en duurzamere toekomst bouwen.</p>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
