<fieldset class="rounded-lg pt-0 px-[12px] pb-[12px] w-[90%] border border-black m-auto">
    <legend class="text-[0.85rem]">{{ $value }}</legend>
    <input class="border-none w-full outline-none placeholder:text-[0.8rem]" type="{{ $type }}" name="{{ $name }}" placeholder="{{ $placeholder }}">
    @error("{{ $name }}")
        <p class="text-red-500 text-sm">{{ $message }}</p>
    @enderror
</fieldset>
