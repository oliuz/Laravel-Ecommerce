<section class="py-20 bg-orange-900">
    <div class="container mx-auto px-10">
      <div class="flex flex-wrap -mx-4 pb-6 lg:pb-16 border-b border-gray-400">
        <div class="w-full lg:w-3/5 px-4 mb-20">
          <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-10 lg:mb-0">
              <h3 class="mb-8 text-xl font-bold font-heading text-white">{{__('Information')}}</h3>
              <ul>
                <li class="mb-6"><a class="text-gray-50 hover:text-gray-200" href="{{ route('front.blog')}}">
                  {{__('Blog')}}
                </a></li>
                <li class="mb-6"><a class="text-gray-50 hover:text-gray-200" href="#">{{__('Delivery information')}}</a></li>
                <li><a class="text-gray-50 hover:text-gray-200" href="#">{{__('Paying by invoice')}}</a></li>
              </ul>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-10 lg:mb-0">
              <h3 class="mb-8 text-xl font-bold font-heading text-white">{{__('Customer Service')}}</h3>
              <ul>
                <li class="mb-6"><a class="text-gray-50 hover:text-gray-200" href="#">{{__('Orders and Returns')}}</a></li>
                <li class="mb-6"><a class="text-gray-50 hover:text-gray-200" href="{{ route('front.faq') }}">{{__('FAQs')}}</a></li>
                <li class="mb-6"><a class="text-gray-50 hover:text-gray-200" href="#">{{__('Store Location')}}</a></li>
                <li><a class="text-gray-50 hover:text-gray-200" href="{{ route ('front.contact') }}">
                  {{__('Contact Us')}}
                </a></li>
              </ul>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-4">
              <h3 class="mb-8 text-xl text-white font-bold font-heading">{{__('Contact Us')}}</h3>
              <ul>
                <li class="mb-6">
                  <h4 class="mb-2 text-gray-50">{{__('Telephone')}}</h4>
                  <a class="text-white hover:underline" href="tel:{{ App\Helpers::settings('company_phone') }}">
                    {{App\Helpers::settings('company_phone')}}
                    
                  </a>
                </li>
                <li class="mb-6">
                  <h4 class="mb-2 text-gray-50">{{__('Email')}}</h4>
                  <a class="text-white hover:underline" href="mailto:{{ App\Helpers::settings('company_email_address') }}">
                    {{ App\Helpers::settings('company_email_address') }}
                  </a>
                </li>
                <li>
                  <h4 class="mb-2 text-gray-50">{{__('Whatsapp')}}</h4>
                  <a class="text-white hover:underline" href="#">
                    {{ App\Helpers::settings('social_whatsapp')}}
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="w-full lg:w-2/5 px-4 order-first lg:order-1 mb-20">
          <h3 class="mb-6 text-xl text-white font-bold font-heading">{{__('Join our Newsletter')}}</h3>
          <p class="mb-8 text-xl text-yellow-500 font-bold font-heading">{{__('News, sales')}}:</p>
          <div class="mb-6 relative lg:max-w-xl lg:mx-auto bg-white rounded-lg">
            <div class="relative flex flex-wrap items-center justify-between">
              <div class="relative flex-1">
                <span class="absolute top-0 left-0 ml-8 mt-4 font-semibold font-heading text-xs text-gray-400">{{__('Drop your e-mail')}}</span>
                <input class="inline-block w-full pt-8 pb-4 px-8 placeholder-gray-900 border-0 focus:ring-transparent focus:outline-none rounded-md" type="text" placeholder="steven@example.dev">
              </div>
              <a class="inline-block w-auto hover:bg-orange-400 text-white font-bold font-heading py-6 px-8 rounded-md uppercase text-center bg-orange-500" href="#">Join</a>
            </div>
          </div>
          <p class="text-gray-200">The brown fox jumps over the lazy dog.</p>
        </div>
        <div class="w-full px-4 flex flex-wrap justify-between lg:order-last">
          <div class="w-full md:w-auto mb-4 md:mb-0 flex flex-wrap">
            <img class="mr-4 mb-2" src="yofte-assets/brands/visa.svg" alt="">
            <img class="mr-4 mb-2" src="yofte-assets/brands/paypal.svg" alt="">
            <img class="mb-2" src="yofte-assets/brands/mastercard.svg" alt="">
          </div>
          <div class="w-full md:w-auto flex">
            <a class="inline-flex items-center justify-center w-12 h-12 mr-2 rounded-full" href="
            {{ App\Helpers::settings('social_facebook') }}">
              <img src="yofte-assets/buttons/facebook-white-circle.svg" alt="">
            </a>
            <a class="inline-flex items-center justify-center w-12 h-12 mr-2 rounded-full" href="
            {{ App\Helpers::settings('social_instagram') }}">
              <img src="yofte-assets/buttons/instagram-circle.svg" alt="">
            </a>
            <a class="inline-flex items-center justify-center w-12 h-12 rounded-full" href="
            {{ App\Helpers::settings('social_twitter') }}">
              <img src="yofte-assets/buttons/twitter-circle.svg" alt="">
            </a>
            <a class="inline-flex items-center justify-center w-12 h-12 rounded-full" href="
            {{ App\Helpers::settings('social_linkedin') }}">
              <img src="yofte-assets/buttons/linkedin-circle.svg" alt="">
            </a>
          </div>
        </div>
      </div>
      <div class="pt-14 flex items-center justify-center">
        <a class="inline-block mr-4 text-white text-2xl font-bold font-heading" href="#">
          <img class="h-7" src="yofte-assets/logos/yofte-logo-white.svg" alt="" width="auto">
        </a>
        <p class="inline-block text-sm text-gray-200">
         Copyright 2022 - {{ App\Helpers::settings('site_title') }}
        </p>
      </div>
    </div>
  </section>