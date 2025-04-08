document.addEventListener("DOMContentLoaded", function () {
    fetch("/admin/get-ujian-harian")
        .then(response => response.json())
        .then(data => {
            const ctx = document.getElementById('ujianChart').getContext('2d');

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
                    datasets: [{
                        label: 'Jumlah Ujian',
                        data: data,
                        backgroundColor: '#007bff',
                        borderRadius: 8
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                precision: 0
                            }
                        }
                    }
                }
            });
        });
});

function toggleDarkMode() {
    document.body.classList.toggle("dark-mode");
}