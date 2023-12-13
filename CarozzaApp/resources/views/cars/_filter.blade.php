<div class="row">
    <div class="col-md-6"></div>
    <div class="col-md-6">
        <div class="row">
            <div class="col">
                <div class="input-group mb-3">
                    <select id="filter_manufacturer_id" name="manufacturer_id" class="custom-select">
                        @foreach ($allManufacturers as $id => $manufacturer)
                            <option value="{{ $id }}" {{ $id == request('manufacturer_id') ? 'selected' : '' }}>{{ $manufacturer }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
