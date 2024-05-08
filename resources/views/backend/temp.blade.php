{{-- protofilo panel  --}}
    {{-- Profile card  --}}
    <div class="w-4/12">
        <div class=" p-5 bg-white ring-1 ring-slate-900/5 border-2 border-sky-200 hover:border-sky-500 space-y-3 rounded-lg">
            {{-- Title  --}}
            <h2 class="text-2xl mb-5 text-bold text-slate-400"> Profile</h2>
            <div class="flex items-center">
                <img src="{{ asset('profile/profile.jpg') }}" alt="Profile Picture" class="w-12 h-12 rounded-full mr-4">
                <div>
                    <h2 class="text-lg font-semibold text-sky-600 ml-2">Hein Htet San</h2>
                    <p class="text-gray-500 px-4 py-1 bg-gray-100 text-sm rounded-3xl">Software Engineer Student</p>
                </div>
            </div>
            <div class="mb-5"></div>
            {{-- about description  --}}
            <span class="text-bold text-sky-600 text-sm mt-5">Introduction</span>
            <p class="text-gray-500 text-justify mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
                efficitur sapien ac lorem consectetur, vitae aliquet nisi lobortis.</p>
            <div class="mb-5"></div>
            {{-- about description  --}}
            <span class="text-bold text-sky-600 text-sm mt-5">About Me</span>
            <p class="text-gray-500 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
                efficitur sapien ac lorem consectetur, vitae aliquet nisi lobortis.</p>

            {{-- contact information  --}}
            <span class="text-bold text-sky-600 text-sm mt-4 block ">Contact Information</span>
            <div class="">
                <p class="text-sm text-gray-400">Email: john.doe@example.com</p>
                <p class="text-sm text-gray-400">Phone: +1234567890</p>
                <p class="text-sm text-gray-400">Address: Thongwa, Yangon</p>
                <!-- Add more information here as needed -->
            </div>

            <div class="mt-4 block">

                <a href=""
                    class="bg-slate-100 rounded-md px-5 py-2 text-slate-800 border-slate-300 text-bold
            hover:bg-slate-200"><i
                        class="fas fa-pen-to-square text-sm"></i> Edit</a>

                <a href=""
                    class="bg-yellow-100 rounded-md px-5 py-2 text-yellow-800 border-yellow-300 text-bold
            hover:bg-yellow-200">Edit Contact Information</a>
            </div>
        </div>
        <div class="mb-5"></div>

        <div class="px-5">
            {{-- calendar  --}}
            <div id='calendar'></div>
            {{-- end of calendar  --}}
        </div>

    </div>
    {{-- end of card  --}}

    <div class="w-8/12  px-4">
        {{-- Bunch of buttons  --}}
        <div class="flex gap-2">
            <a href="#"
                class="group block max-w-xs mx-auto rounded-lg p-6 bg-white ring-1 ring-slate-900/5 shadow-lg space-y-3 hover:bg-sky-500 hover:ring-sky-500">
                <div class="flex items-center space-x-3">
                    <i class="fa-solid fa-diagram-project group-hover:text-white"></i>
                    <h3 class="text-slate-900 group-hover:text-white text-sm font-semibold">Add new project</h3>
                </div>
                <p class="text-slate-500 group-hover:text-white text-sm">Create a new project from a variety of starting
                    templates.</p>
            </a>
            <a href="#"
                class="group block max-w-xs mx-auto rounded-lg p-6 bg-white ring-1 ring-slate-900/5 shadow-lg space-y-3 hover:bg-sky-500 hover:ring-sky-500">
                <div class="flex items-center space-x-3">
                    <i class="fas fa-shapes group-hover:text-white"></i>
                    <h3 class="text-slate-900 group-hover:text-white text-sm font-semibold">Create new blog</h3>
                </div>
                <p class="text-slate-500 group-hover:text-white text-sm">Create a new project from a variety of starting
                    templates.</p>
            </a>
            <a href="#"
                class="group block max-w-xs mx-auto rounded-lg p-6 bg-white ring-1 ring-slate-900/5 shadow-lg space-y-3 hover:bg-sky-500 hover:ring-sky-500">
                <div class="flex items-center space-x-3">
                    <i class="fab fa-github group-hover:text-white"></i>
                    <h3 class="text-slate-900 group-hover:text-white text-sm font-semibold">Explore Projects</h3>
                </div>
                <p class="text-slate-500 group-hover:text-white text-sm">Create a new project from a variety of starting
                    templates.</p>
            </a>
        </div>
        {{-- end of bunch of buttons  --}}

        <div class="grid grid-cols-2 gap-4 ">

            <div class="">
                <h3 class="mt-5 text-bold text-2xl text-slate-500"> Repos</h3>
                <button class="px-5 py-2 rounded-lg text-slate-100 bg-sky-500 hover:bg-sky-400 mt-3 text-sm font-semibold shadow"> Connect to your github</button> <small class="bg-yellow-100 rounded-xl p-2 text-yellow-600">Recommended</small>
                {{-- file section  --}}
                <div class="flex flex-col p-2 w-full">
                    <div class="py-3">
                        <small class="block font-semibold text-gray-400">Search your repository</small>
                        <input type="text" class="border-2 rounded border-sky-100 w-auto h-10 indent-5 hover:border-sky-400 focus:border-sky-500">
                        <button class="bg-sky-500 rounded-lg py-2 px-3 text-white hover:bg-sky-400">Search</button>
                    </div>
                    <div id="repoList"></div>
                    <div id="pagination"></div>
                </div>
                {{-- end of file section  --}}


            </div>

            <div class="">
                <h3 class="mt-5 text-bold text-2xl text-slate-500"> Template</h3>
                <button class="px-5 py-2 rounded-lg text-slate-100 bg-sky-500 hover:bg-sky-400 my-3 text-sm font-semibold shadow">Insert CV form</button> <small class="bg-yellow-100 rounded-xl p-2 text-yellow-600">Recommended</small>
                {{-- file section  --}}
                <div class="flex flex-col  p-2 w-full">

                    <div class="file-container flex flex-col bg-white rounded-lg border-2 px-5 py-2 border-2 border-sky-200 hover:border-sky-500">
                        <div class="file-container flex items-center space-x-4">
                            <div
                                class="file-icon flex-shrink-0 w-12 h-12 flex items-center justify-center bg-gray-200 rounded-lg">
                                <i class="far fa-file text-2xl"></i>
                            </div>
                            <div class="file-info flex-1 ml-4">
                                <div class="file-name">cvform.png</div>
                                <div class="file-size text-sm text-gray-500">File Size: 2.5 MB</div>
                            </div>
                            <div
                                class="eye-icon flex-shrink-0 cursor-pointer w-8 h-8 flex items-center justify-center bg-gray-100 rounded-lg hover:bg-gray-200">
                                <i class="far fa-eye text-sm"></i>
                            </div>
                        </div>
                        <div class="mt-5 flex items-center justify-end">
                            <button
                                class="px-3 py-1 text-sky-600 rounded-lg bg-sky-100 text-sm hover:bg-sky-200 hover:text-sky-600 focus:outline-none focus:ring focus:ring-sky-300">
                                <i class="fas fa-download mr-1"></i> Download
                            </button>
                            <button
                                class="px-3 py-1 text-red-600 rounded-lg bg-red-100 text-sm hover:bg-red-200 hover:text-red-600 focus:outline-none focus:ring focus:ring-red-300 ml-2">
                                <i class="fas fa-trash mr-1"></i> Delete
                            </button>
                        </div>
                    </div>

                </div>
                {{-- end of file section  --}}

                <div class="mb-8"></div>
                <h3 class="px-5 text-bold text-2xl text-slate-500"> <i class="fas fa-chart-line"></i> Analysis</h3>
                {{-- Chart  --}}
                <div class="mt-2 px-5">
                    <canvas id="myChart" class="w-auto"></canvas>
                </div>
                {{-- end of chart  --}}

            </div>

        </div>


    </div>

