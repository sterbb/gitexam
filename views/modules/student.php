<main class="h-full pb-16 overflow-y-auto ">
  <div class="container px-6 mx-auto grid">
    <h2
      class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
    >
      Add Student
    </h2>

    <div
      class="px-8 py-8 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800 grid "
    >
      <form role="form" id="student-form" method="POST" autocomplete="nope">
  
        <div class="grid grid-cols-2">
          <h4 class="font-bold lg:col-span-1 dark:text-white">Personal Information</h4>
          <label class=" text-sm lg:col-span-1  flex justify-end">
              <select id="txt-status"
                class="block w-[180px] mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-yellow-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
              >
              <option value="Regular">Regular</option>
              <option value="Irregular">Irregular</option>
              <option value="Transferee">Transferee</option>
              <option value="Returnee">Returnee</option>
            </select>
          </label>
        </div>
        <div class="grid lg:grid-cols-11 gap-4 mt-4 lg:mt-6"> 
          
          <label class="block lg:col-span-2 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Student No.</span>
            <input
              class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-yellow-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
              readonly
              id="sID"
            />
          </label>

          <label class="block lg:col-span-3 text-sm">
            <span class="text-gray-700 dark:text-gray-400">First Name</span>
            <input
              class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-yellow-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
              id="let-fname"
            />
          </label>

          <label class="block lg:col-span-3 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Middle Name</span>
            <input
              class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-yellow-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
              id="let-mname"
            />
          </label>

          <label class="block lg:col-span-3 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Last Name</span>
            <input
              class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-yellow-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
              id="let-lname"
            />
          </label>

        </div>

        <div class="grid lg:grid-cols-11 gap-4 mt-4 lg:mt-6"> 
          
          <label class="block text-sm lg:col-span-2">
            <span class="text-gray-700 dark:text-gray-400">
              Gender
            </span>
            <select id="txt-gender"
              class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-yellow-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
            >
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </label>

          <label class="block text-sm lg:col-span-2">
            <span class="text-gray-700 dark:text-gray-400">Date of Birth</span>
            <!-- focus-within sets the color for the icon when input is focused -->
            <div
              class="relative text-gray-500 focus:border-yellow-400  dark:focus:border-yellow-400 "
            >
                <input datepicker="" datepicker-autohide type="text" id="txt-dob" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-400 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-400 datepicker-input" placeholder="Select date"/> 
              <div
                class="absolute inset-y-0 flex items-center ml-3 pointer-events-none"
              >
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">

                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                </svg>
              </div>
            </div>
          </label>

             
          <label class="block text-sm lg:col-span-4">
            <span class="text-gray-700 dark:text-gray-400">
              Course
            </span>
            <select id="txt-course"
              class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-yellow-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
            >
              <option value="BSIT">Bachelor of Science in Information System</option>
              <option value="BSA">Bachelor of Science in Accountancy </option>
            </select>
          </label>

          
          <label class="block lg:col-span-3 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Class Section</span>
            <input
              class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-yellow-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
              id="tns-csection"
            />
          </label>

        </div>

        <div class="grid lg:grid-cols-6 gap-8 mt-4 lg:mt-6">

          <label class="block lg:col-span-2 text-sm ">
            <span class="text-gray-700 dark:text-gray-400">Contact No.</span>
            <input
              class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-yellow-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
              id="num-cnum"
            />
          </label>

          <label class="block lg:col-span-3 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Email</span>
            <input
              class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-yellow-400 focus:outline-none focus:shadow-outline-yellow dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
              id="tns-email"
            />
          </label>
        </div>

        <h4 class="font-bold mt-10 dark:text-white">Additional Information</h4>
     

        <div class="grid lg:grid-cols-6 gap-8 mt-4">

          <label class="block lg:col-span-2 text-sm ">
            <span class="text-gray-700 dark:text-gray-400">Emergency No.</span>
            <input
              class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-yellow-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
              id="num-enum"
            />
          </label>

          <label class="block lg:col-span-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Address</span>
            <textarea
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-yellow-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                  rows="1"
                  id="tns-address"
            ></textarea>
          </label>
        </div>


        <div class="justify-center items-center text-center lg:float-right mt-20 flex">
            <button type="submit" class="flex items-center   mr-6 px-3 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-yellow-600 border border-transparent rounded-lg active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-green" id="btn-save">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2 -ml-1">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
              </svg>
            Add Student
          </button>

            <button type="button" class=" flex items-center   mr-6 px-3 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-white" id="btn-clear"> 
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2 -ml-1">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9.75L14.25 12m0 0l2.25 2.25M14.25 12l2.25-2.25M14.25 12L12 14.25m-2.58 4.92l-6.375-6.375a1.125 1.125 0 010-1.59L9.42 4.83c.211-.211.498-.33.796-.33H19.5a2.25 2.25 0 012.25 2.25v10.5a2.25 2.25 0 01-2.25 2.25h-9.284c-.298 0-.585-.119-.796-.33z" />
              </svg>
            Clear
          </button>
        
            <button      @click="openModal" type="button" class="flex items-center   mr-6 px-3 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-gray-600 border border-transparent rounded-lg active:bg-gray-600 hover:bg-gray-700 focus:outline-none focus:shadow-outline-gray" id="btn-search">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2 -ml-1">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>Search</button>
        </div>

        


      </form>
    </div>
    
 


   

 
  </div>
