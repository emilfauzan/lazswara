import './bootstrap';

document.getElementById('unduhButton').addEventListener('click', function () {
    const imageUrl = '/img/qi2.jpeg'; // Change to your dynamic image path
    const link = document.createElement('a');
    link.href = imageUrl;
    link.download = 'QRIS_Infaq_Bank_Muamalat.jpeg'; // Set default download name
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
});

function copyToClipboardFallback(text) {
    const textarea = document.createElement("textarea");
    textarea.value = text;
    document.body.appendChild(textarea);
    textarea.select();
    document.execCommand("copy");
    document.body.removeChild(textarea);
    showModal();
}

function showModal() {
    const modal = document.getElementById("rekcopySuccessModal");
    modal.classList.remove("opacity-0", "pointer-events-none");

    setTimeout(() => {
        modal.classList.add("opacity-0", "pointer-events-none");
    }, 5000);
}

// Rekening Zakat 1
document.querySelectorAll("[rz1-copy]").forEach(button => {
    button.addEventListener("click", function () {
        const text = "7295931463";

        if (navigator.clipboard && navigator.clipboard.writeText) {
            navigator.clipboard.writeText(text)
                .then(() => showModal())
                .catch(err => {
                    console.error("Clipboard Error: ", err);
                    copyToClipboardFallback(text);
                });
        } else {
            copyToClipboardFallback(text);
        }
    });
});

// Rekening Zakat 2
document.querySelectorAll("[-copy]").forEach(button => {
    button.addEventListener("click", function () {
        const text = "7179797903";

        if (navigator.clipboard && navigator.clipboard.writeText) {
            navigator.clipboard.writeText(text)
                .then(() => showModal())
                .catch(err => {
                    console.error("Clipboard Error: ", err);
                    copyToClipboardFallback(text);
                });
        } else {
            copyToClipboardFallback(text);
        }
    });
});

// Rekening Infaq 1
document.querySelectorAll("[-copy]").forEach(button => {
    button.addEventListener("click", function () {
        const text = "7179797903";

        if (navigator.clipboard && navigator.clipboard.writeText) {
            navigator.clipboard.writeText(text)
                .then(() => showModal())
                .catch(err => {
                    console.error("Clipboard Error: ", err);
                    copyToClipboardFallback(text);
                });
        } else {
            copyToClipboardFallback(text);
        }
    });
});

// Rekening Infaq 2
document.querySelectorAll("[ri2-copy]").forEach(button => {
    button.addEventListener("click", function () {
        const text = "7295931412";

        if (navigator.clipboard && navigator.clipboard.writeText) {
            navigator.clipboard.writeText(text)
                .then(() => showModal())
                .catch(err => {
                    console.error("Clipboard Error: ", err);
                    copyToClipboardFallback(text);
                });
        } else {
            copyToClipboardFallback(text);
        }
    });
});