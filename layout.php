<!DOCTYPE html>
<html>
<head>
    <title>W2UI Demo: layout-1</title>
    <link rel="stylesheet" type="text/css" href="w2ui-1.4.2.min.css" />
    <script src="jquery.min.js"></script>
    <script type="text/javascript" src="w2ui-1.4.2.min.js"></script>
</head>
<body>

<div id="layout" style="width: 100%; height: 400px;"></div>

<script type="text/javascript">
$(function () {
    var pstyle = 'border: 1px solid #dfdfdf; padding: 5px;';
    $('#layout').w2layout({
        name: 'layout',
        panels: [
            { type: 'top', size: 50, style: pstyle, content: 'top' },
            { type: 'left', size: 200, style: pstyle, content: 'left' },
            { type: 'main', style: pstyle, content: 'main' }
        ]
    });
});
</script>

</body>
</html>