</main>

<!-- Modal backdrop. This what you want to place close to the closing body tag -->
    <div
      x-show="isModalOpen"
      x-transition:enter="transition ease-out duration-150"
      x-transition:enter-start="opacity-0"
      x-transition:enter-end="opacity-100"
      x-transition:leave="transition ease-in duration-150"
      x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0"
      class="fixed inset-0 z-30 flex items-center bg-black bg-opacity-50 sm:items-center sm:justify-center"
    >
      <!-- Modal -->
      <div
        x-show="isModalOpen"
        x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0 transform translate-y-1/2"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0  transform translate-y-1/2"
        @click.away="closeModal"
        @keydown.escape="closeModal"
        class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-[76rem]"
        role="dialog"
        id="modal"
      >
        <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
        <header class="flex justify-end">
          <button
            class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700"
            aria-label="close"
            @click="closeModal"
          >
            <svg
              class="w-4 h-4"
              fill="currentColor"
              viewBox="0 0 20 20"
              role="img"
              aria-hidden="true"
            >
              <path
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"
                fill-rule="evenodd"
              ></path>
            </svg>
          </button>
        </header>
        <!-- Modal body -->
        <h4 class="mb-2 text-lg font-semibold text-gray-700 dark:text-gray-300 uppercase">Student Table</h4>
        <div class="relative right-0 flex justify-end ">
                  <input type="text" id="table-search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-yellow-500 focus:border-yellow-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500" placeholder="Search for items">
          </div>
        <div class="mt-4 mb-6 w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full h-[500px] overflow-x-auto overflow-y-auto">
              <label for="table-search" class="sr-only">Search</label>
             
                <table class="w-full whitespace-no-wrap studentTable">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                      <th class="px-4 py-3 uppercase">Student id</th>
                      <th class="px-4 py-3 uppercase">Name</th>
                      <th class="px-4 py-3 uppercase">Status</th>
                      <th class="px-4 py-3 uppercase">Course</th>
                      <th class="px-4 py-3 uppercase">Section</th>
                      <th class="px-4 py-3 uppercase">Actions</th>
                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >
                  <?php
                  $student = (new ControllerStudent) -> ctrShowStudentList();
                  foreach ($student as $key => $value){
                    echo'
      
                    <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3 text-sm">
                        '.$value["studentid"].'
                      </td>
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                          <!-- Avatar with inset shadow -->
                          <div
                            class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                          >
                            <img
                              class="object-cover w-full h-full rounded-full"
                              src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                              alt=""
                              loading="lazy"
                            />
                            <div
                              class="absolute inset-0 rounded-full shadow-inner"
                              aria-hidden="true"
                            ></div>
                          </div>
                          <div>
                            <p class="font-semibold">'.$value["studentname"].'</p>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        '.$value["stats"].'
                      </td>
                      <td class="px-4 py-3 text-xs">
                       '.$value["course"].'
                      </td>
                      <td class="px-4 py-3 text-sm">
                        '.$value["section"].'
                      </td>
                      <td class="px-4 py-3">
                        <div class="flex items-center space-x-4 text-sm">
                          <button
                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-yellow-400 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                            aria-label="Edit"
                          >
                            <svg
                              class="w-5 h-5"
                              aria-hidden="true"
                              fill="currentColor"
                              viewBox="0 0 20 20"
                            >
                              <path
                                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                              ></path>
                            </svg>
                          </button>
                          <button
                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                            aria-label="Delete"
                          >
                            <svg
                              class="w-5 h-5"
                              aria-hidden="true"
                              fill="currentColor"
                              viewBox="0 0 20 20"
                            >
                              <path
                                fill-rule="evenodd"
                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                clip-rule="evenodd"
                              ></path>
                            </svg>
                          </button>
                        </div>
                      </td>
                    </tr>
                    ';
                  }
                    ?>
                  </tbody>
                </table>
                
              </div>
      </div>
    </div>
    <!-- End of modal backdrop -->