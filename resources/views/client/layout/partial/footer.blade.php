<footer class="footer">
    <div class="wrapper">
        <div class="footer_grid">
            <div class="categories">
                <div class="title">@lang('client.about_us')</div>
                <a href="{{locale_route('timeline.index')}}" class="link">
                    @lang('client.timeline')
                </a>
                <a href="{{locale_route('principle.index')}}" class="link">
                    @lang('client.principle')
                </a>
                <a href="{{locale_route('client.certificate.index')}}" class="link">
                    @lang('client.certificates')
                </a>
            </div>
            <div class="categories">
                <div class="title">@lang('client.contact_is')</div>
                <a target="_blank" href="{{$gemail->language(app()->getLocale())? $gemail->language(app()->getLocale())->value: $gemail->language()->value}}" class="link"><span class="light">@lang('client.email'):</span>
                    {{$gemail->language(app()->getLocale())? $gemail->language(app()->getLocale())->value: $gemail->language()->value}}
                </a>
                <a target="_blank" href="{{$gaddress->language(app()->getLocale())? $gaddress->language(app()->getLocale())->value: $gaddress->language()->value}}" class="link"><span class="light">@lang('client.address'):</span>
                    {{$gaddress->language(app()->getLocale())? $gaddress->language(app()->getLocale())->value: $gaddress->language()->value}}
                </a>
                <a target="_blank" href="{{$gphone->language(app()->getLocale())? $gphone->language(app()->getLocale())->value: $gphone->language()->value}}" class="link"><span class="light">@lang('client.phone'):</span>
                    {{$gphone->language(app()->getLocale())? $gphone->language(app()->getLocale())->value: $gphone->language()->value}}
                </a>
            </div>
        </div>
        <p class="paragraph">@lang('client.it_is_a_long_established_fact_that_a_reader_will_be_distracted')</div>
    </p>
    <div class="social_privacy flex wrapper">
        <div class="social_media">
            <a target="_blank" href="{{$ginstagram->language(app()->getLocale())? $ginstagram->language(app()->getLocale())->value: $ginstagram->language()->value}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path id="iconmonstr-instagram-11" d="M12,2.163c3.2,0,3.584.012,4.85.07,3.252.148,4.771,1.691,4.919,4.919.058,1.265.069,1.645.069,4.849s-.012,3.584-.069,4.849c-.149,3.225-1.664,4.771-4.919,4.919-1.266.058-1.644.07-4.85.07s-3.584-.012-4.849-.07c-3.26-.149-4.771-1.7-4.919-4.92-.058-1.265-.07-1.644-.07-4.849s.013-3.583.07-4.849C2.381,3.924,3.9,2.38,7.151,2.232,8.417,2.175,8.8,2.163,12,2.163ZM12,0C8.741,0,8.333.014,7.053.072,2.7.272.273,2.69.073,7.052.014,8.333,0,8.741,0,12s.014,3.668.072,4.948c.2,4.358,2.618,6.78,6.98,6.98C8.333,23.986,8.741,24,12,24s3.668-.014,4.948-.072c4.354-.2,6.782-2.618,6.979-6.98C23.986,15.668,24,15.259,24,12s-.014-3.667-.072-4.947c-.2-4.354-2.617-6.78-6.979-6.98C15.668.014,15.259,0,12,0Zm0,5.838A6.163,6.163,0,1,0,18.162,12,6.162,6.162,0,0,0,12,5.838ZM12,16a4,4,0,1,1,4-4A4,4,0,0,1,12,16ZM18.406,4.155a1.44,1.44,0,1,0,1.439,1.44A1.441,1.441,0,0,0,18.406,4.155Z" />
                </svg>
            </a>
            <a target="_blank" href="{{$gfacebook->language(app()->getLocale())? $gfacebook->language(app()->getLocale())->value: $gfacebook->language()->value}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path id="iconmonstr-facebook-5" d="M12,2A10,10,0,1,1,2,12,10.011,10.011,0,0,1,12,2Zm0-2A12,12,0,1,0,24,12,12,12,0,0,0,12,0ZM10,10H8v2h2v6h3V12h1.82L15,10H13V9.167c0-.478.1-.667.558-.667H15V6H12.6C10.8,6,10,6.792,10,8.308V10Z"/>
                </svg>
            </a>
        </div>
    </div>
    <div class="bottom wrapper">
        <div class="insite">Design By Insite International </div>
    </div>
    </div>
</footer>