<?= $this->include('layouts/header') ?>

<h2>Ujian: <?= esc($exam['title']) ?></h2>
<p>Durasi: <?= esc($exam['duration']) ?> menit</p>

<form action="<?= base_url('peserta/submitExam') ?>" method="post">
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
    
    <button type="submit" class="btn btn-primary">Selesai</button>
</form>

<?= $this->include('layouts/footer') ?>