<script>

    // for github repo
    const username = 'Hein-HtetSan';
    let page = 1;

    // fetch the github repositories
    function fetchRepositories() {
      const perPage = 5;
      const url = `https://api.github.com/users/${username}/repos?per_page=${perPage}&page=${page}`;

      fetch(url, {
        headers: {
          Authorization: `token ${token}`
        }
      })
      .then(response => {
        if (!response.ok) {
          throw new Error('Failed to fetch repositories');
        }
        return response.json();
      })
      .then(repos => {
        if (repos.length === 0) {
          console.log('No more repositories to display');
          return;
        }
        console.log(repos[2]);
        displayRepositories(repos);
        displayPagination(); // Display pagination after repositories
      })
      .catch(error => {
        console.error(error);
      });
    }

    // display pagination after repositories
    function displayRepositories(repos) {
      const repoList = document.getElementById('repoList');
      repoList.innerHTML = '';

      repos.forEach(repo => {
        const repoItem = document.createElement('div');
        repoItem.classList.add('bg-white', 'p-4', 'rounded', 'mb-4', 'border-2', 'border-sky-200', 'hover:border-sky-500', 'cursor-pointer');

        const repoName = document.createElement('h3');
        repoName.textContent = repo.name;
        repoName.classList.add('text-lg', 'font-semibold', 'mb-2');

        const repoDesc = document.createElement('p');
        repoDesc.textContent = repo.description || 'No description available.';
        repoDesc.classList.add('text-gray-700', 'mb-4');

        const btngroup = document.createElement('div');
        btngroup.classList.add('flex', 'justify-start', 'gap-2', 'items-center');

        const seemore = document.createElement('a');
        seemore.innerHTML = 'See More';
        seemore.href = repo.html_url;
        seemore.target = '_blank';
        seemore.classList.add('text-blue-600', 'font-semibold', 'hover:bg-sky-200', 'px-3', 'py-1','bg-sky-100', 'rounded-full', 'text-sm');

        const language = document.createElement('div');
        language.innerHTML = repo.language != null ? repo.language : 'no language';
        language.classList.add('text-violet-600', 'inline', 'ms-3', 'font-semibold', 'hover:bg-violet-200', 'px-3', 'py-1','bg-violet-100', 'rounded-full', 'text-sm');

        const visibility = document.createElement('small');
        visibility.innerHTML =  repo.private ? 'Private repository' : 'Public repository';
        visibility.classList.add('text-slate-600', 'block', 'font-semibold', 'text-sm');

        btngroup.appendChild(seemore);
        repoName.appendChild(language);
        repoName.appendChild(visibility);

        repoItem.appendChild(repoName);
        repoItem.appendChild(repoDesc);
        repoList.appendChild(repoItem);
        repoItem.appendChild(btngroup);
      });
    }

    function displayPagination() {
      const pagination = document.getElementById('pagination');
      pagination.innerHTML = '';

      const prevBtn = document.createElement('button');
      prevBtn.textContent = 'Previous';
      prevBtn.classList.add('bg-sky-100', 'hover:bg-sky-200', 'text-sky-600', 'font-semibold', 'py-2', 'px-4', 'rounded-l');
      prevBtn.disabled = page === 1; // Disable previous button on first page
      prevBtn.addEventListener('click', () => {
        if (page > 1) {
          page--;
          fetchRepositories();
        }
      });

      const nextBtn = document.createElement('button');
      nextBtn.textContent = 'Next';
      nextBtn.classList.add('bg-blue-500', 'hover:bg-blue-700', 'text-white', 'font-semibold', 'py-2', 'px-4', 'rounded-r');
      nextBtn.addEventListener('click', () => {
        page++;
        fetchRepositories();
      });

      pagination.appendChild(prevBtn);
      pagination.appendChild(nextBtn);
    }

    // Initial call to fetch repositories
    fetchRepositories();
  </script>
