<form action="" class="cookie-info-bar__form">
    <table class="cookie-info-bar__table">
        <tr class="cookie-info-bar__table table--headers">
            <th>clave</th>
            <th>valor</th>
            <th>default</th>
            <th>&nbsp;</th>
        </tr>
        
        @foreach($usedCookies as $keyGroup => $cookieTypes)
            <tr class="cookie-info-bar__table table--sub-headers">
                <td><strong>@lang('albertgpdev-cookie-info-bar::translations.'.$keyGroup)</strong></td>
            </tr>
            @foreach($cookieTypes['values'] as $index => $cookie)
            <tr class="cookie-info-bar__table table--content">
                <td>{{ $cookie['key'] }}</td>
                <td>{{ \Cookie::get($cookie['key']) ?? 'Nulo' }}</td>
                <td>{{ $cookie['default'] ?? 'Nulo' }}</td>
                @if($cookieTypes['customizable'])
                <td>
                    <input type="radio" id="{{ $keyGroup }}_{{ $index }}_accept" name="cookies[{{ $keyGroup }}][{{ $cookie['key'] }}]" value="1" checked="checked">
                    <label for="{{ $keyGroup }}_{{ $index }}_accept">Si</label><br>
                    <input type="radio" id="{{ $keyGroup }}_{{ $index }}_deny" name="cookies[{{ $keyGroup }}][{{ $cookie['key'] }}]" value="0" @if(isset($cookies[$keyGroup]) && isset($cookies[$keyGroup][$cookie['key']]) && $cookies[$keyGroup][$cookie['key']] === "0") checked="checked" @endif>
                    <label for="{{ $keyGroup }}_{{ $index }}_deny">No</label><br>
                </td>
                @endif
            </tr>
            @endforeach
        @endforeach
    </table>
    <button class="cookie-info-bar__btn btn--save">Guardar</button>
</form>