const downloadLink = document.getElementById('downloadLink');

downloadLink.addEventListener('click', () => {
    const cvUrl = 'pdf_20230801_083901_0000.pdf'; // Ganti dengan URL CV Anda
    downloadLink.href = cvUrl;
});
