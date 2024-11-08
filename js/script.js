document.addEventListener('DOMContentLoaded', function() {
    const mainDropdowns = document.querySelectorAll('.dropdown > .dropdown-toggle');
    const subDropdowns = document.querySelectorAll('.dropdown-menu .dropdown-toggle');
    const dropdowns = document.querySelectorAll('.dropdown');
    const toggleMenu = document.getElementById('mobile-menu');
    const navItems = document.querySelector('.nav-items');
    const bars = document.querySelectorAll('.bar');

    // Main dropdown click behavior
    mainDropdowns.forEach(dropdown => {
        dropdown.addEventListener('click', function(e) {
            e.preventDefault();
            const parentLi = this.closest('li');
            parentLi.classList.toggle('active');
        });
    });

    // Sub-dropdown click behavior (Lessons and Tasks)
    subDropdowns.forEach(subDropdown => {
        subDropdown.addEventListener('click', function(e) {
            e.preventDefault();

            // Find the dropdown menu related to the clicked sub-dropdown
            const dropdownMenu = this.nextElementSibling;

            // Toggle visibility of the sub-dropdown menu on click
            if (dropdownMenu) {
                dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';

                // Toggle the 'active' class to rotate the arrow on click
                this.classList.toggle('active');
            }

            // Close any other open sub-dropdowns
            subDropdowns.forEach(otherDropdown => {
                if (otherDropdown !== this && otherDropdown.classList.contains('active')) {
                    otherDropdown.classList.remove('active');
                    otherDropdown.nextElementSibling.style.display = 'none';
                }
            });
        });
    });

    // Hover and click behavior for larger screens and mobile devices
    dropdowns.forEach(dropdown => {
        const toggle = dropdown.querySelector('.dropdown-toggle');
        const subMenu = dropdown.querySelector('.dropdown-menu');

        // Hover behavior
        dropdown.addEventListener('mouseenter', () => {
            if (subMenu) {
                subMenu.style.display = 'block';
            }
        });

        dropdown.addEventListener('mouseleave', () => {
            if (subMenu) {
                subMenu.style.display = 'none';
            }
        });

        // Click behavior
        toggle.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default anchor behavior

            // Close other dropdowns
            dropdowns.forEach(otherDropdown => {
                if (otherDropdown !== dropdown && !otherDropdown.contains(toggle)) {
                    otherDropdown.classList.remove('active');
                    const otherSubMenu = otherDropdown.querySelector('.dropdown-menu');
                    if (otherSubMenu) {
                        otherSubMenu.style.display = 'none';
                    }
                }
            });

            // Toggle the clicked dropdown
            dropdown.classList.toggle('active');
            if (subMenu) {
                subMenu.style.display = subMenu.style.display === 'block' ? 'none' : 'block';
            }
        });

        // Prevent click events from bubbling up to the main dropdown
        if (subMenu) {
            subMenu.addEventListener('click', function(event) {
                event.stopPropagation(); // Prevent click from affecting the main dropdown
            });
        }
    });

    // Mobile menu toggle
    toggleMenu.addEventListener('click', function() {
        toggleMenu.classList.toggle('active');
        navItems.classList.toggle('active');

        // Transform bars into 'X' when active
        if (navItems.classList.contains('active')) {
            bars[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
            bars[1].style.opacity = '0';
            bars[2].style.transform = 'rotate(-45deg) translate(5px, -5px)';
        } else {
            bars[0].style.transform = '';
            bars[1].style.opacity = '1';
            bars[2].style.transform = '';
        }
    });
});

// Slide bar script for navigation
const sections = document.getElementById('sections');
const totalSections = 21; // Total number of tasks
const tasksPerPageDesktop = 10; // Number of tasks per row on desktop
const tasksPerPageMobile = 7; // Number of tasks per row on mobile
let currentPage = 1;

// Function to determine the number of tasks per page based on screen size
function getTasksPerPage() {
    return window.innerWidth <= 768 ? tasksPerPageMobile : tasksPerPageDesktop;
}

// Function to render the task links in the slide bar
function renderSections() {
    sections.innerHTML = ''; // Clear previous task links
    const tasksPerPage = getTasksPerPage();
    const start = (currentPage - 1) * tasksPerPage + 1;
    const end = Math.min(start + tasksPerPage - 1, totalSections);

    // Generate task links for the current page
    for (let i = start; i <= end; i++) {
        const link = document.createElement('a');
        link.href = `#task${i}`;
        link.textContent = window.innerWidth <= 768 ? i : `Task ${i}`; // Display numbers on mobile view
        link.addEventListener('click', (event) => {
            event.preventDefault();
            document.getElementById(`task${i}`).scrollIntoView({ behavior: 'smooth', block: 'center' });
        });
        sections.appendChild(link);
    }

    // Center the tasks if there are fewer than tasksPerPage
    if (end - start + 1 < tasksPerPage) {
        sections.style.justifyContent = 'center';
    } else {
        sections.style.justifyContent = 'start';
    }

    // Disable/enable navigation buttons based on the page number
    document.querySelector('.scroll-nav-prev').disabled = currentPage === 1;
    document.querySelector('.scroll-nav-next').disabled = end === totalSections;
}

// Function to go to the previous page of tasks
function prevPage() {
    if (currentPage > 1) {
        currentPage--;
        renderSections();
    }
}

// Function to go to the next page of tasks
function nextPage() {
    if (currentPage * getTasksPerPage() < totalSections) {
        currentPage++;
        renderSections();
    }
}

// Initial render of the slide bar
renderSections();

// Re-render sections on window resize to handle responsiveness
window.addEventListener('resize', renderSections);









  // Modal open/close logic
  document.addEventListener('DOMContentLoaded', function () {
    // Get all modals and buttons
    const modals = document.querySelectorAll('.modal');
    const btns = document.querySelectorAll('.question-btn');
    const spans = document.querySelectorAll('.close');

    // Function to open modal
    function openModal(modalId) {
        document.getElementById(modalId).style.display = 'block';
    }

    // Function to close modal
    function closeModal(modalId) {
        document.getElementById(modalId).style.display = 'none';
    }

    // Attach click event to each button to open the modal
    btns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            const modalId = this.id.replace('Btn', 'Modal');
            openModal(modalId);
        });
    });

    // Attach click event to each <span> to close the modal
    spans.forEach(function (span) {
        span.addEventListener('click', function () {
            const modalId = this.parentElement.parentElement.id;
            closeModal(modalId);
        });
    });

    // Close modal when clicking outside the modal content
    window.addEventListener('click', function (event) {
        if (event.target.classList.contains('modal')) {
            closeModal(event.target.id);
        }
    });
});