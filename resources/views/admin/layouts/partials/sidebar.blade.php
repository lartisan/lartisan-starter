<!-- Sidebar -->
<aside class="sidebar md:w-64 max-h-screen bg-gray-200 shadow-lg flex flex-col justify-between">
	<nav class="sidebar-nav" x-data="{ isOpen: false }" @click.away="isOpen = false">
		<div class="nav-brand p-6 my-1 flex items-center justify-between">
			<a href="{{ url('admin/home') }}" class="">
				<svg class="h-6" viewBox="0 0 1839.49 280"><rect width="280" height="280" rx="15.61" fill="#ff4800"/><path d="M681.38,601.39a26.61,26.61,0,0,0,7.21-1.66l5,30.78a70.79,70.79,0,0,1-27.73,5.54c-24.68,0-37.43-15-33.55-43.26l23.57-167.21,43.54-4.71L675.56,591.13C674.45,598.89,676.67,601.39,681.38,601.39Z" transform="translate(-288.25 -383.83)" fill="#333"/><path d="M852.75,494.91l-14.14,94.28a54.5,54.5,0,0,0-.56,6.1c0,6.93,2.78,9.7,7.77,11.65l-12.2,28.28c-16.36-1.39-30-8.6-34.11-24.4-10.26,14.69-24.4,25.23-43.54,25.23-31.89,0-48.25-23-48.25-58.51,0-42.15,22.19-98.16,84.58-98.16A125,125,0,0,1,852.75,494.91ZM752.37,577.26c0,20.8,7.21,26.63,16.91,26.63,10.54,0,19.41-7.77,27.73-20.52l10.54-70.16a45.1,45.1,0,0,0-16.36-2.77C762.35,510.44,752.37,548.7,752.37,577.26Z" transform="translate(-288.25 -383.83)" fill="#333"/><path d="M979.75,482.15,967.27,524.3c-4.44-1.11-7.76-1.94-12.2-1.94-18.3,0-28.28,17.47-36.33,40.76L909,631.34h-43l20.52-147.25H924l-.55,27.46c10-20.25,26.34-31.62,41.59-31.62A48.29,48.29,0,0,1,979.75,482.15Z" transform="translate(-288.25 -383.83)" fill="#333"/><path d="M1045.46,601.11a33.09,33.09,0,0,0,16.64-4.71l11.65,28.84a85.26,85.26,0,0,1-40.49,10.81c-32.44-.28-45.75-19.13-41-53.52l9.71-67.93H981.69l4.16-30.51H1008l9.15-32.72,37.16-4.16-5.27,36.88h33.28l-8.6,30.51h-28.84l-9.43,67.93C1033.54,596.68,1036.87,601.11,1045.46,601.11Z" transform="translate(-288.25 -383.83)" fill="#333"/><path d="M1086.23,631.34l20.52-147.25H1150l-20.52,147.25Zm74.87-198.82c-1.95,13.58-13.31,23.84-28.29,23.84-15.25,0-24.4-11.37-22.46-25.79a28.16,28.16,0,0,1,28-24.12C1153.89,406.45,1163,417.82,1161.1,432.52Z" transform="translate(-288.25 -383.83)" fill="#333"/><path d="M1285.6,498.24l-19.41,24.4c-9.43-8-22.74-11.93-33.83-11.93-13.59,0-20,4.44-20,11.93,0,7.76,5.82,10.26,28.28,17.47,25,8,38.27,21.35,38.27,44.92,0,27.17-20.24,51-66,51-26.34,0-48.53-10.26-61.28-24.12l22.46-23.3A54.91,54.91,0,0,0,1213,604.72c15.81,0,23-6.66,23-14.7,0-9.7-5.83-12.48-29.12-20.52-24.68-8.32-37.43-22.18-37.43-43,0-25,21.62-47.14,62.94-47.14C1252.33,479.38,1273.12,486.87,1285.6,498.24Z" transform="translate(-288.25 -383.83)" fill="#333"/><path d="M1439.78,494.91l-14.14,94.28a54.5,54.5,0,0,0-.56,6.1c0,6.93,2.77,9.7,7.77,11.65l-12.21,28.28c-16.36-1.39-29.94-8.6-34.1-24.4-10.26,14.69-24.41,25.23-43.54,25.23-31.89,0-48.25-23-48.25-58.51,0-42.15,22.19-98.16,84.58-98.16A125,125,0,0,1,1439.78,494.91ZM1339.4,577.26c0,20.8,7.21,26.63,16.91,26.63,10.54,0,19.41-7.77,27.73-20.52l10.54-70.16a45.1,45.1,0,0,0-16.36-2.77C1349.38,510.44,1339.4,548.7,1339.4,577.26Z" transform="translate(-288.25 -383.83)" fill="#333"/><path d="M1593.12,524.3l-15,107h-43.26L1549.31,534c2.49-15.53-2.22-18.86-9.71-18.86-10,0-21.63,14.42-32.16,35.22l-11.37,81h-43l20.52-147.25H1511l-.83,25.79c12.48-18.3,31.89-30.5,49.36-30.5C1584,479.38,1597,496.29,1593.12,524.3Z" transform="translate(-288.25 -383.83)" fill="#333"/><path d="M1654.12,608.32c0,15-12.75,27.73-27.45,27.73-13,0-22.18-10-22.18-22.74,0-14.42,13-27.45,27.73-27.45C1645,585.86,1654.12,595.84,1654.12,608.32Z" transform="translate(-288.25 -383.83)" fill="#333"/><path d="M1804.42,631.34h-38.27l.28-21.08c-9.43,14.15-23.85,25.79-43.81,25.79-31.34,0-46.31-22.46-46.31-59.34,0-40.21,18.58-97.33,71.82-97.33a43.09,43.09,0,0,1,32.16,14.14l10.26-72.65,42.71,4.71ZM1721,577c0,20.8,6.66,26.9,16.36,26.9,12.2,0,22.46-12.48,31.34-27.18l7.76-54.63c-5.27-7.21-11.09-10.81-20.24-10.81C1728.72,511.27,1721,552.59,1721,577Z" transform="translate(-288.25 -383.83)" fill="#333"/><path d="M1881.23,577.82c1.11,19.69,11.92,26.07,26.34,26.07,12.48,0,23.85-4.44,37.44-13.59l15.53,26.06c-16.09,11.65-35.78,19.69-58.51,19.69-43,0-64.06-25-64.06-62.39,0-39.93,21.63-94.28,83.47-94.28,35.77,0,54.35,18,54.35,40.21C1975.79,560.9,1927.54,573.11,1881.23,577.82Zm51-55.74c0-6.65-3.33-13.58-15-13.58-20.52,0-30.23,21.62-34.11,42.7C1920.05,548.43,1932.25,534.56,1932.25,522.08Z" transform="translate(-288.25 -383.83)" fill="#333"/><path d="M2010.45,631.34l-25.79-147.25H2031l10,114,41.32-114h45.47L2062.3,631.34Z" transform="translate(-288.25 -383.83)" fill="#333"/><path d="M403,549.34c-3,14-4.78,27.17-4.78,38.22,0,17.92,4.78,29.86,17.32,29.86,7.46,0,11.05-3.88,19.41-3.88,5.08,0,6.27,2.09,6.27,7.47,0,14-23,24.78-40,24.78-32.55,0-45.69-25.08-45.69-59.13a162.18,162.18,0,0,1,3-30.75H356.1c-8.66,0-11.94-5.08-11.94-9.56,0-3.58,2.09-6.87,6-6.87l12.54-1.79c17-64.51,62.12-133.49,105.72-133.49,30.46,0,43.6,14.63,43.6,34.94C512,475.87,468.68,530.52,403,549.34Zm51.06-117.07c-9.55,0-30.76,44.8-44.2,90.19,40.92-20.31,56.15-52.26,56.15-72C466,439.74,461.52,432.27,454.05,432.27Z" transform="translate(-288.25 -383.83)" fill="#fff"/></svg>
			</a>
			<a @click.prevent="isOpen = !isOpen" class="md:hidden focus:text-gray-600 focus:outline-none" href="#">
				<svg class="w-6 h-6 fill-current" viewBox="0 0 20 20">
					<path x-show="!isOpen" d="M16.4 9H3.6c-.552 0-.6.447-.6 1 0 .553.048 1 .6 1h12.8c.552 0 .6-.447.6-1 0-.553-.048-1-.6-1zm0 4H3.6c-.552 0-.6.447-.6 1 0 .553.048 1 .6 1h12.8c.552 0 .6-.447.6-1 0-.553-.048-1-.6-1zM3.6 7h12.8c.552 0 .6-.447.6-1 0-.553-.048-1-.6-1H3.6c-.552 0-.6.447-.6 1 0 .553.048 1 .6 1z"/>
					<path x-show="isOpen" d="M14.348 14.849a1.2 1.2 0 01-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 11-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 111.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 111.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 010 1.698z"/>
				</svg>
			</a>
		</div>

		<ul 
			:class="{ 'hidden': !isOpen }" 
			class="md:block nav-items mt-4">
			{{-- <li class="nav-user my-1 hover:text-gray-600" x-data="{ isCollapsed: false }" @click.away="isCollapsed = false">
				<a @click.prevent="isCollapsed = !isCollapsed" class="px-6 py-4 hover:bg-gray-300 {{ Request::segment(2) === 'profile' ? 'bg-gray-400 text-gray-600' : '' }} flex items-center justify-between" href="#">
					<div class="w-4 h-4 md:w-5 md:h-5 rounded-full overflow-hidden mr-2">
						<img src="{{ auth()->user()->avatarUrl(20) }}" alt="Profile" class="w-full h-full">
					</div>
					<span class="flex-auto">{{ auth()->check() ? auth()->user()->name : __('Administrator') }}</span>
					<svg class="w-4 fill-current" viewBox="0 0 20 20">
						<path x-show="isCollapsed" d="M17.418 6.109a.697.697 0 01.979 0 .68.68 0 010 .969l-7.908 7.83a.697.697 0 01-.979 0l-7.908-7.83a.68.68 0 010-.969.697.697 0 01.979 0L10 13.25l7.418-7.141z"/>
						<path x-show="!isCollapsed" d="M13.25 10L6.109 2.58a.697.697 0 010-.979.68.68 0 01.969 0l7.83 7.908a.697.697 0 010 .979l-7.83 7.908a.68.68 0 01-.969 0 .697.697 0 010-.979L13.25 10z"/>
					</svg>
				</a>
				<ul x-show="isCollapsed" class="dropdown-item mt-2 px-4">
					<li class="nav-item px-2 py-2 my-1 hover:text-gray-600 hover:bg-gray-400">
						<a class="flex items-center" href="{{ url('admin/profile') }}">
							<svg class="w-4 md:w-5 mr-2 fill-current" viewBox="0 0 20 20"><path d="M7.725 2.146c-1.016.756-1.289 1.953-1.239 2.59.064.779.222 1.793.222 1.793s-.313.17-.313.854c.109 1.717.683.976.801 1.729.284 1.814.933 1.491.933 2.481 0 1.649-.68 2.42-2.803 3.334C3.196 15.845 1 17 1 19v1h18v-1c0-2-2.197-3.155-4.328-4.072-2.123-.914-2.801-1.684-2.801-3.334 0-.99.647-.667.932-2.481.119-.753.692-.012.803-1.729 0-.684-.314-.854-.314-.854s.158-1.014.221-1.793c.065-.817-.398-2.561-2.3-3.096-.333-.34-.558-.881.466-1.424-2.24-.105-2.761 1.067-3.954 1.929z"/></svg>
							{{ __('Profile') }}
						</a>
					</li>
					<li class="nav-item px-2 py-2 my-1 hover:text-gray-600 hover:bg-gray-400">
						<a class="flex items-center" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
							<svg class="w-4 md:w-5 mr-2 fill-current" viewBox="0 0 20 20"><path d="M19 10l-6-5v3H6v4h7v3l6-5zM3 3h8V1H3c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H3V3z"/></svg>
							{{ __('Logout') }}
						</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
					</li>
				</ul>
			</li> --}}

			<li class="nav-dashboard my-1 hover:text-gray-600">
				<a class="flex items-center px-6 py-4 hover:bg-gray-300 {{ Request::segment(2) === 'home' ? 'bg-gray-400 text-gray-600' : '' }}" href="{{ url('admin/home') }}">
					<svg class="w-4 md:w-5 mr-2 fill-current" viewBox="0 0 20 20"><path d="M8.127 13.6c-.689 1.197-.225 2.18.732 2.732.956.553 2.041.465 2.732-.732.689-1.195 5.047-11.865 4.668-12.084-.379-.219-7.442 8.888-8.132 10.084zM10 6c.438 0 .864.037 1.281.109.438-.549.928-1.154 1.405-1.728A9.664 9.664 0 0010 4C4.393 4 0 8.729 0 14.766c0 .371.016.742.049 1.103.049.551.54.955 1.084.908.551-.051.957-.535.908-1.086A10.462 10.462 0 012 14.766C2 9.85 5.514 6 10 6zm7.219 1.25c-.279.75-.574 1.514-.834 2.174C17.4 10.894 18 12.738 18 14.766c0 .316-.015.635-.043.943a1.001 1.001 0 001.992.182c.033-.37.051-.748.051-1.125 0-2.954-1.053-5.59-2.781-7.516z"/></svg>
					{{ __('Dashboard') }}
				</a>
			</li>

			<li class="nav-forms my-1 hover:text-gray-600">
				<a class="flex items-center px-6 py-4 hover:bg-gray-300 {{ Request::segment(2) === 'forms' ? 'bg-gray-400 text-gray-600' : '' }}" href="{{ url('admin/forms') }}">
					<svg class="w-4 md:w-5 mr-2 fill-current" viewBox="0 0 20 20"><path d="M16 1H4a1 1 0 00-1 1v16a1 1 0 001 1h12a1 1 0 001-1V2a1 1 0 00-1-1zm-1 16H5V3h10v14zM13 5H7v2h6V5zm0 8H7v2h6v-2zm0-4H7v2h6V9z"/></svg>
					{{ __('Forms') }}
				</a>
			</li>

			<li class="nav-tables my-1 hover:text-gray-600">
				<a class="flex items-center px-6 py-4 hover:bg-gray-300 {{ Request::segment(2) === 'tables' ? 'bg-gray-400 text-gray-600' : '' }}" href="{{ url('admin/tables') }}">
					<svg class="w-4 md:w-5 mr-2 fill-current" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16 1H4a1 1 0 00-1 1v16a1 1 0 001 1h12a1 1 0 001-1V2a1 1 0 00-1-1zm-1 7H9v9H8V8H5V7h3V3h1v4h6v1z" clip-rule="evenodd"/></svg>
					{{ __('Tables') }}
				</a>
			</li>

			<li class="nav-icons my-1 hover:text-gray-600" x-data="{ isCollapsed: false }" @click.away="isCollapsed = false">
				<a @click.prevent="isCollapsed = !isCollapsed" class="px-6 py-4 hover:bg-gray-300 {{ in_array(Request::segment(2), ['entypo-icons', 'heroicons', 'zondicons']) ? 'bg-gray-400 text-gray-600' : '' }} flex items-center justify-between" href="#">
					<svg class="w-4 md:w-5 mr-2 fill-current" viewBox="0 0 20 20"><path d="M16.8 3.2C15 1.3 12.7.4 10 .4s-4.9.9-6.8 2.8C1.3 5.1.4 7.4.4 10c0 2.6.9 4.9 2.8 6.8 1.9 1.9 4.1 2.8 6.8 2.8 2.6 0 4.9-1 6.9-2.9 1.8-1.8 2.7-4.1 2.7-6.7 0-2.7-.9-5-2.8-6.8zm-1.2 12.3c-1.6 1.6-3.5 2.4-5.6 2.4-2.1 0-4-.8-5.6-2.3C2.9 14 2.1 12.1 2.1 10c0-2.1.8-4 2.4-5.6C6 2.9 7.8 2.1 10 2.1s4 .8 5.6 2.3c1.5 1.5 2.3 3.4 2.3 5.6 0 2.2-.8 4-2.3 5.5zm.7-5.3l-1.9-.8V7L8.5 4.6 5.9 5.7v2.7l-2.3 1v2.5L6.1 13l2.5-1h.1l5 2.1h.2l2.3-1 .2-.1v-2.7l-.1-.1zm-2.7 3.1l-4.4-1.8V9.8l4.4 1.8v1.7zm.2-2.2l-1.4-.6 1.6-.6 1.4.6-1.6.6zm2.1 1.5l-1.7.7v-1.7l1.7-.7v1.7z"/></svg>
					<span class="flex-auto">{{ __('Icons') }}</span>
					<svg class="w-4 fill-current" viewBox="0 0 20 20">
						<path x-show="isCollapsed" d="M17.418 6.109a.697.697 0 01.979 0 .68.68 0 010 .969l-7.908 7.83a.697.697 0 01-.979 0l-7.908-7.83a.68.68 0 010-.969.697.697 0 01.979 0L10 13.25l7.418-7.141z"/>
						<path x-show="!isCollapsed" d="M13.25 10L6.109 2.58a.697.697 0 010-.979.68.68 0 01.969 0l7.83 7.908a.697.697 0 010 .979l-7.83 7.908a.68.68 0 01-.969 0 .697.697 0 010-.979L13.25 10z"/>
					</svg>
				</a>
				<ul x-show="isCollapsed" class="dropdown-item mt-2 px-4">
					<li class="nav-item px-2 py-2 my-1 hover:text-gray-600 hover:bg-gray-400">
						<a class="block" href="{{ url('admin/entypo-icons') }}">
							{{ __('Entypo+') }}
						</a>
					</li>
					<li class="nav-item px-2 py-2 my-1 hover:text-gray-600 hover:bg-gray-400">
						<a class="block" href="{{ url('admin/heroicons') }}">
							{{ __('Heroicons UI') }}
						</a>
					</li>
					<li class="nav-item px-2 py-2 my-1 hover:text-gray-600 hover:bg-gray-400">
						<a class="block" href="{{ url('admin/zondicons') }}">
							{{ __('Zondicons') }}
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</nav>
</aside> <!-- ./ Sidebar -->