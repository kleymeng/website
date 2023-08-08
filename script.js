const downloadLink = document.getElementById('downloadLink');

downloadLink.addEventListener('click', () => {
    const cvUrl = 'URL_TO_YOUR_CV_FILE.pdf'; // Ganti dengan URL CV Anda
    downloadLink.href = cvUrl;
});
