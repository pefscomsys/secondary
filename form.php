<!DOCTYPE html>
<html>
<head>
    <title>W2UI Demo: forms-2</title>
    <link rel="stylesheet" type="text/css" href="w2ui-1.4.2.min.css" />
    <script src="jquery.min.js"></script>
    <script type="text/javascript" src="w2ui-1.4.2.min.js"></script>
</head>
<body>

<div id="form" style="width: 750px;"></div>

<script type="text/javascript">
$(function () {
    $('#form').w2form({ 
        name     : 'form',
        url      : 'server/post',
        header   : 'Field Types',
        formURL  : 'data/form.html', 
        fields: [
            { field: 'field_text', type: 'text', required: true },
            { field: 'field_alpha', type: 'alphaNumeric', required: true },
            { field: 'field_int', type: 'int', required: true },
            { field: 'field_float', type: 'float', required: true },
            { field: 'field_date', type: 'date' },
            { field: 'field_list', type: 'list', required: true, 
                options: { items: ['Adams, John', 'Johnson, Peter', 'Lewis, Frank', 'Cruz, Steve', 'Donnun, Nick'] } },
            { field: 'field_enum', type: 'enum', required: true, 
                options: { items: ['Adams, John', 'Johnson, Peter', 'Lewis, Frank', 'Cruz, Steve', 'Donnun, Nick'] } },
            { field: 'field_textarea', type: 'text'},
            { field: 'field_select', type: 'select', required: false, options: { items: ['fist', 'second'] } },
            { field: 'field_check', type: 'checkbox', required: false },
            { field: 'field_radio', type: 'radio', required: false }
        ],
        actions: {
            reset: function () {
                this.clear();
            },
            save: function () {
                var obj = this;
                this.save({}, function (data) { 
                    if (data.status == 'error') {
                        console.log('ERROR: '+ data.message);
                        return;
                    }
                    obj.clear();
                });
            }
        }
    });
});
</script>

</body>
</html>