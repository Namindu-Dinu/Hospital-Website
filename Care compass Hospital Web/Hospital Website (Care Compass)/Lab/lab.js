function showSection(sectionId) {
    // Hide all sections
    document.querySelectorAll('.content-section').forEach(section => {
        section.style.display = 'none';
    });

    // Remove active class from all buttons
    document.querySelectorAll('.tab-button').forEach(button => {
        button.classList.remove('active');
    });

    // Show the selected section
    document.getElementById(sectionId).style.display = 'block';

    // Add active class to the clicked button
    document.querySelector(`[data-section="${sectionId}"]`).classList.add('active');
}