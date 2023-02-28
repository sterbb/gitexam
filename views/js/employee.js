
$(function(){


    $('#employee-form input[id^="num"]').on("keypress", function(e) {
      return _helper.isNumeric(e) ? true : e.preventDefault();
    });
  
    $('#employee-form input[id^="tns"]').on("keypress", function(e) {
        return _helper.allChars(e) ? true : e.preventDefault();
    });
    $('#employee-form input[id^="let"]').on("keypress", function(e) {
      return _helper.isAlpha(e) ? true : e.preventDefault();
    });
  
    //clear input
    $("#btn-eclear").on("click", function(){
      clear();
    });
  
    $("#employee-form").on("submit", function(e){
        e.preventDefault();
        addEmployee();
    });
    
    $("#table-esearch").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $(".employeeTable tbody tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
  
  
  });
  

    function addEmployee(){
      swal.fire({
        icon: 'question',
        title: 'Do you want add this employee?',
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
   
          var empID = $("#empID").val();
          var fname = $("#let-efname").val();
          var mname = $("#let-emname").val();
          var lname = $("#let-elname").val();
          var address = $("#tns-eaddress").val();
          var gender = $("#txt-egender").val();
          var email = $("#tns-eemail").val();
          var c_num = $("#num-ecnum").val();
          var department = $("#txt-department").val();
          var designation = $("#txt-designation").val();
          var emptype = $("#txt-emptype").val();
  
          var dob_e = new Date($("#txt-edob").val()).toLocaleDateString('fr-CA');
          var dob = dob_e;

          var hdate_e = new Date($("#txt-hdate").val()).toLocaleDateString('fr-CA');
          var hdate = hdate_e;
  
          var employee = new FormData();
          employee.append("empid", empID);
          employee.append("fname", fname);
          employee.append("mname", mname);
          employee.append("lname", lname);
          employee.append("department", department);
          employee.append("designation", designation);
          employee.append("address", address);
          employee.append("emptype", emptype);
          employee.append("gender", gender);
          employee.append("dob", dob);
          employee.append("hdate", hdate);
          employee.append("email", email);
          employee.append("c_num", c_num);
  
          $.ajax({
            url: "ajax/employee_save_record.ajax.php",
            method: "POST",
            data: employee,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "text",
            success: function(answer) {
                initialize();
                $( ".employeeTable" ).load("employee .employeeTable");
  
  
            },
            error: function() {
                alert("Oops. Something went wrong!");
            },
            complete: function() {
                swal.fire({
                    icon: 'success',
                    title: 'Employee details successfully saved!',
                    type: 'success',
                    confirmButtonText: 'Got it!',
                    confirmButtonClass: 'text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800',
                    allowOutsideClick: false,
                    buttonsStyling: false
                }).then(function(result) {
                    if (result.value) {
                      console.log(result);
                      initialize();
  
                    }
                })
            }
          })
        }
    });
    }
  
    function clear(){
      $("#let-efname").focus();
      swal.fire({
          icon: 'question',
          title: 'Clear Inputs?',
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
   $("#let-efname").val('');
   $("#let-emname").val('');
   $("#let-elname").val('');
   $("#txt-emptype").val('');
   $("#txt-designation").val('');
   $("#tns-address").val('');
   $("#txt-department").val('');
   $("#txt-egender").val('');
   $("#txt-edob").val('');
   $("#txt-hdate").val('');
   $("#tns-email").val('');
   $("#num-ecnum").val('');

  }