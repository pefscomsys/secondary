W2UI 1.4 Demos-	Combinations
	
Sidebar & Grid
	
Grid & Edit
	
Spreadsheet Like Grid
	
Buffered Scroll
	
Infinite Scroll
	
Tabs With Content
	
Layout & Dynamic Tabs
	
Popup & Grid
	
Popup & Layout
	
Dependent Fields
-	Layout
	
Simple Layout
	
Resizable Panels
	
Show/Hide Panels
	
Load Content
	
Transitions
	
Event Listeners
	
Nested Layouts
	
Panel With Tabs
	
Panel With Toolbar
	
Panel With Title
-	Grid
	
Simple Grid
	
Grid Elements
	
Row Formating
	
Cell Formatting
	
Data Source
	
Load Data Once
	
Single or Multi Select
	
Sub Grids
	
Show/Hide Columns
	
Add/Remove Records
	
Select/Unselect Records
	
Fixed/Resisable
	
Column Sort
	
Column Groups
	
Summary Records
	
Simple Search
	
Advanced Search
	
Grid Toolbar
	
Master -> Detail
	
Two Grids
	
Render to a New Box
	
Inline Editing
	
Resizable Columns
	
Lock/Unlock Grid
	
Re-Order Columns
	
Re-Order Records
+	Toolbar
-	Sidebar
	
Simple Sidebar
	
Add/Remove
	
Show/Hide
	
Enable/Disable
	
Expand/Collapse
	
Select/Unselect
	
Top & Bottom HTML
	
Events
+	Tabs
-	Forms
	
Simple Form
	
Auto Templates
	
Field Types
	
Large Form
	
Multi Page Form
	
Form Tabs
	
Form Toolbar
	
Form in a Popup
	
Events
-	Fields
	
Numeric
	
Date & Time
	
Drop Down Lists
	
Multi Selects
	
File Upload
	
Remote Source
-	Popup
	
Simple Popup
	
More Options
	
Popup Elements
	
Based on Markup
	
Load Content
	
Transitions
	
Slide a Message
	
Lock Content
	
Dialogs
-	Utilities
	
Validation
	
Encoding
	
Transitions
	
Overlays

Top & Bottom HTML
 You can add top and/or bottom HTML that will always stay there. You can expand columns and if 
Preview
Some HTML
Hide
Level 1	
Level 1.1
	
Level 1.2
	
Level 1.3

Show
Level 2
Show
Level 3
Some HTML
Complete Code -   Copy & paste into your editor or fiddle with code online 

1
<!DOCTYPE html>
2
<html>
3
<head>
4
    <title>W2UI Demo: sidebar-8</title>
5
    <link rel="stylesheet" type="text/css" href="http://w2ui.com/src/w2ui-1.4.2.min.css" />
6
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
7
    <script type="text/javascript" src="http://w2ui.com/src/w2ui-1.4.2.min.js"></script>
8
</head>
9
<body>
10
 
11
<div id="sidebar" style="height: 300px; width: 200px;"></div>
12
 
13
<script type="text/javascript">
14
$(function () {
15
    $('#sidebar').w2sidebar({
16
        name       : 'sidebar',
17
        topHTML    : '<div style="background-color: #eee; padding: 10px 5px; border-bottom: 1px solid silver">Some HTML</div>',
18
        bottomHTML : '<div style="background-color: #eee; padding: 10px 5px; border-top: 1px solid silver">Some HTML</div>',
19
        nodes : [ 
20
            { id: 'level-1', text: 'Level 1', img: 'icon-folder', expanded: true, group: true,
21
              nodes: [ { id: 'level-1-1', text: 'Level 1.1', icon: 'fa-home' },
22
                       { id: 'level-1-2', text: 'Level 1.2', icon: 'fa-coffee' },
23
                       { id: 'level-1-3', text: 'Level 1.3', icon: 'fa-comment-alt' }
24
                     ]
25
            },
26
            { id: 'level-2', text: 'Level 2', img: 'icon-folder', group: true,
27
              nodes: [ { id: 'level-2-1', text: 'Level 2.1', icon: 'fa-star-empty' },
28
                       { id: 'level-2-2', text: 'Level 2.2', icon: 'fa-star-empty' },
29
                       { id: 'level-2-3', text: 'Level 2.3', icon: 'fa-star-empty' }
30
                     ]
31
            },
32
            { id: 'level-3', text: 'Level 3', img: 'icon-folder', group: true,
33
              nodes: [ { id: 'level-3-1', text: 'Level 3.1', icon: 'fa-star-empty' },
34
                       { id: 'level-3-2', text: 'Level 3.2', icon: 'fa-star-empty' },
35
                       { id: 'level-3-3', text: 'Level 3.3', icon: 'fa-star-empty' }
36
                     ]
37
            }
38
        ]
39
    });
40
});
41
</script>
42
 
43
</body>
44
</html>
