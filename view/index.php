<?php require_once 'include/header.php'; ?>
<?php require_once 'include/navbar.php'; ?>
<div class="  bg-gradient-to-r from-violet-100 to-indigo-100 flex flex-col items-center justify-center h-full p-2">
    <section class="container mx-auto my-4">
        <div class=" flex flex-wrap -mx-3">

            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p class="mb-0 font-sans font-semibold leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Today's Money</p>
                                    <h5 class="mb-2 font-bold dark:text-white">$53,000</h5>
                                    <p class="mb-0 dark:text-white dark:opacity-60">
                                        <span class="font-bold leading-normal text-sm text-emerald-500">+55%</span>
                                        since yesterday
                                    </p>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-blue-500 to-violet-500">
                                    <i class="ni ni-money-coins text-lg relative top-3.5 text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p class="mb-0 font-sans font-semibold leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Today's Users</p>
                                    <h5 class="mb-2 font-bold dark:text-white">2,300</h5>
                                    <p class="mb-0 dark:text-white dark:opacity-60">
                                        <span class="font-bold leading-normal text-sm text-emerald-500">+3%</span>
                                        since last week
                                    </p>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-red-600 to-orange-600">
                                    <i class="ni ni-world text-lg relative top-3.5 text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p class="mb-0 font-sans font-semibold leading-normal uppercase dark:text-white dark:opacity-60 text-sm">New Clients</p>
                                    <h5 class="mb-2 font-bold dark:text-white">+3,462</h5>
                                    <p class="mb-0 dark:text-white dark:opacity-60">
                                        <span class="font-bold leading-normal text-red-600 text-sm">-2%</span>
                                        since last quarter
                                    </p>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-emerald-500 to-teal-400">
                                    <i class="ni ni-paper-diploma text-lg relative top-3.5 text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
                <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p class="mb-0 font-sans font-semibold leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Sales</p>
                                    <h5 class="mb-2 font-bold dark:text-white">$103,430</h5>
                                    <p class="mb-0 dark:text-white dark:opacity-60">
                                        <span class="font-bold leading-normal text-sm text-emerald-500">+5%</span>
                                        than last month
                                    </p>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-orange-500 to-yellow-500">
                                    <i class="ni ni-cart text-lg relative top-3.5 text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="w-11/12  backdrop-blur-sm bg-white/40 p-6 rounded-lg shadow-sm border-violet-200 border">
        <div class="w-full flex justify-between items-center p-3">
            <h2 class="text-xl font-semibold">My Project</h2>
            <button id="openModalBtn" class="flex items-center bg-gradient-to-r from-violet-300 to-indigo-300 hover:from-violet-900 hover:to-indigo-900  border border-fuchsia-00 hover:border-violet-100 text-white font-semibold py-2 px-4 rounded-md transition-colors duration-300">
                <svg class="w-4 h-4 mr-2 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                <p class="text-white">New Project</p>
            </button>
        </div>
        <div class="w-full flex justify-center p-1 mb-4">
            <div class="relative  flex justify-between w-full">
                <input type="search" class="w-1/3 backdrop-blur-sm bg-white/20 py-2 pl-10 pr-4 rounded-lg focus:outline-none border-2 border-gray-100 focus:border-violet-300 transition-colors duration-300" placeholder="Search...">
                <select name="filter" id="filterSelect" class="w-60 backdrop-blur-sm bg-white/20 py-2 pl-10 pr-4 rounded-lg focus:outline-none border-2 border-gray-100 focus:border-violet-300 transition-colors duration-300">
                    <option value="1" selected>All</option>
                    <option value="2">My creation</option>
                    <option value="3">Assigned to me</option>
                </select>
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4" id="resultContainer">

        </div>
    </div>
