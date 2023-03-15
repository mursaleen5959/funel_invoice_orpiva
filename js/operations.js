$(document).ready(function () {
    $("#AddRow").click(function () {
        var html = `<tr class="inprow">
                    <td class="txt_left">
                        <div style="display:flex;align-items:start">
                            <button class="deleteRow" style="cursor:pointer;margin-right:15px;background-color:#831c54;padding:5px 10px;border-radius:10px;color:white;border:none" type="button">x</button>
                            <textarea name="desc[]" class="table_input">• 1 dedicated resources for mont</textarea>
                        </div>
                    </td>
                    <td class="txt_left pl_10">
                        <div class="table_input_wrapper">
                            <p>£</p>
                            <input name="price[]" type="number" class="table_input input_price" value="0">
                        </div>
                    </td>
                    <td>
                        <div class="table_input_wrapper">
                        </div>
                    </td>
                    <td>
                        <div class="table_input_wrapper"></div>
                    </td>
                </tr>`;
        if ($(".inprow").length < 3) {
            $(html).insertAfter('#firstRow');
        }
    });
    $(document).on('click', '.deleteRow', function () {
        $(this).parent().parent().parent().remove();
    });
    $(document).on('input', '.input_price', function () {
        let sum = 0;
        $('.input_price').each(function () {
            const price = parseFloat($(this).val()) || 0;
            sum += price;
        });
        $('.input_subtotal').val(sum);
        $('.input_total').val(sum);
    });
});