<div class="xe-form-group xe-dynamicField">
    <label class="xu-form-group__label __xe_df __xe_df_text __xe_df_text_{{$config->get('id')}}">
        {{xe_trans($config->get('label'))}}

        @if (!$config->get('use', false))
            @include('dynamicField.userActivateLink')
        @endif
    </label>

    @if ($config->get('skinDescription') !== '')<small>{{$config->get('skinDescription')}}</small>@endif

    <input
        type="text"
        name="{{$key['text']}}"
        class="xe-form-control xu-form-group__control __xe_df __xe_df_text __xe_df_text_{{$config->get('id')}}"
        value=""
        data-valid-name="{{ xe_trans($config->get('label')) }}"
        @if (xe_trans($config->get('placeholder', '')) != '') placeholder="{{xe_trans($config->get('placeholder'))}}" @else placeholder="ex) http://example.com" @endif
        @if (!$config->get('use', false)) disabled @endif
    />
</div>
