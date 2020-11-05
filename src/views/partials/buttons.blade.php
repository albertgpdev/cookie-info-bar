<div class="cookie-info-bar__buttons">
    <button class="cookie-info-bar__btn btn--accept">@lang('albertgpdev-cookie-info-bar::translations.accept')</button>
    <button class="cookie-info-bar__btn btn--deny">@lang('albertgpdev-cookie-info-bar::translations.deny')</button>
    @if($allowCustomize)
        <button class="cookie-info-bar__btn btn--customize" onclick="customize()">@lang('albertgpdev-cookie-info-bar::translations.customize')</button>
    @endif
</div>