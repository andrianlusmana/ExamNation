<?= $this->include('layouts/header') ?>

<h2>Ujian: <?= esc($exam['title']) ?></h2>
<p>Durasi: <?= esc($exam['duration']) ?> menit</p>
<p id="timer"></p>

<form action="<?= base_url('peserta/submitExam') ?>" method="post" id="examForm">
    <input type="hidden" name="exam_id" value="<?= esc($exam['id']) ?>">
    
    <?php foreach ($questions as $index => $q) : ?>
        <div class="question">
            <p><?= ($index + 1) . '. ' . esc($q['question_text']) ?></p>
            <label><input type="radio" name="answers[<?= esc($q['id']) ?>]" value="A"> <?= esc($q['option_a']) ?></label><br>
            <label><input type="radio" name="answers[<?= esc($q['id']) ?>]" value="B"> <?= esc($q['option_b']) ?></label><br>
            <label><input type="radio" name="answers[<?= esc($q['id']) ?>]" value="C"> <?= esc($q['option_c']) ?></label><br>
            <label><input type="radio" name="answers[<?= esc($q['id']) ?>]" value="D"> <?= esc($q['option_d']) ?></label><br>
        </div>
    <?php endforeach; ?>
    
    <button type="submit" class="btn btn-primary" id="submitBtn">Selesai</button>
</form>

<script>
    // Waktu durasi dalam detik (misalnya 30 menit = 30 * 60)
    var durationInSeconds = <?= esc($exam['duration']) ?> * 60;

    // Fungsi untuk format waktu
    function formatTime(seconds) {
        var minutes = Math.floor(seconds / 60);
        var seconds = seconds % 60;
        return minutes + "m " + (seconds < 10 ? "0" : "") + seconds + "s";
    }

    // Fungsi untuk mengupdate timer
    function updateTimer() {
        if (durationInSeconds <= 0) {
            // Waktu habis, kirim form otomatis
            document.getElementById('examForm').submit();
        } else {
            document.getElementById('timer').textContent = "Waktu tersisa: " + formatTime(durationInSeconds);
            durationInSeconds--;
        }
    }

    // Set interval untuk update timer setiap detik
    var timerInterval = setInterval(updateTimer, 1000);

    // Menambahkan event listener untuk form submit
    document.getElementById('examForm').addEventListener('submit', function (e) {
        var answers = document.querySelectorAll('input[type="radio"]:checked');
        if (answers.length === 0) {
            // Jika tidak ada jawaban yang terpilih, tampilkan peringatan
            alert('Anda harus memilih jawaban untuk soal yang telah diberikan.');
            e.preventDefault();  // Mencegah form disubmit
        }
    });
</script>

<?= $this->include('layouts/footer') ?>
