 Collapse | Copy Code
<html>
<head>
<script> // This function will pop a window which will tell the 
	// user the order of fields  and format of .csv file
	// you can create pop_up_csv.html file in same directory and 
	// modify it with required format
                 function popitup(url)
                {
                        new_wind=window.open(url,'name','height=700,width=1500');
                        if (window.focus) {new_wind.focus();
                        return false;
}
                }
        </script>
</head>
<body>
<!--  Adding  searchable query data ( File => Table ) -->
Add  data : The file should be a .csv file  <a href="pop_up_csv.html" 
	onclick="return popitup('pop_up_csv.html')"
  > Check the format here </a> </br></br>
<!-- On browsing of a file when you will click on button this page 
	will be directed to add_data_BE.php-->
        <form action="add_data_BE.php" method="post" enctype="multipart/form-data">
                <label for="file">   </label>
                <input  type="file" name="file" id="file" />
          </br></br>      <input type="submit" value="Load data file into database" 
			name="button1"/>
        </form>
</div>
</body>
                </html>