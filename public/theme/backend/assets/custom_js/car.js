console.log('Car JS loaded');

$(function () {
    const uploadImage = $('#uploadImage');
    const preImage = $('#preImage');
    const carImage = $('#car_image');

    // =========================
    // ADD CAR IMAGE ROW
    // =========================
    $('.addCarImages').on('click', function () {
        const rowId = Date.now();

        carImage.append(`
            <tr id="${rowId}">
                <td>
                    <img row_id="${rowId}" width="80">
                </td>
                <td>
                    <div class="form-group">
                        <div class="custom-file mb-1">
                            <input type="file"
                                   class="custom-file-input"
                                   row_id="${rowId}"
                                   name="car_images[]"
                                   onchange="loadFiles(event, ${rowId})">
                            <label class="custom-file-label">Select file image</label>
                        </div>
                    </div>
                </td>
                <td>
                    <button type="button"
                            class="btn btn-danger remove-img m-btn m-btn--custom m-btn--icon float-right">
                        <i class="la la-trash"></i> Xóa
                    </button>
                </td>
            </tr>
        `);
    });

    // =========================
    // REMOVE IMAGE ROW (DELEGATION)
    // =========================
    $(document).on('click', '.remove-img', function () {
        $(this).closest('tr').remove();
    });

    // =========================
    // FORMAT LICENSE PLATE
    // =========================
    $('#license_plate').on('input', function () {

        let val = this.value.toUpperCase().replace(/[^A-Z0-9]/g, '');

        const parts = [
            val.substring(0, 2),
            val.length > 2 ? '-' + val.substring(2, 4) : '',
            val.length > 4 ? ' ' + val.substring(4, 7) : '',
            val.length > 7 ? '.' + val.substring(7, 9) : ''
        ];

        this.value = parts.join('');

    });

    // =========================
    // FUEL TYPE LABEL
    // =========================
    $('#fuel_type')
        .on('change', function () {
            const isElectric = $(this).val() === 'electric';

            $('#fuel_consumption_label').text(
                isElectric
                    ? 'Mức tiêu thụ nhiên liệu (kWh/100km)'
                    : 'Mức tiêu thụ nhiên liệu (L/100km)'
            );
        })
        .trigger('change');

    // =========================
    // PRICE FORMAT
    // =========================
    function formatNumber(value) {
        return value
            .replace(/\D/g, '')
            .replace(/\B(?=(\d{3})+(?!\d))/g, '.');
    }

    function getRawNumber(value) {
        return value.replace(/\./g, '');
    }

    const priceInputs = '#price_per_hour_display, #price_per_day_display, #price_per_week_display';

    $(document).on('input', priceInputs, function () {
        this.value = formatNumber(this.value);
    });

    // =========================
    // MULTIPLIER
    // =========================

    function handleInput($input) {
        let val = $input.val();

        // Cho phép: số + 1 dấu . + tối đa 1 số sau dấu .
        if (!/^\d{0,2}(\.\d{0,1})?$/.test(val)) {
            val = val.slice(0, -1); // xóa ký tự sai
        }

        // Không cho > 99.9
        let num = parseFloat(val);
        if (!isNaN(num) && num > 99.9) {
            val = '99.9';
        }

        $input.val(val);
    }

    function handleBlur($input) {
        let num = parseFloat($input.val());

        if (isNaN(num)) {
            $input.val('');
            return;
        }

        if (num < 0) num = 0;
        if (num > 99.9) num = 99.9;

        // Làm tròn 1 số thập phân
        num = Math.round(num * 10) / 10;

        $input.val(num);
    }

    $('#weekend_multiplier, #holiday_multiplier')
        .on('input', function() {
            handleInput($(this));
        })
        .on('blur', function() {
            handleBlur($(this));
        });

    // =========================
    // SUBMIT FORM
    // =========================
    $('#myForm').on('submit', function () {
        $('#price_per_hour').val(getRawNumber($('#price_per_hour_display').val()));
        $('#price_per_day').val(getRawNumber($('#price_per_day_display').val()));
        $('#price_per_week').val(getRawNumber($('#price_per_week_display').val()));
    });

});

// =========================
// GLOBAL FUNCTIONS (NẾU CẦN)
// =========================
function loadFiles(event, rowId) {
    const file = event.target.files?.[0];
    const img = document.querySelector(`img[row_id="${rowId}"]`);

    if (!file) {
        if (img) img.src = '';
        return;
    }

    const reader = new FileReader();
    reader.onload = e => img.src = e.target.result;
    reader.readAsDataURL(file);
}