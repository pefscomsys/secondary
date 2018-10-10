<!DOCTYPE html>
<html>
<head>
    <title>W2UI Demo: layout-10</title>
    <link rel="stylesheet" type="text/css" href="w2ui-1.4.2.min.css" />
    <script src="jquery.min.js"></script>
    <script type="text/javascript" src="w2ui-1.4.2.min.js"></script>
</head>
<body>

<div id="layout" style="width: 100%; height: 400px;"></div>

<div style="height: 20px;"></div>

<span style="display: inline-block; width: 50px;"> Main: </span>
<button class="w2ui-btn" onclick="w2ui['layout'].content('main', 'This is some content set manually')">Set Content</button>
<button class="w2ui-btn" onclick="w2ui['layout'].load('main', 'data/content1.html')">Load Content 1</button>
<button class="w2ui-btn" onclick="w2ui['layout'].load('main', 'data/content2.html')">Load Content 2</button>

<script type="text/javascript">
$(function () {    
    var pstyle = 'border: 1px solid #dfdfdf; padding: 5px;';
    $('#layout').w2layout({
        name: 'layout',
        panels: [
            { type: 'top', size: 100, resizable: true, style: pstyle, content: 'top', title: 'top title' },
            { type: 'left', size: 200, resizable: true, style: pstyle, content: 'left', title: 'left title' },
            { type: 'main', style: pstyle + 'border-top: 0px;', content: 'main', title: 'Main Title'}
        ]
    });
});
</script>

</body>
</html>