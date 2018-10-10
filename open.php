<?php 
include 'dbcs.php';
?>
<?php



 $sql = "SELECT fname,matricule,c101 FROM resit";
$result = mysql_query($sql);

while($obj = mysql_fetch_object($result)) {
$var[] = $obj;
}
$gmm= '{'.json_encode($var).'}';
?>


<!DOCTYPE html>
<html>
<head>
    <title>Biaka Virtual</title>
    <link rel="stylesheet" type="text/css" href="w2ui-1.4.2.min.css" />
    <script src="jquery.min.js"></script>
    <script type="text/javascript" src="w2ui-1.4.2.min.js"></script>
</head>
<body>

<div id="main" style="width: 100%; height: 400px;"></div>

<script type="text/javascript">
// widget configuration
var config = {
    layout: {
        name: 'layout',
        padding: 4,
        panels: [
            { type: 'left', size: '50%', resizable: true, minSize: 300 },
            { type: 'main', minSize: 300 }
        ]
    },
    grid: { 
        name: 'grid',
        show: {
            toolbar            : true,
            toolbarDelete    : true
        },
        columns: [
            { field: 'fname', caption: 'First Name', size: '33%', sortable: true, searchable: true },
            { field: 'lname', caption: 'Last Name', size: '33%', sortable: true, searchable: true },
            { field: 'email', caption: 'Email', size: '33%' },
            { field: 'sdate', caption: 'Start Date', size: '120px', render: 'date' }
        ],
        records: [
            $var;
        ],
        onClick: function(event) {
            var grid = this;
            var form = w2ui.form;
            console.log(event);
            event.onComplete = function () {
                var sel = grid.getSelection();
                console.log(sel);
                if (sel.length == 1) {
                    form.recid  = sel[0];
                    form.record = $.extend(true, {}, grid.get(sel[0]));
                    form.refresh();
                } else {
                    form.clear();
                }
            }
        }
    },
    form: { 
        header: 'Edit Record',
        name: 'form',
        fields: [
            { name: 'recid', type: 'text', html: { caption: 'ID', attr: 'size="10" readonly' } },
            { name: 'fname', type: 'text', required: true, html: { caption: 'First Name', attr: 'size="40" maxlength="40"' } },
            { name: 'lname', type: 'text', required: true, html: { caption: 'Last Name', attr: 'size="40" maxlength="40"' } },
            { name: 'email', type: 'email', html: { caption: 'Email', attr: 'size="30"' } },
            { name: 'sdate', type: 'date', html: { caption: 'Date', attr: 'size="10"' } }
        ],
        actions: {
            Reset: function () {
                this.clear();
            },
            Save: function () {
                var errors = this.validate();
                if (errors.length > 0) return;
                if (this.recid == 0) {
                    w2ui.grid.add($.extend(true, { recid: w2ui.grid.records.length + 1 }, this.record));
                    w2ui.grid.selectNone();
                    this.clear();
                } else {
                    w2ui.grid.set(this.recid, this.record);
                    w2ui.grid.selectNone();
                    this.clear();
                }
            }
        }
    }
};

$(function () {
    // initialization
    $('#main').w2layout(config.layout);
    w2ui.layout.content('left', $().w2grid(config.grid));
    w2ui.layout.content('main', $().w2form(config.form));
});
</script>

</body>
</html>