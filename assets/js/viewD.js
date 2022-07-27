var calendar = document.getElementById("calendar-table");
var gridTable = document.getElementById("table-body");
var currentDate = new Date();
var selectedDate = currentDate;
var selectedDayBlock = null;
var globalEventObj = {};

var sidebar = document.getElementById("sidebar");

function createCalendar(date, side) {
   var currentDate = date;
   var startDate = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);

   var monthTitle = document.getElementById("month-name");
   var monthName = currentDate.toLocaleString("en-US", {
      month: "long"
   });
   var yearNum = currentDate.toLocaleString("en-US", {
      year: "numeric"
   });
   monthTitle.innerHTML = `${monthName} ${yearNum}`;

   if (side == "left") {
      gridTable.className = "animated fadeOutRight";
   } else {
      gridTable.className = "animated fadeOutLeft";
   }

   setTimeout(() => {
      gridTable.innerHTML = "";

      var newTr = document.createElement("div");
      newTr.className = "row";
      var currentTr = gridTable.appendChild(newTr);

      for (let i = 1; i < (startDate.getDay() || 7); i++) {
         let emptyDivCol = document.createElement("div");
         emptyDivCol.className = "col empty-day";
         currentTr.appendChild(emptyDivCol);
      }

      var lastDay = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0);
      lastDay = lastDay.getDate();

      for (let i = 1; i <= lastDay; i++) {
         if (currentTr.children.length >= 7) {
            currentTr = gridTable.appendChild(addNewRow());
         }
         let currentDay = document.createElement("div");
         currentDay.className = "col";
         if (selectedDayBlock == null && i == currentDate.getDate() || selectedDate.toDateString() == new Date(currentDate.getFullYear(), currentDate.getMonth(), i).toDateString()) {
            selectedDate = new Date(currentDate.getFullYear(), currentDate.getMonth(), i);

            document.getElementById("eventDayName").innerHTML = selectedDate.toLocaleString("en-US", {
               month: "long",
               day: "numeric",
               year: "numeric"
            });

            selectedDayBlock = currentDay;
            setTimeout(() => {
               currentDay.classList.add("blue");
               currentDay.classList.add("lighten-3");
            }, 900);
         }
         currentDay.innerHTML = i;

         //show marks
         if (globalEventObj[new Date(currentDate.getFullYear(), currentDate.getMonth(), i).toDateString()]) {
            let eventMark = document.createElement("div");
            eventMark.className = "day-mark";
            currentDay.appendChild(eventMark);
         }

         currentTr.appendChild(currentDay);
      }

      for (let i = currentTr.getElementsByTagName("div").length; i < 7; i++) {
         let emptyDivCol = document.createElement("div");
         emptyDivCol.className = "col empty-day";
         currentTr.appendChild(emptyDivCol);
      }

      if (side == "left") {
         gridTable.className = "animated fadeInLeft";
      } else {
         gridTable.className = "animated fadeInRight";
      }

      function addNewRow() {
         let node = document.createElement("div");
         node.className = "row";
         return node;
      }

   }, !side ? 0 : 270);
}

createCalendar(currentDate);

var todayDayName = document.getElementById("todayDayName");
todayDayName.innerHTML = "Today is " + currentDate.toLocaleString("en-US", {
   weekday: "long",
   day: "numeric",
   month: "short"
});

var prevButton = document.getElementById("prev");
var nextButton = document.getElementById("next");

prevButton.onclick = function changeMonthPrev() {
   currentDate = new Date(currentDate.getFullYear(), currentDate.getMonth() - 1);
   createCalendar(currentDate, "left");
}
nextButton.onclick = function changeMonthNext() {
   currentDate = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1);
   createCalendar(currentDate, "right");
}
















function print(clear = false, init = false, edit = false) {
    if (clear != false){
        $("#appointment_list > tbody").html("");
        return true;
    };
    var data = localStorage.getItem("tbAppointment");
    data = JSON.parse(data);
    if (data[0] !== null) {
        $("#appointment_list > tbody").html("");
        $(`.week td.active`).removeClass('badge1');
        $(`.week td.active`).removeAttr( "data-badge" );
        let date = [];
        if (data.length !== 0) {
            for (let i = 0; i < data.length; i++) {
                const element = data[i];
                $("#appointment_list > tbody").append(
                    `
                    <tr>
                        <td class="text-center align-middle">${element.name}</td>
                        <td class="text-center align-middle">${element.phn}</td>
                        <td class="text-center align-middle">${element.mail}</td>
                        <td class="text-center align-middle">${element.date}</td>
                        <td class="text-center align-middle">${element.stime}</td>
                        <td class="text-center align-middle">${element.etime}</td>
                        <td class="text-center align-middle">${element.Aplace}</td>
                        <td class="text-center align-middle">
                            <button class="btn btn-primary btn-sm " onclick="confirm_appointment(${element.id})"><i class="fas fa-check-square"></i></button>
                            <button class="btn btn-danger btn-sm " onclick="delete_appointment(${element.id})"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    `
                );
                let currDate = element.date.split("/");
                date.push(currDate[0]);
            }
            date = [...new Set(date)];
            date.forEach(element => {
                let cell = document.querySelector(`.week > td.active[data-day='${element}']`);
                put_badges_new(cell);
            });
        } else {
            let element = document.querySelector(`.week > td.active[data-badge]`);
            if (element !== null) {
                put_badges_new(element);
            }
        }
    }
}

function confirm_appointment(id){
    var data = localStorage.getItem("tbAppointment");
    data = JSON.parse(data);
    if (data[0] !== null) {
        for (let i = 0; i < data.length; i++) {
            const element = data[i];
            print(true,false);
            iziToast.success({
                title: 'Success',
                message: 'Appointment confirmed',
            });
        }
    }
}

function delete_appointment(id){
    var data = localStorage.getItem("tbAppointment");
    data = JSON.parse(data);
    if (data[0] !== null) {
        for (let i = 0; i < data.length; i++) {
            const element = data[i];
            if (element == null) {
                data.splice(i, 1);
            }
            if (element.id == id) {
                data.splice(i, 1);
            }
        }
        data = data.filter(function (el) {
            return el != null;
        });

        localStorage.setItem('tbAppointment', JSON.stringify(data));
        print(false, false, true);
        iziToast.success({
            title: 'Success',
            message: 'Appointment deleted',
        });

    }
};


function put_badges_new(cell) {
    var data = localStorage.getItem("tbAppointment");
    data = JSON.parse(data);
    if (data[0] !== null) {
        let counter = 0;
        for (let i = 0; i < data.length; i++) {
            const element = data[i];
            if (cell.getAttribute("data-day") == element.date.slice(0,2)) {
                counter++;
            }
        }

        if (counter >= 1) {
            cell.classList.add("badge1");
            cell.setAttribute('data-badge', counter);
        }
        if (counter <= 0) {
            cell.classList.remove("badge1");
            cell.removeAttribute('data-badge');
        }
    }
}

// function sort_database(data){
//     return data.sort(function (sTime1, sTime2) {
//         let temp3 = parseInt(sTime1.date.slice(0,1))
//         let temp4 = parseInt(sTime2.date.slice(0,1))
//         let temp1 = Date.parse(get_Date(sTime1.start_time));
//         let temp2 = Date.parse(get_Date(sTime2.start_time));


//         if (temp3 > temp4) return 1;
//         if (temp3 < temp4) return -1;
//         if (temp1 > temp2) return -1;
//         if (temp1 < temp2) return 1;
//     });
// }