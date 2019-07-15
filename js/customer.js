    var rIndex,
        table = document.getElementById("table");
    //Ashen Koralage (CodexGeeks)
    function selectedRow() {
        for (var i = 1; i < table.rows.length; i++) {
            table.rows[i].onclick = function () {
                rIndex = this.rowIndex;
                document.getElementById("customerID").value = this.cells[0].innerHTML;
                document.getElementById("custFirstName").value = this.cells[1].innerHTML;
                document.getElementById("custLastName").value = this.cells[2].innerHTML;
                document.getElementById("custAddress").value = this.cells[3].innerHTML;
                document.getElementById("custSalary").value = this.cells[4].innerHTML;

            };
        }
    }

    selectedRow();

    function removeRow() {
        table.deleteRow(rIndex);
        document.getElementById("customerID").value = "";
        document.getElementById("custFirstName").value = "";
        document.getElementById("custLastName").value = "";
        document.getElementById("custAddress").value = "";
        document.getElementById("custSalary").value = "";
    }


    function checkEmptyDetails() {
        var isEmpty = false;
        customerID = document.getElementById("customerID").value,
            custFirstName = document.getElementById("custFirstName").value,
            custLastName = document.getElementById("custLastName").value,
            custAddress = document.getElementById("custAddress").value,
            custSalary = document.getElementById("custSalary").value;

        if (customerID == "") {
            alert("! Customer ID Cannot Be Empty ")
            isEmpty = true;
        }
        if (custFirstName == "") {
            alert("! Name Cannot Be Empty")
            isEmpty = true;
        }
        if (custLastName == "") {
            alert("! Last Name Cannot Be Empty")
            isEmpty = true;
        }
        if (custAddress == "") {
            alert("! Address Cannot Be Empty")
            isEmpty = true;
        }

        if (custSalary == "") {
            alert("! Salary Cannot Be Empty")
            isEmpty = true;
        }
        return isEmpty;
    }

    function updatedetails() {
        var customerID = document.getElementById("customerID").value,
            custFirstName = document.getElementById("custFirstName").value,
            custLastName = document.getElementById("custLastName").value,
            custAddress = document.getElementById("custAddress").value,
            custSalary = document.getElementById("custSalary").value;
        if (!checkEmptyDetails()) {
            table.rows[rIndex].cells[0].innerHTML = customerID;
            table.rows[rIndex].cells[1].innerHTML = custFirstName;
            table.rows[rIndex].cells[2].innerHTML = custLastName;
            table.rows[rIndex].cells[3].innerHTML = custAddress;
            table.rows[rIndex].cells[4].innerHTML = custSalary;
        }
    }

    function addCustomer() {
        if (!checkEmptyDetails()) {
            var table = document.getElementById("table"),
                newRow = table.insertRow(table.length),
                cell1 = newRow.insertCell(0),
                cell2 = newRow.insertCell(1),
                cell3 = newRow.insertCell(2),
                cell4 = newRow.insertCell(3),
                cell5 = newRow.insertCell(4),

                customerID = document.getElementById("customerID").value,
                custFirstName = document.getElementById("custFirstName").value,
                custLastName = document.getElementById("custLastName").value,
                custAddress = document.getElementById("custAddress").value,
                custSalary = document.getElementById("custSalary").value;

            cell1.innerHTML = customerID;
            cell2.innerHTML = custFirstName;
            cell3.innerHTML = custLastName;
            cell4.innerHTML = custAddress;
            cell5.innerHTML = custSalary;

            selectedRow();
        }

    }