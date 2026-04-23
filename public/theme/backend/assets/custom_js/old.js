$(document).ready(function () {
    const addCarImages = $('.addCarImages');

    addCarImages.on('click', function() {
        let rowId = Date.now();
        
        $('#car_image').append(`
            <tr id="${rowId}">
                <td>
                    <img row_id="${rowId}" width="80">
                </td>
                <td>
                    <div class="form-group">
                        <div class="custom-file mb-1">
                            <input type="file" class="custom-file-input" row_id="${rowId}" name="car_images[]" onchange="loadFiles(event, ${rowId})">
                            <label class="custom-file-label" for="Chọn file">Select file image</label>
                        </div>
                    </div>
                </td>
                <td>
                    <button class="btn btn-danger m-btn m-btn--custom m-btn--icon float-right" onclick="removeImg(this)"><span><i class="la la-trash"></i><span>Xóa</span></span></button>
                </td>
            </tr>
        `);
    });

    preImage.on('click', function() { uploadImage.click(); });

    uploadImage.change(function (e) {
        file = this.files[0];
        
        if (e.target.files.length) {
            let reader = new FileReader();
            reader.onload = function (event) {
                preImage.attr("src", event.target.result);
            };
            reader.readAsDataURL(file);
        }
    });

    //

    $('#license_plate').on('input', function() {
        // 1. Lấy giá trị gốc và lưu vị trí con trỏ
        let val = $(this).val().toUpperCase().replace(/[^A-Z0-9]/g, '');
        let pos = this.selectionStart;
        let originalLen = $(this).val().length;

        // 2. Định dạng chuỗi: 19-L1 911.99
        let formatted = "";
        
        if (val.length > 0) {
            formatted += val.substring(0, 2); // 19
        }
        if (val.length > 2) {
            formatted += '-' + val.substring(2, 4); // -L1
        }
        if (val.length > 4) {
            formatted += ' ' + val.substring(4, 7); // [space]911
        }
        if (val.length > 7) {
            formatted += '.' + val.substring(7, 9); // .99
        }

        // 3. Gán lại giá trị đã định dạng vào input
        $(this).val(formatted);

        // 4. Tính toán lại để con trỏ không bị nhảy
        let newLen = formatted.length;
        pos = pos + (newLen - originalLen);
        this.setSelectionRange(pos, pos);
    });

    $('#fuel_type').on('change', function() {
        let selectedValue = $(this).val();

        if (selectedValue == 'electric') {
            $('#fuel_consumption_label').text('Mức tiêu thụ nhiên liệu (kWh/100km)');
        } else {
            $('#fuel_consumption_label').text('Mức tiêu thụ nhiên liệu (L/100km)');
        }
    }).trigger('change');
});

function formatNumber(value) {
    // Xóa ký tự không phải số
    value = value.replace(/\D/g, '');

    // Format 3.150.000
    return value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
}

// Bắt sự kiện cho 3 input
$('#price_per_hour_display, #price_per_day_display, #price_per_week_display').on('input', function() {
    let value = $(this).val();
    $(this).val(formatNumber(value));
});

function getRawNumber(value) {
    return value.replace(/\./g, '');
}

$('#myForm').on('submit', function() {
    $('#price_per_hour').val(getRawNumber($('#price_per_hour_display').val()));
    $('#price_per_day').val(getRawNumber($('#price_per_day_display').val()));
    $('#price_per_week').val(getRawNumber($('#price_per_week_display').val()));
});

function loadFiles(event, el_rowId) {
    let reader = new FileReader();
    let output = document.querySelector(`img[row_id="${el_rowId}"]`);
    reader.onload = function() {
        output.src = reader.result;
    };
    if (event.target.files[0] === undefined) {
        output.src = "";
        return false;
    } else {
        reader.readAsDataURL(event.target.files[0]);
    }
}

function removeImg(el){ $(el).parent().parent().remove(); }

function removeCarImage(el, car_image_id = 0) {
    $(el).parent().parent().remove();

    if (car_image_id !== 0) {
        $('<input>')
            .attr('type', 'hidden')
            .attr('name', 'delete_image_ids[]')
            .val(car_image_id)
            .appendTo('form');
    }
}