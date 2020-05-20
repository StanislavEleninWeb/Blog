@error($name)
    <div {{ $attributes->merge(['class'=>'alert alert-danger']) }}>{{ $message }}</div>
@enderror