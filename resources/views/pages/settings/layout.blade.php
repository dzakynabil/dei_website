<x-layouts::app :title="__('Home')">
    <div class="home-page text-[#1f1a17]">
        <section class="mx-auto max-w-7xl px-6 py-10 lg:py-16">
            <div class="grid items-center gap-12 lg:grid-cols-[1.05fr_0.95fr]">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.28em] text-[#9d5a13]">Culinary Atelier</p>
                    <h1 class="mt-4 max-w-2xl text-5xl font-black leading-[0.95] tracking-tight sm:text-6xl">
                        Find <span class="text-[#9d5a13]">Affordable</span> Food Near You
                    </h1>
                    <p class="mt-5 max-w-xl text-lg leading-8 text-[#6a5b51]">
                        A sensory guide helping migrants and travelers discover authentic local flavors without breaking the bank. Your digital kitchen table awaits.
                    </p>

                    <div class="mt-8 flex flex-col gap-3 sm:flex-row sm:items-center">
                        <label class="home-pill flex min-w-0 flex-1 items-center gap-3 px-4 py-3">
                            <span class="text-[#9d5a13]">⌖</span>
                            <span class="text-sm text-[#8c7f72]">Where are you eating?</span>
                        </label>
                        <label class="home-pill flex items-center gap-3 px-4 py-3 sm:w-[180px]">
                            <span class="text-[#9d5a13]">$</span>
                            <span class="text-sm text-[#8c7f72]">Budget</span>
                        </label>
                        <button class="home-btn rounded-full px-7 py-3 font-semibold text-white transition">
                            Search
                        </button>
                    </div>
                </div>

                <div class="grid gap-4 sm:grid-cols-2">
                    {{-- Hero Dish 1 --}}
                    <div class="home-hero-tile relative h-72 overflow-hidden rounded-4xl">
                        <img src="{{ asset('images/makanan1.png') }}" alt="Hero Dish 1" class="absolute inset-0 h-full w-full object-cover">
                        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(255,255,255,0.22),transparent_35%)]"></div>
                    </div>

                    {{-- Hero Dish 2 --}}
                    <div class="home-hero-tile-alt relative mt-8 h-64 overflow-hidden rounded-4xl sm:mt-0">
                        <img src="{{ asset('images/makanan1.png') }}" alt="Hero Dish 2" class="absolute inset-0 h-full w-full object-cover">
                        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(255,255,255,0.45),transparent_40%)]"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-soft-section px-6 py-16">
            <div class="mx-auto max-w-7xl">
                <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
                    <div>
                        <h2 class="text-3xl font-black tracking-tight text-[#1f1a17]">Curated Recommendations</h2>
                        <p class="mt-2 max-w-2xl text-sm leading-6 text-[#6f6257]">
                            End-picked spots known for exceptional quality and migrant-friendly pricing.
                        </p>
                    </div>
                    <a href="#" class="font-semibold text-[#9d5a13]">View all</a>
                </div>

                <div class="mt-10 grid gap-6 md:grid-cols-3">
                    @foreach ([
                        ['name' => 'Saigon Street Eats', 'price' => '$7.50', 'caption' => 'Authentic family recipes passed down through generations.'],
                        ['name' => 'Abyssinia House', 'price' => '$12.00', 'caption' => 'A communal dining experience featuring hand-stretched injera.'],
                        ['name' => 'Patagonia Pantry', 'price' => '$4.00', 'caption' => 'The best flaky empanadas in town. Perfect for a quick bite.'],
                    ] as $card)
                        <article class="home-card overflow-hidden rounded-3xl">
                            <div class="relative h-56 overflow-hidden bg-[#d9c6af]">
                                {{-- Card Image --}}
                                <img src="{{ asset('images/makanan1.png') }}" alt="{{ $card['name'] }}" class="absolute inset-0 h-full w-full object-cover">
                                <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,rgba(255,255,255,0.5),transparent_45%)]"></div>
                            </div>
                            <div class="p-5">
                                <div class="flex items-start justify-between gap-4">
                                    <h3 class="text-lg font-bold text-[#1f1a17]">{{ $card['name'] }}</h3>
                                    <span class="shrink-0 text-sm font-bold text-[#b46a1c]">{{ $card['price'] }}</span>
                                </div>
                                <p class="mt-3 text-sm leading-6 text-[#6d6056]">{{ $card['caption'] }}</p>
                                <div class="mt-5 flex gap-2">
                                    <span class="rounded-full bg-[#f6eadc] px-3 py-1 text-xs font-semibold text-[#8a5a2a]">Vegetarian</span>
                                    <span class="rounded-full bg-[#f6eadc] px-3 py-1 text-xs font-semibold text-[#8a5a2a]">Budget friendly</span>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="px-6 py-16">
            <div class="mx-auto max-w-7xl">
            <h2 class="text-center text-3xl font-black tracking-tight text-[#1f1a17]">The Simple Path to Flavor</h2>
                <div class="mt-14 grid gap-8 md:grid-cols-3">
                    @foreach ([
                        ['title' => 'Find', 'icon' => '⌕', 'text' => 'Search by location to see what is cooking nearby in your neighborhood.'],
                        ['title' => 'Filter', 'icon' => '≡', 'text' => 'Adjust your budget and cuisine preferences to find the perfect match.'],
                        ['title' => 'Feast', 'icon' => '⌘', 'text' => 'Follow the directions and enjoy a high-quality, affordable meal.'],
                    ] as $step)
                        <div class="text-center">
                                <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-[#f7d7b3] text-2xl text-[#9d5a13] shadow-sm">
                                {{ $step['icon'] }}
                            </div>
                            <h3 class="mt-5 text-xl font-bold text-[#1f1a17]">{{ $step['title'] }}</h3>
                            <p class="mx-auto mt-3 max-w-sm text-sm leading-6 text-[#6d6056]">{{ $step['text'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="home-soft-section px-6 py-16">
            <div class="mx-auto max-w-7xl">
                <h2 class="text-3xl font-black tracking-tight text-[#1f1a17]">Trending Tastes</h2>
                <div class="mt-10 grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-4">
                    @foreach ([
                        ['name' => 'Giant Indian Thali', 'label' => 'Top Seller', 'price' => '$9.99'],
                        ['name' => 'Crispy Soy-Garlic Chicken', 'label' => 'Must Try', 'price' => '$11.50'],
                        ['name' => 'Miso Tonkotsu Ramen', 'label' => 'Popular', 'price' => '$13.00'],
                        ['name' => 'Classic Ahi Poke Bowl', 'label' => 'Fresh', 'price' => '$12.50'],
                    ] as $item)
                        <article class="home-card overflow-hidden rounded-3xl p-3">
                            <div class="relative h-40 overflow-hidden rounded-[1.1rem] bg-[#d7c1a9]">
                                {{-- Trending Item Image --}}
                                <img src="{{ asset('images/makanan1.png') }}" alt="{{ $item['name'] }}" class="absolute inset-0 h-full w-full object-cover">
                            </div>
                            <div class="px-1 pb-1 pt-3">
                                <div class="flex items-center justify-between gap-3">
                                    <h3 class="text-sm font-bold text-[#1f1a17]">{{ $item['name'] }}</h3>
                                    <span class="rounded-full bg-[#f6eadc] px-2.5 py-1 text-[11px] font-semibold text-[#8a5a2a]">{{ $item['label'] }}</span>
                                </div>
                                <p class="mt-2 text-xs font-semibold text-[#9d5a13]">{{ $item['price'] }}</p>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="px-6 py-16">
            <div class="mx-auto max-w-7xl">
                <h2 class="text-3xl font-black tracking-tight text-[#1f1a17]">Hidden Gems</h2>
                <div class="mt-10 grid gap-5 lg:grid-cols-3">
                    <article class="home-gem-large relative overflow-hidden rounded-[1.75rem] text-white lg:col-span-2 lg:row-span-2">
                        {{-- Hidden Gem Large Image --}}
                        <img src="{{ asset('images/makanan1.png') }}" alt="Artisan Hearth Bakery" class="absolute inset-0 h-full w-full object-cover">
                        <div class="absolute inset-0 bg-linear-to-t from-black/75 via-black/20 to-transparent"></div>
                        <div class="absolute inset-0 flex items-end p-6">
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-[0.28em] text-[#f5c48a]">Back-alley find</p>
                                <h3 class="mt-2 text-3xl font-black">Artisan Hearth Bakery</h3>
                                <p class="mt-3 max-w-md text-sm leading-6 text-white/85">
                                    Famous for sourdough loaves that cost less than a coffee.
                                </p>
                            </div>
                        </div>
                    </article>

                    @foreach ([
                        ['name' => 'Mumbai Express', 'caption' => 'Best vada pav in the tri-state area.'],
                        ['name' => 'Classic Diner', 'caption' => 'Comfort food with late-night service.'],
                        ['name' => 'Glaze Lab', 'caption' => 'Donuts and pastries with a modern twist.'],
                    ] as $gem)
                        <article class="home-gem relative overflow-hidden rounded-[1.35rem] text-white">
                            {{-- Hidden Gem Small Image --}}
                            <img src="{{ asset('images/makanan1.png') }}" alt="{{ $gem['name'] }}" class="absolute inset-0 h-full w-full object-cover">
                            <div class="absolute inset-0 bg-linear-to-t from-black/65 via-black/20 to-transparent"></div>
                            <div class="absolute inset-0 flex items-end p-5">
                                <div>
                                    <h3 class="text-xl font-bold">{{ $gem['name'] }}</h3>
                                    <p class="mt-1 text-sm text-white/80">{{ $gem['caption'] }}</p>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="px-6 py-14">
            <div class="mx-auto max-w-4xl rounded-4xl bg-linear-to-br from-[#b86a19] to-[#f29b45] px-8 py-14 text-center shadow-[0_25px_60px_rgba(184,106,25,0.28)]">
                <h2 class="text-3xl font-black tracking-tight text-white md:text-4xl">Ready to Taste Your Next Adventure?</h2>
                <p class="mx-auto mt-4 max-w-2xl text-base leading-7 text-white/90">
                    Join 50,000+ travelers and migrants exploring the best local eats every day.
                </p>
                <div class="mt-8 flex flex-col items-center justify-center gap-4 sm:flex-row">
                    <a href="#" class="rounded-full bg-white px-6 py-3 font-semibold text-[#9d5a13] shadow-sm transition hover:bg-[#fff7ef]">Sign Up Free</a>
                    <a href="#" class="rounded-full border border-white/60 px-6 py-3 font-semibold text-white transition hover:bg-white/10">Explore Map</a>
                </div>
            </div>
        </section>

        <footer class="border-t border-[#eadbc9] bg-white px-6 py-12">
            <div class="mx-auto grid max-w-7xl gap-10 md:grid-cols-4">
                <div>
                    <h3 class="text-lg font-black text-[#1f1a17]">Culinary Atelier</h3>
                    <p class="mt-3 max-w-xs text-sm leading-6 text-[#6d6056]">
                        Redefining global food discovery for the modern traveler, built for flavor, priced for everyone.
                    </p>
                </div>
                <div>
                    <h4 class="font-bold text-[#1f1a17]">Explore</h4>
                    <ul class="mt-4 space-y-2 text-sm text-[#6d6056]">
                        <li><a href="#">Neighborhoods</a></li>
                        <li><a href="#">Top Rated</a></li>
                        <li><a href="#">New Spots</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-[#1f1a17]">Resources</h4>
                    <ul class="mt-4 space-y-2 text-sm text-[#6d6056]">
                        <li><a href="#">For Migrants</a></li>
                        <li><a href="#">Traveler Guide</a></li>
                        <li><a href="#">Partner With Us</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-[#1f1a17]">Connect</h4>
                    <div class="mt-4 flex gap-3">
                        <span class="grid h-9 w-9 place-items-center rounded-full bg-[#f6eadc] text-[#9d5a13]">◎</span>
                        <span class="grid h-9 w-9 place-items-center rounded-full bg-[#f6eadc] text-[#9d5a13]">@</span>
                    </div>
                </div>
            </div>
            <div class="mx-auto mt-10 flex max-w-7xl flex-col gap-3 border-t border-[#f0e5d8] pt-6 text-xs text-[#8a7c70] sm:flex-row sm:items-center sm:justify-between">
                <p>© 2026 Culinary Atelier. All rights reserved.</p>
                <div class="flex gap-4">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                    <a href="#">Cookie Settings</a>
                </div>
            </div>
        </footer>
    </div>
</x-layouts::app>