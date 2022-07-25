function Get_Row_No_of_table_with_Data(data, id,col_no_of_data) //function searches the table for the data and returns the row number of the table where it finds the data(rows start with 0 , with heading being row 0 , col starts with 0) 
{
    var table = document.getElementById(id);
    for (var i = 1; i < table.rows.length; i++) {
        var val = table.rows[i].cells[col_no_of_data].innerHTML;
        if (data == val)
            return i;
    }
    return -1;
}

function insert_row_with_data(data, id) //function that inserts a row at the starting with passed data (data seperated by commas)
{
    var table = document.getElementById(id);
    var row = table.insertRow(1); //inserting at the first index (since index 0 is heading)
    var data = data.split(",");
    for(var i=0;i<data.length;i++)
    {
        var cell = row.insertCell(i);  //inserting at the ith col 
        cell.innerHTML = data[i];
    }
}

function delete_row_with_data(data, id,col_no_of_data) //this function deletes a row which matched the content of the data passed , in the specified coloumn
{
    var table = document.getElementById(id);
    var index = Get_Row_No_of_table_with_Data(data, id,col_no_of_data);
    if(index != -1)
    table.deleteRow(index);
    else
     alert("data not found in table");
}


insert_row_with_data("saksham,1234","my_table");
insert_row_with_data("saksham,12345","my_table");
//delete_row_with_data("saksham","my_table",0);
