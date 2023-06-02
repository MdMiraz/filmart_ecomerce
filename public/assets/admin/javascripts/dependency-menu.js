$(function() { 
    var loader = $('#loader'),
        category = $('select[name="category_id"]'),
        sub_category = $('select[name="sub_category_id"]');
    loader.hide();
    sub_category.attr('disabled', 'disabled')
    category.change(function() {
        var id = $(this).val();
        if (id) {
            loader.show();
            sub_category.attr('disabled', 'disabled')
            $.get('{{url('sub-categorys?category_id=')}}' + id)
                .success(function(data) {
                    var str = '<option value="">Select Sub Category</option>';
                    data.forEach(function(row) {
                        str += '<option value="' + row.id + '">' + row.sub_category_name + '</option>';
                    })
                    sub_category.removeAttr('disabled')
                    sub_category.html(str);
                    loader.hide();
                })
        } else {
            loader.hide();
            sub_category.attr('disabled', 'disabled')
        }
    })
})
