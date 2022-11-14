<div>
    <div class="relative container mx-auto px-4">
        <div class="flex flex-wrap -mx-4">
            @foreach ($sliders as $slider)
                <div class="w-full md:w-1/2 px-4 lg:mb-5 sm:mb-2 lg:py-20 py-10">
                    <div class="max-w-md lg:py-5 py-10">
                        <h5 class="text-2xl font-bold text-gray-600 mb-2">
                            {{ $slider->subtitle }}
                        </h5>
                        <h2 class="mb-8 text-5xl lg:text-6xl font-semibold font-heading">
                            {{ $slider->title }}
                        </h2>
                        <p class="mb-20 text-lg text-gray-600">
                            {{ Str::limit($slider->details, 150) }}
                        </p>
                        @if ($slider->link)
                            <a class="inline-block hover:bg-orange-400 text-white font-bold font-heading py-6 px-8 rounded-md uppercase transition duration-200 bg-orange-500"
                                href="{{ $slider->link }}">
                                {{ 'Discover now' }}
                            </a>
                        @endif
                    </div>
                </div>
                <div class="relative w-full md:w-1/2 px-4 lg:mb-5 sm:mb-2 lg:py-20 py-10">
                    <div class="hidden lg:block absolute top-0 transform translate-y-1/2 right-0 w-1">
                        <a class="block w-1/2 h-40 bg-blue-600" href="#"></a><a
                            class="block w-1/2 h-40 bg-gray-300" href="#"></a>
                    </div>
                    @if ($featuredbanner)
                        @foreach ($featuredbanner as $banner)
                            <div class="absolute bottom-1/2 -mb-24 lg:right-6 inline-block bg-white rounded-xl">
                                <div class="flex p-3">
                                    <div class="w-auto pt-5 px-4 lg:px-9">
                                        <h3 class="mb-2 text-xl font-bold font-heading w-32">
                                            {{ $banner->title }}
                                        </h3>
                                        <p class="mb-4 lg:mb-0 text-lg font-semibold font-heading text-blue-500">
                                            {{ Str::limit($banner->details, 150) }}
                                        </p>

                                        @if ($banner->product_id)
                                            <a class="lg:absolute bottom-0 flex items-center justify-center w-12 h-12 lg:-mb-6 hover:bg-orange-400 text-white rounded-md bg-orange-500"
                                                href="{{ Helpers::productLink($banner->product) }}">
                                                <svg class="w-2 h-4" width="8" height="12" viewbox="0 0 8 12"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.97656 6.00252L0.851562 1.87752L2.02957 0.699219L7.33258 6.00252L2.02957 11.3058L0.851562 10.1275L4.97656 6.00252Z"
                                                        fill="white"></path>
                                                </svg>
                                            </a>
                                        @elseif($banner->link)
                                            <a class="lg:absolute bottom-0 flex items-center justify-center w-12 h-12 lg:-mb-6 hover:bg-orange-400 text-white rounded-md bg-orange-500"
                                                href="{{ $banner->link }}">
                                                <svg class="w-2 h-4" width="8" height="12" viewbox="0 0 8 12"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.97656 6.00252L0.851562 1.87752L2.02957 0.699219L7.33258 6.00252L2.02957 11.3058L0.851562 10.1275L4.97656 6.00252Z"
                                                        fill="white"></path>
                                                </svg>
                                            </a>
                                        @endif
                                    </div>
                                    <div class="w-auto">
                                        <img loading="lazy" class="h-full lg:h-36 rounded-xl object-cover"
                                            src="{{ asset('images/featuredbanners/' . $banner->image) }}"
                                            alt="{{ $banner->title }}">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <img loading="lazy" class="h-auto"
                        src="{{ asset('images/sliders/' . $slider->photo) }}" alt="{{ $slider->title }}">
                </div>
            @endforeach
        </div>
        <div class="w-full xl:absolute left-0 bottom-0 right-0 bg-white py-10 px-4 lg:ml-auto">
            <div class="flex flex-wrap items-center justify-center -mx-2 -mb-12">
                @foreach ($brands as $brand)
                    <div class="sm:w-1/2 md:w-1/4 lg:w-1/6 px-2 mb-12">
                        <img loading="lazy" class="mx-auto h-6" src="{{ asset('images/brands/' . $brand->image) }}"
                            alt="">
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div x-data="{ activeTabs: 'featuredProducts' }" class="container mx-auto px-4">
        <div class="flex flex-wrap -mx-4 mb-10">
            <div class="w-1/2 md:w-auto lg:w-1/4 py-6 px-10 sm:py-2 sm:px-5 text-left font-bold text-gray-500 uppercase border-b-2 border-gray-100 hover:border-gray-500 focus:outline-none focus:border-gray-500">
                <button type="button"
                    class="inline-block"
                    @click="activeTabs = 'featuredProducts'"
                    :class="activeTabs === 'featuredProducts' ? 'text-orange-400' : ''">
                    {{ __('Featured Products') }}
                </button>
            </div>
            <div class="w-1/2 md:w-auto lg:w-1/4 py-6 px-10 sm:py-2 sm:px-5 text-left font-bold text-gray-500 uppercase border-b-2 border-gray-100 hover:border-gray-500 focus:outline-none focus:border-gray-500">
                <button type="button"
                    class="inline-block"
                    @click="activeTabs = 'bestOfers'" :class="activeTabs === 'bestOfers' ? 'text-orange-400' : ''">
                    {{ __('Best Offers') }}
                </button>
            </div>
            <div class="w-1/2 md:w-auto lg:w-1/4 py-6 px-10 sm:py-2 sm:px-5 text-left font-bold text-gray-500 uppercase border-b-2 border-gray-100 hover:border-gray-500 focus:outline-none focus:border-gray-500">
                <button type="button"
                    class="inline-block"
                    @click="activeTabs = 'hotProducts'" :class="activeTabs === 'hotProducts' ? 'text-orange-400' : ''">
                    {{ __('Hot Products') }}
                </button>
            </div>
            <div class="w-1/2 md:w-auto lg:w-1/4 py-6 px-10 sm:py-2 sm:px-5 text-left font-bold text-gray-500 uppercase border-b-2 border-gray-100 hover:border-gray-500 focus:outline-none focus:border-gray-500">
                <button type="button"
                    class="inline-block"
                    @click="activeTabs = 'brands'" :class="activeTabs === 'brands' ? 'text-orange-400' : ''">
                    {{ __('Brands') }}
                </button>
            </div>
        </div>
        <div x-show="activeTabs === 'featuredProducts'" class="px-5">
            <div role="featuredProducts" aria-labelledby="tab-0" id="tab-panel-0" tabindex="0">
                <section>
                    <div class="container mx-auto">
                        <div class="flex mb-16">
                            <div class="w-full flex flex-wrap -mx-3">
                                @forelse ($featuredProducts as $product)
                                    <div class="sm:w-full md:w-1/2 lg:w-1/3 px-3 mb-16 lg:mb-0<div class="bg-white rounded-lg shadow-2xl">
                                        <div class="relative text-center">
                                            <a href="{{ route('front.product', $product->slug) }}">
                                                <img class="w-full h-auto object-cover rounded-t-lg"
                                                    src="{{ asset('images/products/' . $product->image) }}" alt="">
                                            </a>
                                            <div class="absolute top-0 right-0 px-4 py-2 bg-orange-500 rounded-bl-lg">
                                                <span class="text-white font-bold font-heading">{{ $product->price }}$</span>
                                            </div>
                                        </div>
                                        <div class="p-4 text-center">
                                            <a href="{{ route('front.product', $product->slug) }}"
                                                class="block mb-2 text-lg font-bold font-heading text-orange-500 hover:text-orange-400">{{ $product->name }}</a>
                                            <div class="flex justify-center mb-4">
                                                <div class="flex items-center">
                                                    @for ($i = 0; $i < 5; $i++)
                                                        @if ($i < $product->reviews->avg('rating'))
                                                            <svg class="w-4 h-4 text-orange-500 fill-current"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                                <path
                                                                    d="M12 17.27l-5.18 2.73 1-5.81-4.24-3.63 5.88-.49L12 6.11l2.45 5.51 5.88.49-4.24 3.63 1 5.81z" />
                                                            </svg>
                                                        @else
                                                            <svg class="w-4 h-4 text-orange-500 fill-current"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                                <path
                                                                    d="M12 17.27l-5.18 2.73 1-5.81-4.24-3.63 5.88-.49L12 6.11l2.45 5.51 5.88.49-4.24 3.63 1 5.81z" />
                                                            </svg>
                                                        @endif
                                                    @endfor
                                                </div>
                                                <span
                                                    class="ml-2 text-sm text-gray-500 font-body">{{ $product->reviews->count() }}
                                                    {{ __('Reviews') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="w-full">
                                        <h3 class="text-3xl font-bold font-heading text-blue-900">
                                            {{ __('No products found') }}
                                        </h3>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div x-show="activeTabs === 'bestOfers'" class="px-5">
            <div role="bestOfers" aria-labelledby="tab-1" id="tab-panel-1" tabindex="0">
                <section>
                    <div class="container mx-auto">
                        <div class="flex mb-16">
                            <div class="w-full flex flex-wrap -mx-3">
                                @forelse ($bestOffers as $product)
                                    <div class="w-full lg:w-1/3 px-3 mb-16 lg:mb-0">
                                        <a class="block mb-10" href="{{ route('front.product', $product->slug) }}">
                                            <div class="relative">
                                                @if ($product->old_price)
                                                    <span
                                                        class="absolute bottom-0 left-0 ml-6 mb-6 px-2 py-1 text-xs font-bold font-heading bg-white border-2 border-red-500 rounded-full text-red-500">
                                                        -{{ $product->discount }}%
                                                    </span>
                                                @endif
                                                <img class="w-full h-96 object-cover" loading="lazy"
                                                    src="{{ asset('images/products/' . $product->image) }}"
                                                    alt="{{ $product->name }}">
                                            </div>
                                            <div class="mt-12">
                                                <div class="mb-2">
                                                    <h3 class="mb-3 text-3xl font-bold font-heading text-blue-900">
                                                        {{ Str::limit($product->name, 30) }}
                                                    </h3>
                                                    <p class="text-xl font-bold font-heading text-white">
                                                        <span class="text-blue-900">{{ $product->price }} DH</span>
                                                        <span
                                                            class="text-xs text-gray-500 font-semibold font-heading line-through">{{ $product->old_price }}</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="inline-block hover:bg-orange-400 text-white font-bold font-heading py-4 px-8 rounded-md uppercase transition duration-200 bg-orange-500"
                                            href="{{ route('front.product', $product->slug) }}">
                                            {{ __('Learn more') }}
                                        </a>
                                    </div>
                                @empty
                                    <div class="w-full">
                                        <h3 class="text-3xl font-bold font-heading text-blue-900">
                                            {{ __('No products found') }}
                                        </h3>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div x-show="activeTabs === 'hotProducts'" class="px-5">
            <div role="hotProducts" aria-labelledby="tab-2" id="tab-panel-2" tabindex="0">
                <section>
                    <div class="container mx-auto">
                        <div class="flex mb-16">
                            <div class="w-full flex flex-wrap -mx-3">
                                @forelse ($hotProducts as $product)
                                    <div class="w-full lg:w-1/3 px-3 mb-16 lg:mb-0">
                                        <a class="block mb-10" href="{{ route('front.product', $product->slug) }}">
                                            <div class="relative">
                                                @if ($product->old_price)
                                                    <span
                                                        class="absolute bottom-0 left-0 ml-6 mb-6 px-2 py-1 text-xs font-bold font-heading bg-white border-2 border-red-500 rounded-full text-red-500">
                                                        -{{ $product->discount }}%
                                                    </span>
                                                @endif
                                                <img class="w-full h-96 object-cover" loading="lazy"
                                                    src="{{ asset('images/products/' . $product->image) }}"
                                                    alt="{{ $product->name }}">
                                            </div>
                                            <div class="mt-12">
                                                <div class="mb-2">
                                                    <h3 class="mb-3 text-3xl font-bold font-heading text-blue-900">
                                                        {{ Str::limit($product->name, 30) }}
                                                    </h3>
                                                    <p class="text-xl font-bold font-heading text-white">
                                                        <span class="text-blue-900">{{ $product->price }} DH</span>
                                                        <span
                                                            class="text-xs text-gray-500 font-semibold font-heading line-through">{{ $product->old_price }}</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="inline-block hover:bg-orange-400 text-white font-bold font-heading py-4 px-8 rounded-md uppercase transition duration-200 bg-orange-500"
                                            href="{{ route('front.product', $product->slug) }}">
                                            {{ __('Learn more') }}
                                        </a>
                                    </div>
                                @empty
                                    <div class="w-full">
                                        <h3 class="text-3xl font-bold font-heading text-blue-900">
                                            {{ __('No products found') }}
                                        </h3>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div x-show="activeTabs === 'brands'" class="px-5">
            <div role="brands" aria-labelledby="tab-3" id="tab-panel-3" tabindex="0">
                <div class="container mx-auto">
                    <div class="flex mb-5">
                        <div class="w-full flex flex-wrap py-10 -mx-3">
                            @foreach ($brands as $brand)
                                <div class="sm:w-1/2 md:w-1/3 lg:w-1/4 px-3 mb-6 md:mb-0 mb-1° lg:mb-0">
                                    <a class="block mb-10" href="{{ route('front.brands') }}">
                                        <div class="relative">
                                            <img class="w-full h-auto" loading="lazy"
                                                src="{{ asset('images/brands/' . $brand->image) }}"
                                                alt="{{ $brand->name }}">
                                        </div>
                                        <div class="mt-12">
                                            <div class="mb-2 text-center">
                                                <h3 class="mb-3 text-3xl font-bold font-heading text-blue-900">
                                                    {{ $brand->name }}
                                                </h3>
                                                {{-- count products in brand  --}}
                                                <p class="text-xl font-bold font-heading text-white">
                                                    <span class="text-blue-900">{{ $brand->products->count() }}
                                                        {{ __('products') }}</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section class="py-5 px-4 bg-gray-100">
        <div class="container mx-auto">
            <div class="flex flex-wrap -mx-3">
                @foreach($sections as $section)
                <div class="sm:w-1/2 md:w-1/3 lg:w-1/4 px-3 mb-6">
                    <div class="relative h-full text-center pt-16 bg-white">
                        <div class="pb-12 border-b">
                            <span 
                                @if($section->color) 
                                style="background-color: {{ $section->bg_color }};" 
                                @endif 
                                class="inline-flex mb-16 items-center justify-center w-20 h-20 bg-blue-300 rounded-full">
                                <svg width="37" height="37" viewbox="0 0 37 37" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M34.9845 11.6702C33.7519 10.3368 32 9.60814 30.0543 9.60814H24.9767V6.75543C24.9767 6.2438 24.5581 5.8252 24.0465 5.8252H0.930233C0.418605 5.8252 0 6.2438 0 6.75543V27.2128C0 27.7244 0.418605 28.143 0.930233 28.143H4.63566C4.93798 29.864 6.43411 31.174 8.24031 31.174C10.0465 31.174 11.5426 29.864 11.845 28.143H24.0465H26.0853C26.3876 29.864 27.8837 31.174 29.6899 31.174C31.4961 31.174 32.9922 29.864 33.2946 28.143H36.0698C36.5814 28.143 37 27.7244 37 27.2128V17.6004C36.9922 15.143 36.3023 13.0888 34.9845 11.6702ZM1.86047 7.68566H23.1163V10.5384V26.2903H11.6822C11.1783 24.8795 9.82171 23.864 8.24031 23.864C6.65892 23.864 5.30233 24.8795 4.79845 26.2903H1.86047V7.68566ZM8.24031 29.3136C7.24806 29.3136 6.44186 28.5074 6.44186 27.5151C6.44186 26.5229 7.24806 25.7167 8.24031 25.7167C9.23256 25.7167 10.0388 26.5229 10.0388 27.5151C10.0388 28.5074 9.23256 29.3136 8.24031 29.3136ZM29.6899 29.3136C28.6977 29.3136 27.8915 28.5074 27.8915 27.5151C27.8915 26.5229 28.6977 25.7167 29.6899 25.7167C30.6822 25.7167 31.4884 26.5229 31.4884 27.5151C31.4884 28.5074 30.6822 29.3136 29.6899 29.3136ZM35.1318 26.2826H33.1318C32.6279 24.8717 31.2713 23.8562 29.6899 23.8562C28.1085 23.8562 26.7519 24.8717 26.2481 26.2826H24.9845V11.4686H30.062C33.1938 11.4686 35.1395 13.8174 35.1395 17.6004V26.2826H35.1318Z"
                                        fill="white"></path>
                                </svg>
                            </span>
                            <h3 class="mb-4 text-xl font-bold font-heading">{{ $section->title }}</h3>
                            @if($section->subtitle)
                            <p>{{ $section->subtitle }}</p>
                            @endif
                        </div>
                        <div class="pt-12 px-14 pb-14 text-center">
                            <p class="text-lg text-gray-500">{{ $section->description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Features -->

    <!-- Start Sections -->
    @foreach ($sections as $section)
        <section>
            <div class="container px-4 mx-auto">
                <div class="relative py-20 md:py-40 bg-orange-300">
                    <img class="hidden md:block absolute inset-0 w-full h-full" loading="lazy"
                        src="{{ asset('images/sections' . $section->image) }}" alt="">
                    <div class="relative text-center">
                        <div class="inline-block px-4 relative mb-6">
                            <div class="absolute top-0 left-0 h-1 bg-gray-900 w-full"></div>
                            <div class="absolute bottom-0 left-0 h-1 bg-gray-900 w-full"></div>
                            <h2 class="relative text-7xl font-bold font-heading text-white">{{ $section->title }}
                            </h2>
                        </div>
                        <p class="mb-12 text-2xl font-bold font-heading text-white uppercase italic">
                            {{ $section->subtitle }}</p>
                        <a class="inline-block bg-blue-800 hover:bg-blue-900 text-white font-bold font-heading py-5 px-8 rounded-md uppercase transition duration-200"
                            href="{{ $section->link }}">{{ $section->link_text }}</a>
                        {{ __('Get Started') }}
                        </a>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
</div>
