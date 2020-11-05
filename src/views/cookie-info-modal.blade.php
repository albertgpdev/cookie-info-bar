
<div class="cookie-info-bar__modal-mask" style="z-index: 99; position: absolute; left: 0px; top: 0px; width: 100vw; height: 100vh; background: rgba(0, 0, 0, 0.7); overflow-y: hidden; @if(isset($_COOKIE[config('cookie-info-bar.cookie_name')])){{ 'display:none' }}@endif">
    <div class="cookie-info-bar__modal" style="z-index: 100; position: absolute; left: 50%; top: 50%; -webkit-transform: translate(-50%, -50%); transform: translate(-50%, -50%); min-width:50%; min-height:50%; overflow-y:auto">
        <h2>@lang('albertgpdev-cookie-info-bar::translations.main_title')</h2>
        <p>@lang('albertgpdev-cookie-info-bar::translations.main_text')</p>
        @if($allowCustomize)
            <div class="cookie-info-bar__modal-customize" style="display:none;">
                @include('albertgpdev-cookie-info-bar::partials.used-cookies')
            </div>
        @endif
        @if($type === \Albertgpdev\CookieInfoBar\CookieInfoBar::TYPE_MODAL)
        @include('albertgpdev-cookie-info-bar::partials.buttons')
        @endif
  </div>
</div>
@if($type === \Albertgpdev\CookieInfoBar\CookieInfoBar::TYPE_MODAL)
    @include('albertgpdev-cookie-info-bar::partials.scripts')
@endif