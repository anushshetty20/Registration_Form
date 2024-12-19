$(document).ready(function() {
    $('#registrationForm').on('submit', function(e) {
        const name = $('#name').val();
        const email = $('#email').val();
        const phone = $('#phone').val();
        const password = $('#password').val();
        const gender = $('#gender').val();

        // Basic client-side validation
        if (!name || !email || !phone || !password || !gender) {
            alert('All fields are required!');
            e.preventDefault();
        } else if (!/^\d{10}$/.test(phone)) {
            alert('Enter a valid 10-digit phone number.');
            e.preventDefault();
        }
    });
});
