var rIndex,
    table = document.getElementById("example1");

function selectedRow() {
    for (var i = 1; i < table.rows.length; i++) {
        table.rows[i].onclick = function () {
            rIndex = this.rowIndex;
            document.getElementById("ItemCode").value = this.cells[0].innerHTML;
            document.getElementById("ItemName").value = this.cells[1].innerHTML;
            document.getElementById("ItemQty").value = this.cells[2].innerHTML;
            document.getElementById("ItemPrice").value = this.cells[3].innerHTML;

        };
    }
}

selectedRow();

function removeRow() {
    table.deleteRow(rIndex);
    document.getElementById("ItemCode").value = "";
    document.getElementById("ItemName").value = "";
    document.getElementById("ItemQty").value = "";
    document.getElementById("ItemPrice").value = "";

}


function checkEmptyDetails() {
    var isEmpty = false;
    ItemCode = document.getElementById("ItemCode").value,
        ItemName = document.getElementById("ItemName").value,
        ItemQty = document.getElementById("ItemQty").value,
        ItemPrice = document.getElementById("ItemPrice").value,


    if (ItemCode == "") {
        alert("! Customer ID Cannot Be Empty ")
        isEmpty = true;
    }
    if (ItemName == "") {
        alert("! Name Cannot Be Empty")
        isEmpty = true;
    }
    if (ItemQty == "") {
        alert("! Last Name Cannot Be Empty")
        isEmpty = true;
    }
    if (ItemPrice == "") {
        alert("! Address Cannot Be Empty")
        isEmpty = true;
    }

//     if (custSalary == "") {
//         alert("! Salary Cannot Be Empty")
//         isEmpty = true;
//     }
//     return isEmpty;
// }

    function updatedetails() {
        var ItemCode = document.getElementById("ItemCode").value,
            ItemName = document.getElementById("ItemName").value,
            ItemQty = document.getElementById("ItemQty").value,
            ItemPrice = document.getElementById("ItemPrice").value,
            if
        (!checkEmptyDetails())
        {

            table.rows[rIndex].cells[0].innerHTML = ItemCode;
            table.rows[rIndex].cells[1].innerHTML = ItemName;
            table.rows[rIndex].cells[2].innerHTML = ItemQty;
            table.rows[rIndex].cells[3].innerHTML = ItemPrice;

        }
    }

    function additem() {
        if (!checkEmptyDetails()) {
            var table = document.getElementById("table"),
                newRow = table.insertRow(table.length),
                cell1 = newRow.insertCell(0),
                cell2 = newRow.insertCell(1),
                cell3 = newRow.insertCell(2),
                cell4 = newRow.insertCell(3),
                cell5 = newRow.insertCell(4),

                ItemCode = document.getElementById("ItemCode").value,
                ItemName = document.getElementById("ItemName").value,
                ItemQty = document.getElementById("ItemQty").value,
                ItemPrice = document.getElementById("ItemPrice").value,


                cell1
        .
            innerHTML = ItemCode;
            cell2.innerHTML = ItemName;
            cell3.innerHTML = ItemQty;
            cell4.innerHTML = ItemPrice;


            selectedRow();
        }

    }
}