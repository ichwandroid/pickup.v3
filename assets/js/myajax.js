$(document).ready(function () {
  //Ajax code for insert data
  $("#btnAdd").click(function (e) {
    e.preventDefault();
    // console.log('Btn Add Clicked');
    let n = $("#nis").val();
    let s = $("#status").val();
    let mydata = { nis: n, status: s };
    $.ajax({
      url: "config/insertData.php",
      method: "post",
      data: mydata,
      success: function (data) {
        console.log(data);
      },
    });
    $("#inputForm")[0].reset();
  });

  // Ajax code for read data
  function show_data() {
    let output = "";
    $.ajax({
      url: "config/getData.php",
      method: "get",
      dataType: "json",
      success: function (data) {
        // console.log(data[0].NIS);
        x = data;
        for (let i = 0; i < x.length; i++) {
          output +=
            "<tr class='text-gray-700 dark:text-gray-400'><td class='px-4 py-3'><div class='flex items-center text-sm'><div class='relative hidden w-8 h-8 mr-3 rounded-full md:block'><img class='object-cover w-full h-full rounded-full' src='https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp&f=y' alt='' loading='lazy'/><div class='absolute inset-0 rounded-full shadow-inner' aria-hidden='true'></div></div><div><p class='font-semibold'>" +
            x[i].NAMA_LENGKAP +
            "</p><p class='text-xs text-gray-600 dark:text-gray-400'>" +
            x[i].NIS +
            "</p></div></div></td><td class='px-4 py-3 text-xs'>" +
            x[i].KELAS +
            "</td><td class='px-4 py-3 text-xs'><span class='px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100'>" +
            x[i].STATUS +
            "</span></td><td class='px-4 py-3 text-xs'>" +
            x[i].TIMESCAN +
            "</td><td><div class='flex items-center space-x-4 text-xs'><button id='btnEdit' data-sid=" +
            x[i].NIS +
            " class='flex items-center justify-between px-2 py-2 text-xs font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray' aria-label='Edit'><svg class='w-5 h-5' aria-hidden='true' fill='currentColor' viewBox='0 0 20 20'><path d='M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z'></path></svg></button><button id='btnDelete' data-sid=" +
            x[i].NIS +
            " class='flex items-center justify-between px-2 py-2 text-xs font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray' aria-label='Delete'><svg class='w-5 h-5' aria-hidden='true' fill='currentColor' viewBox='0 0 20 20'><path fill-rule='evenodd' d='M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z' clip-rule='evenodd'></path></svg></button></div></td></tr>";
        }
        $("#tbody").html(output);
      },
    });
  }
  show_data();

  // Ajax code for delete data
  $("#tbody").on("click", "#btnDelete", function () {
    console.log("Btn Delete Clicked");
    let nis = $(this).attr("data-sid");
    console.log(nis);
    let mydata = { nis: nis };
    $.ajax({
      url: "config/getDelete.php",
      method: "post",
      data: mydata,
      success: function (data) {
        console.log(data);
      },
    });
    show_data();
  });
});
