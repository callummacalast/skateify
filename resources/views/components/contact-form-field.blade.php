@php
    $myObj = [
        'first_name' => 'First Name',
        'last_name' => 'Last Name',
        'email' => 'Email',
        'message' => 'Message',
    ];
@endphp

@switch($fieldType)
    @case('textarea')
        <div>
            <label for="{{ $fieldName }}" class="text-sm">{{ $myObj[$fieldName] }}</label>
            <textarea id="{{ $fieldName }}" name="{{ $fieldName }}" type="{{ $emailCheck ? 'email' : 'text' }}" placeholder=""
                class="w-full p-3 rounded bg-gray-800" rows="10">{{ old($fieldName) }}</textarea>
            @if ($errors->has($fieldName))
                <div class="error text-red-400 text-sm">{{ $errors->first($fieldName) }}
                </div>
            @endif
        </div>
    @break

    @default
    <div>
        <label for="{{ $fieldName }}" class="text-sm">{{ $myObj[$fieldName] }}</label>
        <input id="{{ $fieldName }}" name="{{ $fieldName }}" type="{{ $emailCheck ? 'email' : 'text' }}"
            placeholder="" class="w-full p-3 rounded bg-gray-800" value="{{ old($fieldName) }}">
        @if ($errors->has($fieldName))
            <div class="error text-red-400 text-sm">{{ $errors->first($fieldName) }}
            </div>
        @endif
    </div>
    
@endswitch

