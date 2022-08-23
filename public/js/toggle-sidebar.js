const sidebar = document.querySelector('.sidebar'),
    sidebarToggler = document.querySelector('.sidebar-toggle')
sidebarToggler.addEventListener('click', function () {
    if (sidebar.classList.contains('collapsed')) {
        sidebar.classList.remove('collapsed');
    } else {
        sidebar.classList.add('collapsed');
    }
});
