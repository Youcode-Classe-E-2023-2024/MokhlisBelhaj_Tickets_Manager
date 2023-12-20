<?php require_once 'include/header.php'; ?>
<?php require_once 'include/navbar.php'; ?>




<!-- --------------------------------------------------------------------------------------------- -->

<!-- -------------------------------MAIN------------------------------- -->
<!-- component -->
<div class="  bg-gradient-to-r from-violet-100 to-indigo-100 flex flex-col items-center justify-center h-full p-2">
    <!---------------------------------------------------------------------------------------------------------------------------->
    <!---------------------------------------------------------------------------------------------------------------------------->
    <!-- <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <div class="  relative max-w-sm mx-auto text-xs" x-data="{
            search: '',
            showSelector: false,
            selected: {1:'Chris'},
            options: [],
            clearOpts() {
                this.search = '';
                this.showSelector = false;
                this.options = []
            },
            select(id, name) {
                this.selected[id] = name;
                this.clearOpts();
                $dispatch('selected', Object.keys(this.selected));
            },
            remove(id) {
                delete this.selected[id]
                $dispatch('selected', Object.keys(this.selected));
            },
            goSearch() {
                if (this.search) {
                    this.options = {5: 'Carl', 6: 'Alex', 7: 'Bryan'};
                    this.showSelector = true;
                } else {
                    this.showSelector = false;
                }
            },
        }">
        <div class="bg-white rounded-md p-2 flex gap-1 flex-wrap" @click="$refs.search_input.focus()" @click.outside="showSelector=false">
            <template x-for="(name, id) in selected">
                <div class="bg-blue-200 rounded-md flex items-center">
                    <div class="p-2" x-text="name"></div>
                    <div @click="remove(id)" class="p-2 select-none rounded-r-md cursor-pointer hover:bg-magma-orange-clear">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.5745 1L1 12.5745" stroke="#FEAD69" stroke-width="2" stroke-linecap="round" />
                            <path d="M1.00024 1L12.5747 12.5745" stroke="#FEAD69" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </div>
                </div>
            </template>
            <div class="flex-1">
                <input type="text" x-model="search" x-ref="search_input" @input.debounce.400ms="goSearch();" placeholder="Search" class="w-full border-0 focus:border-0 focus:outline-none focus:ring-0 py-1 px-0">
                <div x-show="showSelector" class="absolute left-0 bg-white z-30 w-full rounded-b-md font-medium">
                    <div class="p-2 space-y-1">
                        <template x-for="(name, id) in options">
                            <div>
                                <template x-if="!selected[id]">
                                    <div @click="select(id, name)" class="bg-blue-200 border-2 border-blue-200 cursor-pointer rounded-md p-2 hover:border-light-blue-1" x-text="name"></div>
                                </template>
                            </div>
                        </template>
                        <template x-if="options.length === 0">
                            <div class="text-gray-500">
                                No result
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!---------------------------------------------------------------------------------------------------------------------------->
    <!---------------------------------------------------------------------------------------------------------------------------->
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
        <div id="resultContainer"></div>
        <div class="grid grid-cols-1 gap-4">
            <!-- Card to do  -->
            <div class="backdrop-blur-sm bg-blue-100 p-6 rounded-md shadow-sm cursor-pointer border-2 border-blue-500  hover:border-blue-900 hover:border-2 transition-colors duration-300">
                <div class="flex items-center">
                    <div class=" bg-blue-200 flex p-2 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class=" text-gray-500 fill-blue-500" width="34" height="34" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 2.5a7.5 7.5 0 100 15 7.5 7.5 0 000-15zM9 4h2v5H9zm0 7h2v2H9z" clip-rule="evenodd"></path>
                        </svg>

                    </div>
                    <h2 class="text-3xl font-semibold ">Project 1</h2>
                </div>

                <p class="text-gray-700">Description of Project 2 goes here. You can provide more details about the project.</p>
                <div class="flex justify-between sm:mt-4 lg:mt-4 xl:mt-4">
                    <button class="bg-blue-500 py-2 px-1 m-1 w-40 text-white  rounded-md hover:bg-bleu-600">to do </button>
                    <svg width="34" height="34" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <path class="fill-red-500" d="m 8 0 c -0.257812 0 -0.511719 0.0976562 -0.707031 0.292969 l -1.707031 1.707031 h -2.585938 c -0.550781 0 -1 0.449219 -1 1 v 2.585938 l -1.707031 1.707031 c -0.3906252 0.390625 -0.3906252 1.023437 0 1.414062 l 1.707031 1.707031 v 2.585938 c 0 0.550781 0.449219 1 1 1 h 2.585938 l 1.707031 1.707031 c 0.390625 0.390625 1.023437 0.390625 1.414062 0 l 1.707031 -1.707031 h 2.585938 c 0.550781 0 1 -0.449219 1 -1 v -2.585938 l 1.707031 -1.707031 c 0.390625 -0.390625 0.390625 -1.023437 0 -1.414062 l -1.707031 -1.707031 v -2.585938 c 0 -0.550781 -0.449219 -1 -1 -1 h -2.585938 l -1.707031 -1.707031 c -0.195312 -0.1953128 -0.449219 -0.292969 -0.707031 -0.292969 z m -1 4 h 2 v 5 h -2 z m 1 5.75 c 0.6875 0 1.25 0.5625 1.25 1.25 s -0.5625 1.25 -1.25 1.25 s -1.25 -0.5625 -1.25 -1.25 s 0.5625 -1.25 1.25 -1.25 z m 0 0" fill="#ff7800" />
                    </svg>
                </div>
            </div>
            <!-- Card in progresse -->
            <div class="backdrop-blur-sm bg-yellow-100 p-6 rounded-md shadow-sm cursor-pointer border-2 border-yellow-500 hover:border-yellow-900 hover:border-2 transition-colors duration-300">
                <div class="flex items-center">
                    <div class="flex p-2 rounded-md">
                        <svg xmlns:osb="http://www.openswatchbook.org/uri/2009/osb" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="34" height="34" id="svg3035" version="1.1" inkscape:version="0.48.4 r9939" sodipodi:docname="Work_in_progress_icon.svg">
                            <metadata id="metadata3045">
                                <rdf:RDF>
                                    <cc:Work rdf:about="">
                                        <dc:format>image/svg+xml</dc:format>
                                        <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
                                        <dc:title />
                                    </cc:Work>
                                </rdf:RDF>
                            </metadata>
                            <defs id="defs3043">
                                <linearGradient inkscape:collect="always" id="linearGradient3825" osb:paint="gradient">
                                    <stop style="stop-color:#000000;stop-opacity:1;" offset="0" id="stop3827" />
                                    <stop style="stop-color:#000000;stop-opacity:0;" offset="1" id="stop3829" />
                                </linearGradient>
                            </defs>
                            <sodipodi:namedview pagecolor="#ffffff" bordercolor="#666666" borderopacity="1" objecttolerance="10" gridtolerance="10" guidetolerance="10" inkscape:pageopacity="0" inkscape:pageshadow="2" inkscape:window-width="970" inkscape:window-height="773" id="namedview3041" showgrid="false" inkscape:zoom="1" inkscape:cx="275.92219" inkscape:cy="102.76212" inkscape:window-x="57" inkscape:window-y="34" inkscape:window-maximized="0" inkscape:current-layer="svg3035" />
                            <path d="m 16.977523,0.24095147 c -9.2629169,0 -16.73280045,7.51449143 -16.73280045,16.77740253 0,9.262912 7.46988355,16.777403 16.73280045,16.777403 9.262917,0 16.777413,-7.514491 16.777413,-16.777403 0,-9.2629111 -7.514496,-16.77740253 -16.777413,-16.77740253 z m 0,4.14972823 c 6.966927,0 12.627682,5.6607523 12.627682,12.6276743 0,6.966923 -5.660755,12.583053 -12.627682,12.583053 -6.966937,0 -12.5830596,-5.61613 -12.5830596,-12.583053 0,-6.966922 5.6161226,-12.6276743 12.5830596,-12.6276743 z" style="color:#000000;fill:#000000;fill-opacity:0.08333333;stroke:#565656;stroke-width:0.5;stroke-opacity:0.19607843" id="path3037" />
                            <path d="M 16.903174,2.2294442 A 14.680199,14.680208 0 0 0 2.7231982,13.110132" style="fill:none;stroke:#000000;stroke-width:2.25834560000000018;stroke-linecap:round;stroke-opacity:0.5" id="path3039" inkscape:connector-curvature="0" />
                            <path inkscape:connector-curvature="0" d="m 26.534976,23.996706 -11.936899,0.01534 c -0.108125,-0.0098 -0.186444,-0.03442 -0.145509,-0.163431 l 4.386175,-5.622443 c 0.15169,-0.214972 0.380542,-0.331209 0.61078,-0.324599 l 2.204073,-0.0047 c 0.357459,-1.46e-4 0.495297,0.103309 0.691991,0.35028 l 4.295045,5.546242 c 0.03931,0.09758 0.004,0.195158 -0.105656,0.203308 z" style="font-size:12px;fill-rule:evenodd;fill:#550000;stroke:#d95b00;stroke-opacity:1;stroke-width:0.4;stroke-miterlimit:4;stroke-dasharray:none" id="path633" />
                            <rect width="3.0200865" height="6.0596466" rx="0.54454094" ry="0.57430226" x="17.040688" y="4.1348033" transform="matrix(0.88544923,0.46473612,-0.40805309,0.9129582,0,0)" style="font-size:12px;fill:#000002;fill-rule:evenodd" id="rect613" />
                            <rect width="4.8600006" height="1.5795" rx="0.4574118" ry="0.38880002" x="10.800983" y="11.82098" style="font-size:12px;fill-rule:evenodd" id="rect615" />
                            <rect width="4.5291238" height="1.3434505" rx="0.42627051" ry="0.3306956" x="-5.9359756" y="15.664654" transform="matrix(0.46868988,-0.88336278,0.74463494,0.66747195,0,0)" style="font-size:12px;fill-rule:evenodd" id="rect616" />
                            <rect width="10.78014" height="0.77215397" rx="0.98051679" ry="0.13222297" x="14.421082" y="9.101388" transform="matrix(0.89042304,0.45513385,-0.44770212,0.89418276,0,0)" style="font-size:12px;fill-rule:evenodd" id="rect617" />
                            <g transform="matrix(0.0486,0,0,0.0486,-2.1564664,-1.2326814)" id="g3295">
                                <rect id="rect618" style="font-size:12px;fill-rule:evenodd" transform="matrix(-0.05720584,-0.9983624,0.9970356,-0.0769422,0,0)" y="335.38721" x="-440.25488" ry="6.6537695" rx="12.701341" height="27.030939" width="134.95171" />
                            </g>
                            <ellipse sodipodi:ry="32.5" sodipodi:rx="31.25" sodipodi:cy="467.36218" sodipodi:cx="418.75" cx="418.75" cy="467.36218" rx="31.25" ry="32.5" transform="matrix(0.04653805,0,0,0.04727828,-2.8941023,-11.004086)" style="font-size:12px;fill-rule:evenodd;stroke-width:1" id="path619" />
                            <rect width="3.7940228" height="1.5180751" rx="0.35708451" ry="0.37368011" x="-22.917742" y="7.5528417" transform="matrix(-0.23400793,-0.97223469,0.98564518,-0.16883003,0,0)" style="font-size:12px;fill-rule:evenodd" id="rect621" />
                            <rect width="3.8024707" height="1.5185478" rx="0.35787964" ry="0.37379646" x="-22.943907" y="12.612084" transform="matrix(-0.00756986,-0.99997135,0.99703364,0.07696705,0,0)" style="font-size:12px;fill-rule:evenodd" id="rect622" />
                            <rect width="7.6159029" height="1.552925" rx="0.71679103" ry="0.38225853" x="-14.651141" y="18.132904" transform="matrix(0.49470811,-0.8690592,0.81786715,0.5754071,0,0)" style="font-size:12px;fill-rule:evenodd" id="rect623" />
                        </svg>
                    </div>
                    <h2 class="text-3xl font-semibold ">Project 1</h2>
                </div>
                <p class="text-gray-700">Description of Project 2 goes here. You can provide more details about the project.</p>
                <div class="flex justify-between sm:mt-4 lg:mt-4 xl:mt-4">
                    <button class="bg-yellow-500 py-2 px-1 m-1 w-40 text-white  rounded-md hover:bg-yellow-600">in progresse</button>
                    <svg width="34" height="34" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <path class="fill-orange-500" d="m 8 0 c -0.257812 0 -0.511719 0.0976562 -0.707031 0.292969 l -1.707031 1.707031 h -2.585938 c -0.550781 0 -1 0.449219 -1 1 v 2.585938 l -1.707031 1.707031 c -0.3906252 0.390625 -0.3906252 1.023437 0 1.414062 l 1.707031 1.707031 v 2.585938 c 0 0.550781 0.449219 1 1 1 h 2.585938 l 1.707031 1.707031 c 0.390625 0.390625 1.023437 0.390625 1.414062 0 l 1.707031 -1.707031 h 2.585938 c 0.550781 0 1 -0.449219 1 -1 v -2.585938 l 1.707031 -1.707031 c 0.390625 -0.390625 0.390625 -1.023437 0 -1.414062 l -1.707031 -1.707031 v -2.585938 c 0 -0.550781 -0.449219 -1 -1 -1 h -2.585938 l -1.707031 -1.707031 c -0.195312 -0.1953128 -0.449219 -0.292969 -0.707031 -0.292969 z m -1 4 h 2 v 5 h -2 z m 1 5.75 c 0.6875 0 1.25 0.5625 1.25 1.25 s -0.5625 1.25 -1.25 1.25 s -1.25 -0.5625 -1.25 -1.25 s 0.5625 -1.25 1.25 -1.25 z m 0 0" fill="#ff7800" />
                    </svg>
                </div>
            </div>
            <!-- Card done -->
            <div class="backdrop-blur-sm bg-green-100 p-6 rounded-md shadow-sm cursor-pointer border-2 border-green-500 hover:border-green-900 hover:border-2 transition-colors duration-300">
                <div class="flex justify-between">
                    <div class="flex items-center">
                        <div class=" bg-green-200 flex p-2 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500  fill-green-500" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h2 class="text-3xl font-semibold ">Project 1</h2>
                    </div>
                    <div>
                        <button class=" bg-violet-600 py-2 px-1 m-1 w-20 text-white  rounded-md hover:bg-green-600">tag</button>
                    </div>

                </div>
                <p class="text-gray-700">Description of Project 2 goes here. You can provide more details about the project.</p>
                <div class="flex justify-between sm:mt-4 lg:mt-4 xl:mt-4">
                    <button class="bg-green-500 py-2 px-1 m-1 w-40 text-white  rounded-md hover:bg-green-600">done</button>
                    <svg width="34" height="34" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <path class="fill-green-500" d="m 8 0 c -0.257812 0 -0.511719 0.0976562 -0.707031 0.292969 l -1.707031 1.707031 h -2.585938 c -0.550781 0 -1 0.449219 -1 1 v 2.585938 l -1.707031 1.707031 c -0.3906252 0.390625 -0.3906252 1.023437 0 1.414062 l 1.707031 1.707031 v 2.585938 c 0 0.550781 0.449219 1 1 1 h 2.585938 l 1.707031 1.707031 c 0.390625 0.390625 1.023437 0.390625 1.414062 0 l 1.707031 -1.707031 h 2.585938 c 0.550781 0 1 -0.449219 1 -1 v -2.585938 l 1.707031 -1.707031 c 0.390625 -0.390625 0.390625 -1.023437 0 -1.414062 l -1.707031 -1.707031 v -2.585938 c 0 -0.550781 -0.449219 -1 -1 -1 h -2.585938 l -1.707031 -1.707031 c -0.195312 -0.1953128 -0.449219 -0.292969 -0.707031 -0.292969 z m -1 4 h 2 v 5 h -2 z m 1 5.75 c 0.6875 0 1.25 0.5625 1.25 1.25 s -0.5625 1.25 -1.25 1.25 s -1.25 -0.5625 -1.25 -1.25 s 0.5625 -1.25 1.25 -1.25 z m 0 0" fill="#ff7800" />
                    </svg>
                </div>
            </div>
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
<<script>
    // Function to open the modal

    function openModal() {
    document.getElementById("myModal").classList.remove("hidden");
    }

    // Function to close the modal
    function closeModal() {
    document.getElementById("myModal").classList.add("hidden");
    }

    // Function to handle project creation (you can customize this function)
    // function createProject() {
    // var projectName = document.getElementById("projectName").value;
    // var projectDescription = document.getElementById("projectDescription").value;
    // var inviteFriend = document.getElementById("inviteFriend").value;

    // // Add your logic to handle the project creation here
    // console.log("Project Name: " + projectName);
    // console.log("Project Description: " + projectDescription);
    // console.log("Invite Friend: " + inviteFriend);

    // // Close the modal after handling the creation
    // closeModal();
    // }

    // Event listener to open the modal when the button is clicked
    document.getElementById("openModalBtn").addEventListener("click", openModal);
    </script>
    <!-- ------------------------------------------------------------------ -->
    <!-- ------------------------------------------------------------------ -->
    <!-- ------------------------------------------------------------------ -->
    <!-- ajax -->
    <!-- Include jQuery -->
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
$(document).ready(function() {
    // Event listener for the change event on the select element
    $('#filterSelect').change(function() {
        // Get the selected value
        var selectedValue = $(this).val();

        // Make an AJAX request
        $.ajax({
            type: 'POST',
            url: 'dashboard/getticket',  // Adjust the URL as needed
            data: { filter: selectedValue },
            success: function(response) {
               data = JSON.parse(response)
                console.log(data);
                // Handle the response from the server
                // For example, update the content of the result container
                $('#resultContainer').html(typeof data);
            },
            error: function() {
                // Handle errors
                console.log('Error fetching data');
            }
        });
    });
});
</script>




    </body>

    </html>