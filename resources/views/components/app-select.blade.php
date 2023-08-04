
@php
    $label = $attributes['label']  ?? '';
    $name = $attributes['name'] ?? '';
    $value = $attributes['value'] ?? '';

    //giữ lại giá trị cũ khi lỗi
    $old_value = old($name);
    $value = empty($old_value) ? $value: $old_value;

@endphp

<div class="mt-3">
    <label class="form-label">{{$label}}</label>

    <select class="form-select" name="{{ $name }}" id="{{ $name}}">
        <option value="">--chọn một giá trị--</option>
        @foreach ($data as $item)
            @if($selected != null && $item->$valueMember == $selected)
                <option value="{{$item->$valueMember}}" selected> {{$item->$displayMember }} </option>
            
            @else
                <option value="{{$item->$valueMember}}"> {{$item->$displayMember }} </option>
            @endif
        @endforeach
    </select>
       
    @error($name)
    <span class="text danger">{{$message}}</span>
    @enderror
</div>