</div>
<!-- Modal -->
<div id="myModal" class="hidden fixed inset-0 z-10 overflow-hidden backdrop-blur-lg  flex items-center justify-center transition-transform duration-300">
    <div class="modal-container p-6 backdrop-blur-sm bg-white/90 w-11/12 sm:w-11/12 md:w-8/12 lg:w-6/12 rounded-md shadow-sm">
        <h2 class="text-2xl font-semibold mb-6">Create New Project</h2>
        <form action="">
            <!-- component -->
            <div class="flex items-center justify-center p-12">
                <!-- Author: FormBold Team -->
                <!-- Learn More: https://formbold.com -->
                <div class="mx-auto w-full max-w-[550px]">
                    <form action="https://formbold.com/s/FORM_ID" method="POST">
                        <div class="mx-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="titre" class="mb-3 block text-base font-medium text-[#07074D]">
                                        Titre
                                    </label>
                                    <input type="text" name="titre" id="titre" placeholder="Titre" class="w-full h-14 rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="Description" class="mb-3 block text-base font-medium text-[#07074D]">
                                        Description
                                    </label>
                                    <textarea type="text" name="Description" id="Description" placeholder="Description" class="w-full h-14  rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="mx-3 mb-5 ">
                            <label for="titre" class="mb-3 block text-base font-medium text-[#07074D]">
                                Priorite
                            </label>
                            <select type="text" name="priorite" id="priorite" class="w-full h-14 rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none ">
                                <?php

                                foreach ($data['priorites'] as $item) :
                                ?>
                                    <option class="text-white bg-<?= $item->color ?>-500" value="<?= $item->id ?>"><?= $item->title ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <!-- tag -->
                        <!--  -->
                        <div class="relative w-full px-3 my-8">
                            <label for="tagInput" class="mb-3 block text-base font-medium text-[#07074D]">
                                Tag Assignment
                            </label>
                            <div class="flex">
                                <input type="text" id="tagInput" placeholder="tag" class="w-full h-14 rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                <button type="button" onclick="toggleTagDropdown()">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" data-slot="icon" class="w-6 h-6">
                                        <path id="downArrowtag" class="downTag" stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                        <path id="upArrowtag" class="downTag" hidden stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                                    </svg>
                                </button>
                            </div>
                            <div class="absolute max-h-40 w-full z-10 mt-2 bg-white border border-gray-300 rounded-md shadow-lg overflow-y-auto hidden" id="tagDropdownContent">
                                <?php
                                if (!empty($data['tags'])) {
                                    foreach ($data['tags'] as $tag) {
                                ?>
                                        <div class="p-2">
                                            <label><input type="checkbox" name="selected_tags[]" multiple value="<?php echo $tag->id; ?>" class="mr-2"><?php echo $tag->nameTag; ?></label>
                                        </div>
                                <?php
                                    }
                                } else {
                                    echo "Tags unavailable";
                                }
                                ?>
                            </div>
                        </div>

                        <script>
                            const tagInput = document.getElementById('tagInput');
                            const tagDropdownContent = document.getElementById('tagDropdownContent');
                            const tagCheckboxes = document.querySelectorAll('input[name="selected_tags[]"]');
                            var downArrowTag = document.getElementById('downArrowtag');
                            var upArrowTag = document.getElementById('upArrowtag');


                            tagInput.addEventListener('input', function() {
                                filterTagOptions();
                                if (tagInput.value.trim() !== '') {
                                    showTagDropdown()
                                }
                            });

                            tagCheckboxes.forEach(checkbox => {
                                checkbox.addEventListener('change', updateTagSelection);
                            });

                            function filterTagOptions() {
                                const tagSearchTerm = tagInput.value.toLowerCase();

                                Array.from(tagDropdownContent.children).forEach(tagOption => {
                                    const tagOptionText = tagOption.textContent.toLowerCase();
                                    tagOption.style.display = tagOptionText.includes(tagSearchTerm) ? 'block' : 'none';
                                });
                            }

                            function updateTagSelection() {
                                const selectedTags = Array.from(tagCheckboxes)
                                    .filter(checkbox => checkbox.checked)
                                    .map(checkbox => checkbox.value);

                                // Display the selected tags (customize based on your needs)
                                console.log('Selected Tags:', selectedTags);
                            }

                            function toggleTagDropdown() {
                                var tagDropdown = document.getElementById('tagDropdownContent');
                                tagDropdown.classList.toggle('hidden');
                                downArrowTag.toggleAttribute('hidden');
                                upArrowTag.toggleAttribute('hidden');
                            }

                            function showTagDropdown() {
                                var tagDropdown = document.getElementById('tagDropdownContent');
                                tagDropdown.classList.remove('hidden');
                                upArrowTag.removeAttribute('hidden');
                                downArrowTag.setAttribute('hidden', 'true');
                            }
                        </script>




                        <!-- assignation -->
                        <!-- ------------------ -->
                        <div class="relative w-full px-3  my-8 ">
                            <label for="searchInput" class="mb-3 block text-base font-medium text-[#07074D]">
                                assignation
                            </label>
                            <div class="flex">
                                <input type="text" id="searchInput" placeholder="Search" class="w-full h-14 rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                <button type="button" onclick="toggleDropdown()">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" data-slot="icon" class="w-6 h-6">
                                        <path id="downArrow" class="downUser" stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                        <path id="upArrow" class="downUser" hidden stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                                    </svg>



                                </button>
                            </div>
                            <div class="absolute max-h-40 w-full z-10 mt-2 bg-white border border-gray-300 rounded-md shadow-lg overflow-y-auto hidden" id="dropdownContent">
                                <?php
                                if (!empty($data['user'])) {

                                    foreach ($data['user'] as $user) {
                                ?>
                                        <div class="p-2">
                                            <label><input class="chekk" type="checkbox" name="selected_users[]" multiple value="<?php echo $user->id; ?>" class="mr-2"><?php echo $user->email; ?></label>
                                        </div>
                                <?php
                                    }
                                } else {
                                    echo "utilisateurs indisponibles";
                                }
                                ?>
                            </div>

                        </div>

                        <script>
                            const searchInput = document.getElementById('searchInput');
                            const dropdownContent = document.getElementById('dropdownContent');
                            const userCheckboxes = document.querySelectorAll('input[name="selected_users[]"]');
                            // const checkboxes = document.querySelectorAll('chekk');
                            console.log(userCheckboxes);


                            var downArrow = document.getElementById('downArrow');
                            var upArrow = document.getElementById('upArrow');


                            searchInput.addEventListener('input', function() {
                                filterOptions();
                                if (searchInput.value.trim() !== '') {
                                    showUserDropdown()
                                }
                            });

                            userCheckboxes.forEach(checkbox => {
                                checkbox.addEventListener('change', updateSelection);
                            });

                            function filterOptions() {
                                const searchTerm = searchInput.value.toLowerCase();

                                Array.from(dropdownContent.children).forEach(option => {
                                    const optionText = option.textContent.toLowerCase();
                                    option.style.display = optionText.includes(searchTerm) ? 'block' : 'none';
                                });
                            }

                            function updateSelection() {
                                const selectedOptions = Array.from(userCheckboxes)
                                    .filter(checkbox => checkbox.checked)
                                    .map(checkbox => checkbox.value);


                                console.log('Selected Options:', selectedOptions);
                            }

                            function toggleDropdown() {
                                var dropdown = document.getElementById('dropdownContent');
                                dropdown.classList.toggle('hidden');
                                downArrow.toggleAttribute('hidden');
                                upArrow.toggleAttribute('hidden');

                            }

                            function toggle() {
                                var dropdown = document.getElementById('dropdown');
                                dropdown.classList.toggle('hidden');
                            }

                            function showUserDropdown() {
                                var Dropdown = document.getElementById('dropdownContent');
                                Dropdown.classList.remove('hidden');
                                upArrow.removeAttribute('hidden');
                                downArrow.setAttribute('hidden', 'true');
                            }
                        </script>


                        <!-- --------------------- -->

                    </form>
                </div>
            </div>
        </form>

        <div class="flex justify-end">
            <button class="bg-gradient-to-r from-violet-300 to-indigo-300  hover:from-violet-900 hover:to-indigo-900  border border-fuchsia-00 hover:border-violet-100 text-white font-semibold py-2 px-4 rounded-md mr-2" onclick="createProject()">Create</button>
            <button class="bg-gradient-to-r from-gray-100 to-slate-200  hover:from-gray-200 hover:to-slate-300  border border-fuchsia-00 hover:border-violet-100 text-gray-800 font-semibold py-2 px-4 rounded-md transition-colors duration-300" onclick="closeModal()">Cancel</button>
        </div>
    </div>
</div>
</div>
<script>
    // Function to open the modal

    function openModal() {
        document.getElementById("myModal").classList.remove("hidden");
    }

    // Function to close the modal
    function closeModal() {
        document.getElementById("myModal").classList.add("hidden");
    }



    // Event listener to open the modal when the button is clicked
    document.getElementById("openModalBtn").addEventListener("click", openModal);
</script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    function createProject() {

        var formData = {
            titre: $('#titre').val(),
            Description: $('#Description').val(),
            priorite: $('#priorite').val(),
            selected_tags: $('input[name="selected_tags[]"]:checked').map(function() {
                return this.value;
            }).get(),
            selected_users: $('input[name="selected_users[]"]:checked').map(function() {
                return this.value;
            }).get()

        };


        $.ajax({
            type: 'POST',
            url: ' <?php echo URLROOT; ?>dashboard/add',
            data: formData,
            success: function(response) {
                // Handle success response
                console.log(response);
                closeModal();
                $('input[name="selected_tags[]"]:checked').map(function(){
                    this.checked = false;
                });
                $('input[name="selected_users[]"]:checked').map(function(){
                    this.checked = false;
                });
               
                

            },
            error: function(error) {
                // Handle error response
                console.error('Error creating project:', error);
            }
        });
    }

    function closeModal() {
        document.getElementById("myModal").classList.add("hidden");
       
    }
</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    window.onload = function() {
        console.log('hello')
        test = Document.getElementById('filterSelect')
        console.log(test.value)
    };
    $(document).ready(function() {
        // Event listener for the change event on the select element
        $('#filterSelect').change(function() {
            // Get the selected value
            var selectedValue = $(this).val();

            // Make an AJAX request
            $.ajax({
                type: 'POST',
                url: 'dashboard/getticket',
                data: {
                    filter: selectedValue
                },
                success: function(response) {
                    var data = JSON.parse(response);
                    console.log(data);

                    // Clear previous content in the result container
                    $('#resultContainer').html('');

                    // Iterate through the data and create HTML elements
                    data.forEach(function(ticket) {
                        var tags = ticket.tag_names ? ticket.tag_names.split(',') : [];

                        var ticketHtml =`
                <a href='<?= URLROOT ?>dashboard/detail/${ticket.ticket_id}'>
                <div class="backdrop-blur-sm bg-${ticket.status_color}-100 p-6 rounded-md shadow-sm cursor-pointer border-2 border-${ticket.status_color}-500 hover:border-${ticket.status_color}-900 hover:border-2 transition-colors duration-300">
                    <div class="flex justify-between">
                        <div class="flex items-center">
                            <div class="bg-${ticket.status_color}-200 flex p-2 rounded-md">
                               ${ticket.status_svg}
                            </div>
                            <h2 class="text-3xl font-semibold">${ticket.ticket_title}</h2>
                        </div>
                        <div>
                            ${tags.map(tag => `<button class="bg-violet-600 py-2 px-1 m-1 w-20 text-white rounded-md hover:bg-green-600">${tag}</button>`).join('')}
                        </div>
                    </div>
                    <p class="text-gray-700">${ticket.ticket_description}</p>
                    <div class="flex justify-between sm:mt-4 lg:mt-4 xl:mt-4">
                        <button class="bg-${ticket.status_color}-500 py-2 px-1 m-1 w-40 text-white rounded-md hover:bg-${ticket.status_color}-600">${ticket.status_title}</button>
                        <svg width="34" height="34" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <path class="fill-${ticket.priority_color}-500" d="m 8 0 c -0.257812 0 -0.511719 0.0976562 -0.707031 0.292969 l -1.707031 1.707031 h -2.585938 c -0.550781 0 -1 0.449219 -1 1 v 2.585938 l -1.707031 1.707031 c -0.3906252 0.390625 -0.3906252 1.023437 0 1.414062 l 1.707031 1.707031 v 2.585938 c 0 0.550781 0.449219 1 1 1 h 2.585938 l 1.707031 1.707031 c 0.390625 0.390625 1.023437 0.390625 1.414062 0 l 1.707031 -1.707031 h 2.585938 c 0.550781 0 1 -0.449219 1 -1 v -2.585938 l 1.707031 -1.707031 c 0.390625 -0.390625 0.390625 -1.023437 0 -1.414062 l -1.707031 -1.707031 v -2.585938 c 0 -0.550781 -0.449219 -1 -1 -1 h -2.585938 l -1.707031 -1.707031 c -0.195312 -0.1953128 -0.449219 -0.292969 -0.707031 -0.292969 z m -1 4 h 2 v 5 h -2 z m 1 5.75 c 0.6875 0 1.25 0.5625 1.25 1.25 s -0.5625 1.25 -1.25 1.25 s -1.25 -0.5625 -1.25 -1.25 s 0.5625 -1.25 1.25 -1.25 z m 0 0" fill="#ff7800"></path>
                    </svg>
                    </div>
                </div>
                `;

                        // Append the ticket HTML to the result container
                        $('#resultContainer').append(ticketHtml);
                    });
                },
                error: function() {
                    // Handle errors
                    console.log('Error fetching data');
                }
            });

        });
    });
    /**********************************************************************************/
    function fetchDataAndPopulate() {
    var selectedValue = $('#filterSelect').val();

    // Make an AJAX request
    $.ajax({
        type: 'POST',
        url: 'dashboard/getticket',
        data: {
            filter: selectedValue
        },
        success: function(response) {
            var data = JSON.parse(response);
            console.log(data);

            // Clear previous content in the result container
            $('#resultContainer').html('');

            // Iterate through the data and create HTML elements
            data.forEach(function(ticket) {
                var tags = ticket.tag_names ? ticket.tag_names.split(',') : [];

                var ticketHtml = `
                <a href='<?= URLROOT ?>dashboard/detail/${ticket.ticket_id}'>
                <div class="backdrop-blur-sm bg-${ticket.status_color}-100 p-6 rounded-md shadow-sm cursor-pointer border-2 border-${ticket.status_color}-500 hover:border-${ticket.status_color}-900 hover:border-2 transition-colors duration-300">
                    <div class="flex justify-between">
                        <div class="flex items-center">
                            <div class="bg-${ticket.status_color}-200 flex p-2 rounded-md">
                               ${ticket.status_svg}
                            </div>
                            <h2 class="text-3xl font-semibold">${ticket.ticket_title}</h2>
                        </div>
                        <div>
                            ${tags.map(tag => `<button class="bg-violet-600 py-2 px-1 m-1 w-20 text-white rounded-md hover:bg-green-600">${tag}</button>`).join('')}
                        </div>
                    </div>
                    <p class="text-gray-700">${ticket.ticket_description}</p>
                    <div class="flex justify-between sm:mt-4 lg:mt-4 xl:mt-4">
                        <button class="bg-${ticket.status_color}-500 py-2 px-1 m-1 w-40 text-white rounded-md hover:bg-${ticket.status_color}-600">${ticket.status_title}</button>
                        <svg width="34" height="34" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <path class="fill-${ticket.priority_color}-500" d="m 8 0 c -0.257812 0 -0.511719 0.0976562 -0.707031 0.292969 l -1.707031 1.707031 h -2.585938 c -0.550781 0 -1 0.449219 -1 1 v 2.585938 l -1.707031 1.707031 c -0.3906252 0.390625 -0.3906252 1.023437 0 1.414062 l 1.707031 1.707031 v 2.585938 c 0 0.550781 0.449219 1 1 1 h 2.585938 l 1.707031 1.707031 c 0.390625 0.390625 1.023437 0.390625 1.414062 0 l 1.707031 -1.707031 h 2.585938 c 0.550781 0 1 -0.449219 1 -1 v -2.585938 l 1.707031 -1.707031 c 0.390625 -0.390625 0.390625 -1.023437 0 -1.414062 l -1.707031 -1.707031 v -2.585938 c 0 -0.550781 -0.449219 -1 -1 -1 h -2.585938 l -1.707031 -1.707031 c -0.195312 -0.1953128 -0.449219 -0.292969 -0.707031 -0.292969 z m -1 4 h 2 v 5 h -2 z m 1 5.75 c 0.6875 0 1.25 0.5625 1.25 1.25 s -0.5625 1.25 -1.25 1.25 s -1.25 -0.5625 -1.25 -1.25 s 0.5625 -1.25 1.25 -1.25 z m 0 0" fill="#ff7800"></path>
                    </svg>
                    </div>
                </div>
                `;

                // Append the ticket HTML to the result container
                $('#resultContainer').append(ticketHtml);
            });
        },
        error: function() {
            // Handle errors
            console.log('Error fetching data');
        }
    });
}

// Call the function when the document is ready
$(document).ready(function() {
    fetchDataAndPopulate();
});

</script>





</body>

</html>