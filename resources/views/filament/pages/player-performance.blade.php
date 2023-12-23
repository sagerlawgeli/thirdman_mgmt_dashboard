<x-filament-panels::page>
    <div class="main">
        <div class="grid h-58 grid-cols-4 gap-4 mb-16">
            <div class="col-span-4 card glass bg-indigo-950 flex flex-col items-center">
                <div class="avatar mt-4">
                    <div class="w-16 m-2 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                        <img src="{{ asset('images/sessions-test/messi.jpg') }}" />
                    </div>
                </div>

                <h2 class="card-title text-orange-500 text-1xl m-2">سالــم روما - Salem Roma</h2>
                <p class="font-bold mb-2 text-sm">Age: 29 | Position: RM | Team: Al-Nasser</p>
             
                    <div class="stats shadow card bg-zinc-900 mb-4">
    
                        <div class="stat">
                            <div class="stat-title font-bold text-orange-500 text-sm">Distance</div>
                            <div class="stat-value text-xs">31K</div>
                            <div class="stat-desc">Jan 1st - Feb 1st</div>
                        </div>
    
                        <div class="stat">
                            <div class="stat-title font-bold text-orange-500 text-sm">Top Speed</div>
                            <div class="stat-value text-xs">4,200</div>
                            <div class="stat-desc">↗︎ 400 (22%)</div>
                        </div>
    
                        <div class="stat">
                            <div class="stat-title font-bold text-orange-500 text-sm">Meters Per Minute</div>
                            <div class="stat-value text-xs">1,200</div>
                            <div class="stat-desc">↘︎ 90 (14%)</div>
                        </div>
                        <div class="stat">
                            <div class="stat-title font-bold text-orange-500 text-sm">Distance</div>
                            <div class="stat-value text-xs">31K</div>
                            <div class="stat-desc">Jan 1st - Feb 1st</div>
                        </div>
    
                        <div class="stat">
                            <div class="stat-title font-bold text-orange-500 text-sm">Top Speed</div>
                            <div class="stat-value text-xs">4,200</div>
                            <div class="stat-desc">↗︎ 400 (22%)</div>
                        </div>
    
                        <div class="stat">
                            <div class="stat-title font-bold text-orange-500 text-sm">Meters Per Minute</div>
                            <div class="stat-value text-xs">1,200</div>
                            <div class="stat-desc">↘︎ 90 (14%)</div>
                        </div>
                    </div>
                
            </div>
            {{-- <div class="col-span-1 card bg-zinc-900">
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
            </div> --}}
        </div>

        <div class="overflow-x-auto mb-4">
            <table class="table table-xs">
                <!-- head -->
                <thead>
                    <tr>

                        <th class="px-4 py-2">Team</th>
                        <th class="px-4 py-2">Minutes Played</th>
                        <th class="px-4 py-2">Pass Accuracy</th>
                        <th class="px-4 py-2">Goals</th>
                        <th class="px-4 py-2">Assists</th>
                        <th class="px-4 py-2">Shots on Target</th>
                        <th class="px-4 py-2">Yellow Cards</th>
                        <th class="px-4 py-2">Red Cards</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    <tr>
                        <td>
                            <div class="flex items-center gap-3">
                                <div class="avatar">
                                    <div class="mask mask-squircle w-8 h-8">
                                        <img src="https://upload.wikimedia.org/wikipedia/en/6/61/Al-Ahly_SC_Benghazi_%28logo%29.png"
                                            alt="Avatar Tailwind CSS Component" />
                                    </div>
                                </div>
                                <div>
                                    <div class="font-bold">Ahly Benghazi</div>
                                    <div class="text-sm opacity-50">Premier League</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            90
                        </td>
                        <td class="px-4 py-2">85%</td>
                        <td class="px-4 py-2">1</td>
                        <td class="px-4 py-2">0</td>
                        <td class="px-4 py-2">3</td>
                        <td class="px-4 py-2">1</td>
                        <td class="px-4 py-2">0</td>
                    </tr>
                    <!-- row 2 -->
                    <tr>
                        <td>
                            <div class="flex items-center gap-3">
                                <div class="avatar">
                                    <div class="mask mask-squircle w-8 h-8">
                                        <img src="https://w7.pngwing.com/pngs/738/725/png-transparent-al-ahli-sc-tripoli-al-ahly-sc-ahli-benghazi-caf-confederation-cup-others-sport-logo-sign.png"
                                            alt="Avatar Tailwind CSS Component" />
                                    </div>
                                </div>
                                <div>
                                    <div class="font-bold">Ahly Tripoli</div>
                                    <div class="text-sm opacity-50">Premier League</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            85
                        </td>
                        <td class="px-4 py-2">72%</td>
                        <td class="px-4 py-2">2</td>
                        <td class="px-4 py-2">0</td>
                        <td class="px-4 py-2">1</td>
                        <td class="px-4 py-2">3</td>
                        <td class="px-4 py-2">2</td>
                    </tr>
                    <!-- row 3 -->
                    <tr>
                        <td>
                            <div class="flex items-center gap-3">
                                <div class="avatar">
                                    <div class="mask mask-squircle w-8 h-8">
                                        <img src="https://e7.pngegg.com/pngimages/545/974/png-clipart-al-hilal-sc-benghazi-ahli-benghazi-al-tahaddy-sc-al-hilal-fc-football-text-logo.png"
                                            alt="Avatar Tailwind CSS Component" />
                                    </div>
                                </div>
                                <div>
                                    <div class="font-bold">Al Hilal</div>
                                    <div class="text-sm opacity-50">Premier League</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            74
                        </td>
                        <td class="px-4 py-2">63%</td>
                        <td class="px-4 py-2">3</td>
                        <td class="px-4 py-2">1</td>
                        <td class="px-4 py-2">2</td>
                        <td class="px-4 py-2">1</td>
                        <td class="px-4 py-2">4</td>
                    </tr>
                    <!-- row 1 -->
                    <tr>
                        <td>
                            <div class="flex items-center gap-3">
                                <div class="avatar">
                                    <div class="mask mask-squircle w-8 h-8">
                                        <img src="https://upload.wikimedia.org/wikipedia/en/6/61/Al-Ahly_SC_Benghazi_%28logo%29.png"
                                            alt="Avatar Tailwind CSS Component" />
                                    </div>
                                </div>
                                <div>
                                    <div class="font-bold">Ahly Benghazi</div>
                                    <div class="text-sm opacity-50">Premier League</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            90
                        </td>
                        <td class="px-4 py-2">85%</td>
                        <td class="px-4 py-2">1</td>
                        <td class="px-4 py-2">0</td>
                        <td class="px-4 py-2">3</td>
                        <td class="px-4 py-2">1</td>
                        <td class="px-4 py-2">0</td>
                    </tr>
                    <!-- row 2 -->
                    <tr>
                        <td>
                            <div class="flex items-center gap-3">
                                <div class="avatar">
                                    <div class="mask mask-squircle w-8 h-8">
                                        <img src="https://w7.pngwing.com/pngs/738/725/png-transparent-al-ahli-sc-tripoli-al-ahly-sc-ahli-benghazi-caf-confederation-cup-others-sport-logo-sign.png"
                                            alt="Avatar Tailwind CSS Component" />
                                    </div>
                                </div>
                                <div>
                                    <div class="font-bold">Ahly Tripoli</div>
                                    <div class="text-sm opacity-50">Premier League</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            85
                        </td>
                        <td class="px-4 py-2">72%</td>
                        <td class="px-4 py-2">2</td>
                        <td class="px-4 py-2">0</td>
                        <td class="px-4 py-2">1</td>
                        <td class="px-4 py-2">3</td>
                        <td class="px-4 py-2">2</td>
                    </tr>
                    <!-- row 3 -->
                    <tr>
                        <td>
                            <div class="flex items-center gap-3">
                                <div class="avatar">
                                    <div class="mask mask-squircle w-8 h-8">
                                        <img src="https://e7.pngegg.com/pngimages/545/974/png-clipart-al-hilal-sc-benghazi-ahli-benghazi-al-tahaddy-sc-al-hilal-fc-football-text-logo.png"
                                            alt="Avatar Tailwind CSS Component" />
                                    </div>
                                </div>
                                <div>
                                    <div class="font-bold">Al Hilal</div>
                                    <div class="text-sm opacity-50">Premier League</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            74
                        </td>
                        <td class="px-4 py-2">63%</td>
                        <td class="px-4 py-2">3</td>
                        <td class="px-4 py-2">1</td>
                        <td class="px-4 py-2">2</td>
                        <td class="px-4 py-2">1</td>
                        <td class="px-4 py-2">4</td>
                    </tr>
                    <!-- row 1 -->
                    <tr>
                        <td>
                            <div class="flex items-center gap-3">
                                <div class="avatar">
                                    <div class="mask mask-squircle w-8 h-8">
                                        <img src="https://upload.wikimedia.org/wikipedia/en/6/61/Al-Ahly_SC_Benghazi_%28logo%29.png"
                                            alt="Avatar Tailwind CSS Component" />
                                    </div>
                                </div>
                                <div>
                                    <div class="font-bold">Ahly Benghazi</div>
                                    <div class="text-sm opacity-50">Premier League</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            90
                        </td>
                        <td class="px-4 py-2">85%</td>
                        <td class="px-4 py-2">1</td>
                        <td class="px-4 py-2">0</td>
                        <td class="px-4 py-2">3</td>
                        <td class="px-4 py-2">1</td>
                        <td class="px-4 py-2">0</td>
                    </tr>
                    <!-- row 2 -->
                    <tr>
                        <td>
                            <div class="flex items-center gap-3">
                                <div class="avatar">
                                    <div class="mask mask-squircle w-8 h-8">
                                        <img src="https://w7.pngwing.com/pngs/738/725/png-transparent-al-ahli-sc-tripoli-al-ahly-sc-ahli-benghazi-caf-confederation-cup-others-sport-logo-sign.png"
                                            alt="Avatar Tailwind CSS Component" />
                                    </div>
                                </div>
                                <div>
                                    <div class="font-bold">Ahly Tripoli</div>
                                    <div class="text-sm opacity-50">Premier League</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            85
                        </td>
                        <td class="px-4 py-2">72%</td>
                        <td class="px-4 py-2">2</td>
                        <td class="px-4 py-2">0</td>
                        <td class="px-4 py-2">1</td>
                        <td class="px-4 py-2">3</td>
                        <td class="px-4 py-2">2</td>
                    </tr>
                    <!-- row 3 -->
                    <tr>
                        <td>
                            <div class="flex items-center gap-3">
                                <div class="avatar">
                                    <div class="mask mask-squircle w-8 h-8">
                                        <img src="https://e7.pngegg.com/pngimages/545/974/png-clipart-al-hilal-sc-benghazi-ahli-benghazi-al-tahaddy-sc-al-hilal-fc-football-text-logo.png"
                                            alt="Avatar Tailwind CSS Component" />
                                    </div>
                                </div>
                                <div>
                                    <div class="font-bold">Al Hilal</div>
                                    <div class="text-sm opacity-50">Premier League</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            74
                        </td>
                        <td class="px-4 py-2">63%</td>
                        <td class="px-4 py-2">3</td>
                        <td class="px-4 py-2">1</td>
                        <td class="px-4 py-2">2</td>
                        <td class="px-4 py-2">1</td>
                        <td class="px-4 py-2">4</td>
                    </tr>
                </tbody>
                <!-- foot -->
                {{-- <tfoot>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Job</th>
                    <th>Favorite Color</th>
                    <th></th>
                </tr>
            </tfoot> --}}

            </table>
        </div>
    </div>
</x-filament-panels::page>
