
$(function(){
  if(window.location.href == "http://localhost/github_exam/gitexam/student"){
    $(".bnavemployee").removeClass("bg-black/80");
    $(".navemployee").removeClass("bg-yellow-600");
    $(".bnavstudent").addClass("bg-black/80");
    $(".navstudent").addClass("bg-yellow-600");
  }else if(window.location.href == "http://localhost/github_exam/gitexam/employee"){
    $(".bnavemployee").addClass("bg-black/80");
    $(".navemployee").addClass("bg-yellow-600");
    $(".bnavstudent").removeClass("bg-black/80");
    $(".navstudent").removeClass("bg-yellow-600");
  }
    

  $('#student-form input[id^="num"]').on("keypress", function(e) {
    return _helper.isNumeric(e) ? true : e.preventDefault();
  });

  $('#student-form input[id^="tns"]').on("keypress", function(e) {
      return _helper.allChars(e) ? true : e.preventDefault();
  });
  $('#student-form input[id^="let"]').on("keypress", function(e) {
    return _helper.isAlpha(e) ? true : e.preventDefault();
  });

  //clear input
  $("#btn-clear").on("click", function(){
    clear();
  });

  $("#student-form").on("submit", function(e){
      e.preventDefault();
      addStudent();
  });

  $("#table-search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".studentTable tbody tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });



});


  function addStudent(){
    swal.fire({
      icon: 'question',
      title: 'Do you want add this student?',
      type: 'question',
      showCancelButton: true,
      confirmButtonText: 'Yes',
      cancelButtonText: 'Cancel!',
      confirmButtonClass: 'text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800',
      cancelButtonClass: 'text-red-700 hover:text-white border border-red-700 hover:bg-red-800  focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900',
      allowOutsideClick: false,
      buttonsStyling: false
  }).then(function(result) {
      if (result.value) {
 
        var sID = $("#sID").val();
        var fname = $("#let-fname").val();
        var mname = $("#let-mname").val();
        var lname = $("#let-lname").val();
        var section = $("#tns-csection").val();
        var e_num = $("#num-enum").val();
        var address = $("#tns-address").val();
        var status = $("#txt-status").val();
        var gender = $("#txt-gender").val();
        var course = $("#txt-course").val();
        var email = $("#tns-email").val();
        var c_num = $("#num-cnum").val();

        var dob_e = new Date($("#txt-dob").val()).toLocaleDateString('fr-CA');
        var dob = dob_e;

        var student = new FormData();
        student.append("sID", sID);
        student.append("fname", fname);
        student.append("mname", mname);
        student.append("lname", lname);
        student.append("section", section);
        student.append("e_num", e_num);
        student.append("address", address);
        student.append("status", status);
        student.append("gender", gender);
        student.append("dob", dob);
        student.append("course", course);
        student.append("email", email);
        student.append("c_num", c_num);

        $.ajax({
          url: "ajax/student_save_record.ajax.php",
          method: "POST",
          data: student,
          cache: false,
          contentType: false,
          processData: false,
          dataType: "text",
          success: function(answer) {
              initialize();
              $( ".studentTable" ).load( "student .studentTable" );


          },
          error: function() {
              alert("Oops. Something went wrong!");
          },
          complete: function() {
              swal.fire({
                  icon: 'success',
                  title: 'Student details successfully saved!',
                  type: 'success',
                  confirmButtonText: 'Got it!',
                  confirmButtonClass: 'text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800',
                  allowOutsideClick: false,
                  buttonsStyling: false
              }).then(function(result) {
                  if (result.value) {
                    
                  }
              })
          }
        });
      }
  });
  }

  function clear(){
    $("#let-fname").focus();
    swal.fire({
        icon: 'question',
        title: 'Clear inputs?',
        type: 'question',
        showCancelButton: true,
        confirmButtonText: 'Yes',
        cancelButtonText: 'Cancel!',
        confirmButtonClass: 'text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800',
        cancelButtonClass: 'text-red-700 hover:text-white border border-red-700 hover:bg-red-800  focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900',
        allowOutsideClick: false,
        buttonsStyling: false
    }).then(function(result) {
        if (result.value) {
            initialize();
        }
    });
  }

  function initialize(){
    $("#let-fname").val('');
    $("#let-mname").val('');
    $("#let-lname").val('');
    $("#tns-csection").val('');
    $("#num-enum").val('');
    $("#tns-address").val('');
    $("#txt-status").val('');
    $("#txt-gender").val('');
    $("#txt-dob").val('');
    $("#txt-course").val('');
    $("#tns-email").val('');
    $("#num-cnum").val('');

  }