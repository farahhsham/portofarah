const typingText = document.querySelector(".typing-text");
const words = ["UI/UX DESIGNER", "FRONT END DEVELOPER", "ENTREPRENEUR", "BUSINESSWOMAN", "DOCTOR"];
let wordIndex = 0;
let charIndex = 0;
let isDeleting = false;

function typeEffect() {
    let currentWord = words[wordIndex];
    let displayedText = isDeleting ? currentWord.substring(0, charIndex--) : currentWord.substring(0, charIndex++);
    typingText.textContent = displayedText;

    let speed = isDeleting ? 100 : 200;
    if (!isDeleting && charIndex === currentWord.length + 1) {
        isDeleting = true;
        setTimeout(typeEffect, 1000);
    } else if (isDeleting && charIndex === 0) {
        isDeleting = false;
        wordIndex = (wordIndex + 1) % words.length;
        setTimeout(typeEffect, 500);
    } else {
        setTimeout(typeEffect, speed);
    }
}

document.addEventListener("DOMContentLoaded", () => {
    setTimeout(typeEffect, 500);
});

document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    const statusMessage = document.getElementById('statusMessage');

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(form);

        fetch('process_message.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            if (data === 'success') {
                statusMessage.textContent = 'Pesan berhasil terkirim!';
                statusMessage.style.color = 'green';
                form.reset();
            } else {
                statusMessage.textContent = 'Gagal mengirim pesan. Silakan coba lagi.';
                statusMessage.style.color = 'red';
            }
        })
        .catch(error => {
            statusMessage.textContent = 'Terjadi kesalahan. Silakan coba lagi.';
            statusMessage.style.color = 'red';
        });
    });
}); 