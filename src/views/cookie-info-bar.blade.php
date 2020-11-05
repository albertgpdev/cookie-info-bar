
<div class="cookie-info-bar__content" style="position:absolute; bottom:0px; left:0px; width: 100%; z-index:100;@if(isset($_COOKIE[config('cookie-info-bar.cookie_name')])){{ 'display:none' }}@endif">
    <div class="cookie-info-bar__message">
        <p>@lang('albertgpdev-cookie-info-bar::translations.main_text')</p>
    </div>    
    @include('albertgpdev-cookie-info-bar::partials.buttons')
</div>
@include('albertgpdev-cookie-info-bar::partials.modal-customize-panel')
@include('albertgpdev-cookie-info-bar::partials.scripts')
