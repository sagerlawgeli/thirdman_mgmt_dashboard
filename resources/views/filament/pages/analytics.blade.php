<x-filament-panels::page>
    <!-- Main Content Area -->
    <div class=""> <!-- Adjust padding-left based on the sidebar width -->
        <!-- Content Grid -->

        <div class="h-67 grid grid-cols-1 mb-6 ">
            <div class=" col-span-2 card bg-zinc-900 flex flex-col items-center">

                <div class="collapse bg-zinc-900 ">
                    <input type="radio" id="accordion" />
                    <div class="collapse-title text-xl font-medium text-white hover:bg-orange-500 toggle text-center bg-zinc-900 glass"
                        onclick = "toggleAccordion()">
                        Select Player & Session
                    </div>
                    <div class="collapse-content flex flex-col items-center">

                        <div class="my-6">
                            <label for="session" class="block mb-2 text-lg font-medium dark:text-gray-300">Select
                                Session</label>
                            <select id="session" name="session"
                                class="block w-full border dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-md focus:border-blue-500 dark:focus:border-blue-500">
                                <!-- Options -->
                                <option value="">Select</option>
                                <option value="">تمارين - 12-10-2023</option>
                                <option value="">مبارة ضد الاهلي - الجولة الرابعة - 22-09-2023</option>
                                <option value="">تمارين - 15-10-2023</option>
                            </select>
                        </div>
                        <div class="m-2">
                            <label for="session" class="block mb-2 text-lg font-medium dark:text-gray-300">Select
                                Session</label>
                            <select id="session" name="session"
                                class="block w-full border dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-md focus:border-blue-500 dark:focus:border-blue-500">
                                <!-- Options -->
                                <option value="">Select</option>
                                <option value="">تمارين - 12-10-2023</option>
                                <option value="">مبارة ضد الاهلي - الجولة الرابعة - 22-09-2023</option>
                                <option value="">تمارين - 15-10-2023</option>
                            </select>
                        </div>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary bg-orange-500 btn-md my-2">Load Session Details</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="grid h-72 grid-cols-4 gap-4 mb-16">
            <div class="col-span-2 card bg-zinc-900 flex flex-col items-center">
                <div class="avatar mt-12">
                    <div class="w-28 m-2 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                        <img src="{{ asset('images/sessions-test/messi.jpg') }}" />
                    </div>
                </div>

                <h2 class="card-title text-orange-500 text-4xl m-4">ميــدي البرعصي</h2>
                <p class="font-bold m-4">Age: 29 | Position: RM | Team: Al-Nasser</p>

            </div>
            <div class="col-span-1 card bg-zinc-900">
                <div class="shadow-lg rounded-lg p-4 max-w-sm">
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-slate-100 text-cyan-500 font-bold">TEAM AVG.</span>
                        <span class="text-orange-500 font-bold">ATHLETE</span>
                    </div>
                    <div class="flex justify-around items-center h-64">
                        <div class="space-y-10">
                            <p class="font-bold text-center text-xs">8.08</p>
                            <p class="font-bold text-center text-xs">94</p>
                            <p class="font-bold text-center text-xs">25.9</p>
                            <p class="font-bold text-center text-xs">421</p>
                            <p class="font-bold text-center text-xs">276</p>
                        </div>
                        <div class="space-y-10">
                            <p class="text-center text-xs">Distance (km)</p>
                            <p class="text-center text-xs">Metres per Minute</p>
                            <p class="text-center text-xs">Top Speed (m/s)</p>
                            <p class="text-center text-xs">High Int. Running (m)</p>
                            <p class="text-center text-xs">Sprint Distance (m)</p>
                        </div>
                        <div class="space-y-10">
                            <p class="font-bold text-center text-xs">8.33 </p>
                            <p class="font-bold text-center text-xs">96 </p>
                            <p class="font-bold text-center text-xs">27 </p>
                            <p class="font-bold text-center text-xs">617 </p>
                            <p class="font-bold text-center text-xs">583 </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-span-1 card bg-zinc-900">
                <div class="shadow-lg rounded-lg p-4 max-w-sm">
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-slate-100 text-cyan-500 font-bold">TEAM AVG.</span>
                        <span class="text-orange-500 font-bold">ATHLETE</span>
                    </div>
                    <div class="flex justify-around items-center h-64">
                        <div class="space-y-10">
                            <p class="font-bold text-center text-xs">8.08</p>
                            <p class="font-bold text-center text-xs">94</p>
                            <p class="font-bold text-center text-xs">25.9</p>
                            <p class="font-bold text-center text-xs">421</p>
                            <p class="font-bold text-center text-xs">276</p>
                        </div>
                        <div class="space-y-10">
                            <p class="text-center text-xs">Distance (km)</p>
                            <p class="text-center text-xs">Metres per Minute</p>
                            <p class="text-center text-xs">Top Speed (m/s)</p>
                            <p class="text-center text-xs">High Int. Running (m)</p>
                            <p class="text-center text-xs">Sprint Distance (m)</p>
                        </div>
                        <div class="space-y-10">
                            <p class="font-bold text-center text-xs">8.33 </p>
                            <p class="font-bold text-center text-xs">96 </p>
                            <p class="font-bold text-center text-xs">27 </p>
                            <p class="font-bold text-center text-xs">617 </p>
                            <p class="font-bold text-center text-xs">583 </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid h-96 grid-cols-6 gap-4">
            <div class="col-span-1 card bg-zinc-900">
                <div class="stats stats-vertical shadow card bg-zinc-900">

                    <div class="stat">
                        <div class="stat-title font-bold text-orange-500">Distance</div>
                        <div class="stat-value">31K</div>
                        <div class="stat-desc">Jan 1st - Feb 1st</div>
                    </div>

                    <div class="stat">
                        <div class="stat-title font-bold text-orange-500">Top Speed</div>
                        <div class="stat-value">4,200</div>
                        <div class="stat-desc">↗︎ 400 (22%)</div>
                    </div>

                    <div class="stat">
                        <div class="stat-title font-bold text-orange-500">Meters Per Minute</div>
                        <div class="stat-value">1,200</div>
                        <div class="stat-desc">↘︎ 90 (14%)</div>
                    </div>
                </div>
            </div>
            <div class="col-span-4 card bg-zinc-900 flex flex-col items-center">
                <div class="m-auto mt-12">


                    <!-- Heatmap Placeholder Image -->
                    <div class="stats stats-vertical shadow ">

                        <img src="{{ asset('images/sessions-test/heatmap1st.png') }}" alt="Heatmap Placeholder"
                            class="bg-gray-500 rounded h-60 w-full mr-2  object-cover">
                        <span class="font-bold text-white ml-2">First Half</span>
                        <span class="font-bold text-orange-500 ml-2 text-lg text-center">Heatmap</span>
                    </div>
                    <div class="stats stats-vertical shadow mr-8">
                        <img src="{{ asset('images/sessions-test/heatmap2nd.png') }}" alt="Heatmap Placeholder"
                            class="bg-gray-500 rounded h-60 w-full mr-2  object-cover">
                        <span class="font-bold text-white ml-2">Second Half</span>
                    </div>



                    <!-- Heatmap Placeholder Image -->
                    <div class="stats stats-vertical shadow">
                        <img src="{{ asset('images/sessions-test/heatmap1st.png') }}" alt="Heatmap Placeholder"
                            class="bg-gray-500 rounded h-60 w-full mr-2  object-cover">
                        <span class="font-bold text-white ml-2">First Half</span>
                    </div>
                    <div class="stats stats-vertical shadow">
                        <img src="{{ asset('images/sessions-test/heatmap2nd.png') }}" alt="Heatmap Placeholder"
                            class="bg-gray-500 rounded h-60 w-full mr-2  object-cover">
                        <span class="font-bold text-white ml-2">Second Half</span>
                        <span class="font-bold text-orange-500 ml-2 text-lg text-center">Intensity Map</span>
                    </div>

                </div>

            </div>
            <div class="col-span-1 card bg-zinc-900">
                <div class="stats stats-vertical shadow card bg-zinc-900">

                    <div class="stat">
                        <div class="stat-title font-bold text-orange-500">Distance</div>
                        <div class="stat-value">31K</div>
                        <div class="stat-desc">Jan 1st - Feb 1st</div>
                    </div>

                    <div class="stat">
                        <div class="stat-title font-bold text-orange-500">Top Speed</div>
                        <div class="stat-value">4,200</div>
                        <div class="stat-desc">↗︎ 400 (22%)</div>
                    </div>

                    <div class="stat">
                        <div class="stat-title font-bold text-orange-500">Meters Per Minute</div>
                        <div class="stat-value">1,200</div>
                        <div class="stat-desc">↘︎ 90 (14%)</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleAccordion() {
            let radio = document.getElementById("accordion");
            radio.checked = !radio.checked;
        }
    </script>
</x-filament-panels::page>
