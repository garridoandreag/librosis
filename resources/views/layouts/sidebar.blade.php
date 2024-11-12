<!-- resources/views/partials/sidebar.blade.php -->
<div class="sidebar bg-white dark:bg-gray-800 shadow h-full w-64">
    <ul class="space-y-4 p-4">
        <li>
            <a href="{{ route('dashboard') }}" class="block p-2 rounded hover:bg-gray-200 dark:hover:bg-gray-700 {{ Request::is('dashboard') ? 'bg-gray-200 dark:bg-gray-700' : '' }}">
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{ route('profile.edit') }}" class="block p-2 rounded hover:bg-gray-200 dark:hover:bg-gray-700 {{ Request::is('profile.edit') ? 'bg-gray-200 dark:bg-gray-700' : '' }}">
                Profile
            </a>
        </li>
        <li>
            <a href="">
                Settings
            </a>
        </li>
        <!-- Add more links here -->
    </ul>
</div>
